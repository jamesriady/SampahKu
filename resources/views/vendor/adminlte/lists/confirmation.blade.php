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
                <h3>Data Confirmation</h3>
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
                                  <th>Invoice</th>
                                  <th>Customer ID</th>
                                  <th>Customer Name</th>
                                  <th>Owing</th>
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
            ajax: '{{ url("confirmation") }}',
            columns: [
              { data: 'no', name: 'orders.no'},
              { data: 'profile_id', name: 'orders.profile_id'},
              { data: 'name', name: 'profiles.name'},
              { data: 'subtotal', name: 'orders.subtotal' },
              { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
  });
  
  
</script>
@stop