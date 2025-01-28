@extends('layouts.back')
@section('title', 'Add Images Gallery')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="text-white page-title-icon bg-gradient-primary me-2">
                <i class="mdi mdi-car"></i>
            </span> Add Images Gallery
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Car Managements</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Images Gallery</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="mb-4 card">
                <div class="card-header">
                    <h4 class="mb-0">Car Image Gallery</h4>
                </div>
                <div class="card-body">
                    <label>Drag and Drop Multiple Images (JPG, JPEG, PNG, .webp)</label>
                    <form method="POST" enctype="multipart/form-data" class="dropzone" id="myDragAndDropUploader">
                    </form>
                    <h5 id="message"></h5>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script type="text/javascript">
        let maxFilesizeVal = 12;
        let maxFilesVal = 7;

        Dropzone.options.myDragAndDropUploader = {
            paramName: "file",
            maxFilesize: maxFilesizeVal,
            maxFiles: maxFilesVal,
            acceptedFiles: ".jpeg,.jpg,.png,.webp",
            addRemoveLinks: true,
            timeout: 60000,
            dictDefaultMessage: "Drop your files here or click to upload",
            dictFileTooBig: "File is too big. Max filesize: " + maxFilesizeVal + "MB.",
            dictMaxFilesExceeded: "You can only upload up to " + maxFilesVal + " files.",

            sending: function(file, xhr, formData) {
                $('#message').text('Image Uploading...');
            },

            success: function(file, response) {
                $('#message').text('Image uploaded successfully.');
            },

            removedfile: function(file) {
                if (file.previewElement) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }
                $('#message').text('Image removed.');
            }
        };
    </script>
@endsection
