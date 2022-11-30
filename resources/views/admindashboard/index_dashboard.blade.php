@extends('admindashboard.layout_dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-3 py-1 bg-light">
            <h1 class="mt-4 fw-bold">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row ">
                <div class="col-xl-3 col-md-6">
                    <div class="card text-white mb-4 cardcolor">
                        <div class="card-body">Total Technology</div>
                        <div class="card-body"> 
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-white mb-4 cardcolor">
                        <div class="card-body">Total Projects</div>
                        <div class="card-body"> 
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card  text-white mb-4 cardcolor">
                        <div class="card-body">Total Video Link</div>
                        <div class="card-body"> 
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card text-white mb-4 cardcolor">
                        <div class="card-body">Total Message</div>
                        <div class="card-body"> 
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admindashboard.footer_dashboard')
</div>
@endsection

