<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #A7946D;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #A7946D;
}

.active {
  background-color: #8a806b;
}




body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.unsplash.com/photo-1573167421003-b3607b969dca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}






body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.623);
  margin: 8px;
}

.about-section {
  padding: 10px;
  text-align: center;
  background-color: #A7946D;
  color: white;
}

.container {
  padding: 30px 16px;
  text-align: center;
}
.container p{
  padding-top: 20px;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: white ;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}




.jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo {
    font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }


  input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contact .container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


footer {
  text-align: center;
  padding: 3px;
  background-color: #8d7e5e;
  color: white;
}


    </style>
    <script>
        
    </script>
</head>
<body>
<ul id="Home" style="position:fixed; width: 100%; top:0; overflow:hidden; z-index: 100; border: 2px solid grey;"> 
        <li ><a href="#home"><strong>A & H</strong></a></li>



        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="display:flex;" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="border-right: 1px solid #bbb;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        
                        <li style="float:right"><a href="{{URL::to('/')}}">Contact</a></li>
        <li class="served" style="float:right"><a href="{{URL::to('/')}}">Services</a>
        </li>
        <li style="float:right"><a href="{{URL::to('/')}}">About</a></li>
        <li style="float:right"><a class="active" href="{{URL::to('/')}}">Home</a></li>
        </ul>

        <div  style="height:9vh ;">
            
          </div>





    
<form action="{{ route('admin.check') }}" method="post">
@csrf
<fieldset style="text-align:center; background-color: #8D7E5E; padding: 60px 460px;">
@if(Session::get('fail'))
<div style="color: red;" class="alert alert-danger">
Note:: {{ Session::get('fail') }}
</div>
@endif
<center><h1 class="head"><b>Admin Login</b></h1></center><br>
<label for="email"><b>Email Address:</b></label>
<input class="UserInput" type="text" id="email"
name="email" placeholder="Enter your Email" value="{{ old('email') }}"
size="30px"><br>
<span style="margin-left: 20%; color: red;" class="textdanger">@error('email'){{ $message }} @enderror</span><br><br>
<label
for="password"><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></
label>
<input class="UserInput" type="password" id="password"
name="password" placeholder="Enter Password" size="30px"><br>
<span style="margin-left: 20%; color: red;" class="textdanger">@error('password'){{ $message }} @enderror</span><br><br>
<input type="submit" value="Log In" class="addButton">
<br>
</fieldset>
</form>





<footer style="padding:20px ;">
  <p>Web Technologies Laravel Project : (Copyright) (All Right Reserved)<br><br>
 ( AHMAD HASHAAM ) (M. ABUBAKER ABID)
  </p>
</footer>



<!-- Container (About Section) -->




</body>
</html>

