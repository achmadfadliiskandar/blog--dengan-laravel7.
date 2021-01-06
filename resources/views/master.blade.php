    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}} Coding Blog
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                        <a class="nav-link" href="{{url('about')}}">About</a>
                        <a class="nav-link" href="{{url('service')}}">Services</a>
                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input darkmode" id="customSwitch1" onclick="gelap()">
                            <label class="custom-control-label text-light" for="customSwitch1">Dark mode</label>
                        </div>
                        <p class="mt-2 m-2 text-light">Waktu</p>
                        <a href="" class="mt-2 text-light"  style="text-decoration: none;">
                            <?php
                            $mydate=getdate(date("U"));
                            echo "<p>$mydate[mday] $mydate[month] $mydate[weekday]</p>";
                            ?>
                        </a>
                        <a class="text-light" style="text-decoration: none;"><p id="jam" class="mt-2 m-2"></p></a>
                        <a class="text-light" style="text-decoration: none;"><p id="menit" class="mt-2 m-2"></p></a>
                        <a class="text-light" style="text-decoration: none;"><p id="detik" class="mt-2 m-2"></p></a>
                        <a class="text-light" style="text-decoration: none;"><p id="tahun" class="mt-2 m-2"></p></a>
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/" target="#">
                                        Lihat Blog
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>               
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-4">
            @yield('header')
            <div class="row">
                @yield('main')
                @yield('sidebar')
            </div>
        </div>
        <footer class="bg-dark mt-5" style="height: 100px;">
            <p class="text-center mt-3 pt-4 text-light">CopyRight &copy; CodingBlog 2021</p>
        </footer>
        <p onclick="topFunction()" id="myBtn"><i class="fa fa-angle-up" style="font-size:50px"></i></p>

        <style>
            html{
                scroll-behavior: smooth;
            }
            .darkmode{
                background-color: black;
                color: grey;
            }
    #myBtn {
        scroll-behavior: smooth;
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: black;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    }
        </style>

    <script>
        //Get the time
        window.setTimeout("waktu()",1000)
        function waktu(){
            var waktu = new Date()
            setTimeout("waktu()",1000)
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
            document.getElementById("tahun").innerHTML = waktu.getFullYear();
        }
        //Get the darkmode
        function gelap(){
            var element = document.body;
            element.classList.toggle("darkmode");
        }
        //Get the button
        var mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
    </html>