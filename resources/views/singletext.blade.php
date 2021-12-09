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
            <div class="col-sm-12">
                <h4>Send Single Test</h4>

                
            </div>
        </div>

        <form action="{{url('bulksms/single-text')}}" method="POST">

        
        <div class="row pull-left">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>
                        Message
                    </label>
                    <textarea class="form-control pull-left" name="message" rows="5" required></textarea>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>
                        Phone Numbers
                    </label>
                    <textarea class="form-control" name="phone_numbers" rows="15" required></textarea>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{-- <label>
                        Phone Numbers
                    </label> --}}
                    <input type="submit" class="btn btn-primary" value="Send SMS" />
                </div>
            </div>

        </div>

        </form>

   

{{-- {{$messages->links("pagination::bootstrap-4")}} --}}
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

 @endsection
{{-- </body>
</html> --}}