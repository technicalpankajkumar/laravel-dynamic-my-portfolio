@extends('admindashboard.layout_dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-3 py-1 bg-light">
            {{-- <h1 class="mt-4 fw-bold">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Profile</li>
            </ol> --}}
            <div class="row justify-content-center p-1">
                <div class="col-xl-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">Login-Profile</div>
                        <div class="card-body"> 
                            <form>
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-center pb-2">
                                        <img src="{{asset('assets/img/icon.png')}}" class="img-fluid img-thumbnail rounded" style="height: 200px !important">
                                    </div>
                                </div>
                                <div class="mb-3 px-5">
                                    <input type="file" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <input type="number" class="form-control" placeholder="Mobile No">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email ID">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="New Password">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="mb-0">
                                    <textarea class="form-control" rows="3" style="resize: none">Description</textarea>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <input type="submit" value="update" name="update" class="btn btn-md btn-danger rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admindashboard.footer_dashboard')
</div>
@endsection