@extends('layouts.panel')

@section('head')
    <title>List Data UJ - Dashboard Admin</title>

    <link rel="stylesheet" href="{{ url ('assets/css/pages/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url ('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ url ('assets/css/pages/datatables.css') }}">
@endsection

@section('pages')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List Data UJ</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data UJ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route ('uj.store') }}" class="btn icon icon-left btn-primary"><i data-feather="edit"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Event</th>
                            <th>Venue</th>
                            <th>Tanggal Show</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($uj as $uj)
                        <tr>
                            <td>{{ $uj->nama_event }}</td>
                            <td>{{ $uj->venue }}</td>
                            <td>{{ \Carbon\Carbon::parse($uj->tanggal_show)->format('d-m-Y') }}</td>
                            <td>{{ $uj->created_at->format('d-m-y') }}</td>
                            <td>
                                <a href="{{ route('uj.detail', $uj->uj_id) }}" class="btn icon btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('uj.edit', $uj->uj_id) }}" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('uj.destroy', $uj->uj_id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn icon btn-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Basic Tables end -->
</div>

@endsection

@section('script')
<script src="{{ url ('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ url ('https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js') }}"></script>
<script src="{{ url ('assets/js/pages/datatables.js') }}"></script>
@endsection