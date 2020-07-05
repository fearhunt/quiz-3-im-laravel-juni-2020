@extends('layouts.master')
@section('content')
<form class="user" role="form" action="/artikel/{{$artikel->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="judul">Judul Artikel</label>
    <input disabled type="text" class="form-control form-control-user" name="judul" id="judul" value="{{$artikel->judul}}">
  </div>
  <div class="form-group">
    <label class="mt-2" for="isi">Isi Artikel</label><br>
    <textarea required class="col-sm-12 form-control" name="isi" id="isi" rows="10" placeholder="{{$artikel->isi}}" value="{{$artikel->isi}}"></textarea>
  </div>
  <div class="form-group">
    <label class="mt-2 mb-0" for="isi">Tag Artikel</label><br>
    <p>
      Apabila memiliki lebih dari 1 tag, pisahkan dengan tanda koma ( , )<br>
      Contoh: kamu,suka,aku
    </p>
    <input disabled type="text" class="form-control form-control-user" name="tag" id="tag" value="{{$artikel->tag}}">
  </div>
  <hr>
  <button type="submit" class="btn btn-primary btn-user btn-block">Edit Artikel</button>

</form>
@endsection

@push('scripts')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush