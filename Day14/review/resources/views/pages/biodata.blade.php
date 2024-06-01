@extends('layouts.master')

@section('title')
    Biodata
@endsection

@section('content')
    <form action="/form" method="POST">
        @csrf
        <label for="">Nama</label> <br>
        <input type="text" name="name" id=""> <br><br>
        <label for="">Bio</label> <br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea> <br><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <a href="/">Kembali</a>
@endsection
