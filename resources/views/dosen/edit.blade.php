@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Data Dosen</h1>
    {{-- @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif --}}
    
    <form action="{{ route('dosen.update', $dosen->id ) }}" method="POST">
        @csrf
        @method('PUT')
        Nama: <input type="text" name="nim" placeholder="Nama" required><br>
        Jabatan: <input type="text" name="Jabatan" placeholder="Jabatan" required><br>
        <input type="submit" value="Update">

    </form>
</div>

@endsection