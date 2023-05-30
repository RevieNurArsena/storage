@extends('sb-admin/app')
@section('title', 'Detail Product')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Product</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<hr>
<h5 class="mb-4 text-gray-800">Form Detail Product</h5>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Product Name</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Baut</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Product Code</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; 101</p>
    </div>
</div>



<div class="from-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Picture</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; </p>
    </div>

<div class="row">           
    <div class="col-lg-4">    
        <div div class="col-lg-4">
            <img src="img/placeholder.png" class="img-thumbnail">
        </div>                            
            
        </div>       
    </div>
</div>

<hr>
<h5 class="mb-4 text-gray-800">General Information</h5>
<hr>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Product Type</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Consumable</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Sales Price</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp;Rp. 15.000</p>
    </div>
</div>

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">QTY</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; 100</p>
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

<div class="form-group row col-md-10">
    <label class="col-sm-2 col-form-label" style=" font-weight: bold;">Description</label>
    <div class="col-sm-4">
        <p style="margin-top: 6px; "> : &nbsp; Null</p>
    </div>
</div>
@endsection
