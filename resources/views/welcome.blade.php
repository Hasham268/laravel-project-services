<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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



.testinomials .container {
  border: 2px solid #ccc;
  background-color: rgba(238, 238, 238, 0.089);
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.testinomials .container::after {
  content: "";
  clear: both;
  display: table;
}

.testinomials .container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.testinomials .container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .testinomials .container {
      text-align: center;
  }
  .testinomials .container img {
      margin: auto;
      float: none;
      display: block;
  }
}









/* Float four columns side by side */
.counter .column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.counter .row {margin: 0 -5px;}

/* Clear floats after the columns */
.counter .row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
 .counter  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.counter .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.counter .fa {font-size:50px;}
















/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: 2px solid rgba(0, 0, 0, 0.247);
  border-radius: 50px;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 80px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: rgba(255, 255, 255, 0.605);
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}





    </style>
    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    </script>
</head>
<body>




<!-- 
<div class="livechat">

  <button class="open-button" onclick="openForm()">Chat</button>
  
  <div class="chat-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
      <h1>Live Chat</h1>
      
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
    
    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

</div> -->




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
        
        <li style="float:right"><a href="#Contact">Contact</a></li>
        <li class="served" style="float:right"><a href="#Services">Services</a>
        </li>
        <li style="float:right"><a href="#About">About</a></li>
        <li style="float:right"><a class="active" href="#Home">Home</a></li>
        </ul>

        <div class="hero-image" style="height:100vh ;">
            <div class="hero-text">
              <h1 style="font-size:50px">A&H Technology Services</h1>
              <p style="padding-top:20px;">We Provide Best Services In thSe World</p>
              <button style="margin-top:40px;"> <a href="#Contact" style="text-decoration: none ;">Contact</a> </button>
            </div>
          </div>


          <div class="about-section" id="About" style="display:flex; padding-top: 50px;">
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
          </div>


          <div class="counter" style="background-color: #8d7e5e;">
            <div class="row">
              <div class="column">
                <div class="card">
                  <p><i class="fa fa-user"></i></p>
                  <h3>11+</h3>
                  <p>Partners</p>
                </div>
              </div>
            
              <div class="column">
                <div class="card">
                  <p><i class="fa fa-check"></i></p>
                  <h3>55+</h3>
                  <p>Projects</p>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <p><i class="fa fa-smile-o"></i></p>
                  <h3>100+</h3>
                  <p>Happy Clients</p>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <p><i class="fa fa-coffee"></i></p>
                  <h3>100+</h3>
                  <p>Meetings</p>
                </div>
              </div>
            </div>
          </div>




          <div style="background-color: #A7946D; color: #fff; padding-bottom: 50px;" id="Services">
            <h1 style="text-align:center; padding: 80px 0px 50px 0px;">Our Services</h1>
            <div class="row">
              <div class="column">
                <div class="card">
                  <img src="#" alt="" style="width:100%">
                  <div class="container">
                    <h2>Web Development</h2>
                    <p class="title">Laravel / Wordpress</p>
                    <p>A website promotes your business day and night, so it needs to be perfect. Our experts make sure that your constant brand ambassador has all the important components and never fails to appeal your clients. Keeping your idea, business type and preferences in mind, our designers’ team up with the developers to create a triumph</p>
               
                    <p><a href="{{URL::to('/development')}}" style="text-decoration: none; color: #fff;"><button class="button">Explore Packages</button></a></p>
                  </div>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <img src="" alt="" style="width:100%">
                  <div class="container">
                    <h2>SEO</h2>
                    <p class="title">Off Page / On Page</p>
                    <p>Search Engine Optimization is a great platform to reach to your target audience and hit them with the right ad. We create communities on social media, instead of markets to make sure that your audience not only get the product, but the experience. Our social media team influences the audience to make a decision in your favor</p>
                     
                    <p><a href="{{URL::to('/seo')}}" style="text-decoration: none; color: #fff;"><button class="button">Explore Packages</button></a></p>
                  </div>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <img src="" alt="" style="width:100%">
                  <div class="container">
                    <h2>Digital Marketing</h2>
                    <p class="title">Social Media</p>
                    <p>The rule of marketing is to make your customers feel good, not your product. Here at A&H Services, we work by this rule and show the customers how much important they are, and what good the product will do to them. We use different platforms to reach to your targeted audience and generate revenue.</p>
                  
                    <p><a href="{{URL::to('/digital')}}" style="text-decoration: none; color: #fff;"><button class="button">Explore Packages</button></a></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
          
        <div style="background-color: #A7946D; color: #fff; padding-bottom: 50px; display: flex; padding: 30px;" id="Testinomials" class="testinomials">
          <h1 style="text-align:center; padding: 30px 0px 20px 0px; margin: 20px;">What Our Client Say's <br> About Us</h1>
          <div class="container">
            <!-- <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:90px"> -->
            <p><span>Jamal Hussain</span> <br>CEO at Mighty Schools.</p>
            <p>No one is better than Abubaker.</p>
          </div>
          
          <div class="container" style="text-align: center; margin: auto; justify-content:center;">
            <!-- <img style="text-align: center; margin: auto; justify-content:center;" src="https://unsplash.com/photos/OhKElOkQ3RE" alt="Avatar" style="width:90px"> -->
            <p><span>Saeed Ur Rehman</span> <br> CEO at Company.</p>
            <p>No one is better than Hashaam.</p>
          </div>

          <div class="container">
            <!-- <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:90px"> -->
            <p><span>Maaz Rehan</span> <br> CEO at Mighty Schools.</p>
            <p>No one is better than A&H</p>
          </div>


          </div>


         
   <div style="background-color: #A7946D !important ; padding-bottom: 80px;" id="Contact">

     <div class="contact" style="width: 60%; justify-content:center; margin:auto; ">
      <h1 style="text-align: center ; padding: 70px 0px 50px 0px; color: #fff;">Contact Us Now</h1>
      
      <div class="container">
      @if(session('status'))
    <div class="alert alert-sucess alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{session('status')}}
</div>
@endif
        <form action = "{{ route ('sendmail')}}" method='post'>
        @csrf
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" name="firstName" placeholder="Your name..">
          
          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" name="lastName" placeholder="Your last name..">

          <label for="Subject">Subject &nbsp;</label>
          <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter Your Subject here"><br>
          
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