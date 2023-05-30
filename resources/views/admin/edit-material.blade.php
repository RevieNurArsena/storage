@extends('sb-admin/app')
@section('title', 'Edit Material Request')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Material Request</h1>

    <div class="mt-3">
        <a href="/materialreq" class="btn btn-danger"><i class="fas fa-xmark"></i> Discard</a>
        <a href="#" class="btn btn-secondary"> <i class="fas fa-check"></i> Save</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<hr>
<h5 class="mb-4 text-gray-800">Form Edit Material Requests</h5>

<div class="row">
    <div class="col-lg-4">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="refrence">Request By</label>
                <select name="refrence" id="refrence" class="form-control" required>
                   {{-- <option selected>Selected</option> --}}
                    <option value="Main Storage">Admin</option>
                  {{-- <option value="Sub Storage1">Admin MM2</option> --}}
                </select>    
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="refrence">Destination Refrence</label>
                <select name="refrence" id="refrence" class="form-control" required>
                    <option selected>Selected</option>
                    <option value="Main Storage">Main Storage</option>
                    <option value="Sub Storage1">Sub Storage 1</option>
                </select>    
            </div>
        </form>
    </div>
</div>


<div class="form-group">
    <label for="scheduledate">Schedule Date</label>
    <input type="date" class="form-control col-2" id="scheduledate" name="scheduledate" value=""required>
</div>

<div class="form-group">
    <label for="expirydate">Expiry Date</label>
    <input type="date" class="form-control col-2" id="expirydate" name="expirydate" value=""required>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control col-6" name="description"id="description"></textarea>
 </div>
<hr>
 <div class="portlet-body">
    
    <form action="#" method="POST">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            Add Data
        </button>
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
                         <th>
                            <form action="{{-- {{ route('users.destroy', $user->id) }} --}}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button>
                            </form>

                         </th>
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