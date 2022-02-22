@extends('layouts.app', ['title' => 'Products Lists'])

@section('content')

@include('common.partials.flash')

<div class="container my-5" style="padding-left:150px; padding-right:150px;">
    <div class="row">
        <div class="col-8">
            <h1>All Products</h1>
        </div>
        <div class="col-4">
            <a href="{{ url('/admin/products/create') }}" class="btn btn-lg cs-btn-style bg-white"> Add New Product</a>
            {{-- <input type="button" class="btn btn-lg  btn-style" id="add_attribute" value="Add Attribute" /> --}}
        </div>
    </div>
    <table id="attributes_table" class=" table order-list">
        <thead>
            <tr>
                <td>Id.</td>
                <td>Product Name</td>
                <td>Product Image</td>
                <td>Action (coming soon)</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td class="col-sm-1">
                    {{$product->id}}
                </td>
                <td class="col-sm-4">
                    {{$product->name}}
                </td>
                <td class="col-sm-5">
                    {{$product->image}}
                </td>
                <td class="col-sm-2">
                    Edit
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style type="text/css">
.cs-btn-style {
    float: right;
    margin: 35px 0px;
    background: white;
    color: #000!important;
    border: 1px solid transparent;
}
.cs-btn-style:hover{
    background-color: #000;
    border-color: #fff;
}
.upload-wrapper h5, h6 {
    color: black !important;
}
.upload-element .upload-element-content {
    padding: 30px 35px
}

.image-upload {
    width: 100%;
    height: 300px;
    border: 1px dashed #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
    position: relative;
    text-align: center;
    background: #f8f8f9;
    color: #666;
    overflow: hidden
}

.btn-style{
    width: 20% !important;
    margin-top: 20px;
}

#product-image{
    background: transparent;
    color: white;
}
.upload-wrapper img {
    margin-bottom: 20px;
    width: auto;
    height: auto;
    max-height: 400px;
    width: auto;
    border-radius: 5px;
    overflow: hidden
}

.image-upload img {
    height: 100% !important;
    width: auto !important;
    border-radius: 0px;
    margin: 0 auto
}

.image-upload i {
    font-size: 6em;
    color: #ccc
}

.image-upload input {
    cursor: pointer;
    opacity: 0;
    height: 100%;
    width: 100%;
    z-index: 10;
    position: absolute;
    top: 0;
    left: 0
}

.upload-wrapper input {
    height: 43px;
    line-height: 43px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 20px
}




.preview-images-zone {
    width: 100%;
    border: 1px solid #ddd;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow:auto;
}
.preview-images-zone > .preview-image:first-child {
    height: 185px;
    width: 185px;
    position: relative;
    margin-right: 5px;
}
.preview-images-zone > .preview-image {
    height: 90px;
    width: 90px;
    position: relative;
    margin-right: 5px;
    float: left;
    margin-bottom: 5px;
}
.preview-images-zone > .preview-image > .image-zone {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .image-zone > img {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .tools-edit-image {
    position: absolute;
    z-index: 100;
    color: #fff;
    bottom: 0;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
    display: none;
}
.preview-images-zone > .preview-image > .image-cancel {
    font-size: 18px;
    position: absolute;
    top: 0;
    right: 0;
    font-weight: bold;
    margin-right: 10px;
    cursor: pointer;
    display: none;
    z-index: 100;
}
.preview-image:hover > .image-zone {
    cursor: move;
    opacity: .5;
}
.preview-image:hover > .tools-edit-image,
.preview-image:hover > .image-cancel {
    display: block;
}
.ui-sortable-helper {
    width: 90px !important;
    height: 90px !important;
}

.container {
    padding-top: 50px;
}
</style>
@endpush
