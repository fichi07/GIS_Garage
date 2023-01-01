@extends('layouts.main')

@section('content')

<h1 class="fs-1 h1 text-center m-md-3">All Laundry</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/cari" method="get">
    
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search ..." name="search" value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>


@if ($maps->count())
<div class="container my-3">
  <div class="card text-center">
    @if($maps[0]->image)
    <img src="{!! asset('storage/'. $maps[0]->image) !!}" class="card-img-top" alt="{!! $maps[0]->nama !!}">
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $maps[0]->nama }}" class="card-img-top" alt="{!! $maps[0]->nama !!}">
    @endif
    <div class="card-body">
      <h5 class="card-title">{{ $maps[0]->nama }}</h5>
      <p class="card-text">{{ $maps[0]->alamat }}</p>
      <a href="/cari/{{ strtolower($maps[0]->nama) }}" class="btn btn-dark">Read More ...</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    @foreach ($maps->skip(1) as $map)
    <div class="col-4">
      <div class="card text-center my-3">
      @if($map->image)
        <img src="{!! asset('storage/'. $map->image)!!}" class="card-img-top" alt="{{ $map->nama }}">
      @else
        <img src="https://source.unsplash.com/500x400?{{ $map->nama }}" class="card-img-top" alt="{{ $map->nama }}">
      @endif
        <div class="card-body">
          <h5 class="card-title">{{ $map->nama }}</h5>
          <p class="card-text">{{ $map->alamat }}</p>
          <a href="/cari/{{ strtolower($map->nama) }}" class="btn btn-dark">Read More ... </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@else
<p class="text-danger text-center fs-4">Not Found</p>
@endif

{{ $maps->links() }}

@endsection
