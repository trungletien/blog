@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Category</h1>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right mr-3">
                        <a href="{{ Route('admin.category.create') }}" class="btn btn-primary btn_add_category">Add Category</a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (!empty($categories) && $categories->count() > 0)
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                <tr>
                                    <th width="10">ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td><img width="200px" src="{{ asset('storage/category/' . $category->image) }}"></td>
                                        <td>
                                            <a href="{{ Route('admin.category.edit', [$category->id]) }}">Sửa</a> ||
                                            <form method="POST" action="{{ Route('admin.category.destroy', [$category->id]) }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input type="submit" value="Xóa">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @else
                                <center>No data display</center>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('js')
<script>
    $(document).ready(function () {
        setInterval(function () {
            $('.btn_add_category').toggleClass('btn-block btn-outline-primary');
            $('.btn_add_category').toggleClass('btn-primary');
        }, 888);
    });
</script>
@endsection
