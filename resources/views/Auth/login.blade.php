<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
        margin-top: 150px;

        border-radius: 15px;
        width: 50vh;
        margin-left: 600px;
        background-color: rgb(236, 236, 236);
        /* box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.5); */
}
.form  {
    /* margin-top: 0px; */
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

    @endforeach


@endif

    <section class="center">
        <h1>Register</h1>
        <div class="form">
            <form action="{{ Route('register.post') }}" method="post">
                @csrf
                <label for="">Username</label><br>
                <input size="43" type="text" name="name">
                @error('name') <p style="color: red;"> {{ $message }} </p>   @enderror
                <br>
                <label for="">Email</label><br>
                <input size="43" type="email" name="email">
                @error('email') <p style="color: red;"> {{ $message }} </p>   @enderror
                <br>
                <label for="">Password</label><br>
                <input size="43" type="password" name="password">
                @error('password') <p style="color: red;"> {{ $message }} </p>   @enderror

                <br><br>
                <input class="button" type="submit">
                <br><br>
            </form>
        </div>
    </section>

</body>
</html>
