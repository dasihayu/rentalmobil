@extends('layouts.back')
@section('title', 'Create About')
@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="text-white page-title-icon bg-gradient-primary me-2">
            <i class="mdi mdi-information-outline"></i>
        </span> Create About
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">About</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
                    </div>
                    <button type="button" class="mt-3 btn btn-gradient-primary">Save</button>
                    <a href="#" class="mt-3 btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection