@extends('layouts.app')

@section('main-section')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- Card 1: New Orders -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>3</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- Card 2: Bounce Rate -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>3<sup style="font-size: 20px"></sup></h3>
                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- Card 3: User Registrations -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>33</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>

                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- Card 4: Unique Visitors -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>12</h3>
                    <p>Customers</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
