@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Data Dosen</h1>
    @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif
    
    <form action="{{ route('dosen.store') }}" method="POST">
        {{ csrf_field() }}
        Nim: <input type="int" name="nama" placeholder="Nama" ><br>
        Nama: <input type="text" name="jabatan" placeholder="Jabatan" required><br>
        <input type="submit" value="Submit">

    </form>
</div>


@endsection