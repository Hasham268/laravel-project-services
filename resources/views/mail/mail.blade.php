<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test Mail</title>
    <style>
    .email-body{
        color:white;
        text-align:center;
    }
    </style>
</head>
<body>
    <h1>Contact Message</h1>
    <p>First Name: {{$details['firstName']}}</p>
    <p>Last Name: {{$details['lastname']}}</p>
    <p>Email: {{$details['email']}}</p>
    <p>Subject: {{$details['subject']}}</p>
    <p>Message: {{$details['body']}}</p>
 
</div>
</body>
</html>

