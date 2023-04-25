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

        <div class="hero-image" style="height:90vh ;">
            <div class="hero-text">
              <h1 style="font-size:50px; line-height: 82px;">Search Engine Optimization</h1>
              <p style="padding-top:20px;">We Provide Best Services In thSe World</p>
              <button style="margin-top:40px;"> <a href="#Explore" style="text-decoration: none ;">Explore Packages</a> </button>
            </div>
        </div>


          <!-- <div class="about-section" id="About" style="display:flex; padding-top: 50px;">
            <div style="width:50% ;">
              <h1 style="padding-top: 30px ;">Who We Are</h1>
              <p style="padding:30px ; text-align: justify; font-size: 18px; line-height: 26px;">247 Developers is a Team of Dedicated SEO Experts, Graphic Designers, Web Designers and Content Writers Who Have a History of Continuous Success in Delivering High Quality Services to Our Clients. We Start By Analyzing Your Business and Using Relevant Strategies to Rank The Website Higher on Google. 247 Developers Team is Proud of Its Best SEO Services in Pakistan. Our passionate team has set goals of creating high-performance strategies for our clients to upgrade their products and services to a whole new level by connecting you to the right audience and persuading them to convert. A connection between you and your potential customers will lead to trust and then engagement. Increasing ROI from your online business, we create a big difference in the achievement of our clients. The reason behind our passion is to deliver high-quality services and make sure that you are satisfied. </p>
            </div>
            <div style="width:50% ; padding-top: 100px;">
            <img src="https://media.istockphoto.com/photos/diverse-team-of-professional-businesspeople-meeting-in-the-office-picture-id1363104989?s=612x612">
            </div>
          </div>

          <div class="about-section" id="About" style="display:flex;">
            <div style="width:50% ; padding-top: 80px;">
              <img src="https://media.istockphoto.com/photos/diverse-team-of-professional-businesspeople-meeting-in-the-office-picture-id1363104989?s=612x612">
              </div>
            <div style="width:50% ;">
              <h1 style="padding-top: 0px ;">Why Choose Us</h1>
              <p style="padding:30px ; text-align: justify; font-size: 18px; line-height: 26px;">We bring our diverse background of advertising, design, branding, public relations, research and strategic planning to work for your company. Not only will your materials look great – they will get results. Our prices are competitive and fair. There are no surprise bills. Any unexpected or additional expenses must be pre-approved by you. That’s how we would like to be treated, and that is how our clients are treated. We have worked with  state agencies for many years. Their rule – if we miss a deadline, we’re out. Period. They have some of the tightest turnarounds in the business – and we’ve never missed a single one. You want results. We have found that the best way to get them is with up front research – of your company, competitors, target market and customer psychographics. Only after we fully understand you and your customers, do we recommend a plan of attack. Work with us, and you’ll work with seasoned professionals – vigilant of deadlines, and committed to exceeding client expectations.</p>
            </div>
          </div> -->




          <div style="background-color: #A7946D; color: #fff; padding-bottom: 50px; padding-top: 50px;" id="Explore">
            <h1 style="text-align:center; padding: 30px 0px x0px 0px;">SEO Packages</h1>
            <p style="text-align:center; padding: 30px 0px 50px 0px;">Choose our Pricing Plan
                & start your project</p>
            <div class="row">
              
              
              
              <div class="column">
                <div class="card" style="display: flex; box-shadow: none;">
                  <img src="#" alt="" style="width:100%">
                  @foreach ($seoservices ?? '' as $seoservice)
                  <div class="container" style="padding: 30px 115px; box-shadow: 0 4px 8px 0 rgb(0 0 0 / 62%); margin: 8px;">
                    <h2>{{$seoservice->type}}</h2>
                    <p class="title">{{$seoservice->price}}</p>
                    <p style="font-size:18px ; line-height: 32px;">{{$seoservice->description}}</p>
                    <p><a href="{{URL::to('/checkout', $seoservice->id)}}" style="text-decoration: none; color: #fff;"><button class="button">Buy Now</button></a></p>
  
                  </div>
                  @endforeach
                </div>
              </div>
              
              
              
              
            </div>
          </div>
        </div>
          
   <div style="background-color: #A7946D !important ; padding-bottom: 80px;" id="Contact">

     <div class="contact" style="width: 60%; justify-content:center; margin:auto; ">
      <h1 style="text-align: center ; padding: 70px 0px 50px 0px; color: #fff;">Contact Us Now</h1>
      
      <div class="container">
        <form action = "{{ route ('sendmail')}}" method='post'>
        @csrf
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" name="firstName" placeholder="Your name..">
          
          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" name="lastName" placeholder="Your last name..">
          
          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Email">
          
    
    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write..." style="height:200px"></textarea>
    
    <input style="background-color: black;" type="submit" value="Submit">
  </form>
</div>
</div>          

</div> 


<footer style="padding:20px ;">
  <p>Web Technologies Laravel Project : (Copyright) (All Right Reserved)<br><br>
 ( AHMAD HASHAAM ) (M. ABUBAKER ABID)
  </p>
</footer>



<!-- Container (About Section) -->




</body>
</html>