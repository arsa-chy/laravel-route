@extends('templates.master')

@section('title', 'Product')

@section('content')
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product</h3>
                {{-- <a href="" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Create</a> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Stok</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($getProduct as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->stock }}</td>
                      <td>{{ $item->price }}</td>
                      <td><a href="{{ route('produkDelete', $item->id) }}" class="btn btn-flat btn-danger">Delete</a></td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="7">Tidak ada data</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection