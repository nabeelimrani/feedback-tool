@extends('components.layouts.main')

@section('main-section')
    @push('title')
        <title>Home - Feedback Tool</title>
    @endpush

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Upper Row: 3 Cards -->
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <!-- Card 1: Total Feedbacks -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                @if (isset($totalfeedback))
                                    <h3>{{ $totalfeedback }}</h3>
                                @endif
                                <p>Total Feedbacks</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-chatbox"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <!-- Card 2: Total Comments -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>50</h3>
                                <p>Total Comments</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-chatbubbles"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <!-- Card 3: Total Users -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                @if (isset($totaluser))
                                    <h3>{{ $totaluser }}</h3>
                                @endif
                                <p>Total Users</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-stalker"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- Card 5: Latest Members -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recently Feedback</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    @if (count($feedbackdata) > 0)
                                        @foreach ($feedbackdata as $data)
                                            <li class="item">
                                                <div class="product-img">
                                                    <img src="{{ asset('frontend/dist/img/avatar.png') }}"
                                                        alt="Product Image" class="img-size-50">
                                                </div>
                                                <div class="product-info">
                                                    <a href="javascript:void(0)" class="product-title">
                                                        <span
                                                            class="badge badge-warning float-right">{{ $data->created_at->shortRelativeDiffForHumans() }}</span>
                                                        {{ $data->title }} <!-- Display Feedback Title -->
                                                    </a>
                                                    <span class="product-description" data-toggle="tooltip"
                                                        data-placement="top" title="{{ $data->description }}">
                                                        <strong>{{ Str::limit($data->description, 50) }}</strong>
                                                        <!-- Display Short Description -->
                                                    </span>


                                                </div>
                                            </li>
                                        @endforeach
                                        <div class="card-footer text-center">
                                            <a href="{{ route('feedback.show') }}" class="uppercase">View All Feedback</a>
                                        </div>
                                    @else
                                        <b class="mt-3 p-2">No latest feedback available.</b>
                                    @endif
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Card 5: Latest Members -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recently Feedback</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <ul class="products-list product-list-in-card pl-2 pr-2">
                                    <li class="item">
                                        <div class="product-img">
                                            <img src="{{ asset('frontend/dist/img/images.jpg') }}" alt="Product Image"
                                                class="img-size-50">
                                        </div>
                                        <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title">
                                                <span class="badge badge-warning float-right">PKR-/-</span></a>
                                            <span class="product-description">
                                                <strong>Total-Size: 5 cm</strong>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
