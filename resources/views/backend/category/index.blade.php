@extends('layouts.master_backend')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Category</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('c.createfrom')}}" class="font-weight-bold btn btn-primary"   >เพิ่มข้อมูล</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($c as $cat)
                   <tr>
                        <td>{{ $c->firstItem() + $loop->index }}</td>
                        <td>{{ $cat -> name}}</td>
                        <td>{{ $cat -> created_at}}</td>
                        <td>{{ $cat -> updated_at}}</td>
                        <td>
                            <a href="{{url('admin/category/edit/'.$cat->category_id)}}" class="btn btn-warning">แก้ไข</a>
                            <a href="{{url('adimin/category/delete/'.$cat->category_id)}}" class="btn btn-danger">ลบ</a>
</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
            <div class="mt-3">
            {{ $c->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

</div>
@endsection
