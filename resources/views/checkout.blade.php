<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

      body {
         padding:0;
         margin:0;
         margin-top: -40px;
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
  background-color: #A7946D;
  padding: 20px;
}

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
    </style>
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

<div style="background-color: #A7946D !important ; padding-bottom: 80px; padding-top: 80px;" id="Contact">

<div class="contact" style="width: 60%; justify-content:center; margin:auto; ">
 <h1 style="text-align: center ; padding: 70px 0px 50px 0px; color: #fff;">Check Out</h1>
 


 <div class="container">
 @if(session('status'))
<div class="alert alert-sucess alert-dismissible">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   {{session('status')}}
</div>
@endif
   <form action = "{{ route ('customer.store')}}" method='post'>
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   @csrf
     <label for="name">Name</label>
     <input type="text" id="name" name="name" placeholder="Your name..">
     
     <label for="email">Email</label>
     <input type="text" id="email" name="email" placeholder="Email">

     <label for="phone">Phone No.</label>
     <input type="text" id="phone" name="phone" placeholder="Your contact..">

     <label for="address"> Address</label>
     <input type="text" id="address" name="address" placeholder="Your address..">

     <label for="city">City</label>
     <input type="text" id="city" name="city" placeholder="">

     <label for="country">Country</label>
     <input type="text" id="country" name="country" placeholder="">

     <!-- For the dropdown Department-->
     <label>Service Chosen: &nbsp;</label>
     
            <select name="service">
            <option value="{{$services->id}}">
            {{$services->type}}
            </option>
            </select>
            <br><br>

     <label >Payment Methods</label><br>
     <br>
     <input type="radio"  name="card" >
     <label for="">Credit Card</label>
     <input type="radio"  name="easy" >
     <label for="">EasyPaisa/JazzCash</label>
     <input type="radio"  name="cod" >
     <label for="">Cash on Delivery</label>
     

   <br><br>
<input style="background-color: black;" type="submit" value="Checkout">
</form>
</div>
</div>          

</div>


</body>
</html>