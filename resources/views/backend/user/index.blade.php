@extends('layouts.master_backend')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">User</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Username</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($u as $user)
                    <tr>
                        <td>{{ $user -> id}}</td>
                        <td>{{ $user -> username}}</td>
                        <td>{{ $user -> name}}</td>
                        <td>{{ $user -> email}}</td>
                        <td>{{ $user -> phone}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection
