@extends('admindashboard.layout_dashboard')
@section('content')
<!-- table is here -->
<div id="layoutSidenav_content">
    <div class="container-fluid p-3 py-1 bg-light">
        <h1 class="mt-4 fw-bold">Project</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Project</li>
        </ol>
        @include('sessiondata.session')
        <div class="card mb-4">
            <div class="card-header fw-bold list-header-color">
                <i class="fas fa-table me-1"></i>
                Projects
                <a href="{{route('project.create')}}" class="btn text-bg-warning btn-outline-white btn-md float-end text-monospace"> + Add Projects</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Language Name</th>
                            <th>FrameWork Name</th>
                            <th>Library Name</th>
                            <th>link</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projectData as $project)
                        <tr>
                            <td>{{$project['name']}}</td>
                            <td class="text-center"><img src="{{url('projects').'/'.$project['image']}}" alt="{{$project['name'] ?? 'project-name-notfound'}}" width="50px" height="60px"/></td>
                            <td>{{$project['languages']['name']}}</td>
                            <td>{{$project['frameworks']['name']}}</td>
                            <td>{{$project['libraries']['name']}}</td>
                            <td>{{$project['link']}}</td>
                            <td>{{$project['description']}}</td>
                            <td>
                                <form method="POST" action="{{route('project.destroy',$project['id'])}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-sm text-bg-danger">
                                    <span>
                                        <a class="text-decoration-none btn btn-sm text-bg-warning" href="{{route('project.edit',$project['id'])}}">Edit</a>
                                      </span>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div>
@endsection