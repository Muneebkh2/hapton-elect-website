@extends('layouts.app', ['title' => 'Add Product'])

@section('content')
<div class="container mt-5">
    <h1>Add Product</h1>
    <form action="{{ url('products') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="col-md-6 form-group">
                <label for="name">Category</label>
                <select class="form-control" name="category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 form-group">
                <div class="upload-wrapper one">
                    <div class="upload-element">
                        <form data-validation="true" action="#" method="post" enctype="multipart/form-data">
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
                                            <!--upload-content--> <input data-required="image" type="file" name="image_name" id="file_upload" class="image-input" data-traget-resolution="image_resolution" value="">
                                        </label> </div>
                                </div>
                                <!--item-content-->
                            </div>
                            <!--item-inner-->
                        </form>
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
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: left;">
                                <input type="button" class="btn btn-lg btn-block " id="add_attribute" value="Add Attribute" />
                            </td>
                        </tr>
                        <tr>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-lg btn-block " id="btn_submit" value="Create" />
            </div>
            {{-- <div class="col-md-12 form-group">
                div.
            </div> --}}


        </div>
    </form>
</div>
@endsection

@push('css')
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
</style>
@endpush

@push('js')
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
