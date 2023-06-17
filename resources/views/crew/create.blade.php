@extends('layouts.panel')

@section('head')
    <title>Tambah Crew - Dashboard Admin</title>

    <link rel="stylesheet" href="{{ url ('assets/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="{{ url ('assets/extensions/choices.js/public/assets/styles/choices.css') }}">
@endsection

@section('pages')
<section>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form Tambah Crew</h3>
                <p class="text-subtitle text-muted">Halaman Pengisian Form Tambah Crew</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Tambah Crew</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Crew</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('crew.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-4 mb-1">
                        <div class="form-group">
                            <label for="name">Nama Crew</label>
                            <input type="text" class="form-control" name="nama_crew" id="name" placeholder="Masukkan Nama Crew">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-1">
                        <div class="form-group">
                            <label for="divisi">Divisi Crew</label>
                            <input type="text" class="form-control" name="divisi_crew" id="divisi" placeholder="Masukkan Divisi Crew">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-1">
                        <div class="form-group">
                            <label for="fee">Nominal Fee Crew</label>
                            <input type="text" class="form-control" name="nominal_fee" id="fee" placeholder="125.000">
                        </div>
                    </div>
                </div>
                <div class="col-12 buttons">
                    <button type="submit" class="btn btn-outline-primary form-control">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="section">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Keterangan</h5>
                </div>
                <div class="card-body">
                    1.  <br>
                    2.  <br>
                    3.  <br>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection