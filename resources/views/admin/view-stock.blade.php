@extends('sb-admin/app')
@section('title', 'Stock Count Detail')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Stock Count Detail</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<hr>

<h5 class="mb-4 text-gray-800">Form Stock Count Detail</h5>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Inventory Refrence</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Inventory</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Warehouse</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Main Storage</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Locations</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Stock</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Inventory Product</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Specific Products</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Product</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Null</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Counted Quantities</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Default to stock hand</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Description</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Null</p>
    </div>
</div>


@endsection