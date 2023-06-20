@extends('layouts.panel')

@section('head')
    <title>List Data Crew - Dashboard Admin</title>

    <link rel="stylesheet" href="{{ url('assets/css/pages/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/pages/datatables.css') }}">
@endsection

@section('pages')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List Data Crew</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Crew</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('crew.create') }}" class="btn icon icon-left btn-primary"><i data-feather="edit"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Crew</th>
                            <th>Divisi</th>
                            <th>Nominal Fee</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($crewList as $crew)
                        <tr>
                            <td>{{ $crew->nama_crew }}</td>
                            <td>{{ $crew->divisi_crew }}</td>
                            <td>Rp. {{ number_format($crew->nominal_fee, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('uj.detail', $crew->crew_id) }}" class="btn icon btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('crew.edit', $crew->crew_id) }}" class="btn icon btn-warning"><i class="bi bi-pencil"></i></a>
                                <a href="{{ route('crew.destroy', $crew->crew_id) }}" class="btn icon btn-danger"><i class="bi bi-trash"></i></a>
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
<script src="{{ url('assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ url('assets/js/pages/datatables.js') }}"></script>
@endsection
