@extends('components.layouts.main')

@section('main-section')
    @push('title')
        <title>Submit Feedback - Feedback Tool </title>
    @endpush
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Submit Feedback</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Feedback</li>
                            </ol>
                            <a href="" class="btn btn-info">View Feedback</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-md-4 offset-8" id="alert">
            @if (session()->has('msg'))
                <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
        </div>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Submit Feedback</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="Enter title...">
                                        </div>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Enter description..."></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select name="category"
                                            class="form-control @error('category') is-invalid @enderror">
                                            <option value="" selected disabled>Select category</option>
                                            <!-- Add more options for different categories -->
                                            <option value="Bug Reports">Bug Reports</option>
                                            <option value="Feature Request">Feature Request</option>
                                            <option value="Improvements">Improvements</option>
                                            <option value="General Feedback">General Feedback</option>
                                            <!-- Add as many options as needed -->
                                        </select>
                                        @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#alert").animate({
                    opacity: 0,
                    height: 0,
                    padding: 0
                }, 1000, function() {
                    $(this).hide();
                });
            }, 1000);
        });
    </script>
@endsection
