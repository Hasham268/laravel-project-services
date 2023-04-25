<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Step 04: Add Bootstrap CSS Quick link before datatables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
    <!-- Step 01: Add the jQuery path-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <title></title>
</head>
<body>
    <h2 style="border: 1px solid black; background-color:black; text-align:center; color: white;"> 
        View Customers in Datatables 
    </h2>

    <!-- Step 06: Using Bootstrap container with margin table 05 attribute to wrap the table -->
    <div class="container mt-5">
        <!--This studentTable id has been used in the datatable script below-->
        <table id="customersTable">   
            <thead>
                <tr>
                    <th>Name</th> 
                    <th>Phone</th> 
                    <th>Email</th> 
                    <td>Address</td> 
                    <td>Country</td> 
                    <td>Service Requested</td>
                     
                </tr> 
            </thead> 
            <tbody> 
                <!-- Using Blade Loop. --> 
                @foreach ($customers ?? '' as $customer) 
                    <tr> 
                        <td>{{$customer->name}}</td> 
                        <td>{{$customer->phone}}</td> 
                        <td>{{$customer->email}}</td> 
                        <td>{{$customer->address}}</td>  
                        <td>{{$customer->country}}</td> 
                        <td>{{$customer->Service_id}}</td>
                        
                        <td>
                <a class="btn" style="border: 1px solid;" href="{{URL::to('customer/edit', $customer->email)}}" title="Edit -> {{$customer->email}}"> EDIT</a>
                <a class="btn" style="border: 1px solid;" href="{{URL::to('customer/delete', $customer->email)}}" onclick="return confirm ('Are you sure to delete the customer details')" title="Delete -> {{$customer->email}}"> DELETE</a> 
                </td>
                    </tr> 
                @endforeach 
            </tbody> 
        </table>
    </div>
    <!-- Step 03: Paste here the jQuery CDN jQuery 3.x minified script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Step 02: Add the jQuery datatable CDN script -->
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Step 05: Add the function that loads data tables. 
        Datatables MUST show your record after this Step 05 -->
    <script>
        $(document).ready( function () {
            
            // The #studentTable is the CSS id of the table mentioned in the Table tag above
            $('#customersTable').DataTable();  
        } );
    </script>
</body>
</html>