@extends('templates.master')

@section('title', 'Create Product')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('produkStore') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputProduct">Product</label>
                    <input type="text" name="name" class="form-control" id="product">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputProduct">Description</label>
                    <input type="text" name="description" class="form-control" id="description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCategory">Category</label>
                    <input type="number" name="category_id" class="form-control" id="category">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPrice">Price</label>
                    <input type="number" name="price" class="form-control" id="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputStock">Stock</label>
                    <input type="number" name="stock" class="form-control" id="stock">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div>
    </div>
  </div>
@endsection