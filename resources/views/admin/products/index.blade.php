@extends('layouts.app', ['title' => 'Products Lists'])

@section('content')

@include('common.partials.flash')

<div class="container my-sm-5 my-0 pt-0 pt-sm-5">
    <div class="row align-items-center admin-heading-row">
        <div class="col-sm-8 col-8">
            <h1 class="admin-page-title">All Products</h1>
        </div>
        <div class="col-sm-4 col-4">
            <a href="{{ url('/admin/products/create') }}" class="btn btn-lg cs-btn-style admin-page-btn"> Add New Product</a>
            {{-- <input type="button" class="btn btn-lg  btn-style" id="add_attribute" value="Add Attribute" /> --}}
        </div>
    </div>

    <div class="row">
        <div class="col-12 px-sm-0">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

{{--    <table id="attributes_table" class=" table order-list">--}}
{{--        <thead>--}}
{{--            <tr>--}}
{{--                <td>Id.</td>--}}
{{--                <td>Product Name</td>--}}
{{--                <td>Product Image</td>--}}
{{--                <td>Action (coming soon)</td>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--            @foreach ($products as $product)--}}
{{--            <tr>--}}
{{--                <td class="col-sm-1">--}}
{{--                    {{$product->id}}--}}
{{--                </td>--}}
{{--                <td class="col-sm-4">--}}
{{--                    {{$product->name}}--}}
{{--                </td>--}}
{{--                <td class="col-sm-5">--}}
{{--                    {{$product->image}}--}}
{{--                </td>--}}
{{--                <td class="col-sm-2">--}}
{{--                    Edit--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
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

    .admin-heading-row {
        background-color: #fff;
        margin-bottom: 10px;
    }
    .admin-page-title {
        font-size: 16px;
        font-weight: bold;
        color: #000;
    }
    .admin-page-btn {
        margin: 0px;
        font-size: 12px;
        border-color: #000;
        background-color: #000!important;
        color: #fff!important;
    }
    @media (max-width: 767px) {
        .admin-heading-row {
            background-color: #fff;
            margin-bottom: 10px;
        }
        .admin-page-title {
            font-size: 16px;
            font-weight: bold;
            color: #000;
        }
        .admin-page-btn {
            margin: 0px;
            font-size: 12px;
            border-color: #000;
            background-color: #000!important;
            color: #fff!important;
        }
    }
    table.data-table {
        width: 100%;
    }
    .dataTables_filter label {
        width: 100%;
    }
    .dataTables_filter .form-control.form-control-sm {
        border-radius: 0px;
        height: calc(2.25rem + 12px) !important;
    }
    .dataTables_paginate.paging_simple_numbers {
        float: right;
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

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function () {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin::productslist') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script>
@endpush
