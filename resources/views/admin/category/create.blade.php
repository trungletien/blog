@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Category</h1>
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
                            <form class="col-8 mx-auto" action="{{ Route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name category:</label>
                                    <input type="text" class="form-control" name="name">
                                    @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Image:</label>
                                    <input type="file" class="form-control-file" name="image">
                                    @error('image')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-success float-right" value="Add Category">
                            </form>
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
@endsection
