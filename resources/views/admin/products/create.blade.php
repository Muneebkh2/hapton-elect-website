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
                <input class="form-control mb-1" type="text" name="name"
value="{{ isset($product)?$product->name : '' }}" 
                >
                @error('name')
                    <span class="form-text text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="col-md-6 form-group">
                <label for="category" class="@error('category_id') text-danger @enderror">Category <span class="text-danger">*</label>
                <select class="form-control" name="category_id">
                    <option value="" disabled selected> Please select category </option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ (isset($product) && $product->category_id == $category->id) ? "selected" : ""  }}    
                        > {{ $category->name }} </option>
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
                        @if(isset($attributes) && count($attributes) > 0)

                        @foreach($attributes as $attribute)
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="attribute_name[]" class="form-control" 
                                value="{{ $attribute->name }}" 
                                required />
                            </td>
                            <td class="col-sm-4">
                                <select class="form-control" name="attribute_type[]" id="attribute_type" required>
                                    <option value="text">Text</option>
                                </select>
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="attribute_value[]"  class="form-control"
                                value="{{ $attribute->value }}"
                                 required/>
                            </td>
                            <td class="col-sm-2">
                                <a class="deleteRow"></a>
                            </td>
                        </tr>

                        @endforeach

                        @else
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="attribute_name[]" class="form-control" required />
                            </td>
                            <td class="col-sm-4">
                                <select class="form-control" name="attribute_type[]" id="attribute_type" required>
                                    <option value="text">Text</option>
                                </select>
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="attribute_value[]"  class="form-control" required/>
                            </td>
                            <td class="col-sm-2">
                                <a class="deleteRow"></a>
                            </td>
                        </tr>

                        @endif
                        
                    </tbody>
                </table>
                <div class=" d-flex justify-content-end">
                    <input type="button" class="btn btn-lg  btn-style" id="add_attribute" value="Add Attribute" />
                </div>
            </div>


            <div class="col-12 form-group">
                <h3>Add Product Table</h3>
                <h4>Add Product Table Header</h4>
                <table id="product_dynamic_table" class=" table">
                    @if(isset($product)) 
                    @php
                        $dynamic_table_header = collect($product->dynamic_table_header);
                        $dynamic_table_body = collect($product->dynamic_table_body);
                    @endphp 
                     
                        <thead id="product_dyn_header">
                           
                            <tr>
                                 @foreach($dynamic_table_header as $key => $value)
                                <td><input type="text" name="product_tbl_header[{{ $key }}]" class="form-control"
                                  value="{{ $value }}" 
                                 required /></td>
                                 @endforeach
                            </tr>

                        </thead>
                     
                    
                        <tbody id="product_dyn_body">
                            @foreach($dynamic_table_body as $key => $rowArray)
                            <tr>
                                @foreach($rowArray as $innerKey => $value)
                                    <td >
                                        <input type="text" name="product_tbl_body[{{ $key }}][{{ $innerKey }}]" 
                                        value="{{  $value }}" 

                                        class="form-control" required />
                                    </td>
                                @endforeach

                            </tr>
                            @endforeach
                        </tbody>
                     @else
                   

                   <thead id="product_dyn_header">
                        <tr>
                            <td><input type="text" name="product_tbl_header[1]" class="form-control"
                             required /></td>
                        </tr>
                    </thead>
                    <tbody id="product_dyn_body">
                        <tr>
                            <td >
                                <input type="text" name="product_tbl_body[1][1]" class="form-control" required />
                            </td>
                          
                        </tr>
                    </tbody>

                @endif    
                </table>
                <div class=" d-flex justify-content-end">
                    <input type="button" class="btn btn-lg  btn-style" id="add_header_column" value="Add Header column" />
                    <input type="button" class="btn btn-lg  btn-style" id="add_body_row" value="Add Table Row" />
                    <input type="button" class="btn btn-lg  btn-style" id="remove_header_column" value="Remove Header column" />
                    <input type="button" class="btn btn-lg  btn-style" id="remove_body_row" value="Remove Table Row" />
                </div>
            </div>




            <div class="col-12 form-group">
                <h3>Manufacturing Partner</h3>
                <input type="file" name="manufacturer_partners[]" multiple id="gallery-photo-add">
                <div class="gallery"></div>
            </div>
            <div class="col-12 form-group">
                <h3>Product Document file</h3>
                <input type="file" name="product_document[]" multiple id="product-document-add">
                <div class="document_info"></div>
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

        cols += '<td><input type="text" class="form-control" name="attribute_name[]" required/></td>';
        cols += '<td><select class="form-control" name="attribute_type[]" id="attribute_type" required><option value="text">Text</option></select></td>';
        cols += '<td><input type="text" class="form-control" name="attribute_value[]" required/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    var product_dyn_count = 1;
    $("#add_header_column").on("click", function () {
        var newRow = $("<tr>");
        var headercols = "";
//        var bodycols  = "";
        product_dyn_count++;
        headercols += '<td><input type="text" name="product_tbl_header['+product_dyn_count+']" class="form-control" required=""></td>';
        
        $("#product_dyn_header tr").append(headercols);


        var bodycols  = "";
        var productDynBodyCount = $("#product_dyn_body tr").length
        


        $("#product_dyn_body tr").each(function(index, tr){
            trIndex = ++index;
            console.log("tr index" , index + "==> " +  trIndex);
            bodycols = '<td><input type="text" name="product_tbl_body['+trIndex+']['+product_dyn_count+']" class="form-control" required /></td>';
             console.log(tr)
             $(tr).append(bodycols);
        });

    });

    $("#remove_header_column").on("click", function () {
        if($('#product_dyn_header tr:first td').length > 1){
            product_dyn_count--;
            $('#product_dyn_header tr:first td:last').remove(); 

          $("#product_dyn_body tr").each(function(index, tr){
             
             $(tr).find('td:last').remove()
          });         
        }
    });


    $("#add_body_row").on("click", function(){
        //var firstTr = $('#product_dyn_body tr:first').html()
        var tdcol = "";
        $('#product_dyn_body tr:first td').each(function(index, tr){
             tdKey = ++index
             productDynBodyCount = $("#product_dyn_body tr").length;
             productDynBodyCount++ 
             tdcol += '<td><input type="text" name="product_tbl_body['+productDynBodyCount+']['+tdKey+']" class="form-control" required /></td>'
             
          });      

        var newRow = $("<tr>");
        newRow.append(tdcol);
        $('#product_dyn_body').append(newRow);
    });

    $("#remove_body_row").on("click", function(){
        if($('#product_dyn_body tr').length > 1){
            $('#product_dyn_body tr:last').remove();            
        }
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

    var displayFileInfo = function(input, embedDivName) {
        var documentLength = input.files.length;
        var documentItems = input.files;
        var documentLists = "";
        if (documentLength) {
            for (let index = 0; index < documentLength; index++) {
                var documentName = documentItems[index].name;
                var documentSize = documentItems[index].size;
                var documentType = documentItems[index].type;
                documentLists += "<li>" + documentName + " (<b>" + documentSize + "</b> bytes) - Type :" + documentType + "</li>";
            }
            $(embedDivName).append(documentLists);
        }
    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });

    $('#product-document-add').on('change', function () {
        displayFileInfo(this, 'div.document_info');
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
