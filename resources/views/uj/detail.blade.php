@extends('layouts.panel')

@section('head')
    <title>Detail UJ - Dashboard Admin</title>

    <link rel="stylesheet" href="{{ url ('assets/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="{{ url ('assets/extensions/choices.js/public/assets/styles/choices.css') }}">
@endsection

@section('pages')
<section>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data UJ</h3>
                <p class="text-subtitle text-muted">Halaman Detail Data Uang Jalan</p>
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
</section>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Event</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 mb-1">
                    <div class="form-group">
                        <label for="name">Nama Event</label>
                        <input readonly type="text" class="form-control" id="name" placeholder="Masukkan Nama Event" value="{{ $uj->nama_event }}">
                    </div>
                </div>
                <div class="col-lg-3 mb-1">
                    <div class="form-group">
                        <label for="venue">Venue Event</label>
                        <input readonly type="text" class="form-control" id="venue" placeholder="Masukkan Venue Event" value="{{ $uj->venue }}">
                    </div>
                </div>
                <div class="col-lg-3 mb-1">
                    <div class="form-group">
                        <label for="tanggal">Tanggal Show</label>
                        <input readonly type="date" class="form-control" name="tanggal" id="tanggal"value="{{ $uj->tanggal_show }}">
                    </div>
                </div>
                <div class="col-lg-3 mb-1">
                    <div class="form-group">
                        <label for="tanggal">Tanggal Pengajuan UJ</label>
                        <input readonly type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $uj->created_at->format('Y-m-d') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="row">
        <div class="col">
            <div class="card">
                <section class="section">
                    <div class="row" id="basic-table">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Rincian Crew</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Divisi</th>
                                                    <th>Fee</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($uj->crew as $crew)
                                                    <tr>
                                                        <td class="text-bold-500">{{ $crew->nama_crew }}</td>
                                                        <td class="text-bold-500">{{ $crew->divisi_crew }}</td>
                                                        <td>Rp. {{ number_format($crew->nominal_fee, 0, ',', '.') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Rincian Lainnya</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Fee PIC</th>
                                                    <th>Fee Operator</th>
                                                    <th>Fee Transport</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500">Rp. {{ number_format($uj->fee_pic, 0, ',', '.') }}</td>
                                                    <td>Rp. {{ number_format($uj->fee_operator, 0, ',', '.') }}</td>
                                                    <td class="text-bold-500">Rp. {{ number_format($uj->fee_transport, 0, ',', '.') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card"></div>
                                <div class="card-body">
                                    <div class="buttons">
                                        <div class="alert alert-success"><i class="bi bi-check-circle"></i>  Total Uang Jalan = Rp. {{ number_format($uj->total_uang_jalan, 0, ',', '.') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Notes</h4>
                </div>
                <div class="card-body">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="notes">{{ $uj->notes }}</textarea>
                        <label for="note">Notes</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
