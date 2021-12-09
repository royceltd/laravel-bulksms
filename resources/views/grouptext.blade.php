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
                <h4>Send to groups</h4>
                
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
   If you would like to customize text for example Hello John ..... allow to use of salutation
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            </div>
        </div>

        <form method="POST" action="{{url('bulksms/group-text')}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4">
                <div class="form-group">
                    <label>
                        Message
                    </label>
                    <textarea class="form-control pull-left" name="message" rows="5" required></textarea>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    

                    {{-- <div> --}}
                        <br />

                        <table>
                            
                            <tr>
                                <td>
                                    Include Salutation ?
                                    
                                </td>
                                <td>
                                    <td>

                                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="salutation" id="inlineRadio1" value="Yes" checked>
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="salutation" id="inlineRadio2" value="No">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div>

                                </td>
                                    
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                     &nbsp;
                                </td>
                               
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="checkAll" /> Select all ( <?php echo count($groups) ?>)
                                    
                                </td>
                                
                            </tr>
                        </table>
                        <div>
                            

                        </div>
                        

                    {{-- </div> --}}
                    <label>
                        Phone Numbers
                    </label>
                    @foreach ($groups as $item)
                    <br />
                    <span class="float-left">
                        
                        <input type="checkbox" value="{{$item->id}}" name="groups[]" /> {{$item->name}}
                    </span>
                    
                        
                    @endforeach
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    {{-- <label>
                        Phone Numbers
                    </label> --}}
                    <input type="submit" class="btn btn-primary" value="Send SMS" />
                </div>
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