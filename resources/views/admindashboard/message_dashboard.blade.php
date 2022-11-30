@extends('admindashboard.layout_dashboard')
@section('content')
<!-- table is here -->
<div id="layoutSidenav_content">
    <div class="container-fluid p-3 py-1 bg-light">
        <h1 class="mt-4 fw-bold">Message</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Message</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header fw-bold list-header-color">
                <i class="fas fa-table me-1"></i>
                Messages
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email ID</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($messageData as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email_id}}</td>
                            <td>{{$message->message}}</td>
                            <td>
                                <form action="{{route('message.destroy',$message->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger text-white fw-bold">
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