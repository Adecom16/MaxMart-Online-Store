<?php

namespace App\Http\Controllers;

// use App\Models\News;
use App\Models\Products;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function post(Request $request){

        $request->validate([
            'title' => 'required|string',
            'picture'  => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
           ], [
               'title.required' => "Product name is required",
               'picture.required' => "Picture url is required",
               'price.required' => "Price is required",
               'description.required' => "Description is required",
          ]);

        Products::create([
            'title'=> $request->title,
            'picture' => $request->picture,
            'price'=>$request->price,
            'description'=> $request->description
            ]);

        return view('Admin.create');
    }

    public function create()
    {
        return view('admin.create');
    }


    public function register(Request $request){



        $request->validate([
            'name' => 'required|string',
            'email'  => 'required|string',
            'password' => 'required|string',
           ], [
               'name.required' => "Username is required",
               'email.required' => "Email is required",
               'password.required' => "Password is required",
          ]);

        Register::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password'=>$request->password
            ]);
        // return view('Auth.Dashboard');
        $products= Products::all();
        return  view('auth.dashboard', compact(['products']));


    }

    public function user()
    {
        return view('Auth.login');
    }


    function index(){
        $products= Products::all();
        return  view('admin.producttable', compact(['products']));
    }

    public function edit($id)
    {
        $products= Products::find($id);
        return view('admin.edit', compact(['products']));
    }

    public function update(Request $request)

    {
        Products::where('id', $request->id)->update([
            'title'=>$request->title,
            'picture'=>$request->picture,
            'price'=>$request->price,
            'description'=>$request->description
        ]);
        return redirect('admin/products')->  with ('update successfully');


    }


    public function delete(Request $request){
        // return('working');
        Products::where('id', $request->id)->delete();
        return redirect('admin/products')->  with ("delete successfully");

    }
}
