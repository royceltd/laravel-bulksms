<!DOCTYPE html>
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
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Sent Text.</h4>
                <h6>Kindly note that the search feature only searches current page. </h6>
                <br><br>
            </div>
        </div>


<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Phone Number</th>
            <th>Message</th>
            <th>Status</th>
            <th>Date</th>
            
        </tr>
    </thead>
    <tbody>
        @if(!empty($messages) && $messages->count())
            @foreach($messages as $key => $value)
                <tr>
                    <td>{{ $value->phone_number }}</td>
                    <td>{{ $value->text_message }}</td>
                    <td>{{ $value->status }}</td>
                    <td>{{ $value->created_at }}</td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="10">There are no data.</td>
            </tr>
        @endif
    </tbody>
</table>
   

{{$messages->links("pagination::bootstrap-4")}}
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>