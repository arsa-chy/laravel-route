@extends('templates.master')

@section('content')
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Product</h3>
                <a href="" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Create</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Product</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getProduct as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->product }}</td>
                      <td>{{ $item->harga }}</td>
                      <td>{{ $item->jumlah }}</td>
                      <td><a href="{{ route('produkDelete', $item->id) }}" class="btn btn-flat btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection