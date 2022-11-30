@extends('admindashboard.layout_dashboard')
@section('content')
<!-- table is here -->
<div id="layoutSidenav_content">
    <div class="container-fluid p-3 py-1 bg-light">
        <h1 class="mt-4 fw-bold">Technology</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Technology</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header fw-bold list-header-color">
                <i class="fas fa-table me-1"></i>
                Technologies
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Language Name</th>
                            <th>FrameWork</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Language Name</th>
                            <th>FrameWork</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div>
@endsection