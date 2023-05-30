@extends('sb-admin/app')
@section('title', 'Edit Stock Count')
    
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Stock Count</h1>

    <div class="mt-3">
        <a href="/stockcount" class="btn btn-danger"><i class="fas fa-xmark"></i> Discard</a>
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
                <label for="inventory">Inventory Refrence</label>
                <select name="inventory" id="inventory" class="form-control" required>
                   {{-- <option selected>Selected</option> --}}
                    <option value="Main Storage">Inventory</option>
                  {{-- <option value="Sub Storage1">Admin MM2</option> --}}
                </select>    
            </div>
        </form>
    </div>
</div>

{{--  <fieldset disabled>
    <div class="row">
        <div class="col-lg-4">
            <label for="disabledTextInput" class="form-label">Inventory Refrence</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Inventory" name="inventory">
        </div>
    </div>
</fieldset>
--}}

<div class="row">
    <div class="col-lg-4">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="warehouse">Warehouse</label>
                <select name="warehouse" id="warehouse" class="form-control" required>
                    <option selected>Selected</option>
                    <option value="Main Storage">Main Storage</option>
                    <option value="Sub Storage1">Sub Storage </option>
                </select>    
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="location">Locations</label>
                <select name="Location" id="Location" class="form-control" required>
                    <option selected>Selected</option>
                    <option value="Stock">Stock</option>
                    <option value="Expired Stock">Expired Stock </option>
                </select>    
            </div>
        </form>
    </div>
</div>

<hr>

<h5 class="mb-4 text-gray-800">Stock Count Detail</h5>

<hr>

{{-- Radio Button 1 --}}
<div class="form-group row col-md-10">
    <label class="col-sm-2" for="invproduct">Inventory Product</label>
    <div class="field_radio vertical field_widget" name="inventoried_product" role="radiogroup" aria-label="Inventoried Product" id="invproduct">
        <div class="custom-control custom-radio radio_item" aria-atomic="true">
            <input type="radio" class="custom-control-input radio_input" checked="true" name="radio1" 
            data-value="all_product" data-index="0" id="radio_all_product" onclick="option1()">
            <label class="custom-control-label form_label" for="radio_all_product">All Products</label>
        </div>
        <div class="custom-control custom-radio radio_item" aria-atomic="true">
            <input type="radio" class="custom-control-input radio_input" name="radio1" 
            data-value="specific_product" data-index="1" id="radio_specific_product" onclick="option2()">
            <label class="custom-control-label form_label" for="radio_specific_product">Specific Products</label>
        </div>
        <div class="custom-control custom-radio radio_item" aria-atomic="true">
            <input type="radio" class="custom-control-input radio_input" name="radio1" 
            data-value="specific_category" data-index="2" id="radio_specific_category" onclick="option3()">
            <label class="custom-control-label form_label" for="radio_specific_category">Specific Categories</label>
        </div>
    </div>
</div>

{{-- hidden Form Input --}}
<div class="form-group row col-lg-4" id="option1-form" style="display: none">
    <label for="Product">Product Categori</label>
    <input type="text" name="c_product" id="c_product" class="form-control">
</div>

<div class="form-group row col-lg-4" id="option2-form" style="display: none">
    <label for="Product">Product</label>
    <input type="text" name="s_product" id="s_product" class="form-control">
</div>

{{-- Radio Button 2 --}}
<div class="form-group row col-md-10">
    <label class="col-sm-2" for="invcount">Counted Quantities</label>
    <div class="field_radio vertical field_widget" name="inventoried_count" role="radiogroup" aria-label="Inventoried count" id="count">
        <div class="custom-control custom-radio radio_item" aria-atomic="true">
            <input type="radio" class="custom-control-input radio_input" name="radio2" 
            data-value="counted" data-index="0" id="radio_counted" checked="true">
            <label class="custom-control-label form_label" for="radio_counted">Default to stock hand</label>
        </div>
        <div class="custom-control custom-radio radio_item" aria-atomic="true">
            <input type="radio" class="custom-control-input radio_input" name="radio2" 
            data-value="zero" data-index="1" id="radio_zero">
            <label class="custom-control-label form_label" for="radio_zero">Default to zero</label>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control col-6" name="description"id="description"></textarea>
 </div>
@endsection