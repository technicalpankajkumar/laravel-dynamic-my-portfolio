@extends('admindashboard.layout_dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-3 py-1 bg-light">
            <h1 class="mt-4 fw-bold"> Projects</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="{{route('project.index')}}">Project</a></li>
                <li class="breadcrumb-item active">Add-Project</li>
            </ol>
            @include('sessiondata.session')
            <form method="POST" action="{{route('project.store')}}" enctype="multipart/form-data">
                  @csrf
                <div class="row justify-content-center p-2">
                    <div class="col-xl-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body text-center">Project-Image</div>
                            <div class="card-body p-0 px-3"> 
                                <div class="row justify-content-center pt-0">
                                    <div class="col-md-6 text-center pb-3">
                                        <img src="{{asset('assets/img/icon.png')}}" class="img-fluid img-thumbnail rounded" style="height: 200px !important">
                                    </div>
                                </div>
                                <div class="mb-3 px-5">
                                    <input type="file" name="image" class="form-control form-control-sm">
                                    @error('image')
                                        <div class="text-danger text-center">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Project Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="link" class="form-control" placeholder="Project Github Link" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="language" class="mb-2">Language&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-select" name="language_id" required>
                                        <option disabled selected>--Select--</option>
                                        @foreach ($languages as $language )
                                        <option value="{{$language->id}}">{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('language_id')
                                    <div class="text-danger text-center">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="library" class="mb-2">Library&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-select" name="library_id">
                                        <option disabled selected>--Select--</option>
                                        @foreach ($libraries as $library)
                                        <option value="{{$library->id}}">{{$library->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('library_id')
                                    <div class="text-danger text-center">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="framework" class="mb-2">Framework&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-select" name="framework_id">
                                        <option disabled selected>--Select--</option>
                                        @foreach ($frameworks as $framework)
                                        <option value="{{$framework->id}}">{{$framework->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('framework_id')
                                    <div class="text-danger text-center">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Write your Project description" rows="3" style="resize: none" name="description" required></textarea>
                                </div>
                                <div class="md-3 text-center">
                                    <input type="submit" value="Add Now" name="addnow" class="btn btn-md btn-secondary rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div> 
    </main>
    @include('admindashboard.footer_dashboard')
</div>
@endsection