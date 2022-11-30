@extends('admindashboard.layout_dashboard')
@section('content')
<!-- table is here -->
<div id="layoutSidenav_content">
    <div class="container-fluid p-3 py-1 bg-light">
        <h1 class="mt-4 fw-bold">Video-Manage</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Video-Manage</li>
        </ol>
        @include('sessiondata.session')
        <div class="card mb-4">
            <div class="card-header fw-bold list-header-color">
                <i class="fas fa-table me-1"></i>
                Video-Manags
                <a href="{{route('video-manager.create')}}" class="btn text-bg-warning btn-outline-white btn-md float-end text-monospace"> + Add Videos</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($videoData as $video)
                        <tr>
                            <td>{{$video->name}}</td>
                            <td>{{$video->link}}</td>
                            <td>{{$video->description}}</td>
                            <td>
                                <form action="{{route('video-manager.destroy',$video->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete"/>
                                </form>
                            </td>
                        </tr> 
                        @empty
                        @endforelse                       
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    @include('admindashboard.footer_dashboard')
</div>
@endsection