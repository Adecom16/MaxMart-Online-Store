<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>products</title>
    <style>

                                        /* Google Font Import - Poppins */
                                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
                                *{
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                    font-family: 'Poppins', sans-serif;
                                }

                                :root{
                                    /* ===== Colors ===== */
                                    --body-color: #E4E9F7;
                                    --sidebar-color: #FFF;
                                    --primary-color: #695CFE;
                                    --primary-color-light: #F6F5FF;
                                    --toggle-color: #DDD;
                                    --text-color: #707070;

                                    /* ====== Transition ====== */
                                    --tran-03: all 0.2s ease;
                                    --tran-03: all 0.3s ease;
                                    --tran-04: all 0.3s ease;
                                    --tran-05: all 0.3s ease;
                                }

                                body{
                                    min-height: 100vh;
                                    background-color: var(--body-color);
                                    transition: var(--tran-05);
                                }

                                ::selection{
                                    background-color: var(--primary-color);
                                    color: #fff;
                                }

                                body.dark{
                                    --body-color: #18191a;
                                    --sidebar-color: #242526;
                                    --primary-color: #3a3b3c;
                                    --primary-color-light: #3a3b3c;
                                    --toggle-color: #fff;
                                    --text-color: #ccc;
                                }

                                /* ===== Sidebar ===== */
                                .sidebar{
                                    position: fixed;
                                    top: 0;
                                    left: 0;
                                    height: 100%;
                                    width: 250px;
                                    padding: 10px 14px;
                                    background: var(--sidebar-color);
                                    transition: var(--tran-05);
                                    z-index: 100;
                                }
                                .sidebar.close{
                                    width: 88px;
                                }

                                /* ===== Reusable code - Here ===== */
                                .sidebar li{
                                    height: 50px;
                                    list-style: none;
                                    display: flex;
                                    align-items: center;
                                    margin-top: 10px;
                                }

                                .sidebar header .image,
                                .sidebar .icon{
                                    min-width: 60px;
                                    border-radius: 6px;
                                }

                                .sidebar .icon{
                                    min-width: 60px;
                                    border-radius: 6px;
                                    height: 100%;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    font-size: 20px;
                                }

                                .sidebar .text,
                                .sidebar .icon{
                                    color: var(--text-color);
                                    transition: var(--tran-03);
                                }

                                .sidebar .text{
                                    font-size: 17px;
                                    font-weight: 500;
                                    white-space: nowrap;
                                    opacity: 1;
                                }
                                .sidebar.close .text{
                                    opacity: 0;
                                }
                                /* =========================== */

                                .sidebar header{
                                    position: relative;
                                }

                                .sidebar header .image-text{
                                    display: flex;
                                    align-items: center;
                                }
                                .sidebar header .logo-text{
                                    display: flex;
                                    flex-direction: column;
                                }
                                header .image-text .name {
                                    margin-top: 2px;
                                    font-size: 18px;
                                    font-weight: 600;
                                }

                                header .image-text .profession{
                                    font-size: 16px;
                                    margin-top: -2px;
                                    display: block;
                                }

                                .sidebar header .image{
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }

                                .sidebar header .image img{
                                    width: 40px;
                                    border-radius: 6px;
                                }

                                .sidebar header .toggle{
                                    position: absolute;
                                    top: 50%;
                                    right: -25px;
                                    transform: translateY(-50%) rotate(180deg);
                                    height: 25px;
                                    width: 25px;
                                    background-color: var(--primary-color);
                                    color: var(--sidebar-color);
                                    border-radius: 50%;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    font-size: 22px;
                                    cursor: pointer;
                                    transition: var(--tran-05);
                                }

                                body.dark .sidebar header .toggle{
                                    color: var(--text-color);
                                }

                                .sidebar.close .toggle{
                                    transform: translateY(-50%) rotate(0deg);
                                }

                                .sidebar .menu{
                                    margin-top: 40px;
                                }

                                .sidebar li.search-box{
                                    border-radius: 6px;
                                    background-color: var(--primary-color-light);
                                    cursor: pointer;
                                    transition: var(--tran-05);
                                }

                                .sidebar li.search-box input{
                                    height: 100%;
                                    width: 100%;
                                    outline: none;
                                    border: none;
                                    background-color: var(--primary-color-light);
                                    color: var(--text-color);
                                    border-radius: 6px;
                                    font-size: 17px;
                                    font-weight: 500;
                                    transition: var(--tran-05);
                                }
                                .sidebar li a{
                                    list-style: none;
                                    height: 100%;
                                    background-color: transparent;
                                    display: flex;
                                    align-items: center;
                                    height: 100%;
                                    width: 100%;
                                    border-radius: 6px;
                                    text-decoration: none;
                                    transition: var(--tran-03);
                                }

                                .sidebar li a:hover{
                                    background-color: var(--primary-color);
                                }
                                .sidebar li a:hover .icon,
                                .sidebar li a:hover .text{
                                    color: var(--sidebar-color);
                                }
                                body.dark .sidebar li a:hover .icon,
                                body.dark .sidebar li a:hover .text{
                                    color: var(--text-color);
                                }

                                .sidebar .menu-bar{
                                    height: calc(100% - 55px);
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: space-between;
                                    overflow-y: scroll;
                                }
                                .menu-bar::-webkit-scrollbar{
                                    display: none;
                                }
                                .sidebar .menu-bar .mode{
                                    border-radius: 6px;
                                    background-color: var(--primary-color-light);
                                    position: relative;
                                    transition: var(--tran-05);
                                }

                                .menu-bar .mode .sun-moon{
                                    height: 50px;
                                    width: 60px;
                                }

                                .mode .sun-moon i{
                                    position: absolute;
                                }
                                .mode .sun-moon i.sun{
                                    opacity: 0;
                                }
                                body.dark .mode .sun-moon i.sun{
                                    opacity: 1;
                                }
                                body.dark .mode .sun-moon i.moon{
                                    opacity: 0;
                                }

                                .menu-bar .bottom-content .toggle-switch{
                                    position: absolute;
                                    right: 0;
                                    height: 100%;
                                    min-width: 60px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    border-radius: 6px;
                                    cursor: pointer;
                                }
                                .toggle-switch .switch{
                                    position: relative;
                                    height: 22px;
                                    width: 40px;
                                    border-radius: 25px;
                                    background-color: var(--toggle-color);
                                    transition: var(--tran-05);
                                }

                                .switch::before{
                                    content: '';
                                    position: absolute;
                                    height: 15px;
                                    width: 15px;
                                    border-radius: 50%;
                                    top: 50%;
                                    left: 5px;
                                    transform: translateY(-50%);
                                    background-color: var(--sidebar-color);
                                    transition: var(--tran-04);
                                }

                                body.dark .switch::before{
                                    left: 20px;
                                }

                                .home{
                                    position: absolute;
                                    top: 0;
                                    top: 0;
                                    left: 250px;
                                    height: 100vh;
                                    width: calc(100% - 250px);
                                    background-color: var(--body-color);
                                    transition: var(--tran-05);
                                    color: var()
                                }
                                .home .text{
                                    font-size: 30px;
                                    font-weight: 500;
                                    color: var(--text-color);
                                    padding: 12px 60px;
                                }

                                .sidebar.close ~ .home{
                                    left: 78px;
                                    height: 100vh;
                                    width: calc(100% - 78px);
                                }
                                body.dark .home .text{
                                    color: var(--text-color);
                                }
                                        table {
                                            border-collapse: collapse;
                                            width: 100%;
                                        }

                                        th, td {
                                            border: 1px solid black;
                                            padding: 10px;
                                        }
