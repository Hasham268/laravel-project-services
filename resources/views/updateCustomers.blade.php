<!DOCTYPE html>
<html>
<head>
 <title>Update Customer Details</title>
 <!-- For Success alert that appears after deletion -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
 Update Customer Record
 </h2>
 <form action="{{ route ('customer.update', $customer->email) }}" method="post">
    @csrf
 <label for="name">Name: &nbsp;</label>
 <input type="text" id="name" name="name" value="{{$customer->Name}}"><br><br>
 <label for="phone">Phone: &nbsp;</label>
 <input type="text" id="phone" name="phone" value="{{$customer->phone}}"><br><br>
 <label for="Email">Email: &nbsp;</label>
 <input type="text" id="Email" name="email" value="{{$customer->email}}"><br><br>
 <label for="add">Address: &nbsp;</label>
 <input type="text" id="add" name="address" value="{{$customer->address}}"><br><br>
 <label for="city">City: &nbsp;</label>
 <input type="text" id="city" name="city" value="{{$customer->city}}"><br><br>
 <label for="country">Country: &nbsp;</label>
 <input type="text" id="country" name="country" value="{{$customer->country}}"><br><br>
 <input type="submit" value="Update">
 </form>
</body>
</html>
