@extends('layouts.master')

@section('title')
    Detail
@endsection

@section('content')
    <h2>{{ $cast->nama }}</h2>
    <p>{{ $cast->bio }}</p>

    <a href="/cast" class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"> Kembali</i></a>
@endsection
