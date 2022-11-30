@extends('admindashboard.layout_dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-3 py-1 bg-light">
            <div class="row justify-content-center p-3">
                <div class="col-xl-4 col-md-6">
                    <div class="card mb-1">
                        <div class="card-body text-center p-0 pt-2">
                            Home-Profile
                        </div>   
                        <form action="{{route('admin_home_profile_update',$homeProfileData[0]->id)}}" method="POST" enctype="multipart/form-data">  
                            @csrf
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-center pb-2">
                                        <img src="{{url('images/homeprofile',$homeProfileData[0]->image)}}" class="img-fluid img-thumbnail rounded" style="height: 200px !important">
                                    </div>
                                </div>
                                <div class="mb-3 px-5">
                                    <input type="file" name="image" class="form-control form-control-sm">
                                  </div>
                                <div class="mb-3">
                                    <label class="text-danger mb-1">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{$homeProfileData[0]->name}}">
                                </div>
                                <div class="mb-3">
                                    <label class="text-danger mb-1">Web-Name:</label>
                                    <input type="text" class="form-control" name="web_name" value="{{$homeProfileData[0]->web_name}}">
                                </div>
                                <div class="mb-3">
                                    <label class="text-danger mb-1">Description:</label>
                                    <textarea class="form-control" rows="3" name="description" style="resize: none" >{{$homeProfileData[0]->description}}</textarea>
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