</style>
</head>
<body>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span></span><span class="name">MaxMart</span>
                    <span class="profession">Admin</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>




  <section class="home " style="margin-top: 40px;">
    <h2 style="margin-left: 23px;">products Page</h2>
    @if (count($products) > 0)
    <table>
        <thead>
            <tr>
                <th  style="width: 50px;">S/N</th>
                <th  style="width: 250px;">Title</th>
                <th >Description</th>
                <th  style="">Picture</th>
                <th  style="">Price</th>
                <th style="">Action</th>
            </tr>
        </thead>
        @php
            $sn =1;
        @endphp
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $sn++ }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td> <img src="{{ $product->picture}}" alt="" width="300px"></td>
                <td>{{ $product->price}}</td>
                <td>
                    <form action="{{ route('product.delete') }}" method="post" style="display: inline-block; border:none; background: red;">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">

                        <input style="display: inline-block; border:none; background: red; padding:10px 22px; color:white;" type="submit" value="Delete">
                    </form>
                    {{-- <a href="{{ url('admin/product', $product->id) }}" style="display: inline-block;"> Edit</a> --}}
                    <br>
                    <button style="display: inline-block; border:none; background: rgb(0, 114, 44); padding:10px 30px; margin-top:10px;"><a style="text-decoration: none; color:white;" href="{{ url('admin/product', $product->id) }}" style="display: inline-block;"> Edit</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p style="padding-left: 20px">No products available</p>
    @endif

  </section>

  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
  <script>
    const body = document.querySelector('body'),
  sidebar = body.querySelector('nav'),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
body.classList.toggle("dark");

if(body.classList.contains("dark")){
    modeText.innerText = "Light mode";
}else{
    modeText.innerText = "Dark mode";

}
});
</script>
</body>
</html>
