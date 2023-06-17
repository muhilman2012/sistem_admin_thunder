@extends('layouts.panel')

@section('head')
    <title>Form UJ - Dashboard Admin</title>
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
                        <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form UJ</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@livewire('form-uj')

@endsection