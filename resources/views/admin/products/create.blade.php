@extends('layouts.app', ['title' => 'Add Product'])

@section('content')
<div class="container mt-5">
    <h1>Add Product</h1>
    <form action="">
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
                <input type="file" name="image" id="image">
                <div class="upload-drop-zone" id="drop-zone">
                    Just drag and drop files here
                </div>

                <!-- Progress Bar -->
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                        style="width: 60%;">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>

                <!-- Upload Finished -->
                <div class="js-upload-finished">
                    <h3>Processed files</h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-success"><span
                                class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                        <a href="#" class="list-group-item list-group-item-success"><span
                                class="badge alert-success pull-right">Success</span>image-02.jpg</a>
                    </div>
                </div>
            </div>


        </div>
    </form>
</div>
@endsection

@push('css')
<style type="text/css">
    .upload-drop-zone {
        height: 200px;
        border-width: 2px;
        margin-bottom: 20px;
    }

    /* skin.css Style*/
    .upload-drop-zone {
        color: #ccc;
        border-style: dashed;
        border-color: #ccc;
        line-height: 200px;
        text-align: center
    }

    .upload-drop-zone.drop {
        color: #222;
        border-color: #222;
    }
</style>
@endpush

@push('js')
<script type="text/javascript">
    function($) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
    }

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;
        e.preventDefault()

        startUpload(uploadFiles)
    })

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    }

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    }

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

    }(jQuery);
</script>
@endpush
