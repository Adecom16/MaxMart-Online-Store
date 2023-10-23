<!DO size="43"CTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Add Product</title>
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
        height: 530px;
        border-radius: 15px;
        width: 50vh;
        margin-left: 600px;
        background-color: rgb(236, 236, 236);
        /* box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.5); */
}
.center h1{
    padding-top: 40px;
    text-transform: uppercase;
}
.center input{
    height: 47px;
    outline: none;
}
.center .button{
    width: 335px;
}

</style>
<body>
    <section class="center">
        <div class="form">
        <form action="{{ Route('product.update') }}" method="post">
            @csrf
   <input size="43" type="hidden" name="id" value="{{ $products->id }}">

            @method('put')
            <h1>Add Product</h1>
            <label for="">Product Title</label><br>
            <input size="43" type="text" name="title" id="" value="{{ $products->title }}"><br><br>
            <label for="">Product Image</label><br>
            <input size="43" type="text" name="picture" id="" value="{{ $products->picture }}"><br><br>
            <label for="">Product Price</label><br>
            <input size="43" type="text" name="price" id="" value="{{ $products->price }}"><br><br>
            <label for="">Product Description</label><br>
            <input size="43" type="text" name="description" id="" value="{{ $products->description }}"><br><br>
            <input class="button" type="submit" value="Add product">
        </form>
    </div>
    </section>
</body>
</html>
