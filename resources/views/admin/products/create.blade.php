@extends('layouts.app', ['title' => 'Add Product'])

@section('content')
@include('common.partials.flash')
<div class="container my-5" style="padding-left:150px; padding-right:150px;">
    <h1>Add Product</h1>
    <form class="add-product_form" action="{{ url('admin/products') }}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="name" class="@error('name') text-danger @enderror">Name <span class="text-danger">*</span></label>
                <input class="form-control mb-1" type="text" name="name">
                @error('name')
                    <span class="form-text text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="col-md-6 form-group">
                <label for="category" class="@error('category_id') text-danger @enderror">Category <span class="text-danger">*</label>
                <select class="form-control" name="category_id">
                    <option value="" disabled selected> Please select category </option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="form-text text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12 form-group">
                <div class="upload-wrapper one">
                    <div class="upload-element">
                            <div class="upload-element-inner">
                                <div class="upload-element-content">
                                    <div class="image-upload"> <label style="cursor: pointer;" for="file_upload"> <img src="" alt="" class="uploaded-image">
                                            <div class="h-100">
                                                <div class="dplay-tbl">
                                                    <div class="dplay-tbl-cell"> <i class="fa fa-cloud-upload"></i>
                                                        <h5><b>Choose Your Image to Upload</b></h5>
                                                        <h6 class="mt-10 mb-70">Or Drop Your Image Here</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--upload-content--> <input data-required="image" type="file" name="product_image" id="file_upload" class="image-input" data-traget-resolution="image_resolution" value="">
                                        </label> </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--item-inner-->
                            @error('product_image')
                                <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <!--item-->
                </div>
            </div>
            <div class="col-12 form-group">
                <h3>Add Attributes</h3>
                <table id="attributes_table" class=" table order-list">
                    <thead>
                        <tr>
                            <td>Attribute Name</td>
                            <td>Attribute Type</td>
                            <td>Attribute Value</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="attribute_name[]" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <select class="form-control" name="attribute_type[]" id="attribute_type">
                                    <option value="text">Text</option>
                                </select>
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="attribute_value[]"  class="form-control"/>
                            </td>
                            <td class="col-sm-2">
                                <a class="deleteRow"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class=" d-flex justify-content-end">
                    <input type="button" class="btn btn-lg  btn-style" id="add_attribute" value="Add Attribute" />
                </div>
            </div>
            <div class="col-12 form-group">
                <h3>Manufacturing Partner</h3>
                <input type="file" name="manufacturer_partners[]" multiple id="gallery-photo-add">
                <div class="gallery"></div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <input type="submit" class="btn btn-lg btn-block btn-style" id="btn_submit" value="Create" />
            </div>



        </div>
    </form>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style type="text/css">
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    var counter = 0;

    $("#add_attribute").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="attribute_name[]"/></td>';
        cols += '<td><select class="form-control" name="attribute_type[]" id="attribute_type"><option value="text">Text</option></select></td>';
        cols += '<td><input type="text" class="form-control" name="attribute_value[]"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });


});

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img style="width:100px; height:100px">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});



// function calculateRow(row) {
//     var price = +row.find('input[name^="price"]').val();

// }

// function calculateGrandTotal() {
//     var grandTotal = 0;
//     $("table.order-list").find('input[name^="price"]').each(function () {
//         grandTotal += +$(this).val();
//     });
//     $("#grandtotal").text(grandTotal.toFixed(2));
// }
</script>
@endpush
