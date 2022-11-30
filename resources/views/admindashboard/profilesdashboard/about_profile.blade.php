@extends('admindashboard.layout_dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-3 py-1 bg-light">
            {{-- <h1 class="mt-4 fw-bold">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Profile</li>
            </ol> --}}
            <div class="row justify-content-center p-3">
                <div class="col-xl-6 col-md-8">
                    <div class="card mb-4">
                        <div class="card-body text-center p-0 pt-2">About-Profile</div>
                        <form action="{{route('admin_about_profile_update',$aboutProfileData[0]->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body"> 
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-center pb-2">
                                        <img src="{{url('images/aboutprofile',$aboutProfileData[0]->image)}}" class="img-fluid img-thumbnail rounded" style="height: 200px !important">
                                    </div>
                                </div>
                                <div class="mb-3 px-5">
                                    <input type="file" name="image" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <label class="text-danger mb-1">Tagline:</label>
                                    <input type="text" class="form-control" name="tag_line" value="{{$aboutProfileData[0]->tagline}}">
                                </div>
                                <div class="mb-3">
                                    <label class="text-danger mb-1">Add Link:</label>
                                    <input type="text" class="form-control" name="link" value="{{$aboutProfileData[0]->link}}">
                                </div>
                                <div class="mb-3">
                                    <label class="text-danger mb-1">Description:</label>
                                    <textarea name="description" class="form-control" rows="3" style="resize: none">{{$aboutProfileData[0]->description}}</textarea>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <input type="submit" value="update" name="update" class="btn btn-md btn-danger rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </main>
    @include('admindashboard.footer_dashboard')
</div>
@endsection