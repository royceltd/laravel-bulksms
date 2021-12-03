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
                <h4>Delivery Report</h4>
                
            </div>
        </div>

        <div class="row alert alert-primary">
            <div class="col-sm-12">
                {{$status}}
            </div>
        </div>

       <form action="{{url('bulksms/delivery-report')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="Message">Message Id</label>
                    <input type="text" class="form-control" name="message_id" placeholder="Paste message ID" required />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <input type="submit" value="Search" class="btn btn-primary" />
            </div>
        </div>



        </form>

   
   

{{-- {{$messages->links("pagination::bootstrap-4")}} --}}


 @endsection
{{-- </body>
</html> --}}