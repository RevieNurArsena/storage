@extends('sb-admin/app')
@section('title', 'Detail Material Request')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Material Request</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<hr>
<h5 class="mb-4 text-gray-800">Form Detail Material Requests</h5>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Request By</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Admin</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Destination Refrence</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Main Storage</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Schedule Date</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; 06/05/2023</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Expiry Date</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; 10/05/2023</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Description</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Null</p>
    </div>
</div>


{{-- table --}}
<hr>
 <div class="portlet-body">
    
    <form action="#" method="POST">
        <!-- Button trigger modal -->
        <table id="datatable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th>Product</th>
                    <th>Description</th>
                    <th>QTY</th>
                    <th>Destination Warehouse</th>
                    <th>Schedule Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tbody>
                    {{--  @foreach($users as $user) --}}
                     <tr>
                         <td>1</td>
                         <td>Baut</td>
                         <td>No Comment</td>
                         <td>100</td>
                         <td>Main Warehouse</td>
                         <td>01/01/2023</td>
                     </tr>
                   {{--  @endforeach --}}
                 </tbody>
            </tbody>
        </table>
    </form>
    <!-- END Datatable -->
</div>

{{-- Modal --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Data Material Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <div class="form-group">
              <label for="Product">Product</label>
              <input type="text" name="product" class="form-control">
          </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description"id="description"></textarea>
        </div>

         <div class="form-group">
            <label for="QTY">QTY</label>
            <input type="number" name="QTY" class="form-control">
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary">Add Item</button>
        </div>
      </div>
    </div>
  </div>

@endsection