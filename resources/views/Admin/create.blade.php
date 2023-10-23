<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Add Product</title>
    <style></style>
</head>
<style>
        body{
        background-color: #cbd6f5;

        }
    .center{
        display: grid;
        justify-content: center;

    }
    .center{
            margin-top: 100px;
            /* height: 530px; */
            border-radius: 15px;
            width: 50vh;
            margin-left: 650px;
            background-color: rgb(236, 236, 236);
            /* box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.5); */
    }
    .center h1{
        padding-top: 40px;
        text-transform: uppercase;
    }
    .center input{
        height: 40px;
        outline: none;
    }
    .center .button{
        width: 335px;
    }

</style>
<body>
    @if($errors->any())

         @foreach ($errors->all() as $error)

           {{-- <p>{{ $error }}</p> --}}
         @endforeach


    @endif
    <section class="center">
        <div class="form">
        <form action="{{ Route('product.post') }}" method="post">
            @csrf
            @method('post')
            <h1>Add Product</h1>
            <label for="">Product Title</label><br>
            <input size="43" type="text" name="title" id="">
             @error('title') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <br>
            <label for="">Product Image</label><br>
            <input size="43" type="text" name="picture" id="">
            @error('picture') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <br>
            <label for="">Product Price</label><br>
            <input size="43" type="text" name="price" id="">
            @error('price') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <br>
            <label for="">Product Description</label><br>
            <input size="43" type="text" name="description" id="">
            @error('description') <p style="color: red;"> {{ $message }} </p>   @enderror
            <br>
            <br>
            <input class="button" type="submit" value="Add product">
            <br>
            <br>
            <br>
        </form>
    </div>
    </section>
</body>
</html>
