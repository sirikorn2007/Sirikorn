@extends('layouts.master_backend')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('i.createfrom')}}" class="font-weight-bold btn btn-primary"   >เพิ่มข้อมูล</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>images</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($product as $pro)
                    <tr>
                     <td>{{ $product->firstItem() +$loop->index}}</td>
                     <td>{{ $pro->name}}</td>
                     <td>{{ $pro->category->name }}</td>
                     <td>
                       <img src ="{{ asset('backend/product/resize/'.$pro->image)}}" alt="" width="60px" height="60px">
                     </td>
                     <td>{{ $pro->price}}</td>
                     <td>{{ $pro->description}}</td>
                     <td>{{ $pro->created_at}}</td>
                     <td>{{ $pro->updated_at}}</td>
                     <td>
                        <a href="{{url('admin/product/edit/'.$pro->product_id)}}" class="btn btn-warning">แก้ไข</a>
                        <a href="{{url('admin/product/delete/'.$pro->product_id)}}" class="btn btn-danger">ลบ</a>
                      </td>
                     </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection
