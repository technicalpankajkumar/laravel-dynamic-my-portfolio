@extends('admindashboard.layout_dashboard')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid p-3 py-1 bg-light">
            <h1 class="mt-4 fw-bold"> Projects</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="{{route('project.index')}}">Project</a></li>
                <li class="breadcrumb-item active">Update-Project</li>
            </ol>
            <form method="POST" action="{{route('project.update',$projectData->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row justify-content-center p-2">
                    <div class="col-xl-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body text-center">Project-Image</div>
                            <div class="card-body p-0 px-3"> 
                                <div class="row justify-content-center pt-0">
                                    <div class="col-md-6 text-center pb-3">
                                        <img src="{{url('/projects',$projectData->image)}}" class="img-fluid img-thumbnail rounded" style="height: 200px !important">
                                    </div>
                                </div>
                                <div class="mb-3 px-5">
                                    <input type="file" name="image" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="name" value="{{$projectData->name}}" class="form-control" placeholder="Project Name">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="link" value="{{$projectData->link}}" class="form-control" placeholder="Project Github Link">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="language" class="mb-2">Language&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-select" name="language_id">
                                        <option selected>-Select--</option>
                                        @foreach ($languageData as $language )
                                        <option value="{{$language->id}}" @if ($projectData->language_id==$language->id)
                                            selected
                                        @endif>{{$language->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="library" class="mb-2">Library&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-select" name="library_id">
                                        <option selected>--Select--</option>
                                        @foreach ($libraryData as $library)
                                        <option value="{{$library->id}}" @if ($library->id==$projectData->library_id)
                                            selected
                                        @endif>{{$library->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="framework" class="mb-2">Framework&nbsp;<span class="text-danger">*</span></label>
                                    <select class="form-select" name="framework_id">
                                        <option selected>-Select--</option>
                                        @foreach ($frameworkData as $framework)
                                        <option value="{{$framework->id}}" @if ($projectData->framework_id==$framework->id)
                                            selected
                                        @endif>{{$framework->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" style="resize: none" name="description">{{$projectData->description}}</textarea>
                                </div>
                                <div class="md-3 text-center">
                                    <input type="submit" value="Update" name="update" class="btn btn-md btn-primary rounded">
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