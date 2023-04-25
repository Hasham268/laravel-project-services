<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    body{
        background-color: #A7946D;
    }

    div{
        text-align: center;
        margin-top: 150px;
        font-size: 19px;
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


        <li style="float:right"><a href="{{URL::to('/')}}">Contact</a></li>
        <li class="served" style="float:right"><a href="{{URL::to('/')}}">Services</a>
        </li>
        <li style="float:right"><a href="{{URL::to('/')}}">About</a></li>
        <li style="float:right"><a class="active" href="{{URL::to('/')}}">Home</a></li>
        </ul>

<div style="padding-top: 80px;">
 <h1>Thankyou</h1>
 <p>Out Team received your order</p> 

 <p>An email has been sent to you</p>  
</div>

</body>
</html>