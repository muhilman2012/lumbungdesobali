@extends('layouts.panel')

@section('head')
<title>Lumbung Deso Bali - Formulir Pendaftaran Pelatihan Bahasa Inggris IELTS</title>
<style>
    .loading-stage {
        position: absolute;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
        background-color: #0004;
    }

    .ratio-3x4 {
        --bs-aspect-ratio: calc(4 / 3 * 100%);
    }
</style>
@endsection

@section('pages')
<div style="height: 65px;"></div>
<div class="bg-img2 py-5">
    <div class="container">
        <h3 class="fw-bold text-white">Formulir Pendaftaran Pelatihan Bahasa Inggris IELTS</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item text-secondary"><a href="{{ route('index') }}" class="link-light text-decoration-none">Home</a></li>
            <li class="breadcrumb-item text-secondary"><a href="/formulir" class="text-light text-decoration-none">Formulir</a></li>
    </div>
</div>
<div class="py-4">
    <div class="container">
            @livewire('pages.index.form-ielts')
    </div>
</div>

@endsection