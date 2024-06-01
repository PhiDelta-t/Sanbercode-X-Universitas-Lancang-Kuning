@extends('layouts.master')

@section('title')
    Tambah Data
@endsection

@section('content')
    <div class="form-group">
        <a href="/cast" class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"> Kembali</i></a>
    </div>
    <form action="/cast/{{ $cast->id }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $cast->nama }}">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" name="umur" value="{{ $cast->umur }}">
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" rows="5" name="bio">{{ $cast->bio }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
