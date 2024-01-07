@extends('layouts.master')

@section('content')
<div>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-hover"  border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <body>
            <br>
            <a href= "{{ route('prodi.index') }}" class="btn btn-primary">Home</a>
            <a href= "{{ route('prodi.create') }}" class="btn btn-primary">Tambahkan Program Studi</a>
            @yield('content')
            </div>
        </body>
        <tbody>
            @foreach ($prodis as $item)
            <tr>
                <td>{{ $item->id }} </td>
                <td>{{ $item->nim }} </td>
                <td>{{ $item->jurusan }} </td>
                <td>
                    <a href="{{  route('prodi.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{  route('prodi.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection