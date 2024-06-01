@extends('layouts.master')

@section('title')
    Data Table
@endsection

@section('content')
    <div class="form-group">
        <a href="/cast/create" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"> Tambah</i></a>
    </div>
    <div class="form-group">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cast as $key=>$item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->umur }}</td>
                        <td>{{ $item->bio }}</td>
                        <td>
                            <form action="/cast/{{ $item->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="/cast/{{ $item->id }}" class="btn btn-sm btn-info"><i class="fas fa-info"
                                        aria-hidden="true"></i></a>
                                <a href="/cast/{{ $item->id }}/edit" class="btn btn-sm btn-warning"><i
                                        class="fas fa-edit" aria-hidden="true"></i></a>
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Tidak ditemukan data</td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('/adminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
@endpush
