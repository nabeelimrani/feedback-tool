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
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- Upper Row: 4 Cards -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- Card 1: New Orders -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3></h3>
                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- Card 2: Bounce Rate -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><sup style="font-size: 20px"></sup></h3>
                                <p>Products</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- Card 3: User Registrations -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3></h3>
                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>

                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- Card 4: Unique Visitors -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>5</h3>
                                <p>Customers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>










    <aside class="control-sidebar control-sidebar-dark">
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentImage = 0;
            var images = $(".card-slider img");
            var imageCount = images.length;

            function showImage(index) {
                images.hide();
                images.eq(index).show();
            }

            // Initialize with the first image.
            showImage(currentImage);

            // Create a function to handle sliding to the next image.
            function slideNext() {
                currentImage = (currentImage + 1) % imageCount;
                showImage(currentImage);
            }

            // Create a function to handle sliding to the previous image.
            function slidePrev() {
                currentImage = (currentImage - 1 + imageCount) % imageCount;
                showImage(currentImage);
            }

            // Add event listeners for next and previous buttons (you can customize this part).
            $("#nextButton").click(slideNext);
            $("#prevButton").click(slidePrev);
        });
    </script>
@endsection
