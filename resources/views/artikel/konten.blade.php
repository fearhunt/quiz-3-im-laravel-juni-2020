@extends('layouts.master')
@section('content')
<div class="col-sm-12">
  <h2>Judul Artikel</h2>
  <h4>{{ $artikel->judul }}</h4>
  <p>
    slug: {{ $artikel->slug }}
  </p>
  <hr>
  <h2 class="mt-3">Isi Artikel</h2>
  <p>{{ $artikel->isi }}</p>
  <?php
    $tags = explode(",", $artikel->tag);
  ?>
  @foreach ($tags as $tag)
    <button class="btn btn-sm btn-success">{{$tag}}</button>
  @endforeach
  <br><br>
  <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-sm btn-info">Ganti Artikel</a>
</div>
@endsection