@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Data Program Studi</h1>
    {{-- @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif --}}
    
    <form action="{{ route('prodi.update', $prodi->id ) }}" method="POST">
        @csrf
        @method('PUT')
        nim: <input type="text" name="nim" placeholder="Nim" required><br>
        jurusan: <input type="text" name="jurusan" placeholder="Jurusan" required><br>
        <input type="submit" value="Update">

    </form>
</div>

@endsection