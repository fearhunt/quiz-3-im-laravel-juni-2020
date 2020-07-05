@extends('layouts.master')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Artikel</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($artikel as $key => $data)
            <tr>
              <td> {{$key + 1}} </td>
              <td> {{$data->judul}} </td>
              <td> 
                <a href="/artikel/{{$data->id}}" class="btn btn-sm btn-info">Baca Artikel</a> 
                <form action="/artikel/{{$data->id}}" class="d-inline-block" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                </form>  
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<a href="/artikel/create" class="btn btn-primary btn-user btn-block mt-3">Tambah Artikel Baru</a>

@endsection