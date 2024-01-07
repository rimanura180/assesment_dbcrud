@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Data Mata Kuliah</h1>
    @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif
    
    <form action="{{ route('matakuliah.store') }}" method="POST">
        {{ csrf_field() }}
        Kode: <input type="text" name="kode" placeholder="kode" required><br>
        Mata kuliah: <input type="text" name="mata_kuliah" placeholder="mata_kuliah" required><br>
        <input type="submit" value="Submit">

    </form>
</div>

{{-- <label for="kode">Kode:</label>
    <input type="int" id="kode" name="Kode" required>

    <br>

    <label for="mata_kuliah">Mata_kuliah:</label>
    <textarea id="text" name="Mata_kuliah" required></textarea>


    <br>

    <input type="submit" value="Submit"> --}}

@endsection