@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Data Mata Kuliah</h1>
    {{-- @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif --}}
    
    <form action="{{ route('mahasiswa.update', $mahasiswas->id ) }}" method="POST">
        @csrf
        @method('PUT')
        Kode: <input type="text" name="kode" placeholder="kode" required><br>
        Mata Kuliah: <input type="text" name="mata_kuliah" placeholder="mata_kuliah" required><br>
        <input type="submit" value="Update">

    </form>
</div>

@endsection