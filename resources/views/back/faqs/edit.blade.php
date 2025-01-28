@extends('layouts.back')

@section('title', 'Edit FAQ')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="text-white page-title-icon bg-gradient-primary me-2">
            <i class="mdi mdi-help-circle"></i>
        </span> Edit FAQ
    </h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">FAQ Sections</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit FAQ</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="#" method="POST">
                    <!-- Static CSRF token for form -->
                    <input type="hidden" name="_token" value="static-csrf-token">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" id="question" name="question" value="Sample question" required>
                        <!-- Static error message -->
                        <div class="invalid-feedback">Please enter a question.</div>
                    </div>

                    <div class="mt-3 form-group">
                        <label for="answer">Answer</label>
                        <textarea class="form-control" id="answer" name="answer" rows="5" required>Sample answer text</textarea>
                        <!-- Static error message -->
                        <div class="invalid-feedback">Please enter an answer.</div>
                    </div>

                    <button type="submit" class="mt-3 btn btn-success">Update FAQ</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
