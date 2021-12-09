{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royce Bulk SMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" > </script>
</head>
<body> --}}
    @extends('royceviews::base')

    @section('content')
        
   
   
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4>Set up webhook URL</h4>
                
            </div>
        </div>
        <div class="row alert alert-info">
            <center>Paste  Link below in the bulksms portal and Notification status will be forwarded to you automatically</center>
            
                <strong>{{url('/bulksms/receive-delivery-report')}}</strong>
               
            
            
        </div>
        

   
   

{{-- {{$messages->links("pagination::bootstrap-4")}} --}}


 @endsection
{{-- </body>
</html> --}}