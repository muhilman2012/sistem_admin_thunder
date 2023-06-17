@extends('layouts.panel')

@section('head')
    <title>Form UJ - Dashboard Admin</title>

    <link rel="stylesheet" href="{{ url('assets/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="{{ url('assets/extensions/choices.js/public/assets/styles/choices.css') }}">
@endsection

@section('pages')
<section>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Form UJ</h3>
                <p class="text-subtitle text-muted">Halaman Pengisian Form Uang Jalan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form UJ</li>
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
            <form action="{{ route('uj.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-4 mb-1">
                        <div class="form-group">
                            <label for="name">Nama Event</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Event" name="nama_event">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-1">
                        <div class="form-group">
                            <label for="venue">Venue Event</label>
                            <input type="text" class="form-control" id="venue" placeholder="Masukkan Venue Event" name="venue">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-1">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Show</label>
                            <input type="date" class="form-control" name="tanggal_show" id="tanggal" placeholder="Masukkan Tanggal Show">
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input form-check-primary form-check-glow" name="customCheck" id="customColorCheck1">
                    <label class="form-check-label" for="customColorCheck1">Klik Checkbox jika pengisian UJ 2</label>
                </div>
        </div>
    </div>
</section>
<section class="multiple-choices">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Crew</h4>
                </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="crew_ids">Pilih Crew</label>
                                    <select class="choices form-select multiple-remove" multiple="multiple" name="crew_ids[]">
                                        <optgroup>
                                            @foreach($crewList as $crew)
                                            <option value="{{ $crew->crew_id }}">{{ $crew->nama_crew }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="form-group">
                                    <label for="feepic">Fee PIC</label>
                                    <input type="text" class="form-control" id="feepic" placeholder="ex. 200.000" name="fee_pic">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="form-group">
                                    <label for="feeop">Fee Operator</label>
                                    <input type="text" class="form-control" id="feeop" placeholder="ex. 200.000" name="fee_operator">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="form-group">
                                    <label for="feetransport">Transport</label>
                                    <input type="text" class="form-control" id="feetransport" placeholder="ex. 200.000" name="fee_transport">
                                </div>
                            </div>
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
                <div class="card-header">
                    <h4 class="card-title">Notes</h4>
                </div>
                <div class="card-body">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="notes" name="notes"></textarea>
                        <label for="note">Notes</label>
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
<div class="col-12 buttons">
    <button type="submit" class="btn btn-outline-primary form-control">Submit</button>
</div>
</form>

@endsection
