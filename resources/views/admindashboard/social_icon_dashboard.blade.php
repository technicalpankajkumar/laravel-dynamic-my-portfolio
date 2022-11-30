@extends('admindashboard.layout_dashboard')
@section('content')
<!-- table is here -->
<div id="layoutSidenav_content">
    <div class="container-fluid p-3 py-1 bg-light">
        <h1 class="mt-4 fw-bold">Social-Icons</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Social-Icons</li>
        </ol>
        @include('sessiondata.session')
        <div class="card mb-4">
            <div class="card-header fw-bold list-header-color">
                <i class="fas fa-table me-1"></i>
                Icons
                <a href="{{route('social-icon.create')}}" class="btn text-bg-warning btn-outline-white btn-md float-end text-monospace"> + Add Icons</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>fa fa-icon Name</th>
                            <th>Social_Media_Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($iconsData as $icons)
                        <tr>
                            <td>{{$icons->name}}</td>
                            <td>{{$icons->font_iconname}}</td>
                            <td>{{$icons->socialmedialink}}</td>
                            <td>
                                <form action="{{route('social-icon.destroy',$icons->id)}}" method="Post" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger"/>
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
</div>
@endsection