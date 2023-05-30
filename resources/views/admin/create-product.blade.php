@extends('sb-admin/app')
@section('title', 'Create Product')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create Product</h1>

    <div class="mt-3">
        <a href="/product" class="btn btn-danger"><i class="fas fa-xmark"></i> Discard</a>
        <a href="#" class="btn btn-secondary"> <i class="fas fa-check"></i> Save</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<hr>
<h5 class="mb-4 text-gray-800">Form Create Product</h5>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group" method="POST">
            <label for="productname">Product Name</label>
            <input type="text" name="productname" class="form-control" placeholder="Product Name">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group" method="POST">
            <label for="productcode">Product code</label>
            <input type="text" name="productcode" class="form-control" placeholder="Product code">
        </div>
    </div>
</div>

<div class="from-group row">
    <div class="col-lg-4">Picture</div>

<div class="row">           
    <div class="col-lg-4">    
        <div div class="col-lg-4">
            <img src="img/placeholder.png" class="img-thumbnail">
        </div>                            
            <div class="col-sm-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose File</label>
                </div>
            </div>
        </div>       
    </div>
</div>

<hr>
<h5 class="mb-4 text-gray-800">General Information</h5>
<hr>

<div class="row">
    <div class="col-lg-4">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="producttype">Product Type</label>
                <select name="producttype" id="producttype" class="form-control" required>
                    <option selected>Selected</option>
                    <option value="consumable">Consumable</option>
                    <option value="service">Service</option>
                    <option value="storable">Storable Product</option>
                    <option value="asset">Asset</option>
                    <option value="overhead">Overhead</option>
                </select>    
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group" method="POST">
            <label for="price">Sales Price</label>
            <input type="text" name="price" class="form-control" placeholder="Rp. 1000">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group" method="POST">
            <label for="qty">QTY</label>
            <input type="number" name="QTY" class="form-control">
        </div>
    </div>
</div>

{{-- Hidden Form --}}

<div class="row">
    <div class="col-lg-4">
        <form action="#" method="POST">
            <div class="form-group" id="text1-form" style="display: none">
                <label for="servicecategory">Service Category</label>
                <select name="servicecategory" id="text1-form" class="form-control" required>
                    <option selected>Selected</option>
                    <option value="labour">Labour</option>
                    <option value="subcontracting">Subcontracting</option>
                </select>    
            </div>
        </form>
    </div>
</div>

<div class="row" id="text2-form" style="display: none">
    <label class="form-check-label" for="flexCheckDefault">Asset Entry Perquantity</label>
    <div class="col-sm-2">
        <div class="form-check"> 
            <input class="form-check-input" type="checkbox" value="" id="text2-form" checked>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control col-6" name="description"id="description"></textarea>
 </div>
@endsection
