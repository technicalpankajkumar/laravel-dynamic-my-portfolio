@extends('admindashboard.layout_dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-3 py-1 bg-light">
            <h1 class="mt-4 fw-bold">Videos</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="{{route('video-manager.index')}}">Video</a></li>
                <li class="breadcrumb-item active">Add-Video</li>
            </ol>
            @include('sessiondata.session')
            <div class="row justify-content-center p-2">
                <div class="col-xl-4 col-md-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">Link Youtube Videos</div>
                        <div class="card-body p-0 px-3"> 
                            <form method="POST" action="{{route('video-manager.store')}}" enctype="multipart/form-data">
                               @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="video Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="link" class="form-control" placeholder="video Link" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Write your video description" rows="3" style="resize: none" name="description" required></textarea>
                                </div>
                                <div class="mb-3 text-center">
                                    <input type="submit" value="Add Now" name="addnow" class="btn btn-md btn-secondary rounded">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </main>
    @include('admindashboard.footer_dashboard')
</div>
@endsection