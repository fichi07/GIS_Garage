@extends('admin.layouts.main')

@section('content')
@if(session('success'))
<div class="alert alert-success container container-fluid" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="container-fluid">
  <a href="/dashboard/toko/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
  <div class="table-responsive">
    <table class="table table-striped table-bordered" id="myTable">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Usaha</th>
         
          <th>Images</th>
          <th>No HP</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tokos as $toko)
        <tr>
          <td>{{ $loop->iteration }}</td>
          @if($toko->nama)
          <td>{!! $toko->nama !!}</td>
          @else
          <td>
            <p class="text-danger text-bold text-capitalize h5">Not Found</p>
          </td>
          @endif
        
          @if($toko->image)
          <td><img src="{{ asset('storage/'. $toko->image) }}"  class="img-fluid img-thumbnail h-75 w-75"></td>
          @else
          <td>
            <p class="text-danger text-bold text-capitalize h5">Not Found</p>
          </td>
          @endif
          @if($toko->no_hp)
          <td>{!! $toko->no_hp !!}</td>
          @else
          <td>
            <p class="text-danger text-bold text-capitalize h5">Not Found</p>
          </td>
          @endif
          <td>{!! $toko->alamat !!}</td>
          <td>
            <a href="/dashboard/toko/{{ $toko->nama }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
            <form action="/dashboard/toko/{{ $toko->nama }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button href="/dashboard/toko/{{ strtolower($toko->nama) }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
  
    </table>
  </div>
</div>
@endsection
