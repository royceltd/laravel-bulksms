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
                <h4>My Contacts</h4>
                
            </div>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Contact</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('/bulksms/contacts')}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Group</label>
                    <select name="group" class="form-control" required>
                        <option value="">Select...</option>
                        @foreach ($groups as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                            
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control"required />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Other Names</label>
                    <input type="text" name="other_names" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone_number" class="form-control"required />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Alt Phone Number <small>Optional</small></label>
                    <input type="text" name="alt_phone_number" class="form-control" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Email <small>Optional</small></label>
                    <input type="email" name="email" class="form-control"  />
                </div>
            </div>
        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
     
  </div>
</div>

        <div class="table-responsive">


<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Other name</th>
            <th>Phone</th>
            <th>Alt Phone</th>
            <th>Email</th>
            <th>Group</th>
            <th>Date</th>
            
        </tr>
    </thead>
    <tbody>
        @if(!empty($contacts) && $contacts->count())
        @php $count=0 @endphp
            @foreach($contacts as $key => $value)
            @php $count++ @endphp
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $value->first_name }}</td>
                    <td>{{ $value->other_names }}</td>
                    <td>{{ $value->phone_number }}</td>
                    <td>{{ $value->alt_phone_number }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->group }}</td>
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
</div>

   

{{-- {{$messages->links("pagination::bootstrap-4")}} --}}
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

 @endsection
{{-- </body>
</html> --}}