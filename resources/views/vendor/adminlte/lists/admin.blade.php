@extends('adminlte::layouts.app')

@section('css')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@stop

@section('main-content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Admin</h3>
              </div>
              <div class="text-right">
                <a href="{{ url('admin/create') }}" id="add" class="btn btn-default" >
                    <i class="glyphicon glyphicon-plus icon-white"></i>                 
                    Add                   
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">                    
                          <table id="datatable" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Gender</th>
                                  <th>Date of Birth</th>
                                  <th>Action</th>
                                </tr>
                              </thead>   
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

@stop
@section('javascript')
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
  var table = $("#datatable").DataTable({
       processing: true,
            serverSide: true,
            ajax: '{{ url("admin") }}',
            columns: [
              { data: 'name', name: 'name'},
              { data: 'email', name: 'email' },
              { data: 'dob', name: 'dob'},
              { data: 'gender', name: 'gender'},
              { data: 'action', name: 'action', orderable: false, searchable: false }
              
            ]
  });
  
  
</script>

<script>
function checkDelete(id, row) {
  swal({
  title: "Are you sure?",
  text: "You will erase the admin from your database!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},

function(isConfirm){
  if (isConfirm) {
    $.ajax({
    url: 'admin/' + id,
    type: 'DELETE',
    data: {
          "_method": "delete",
          "_token": "{{ csrf_token() }}",
          },
    });
    console.log(row.closest('tr'));
    row.closest('tr').remove(); 
    swal("Deleted!", "The Admin has been deleted.", "success");
  } else {
    swal("Cancelled", "Cancelled", "error");
  }
});
}
 
</script>
@stop