@extends('layouts.panel')

@section('head')
<title>Lumbung Deso Bali</title>
<style>

    .img-banners {
        width: 100%;
        height: 100%;
        background-position: top;
        background-size: cover;
        background-repeat: no-repeat;
    }
    @media(max-width: 768px) {
        .banner-elementor {
            background-position: left
        }
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 60px;"></div>
@livewire('pages.index.banners')
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-12 col-lg-5">
                <div>
                    <img src="/images/logo/lumbungdesobali.png" alt="lumbungdeso" class="img-fluid">
                </div>
            </div>    
            <div class="col-12 col-lg-6">
                <div class="text-center text-lg-start">
                    <h1 class="fw-bold mb-0">Tentang Kami</h1>
                    <hr class="soft mx-auto mx-lg-0" style="width: 24%">
                    <p class="fs-5">LPK Lumbung Deso Bali adalah Lembaga pelatihan yang focus untuk menyiapkan calon-calon peserta untuk mengikuti pelatihan Bahasa Inggris sebagai persiapan tes IELTS untuk mendapatkan nilai minimal 4.5 di 4 bagian IELTS (Listening, Reading, Writing dan Speaking) yang nantinya diharapkan dapat dilanjutkan dengan mengikuti program WHV (Work and Holiday Visa) subclass 462 dan Training subclass 407 dan pekerja sementara subclass 403 dan 408 .</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-12 col-lg-6">
                <div class="text-center text-lg-start">
                    <h1 class="fw-bold mb-0">Kenapa Anda Harus Percaya Pada Kami?</h1>
                    <hr class="soft mx-auto mx-lg-0" style="width: 24%">
                    <p class="fs-5">1.  Karena Kami sudah Berpengalaman selama bertahun-tahun</p>
                    <p class="fs-5">2.  Karena Kami sudah memiliki Jaringan Perusahaan di Australia <a href="www.oohmiracle.au">(OOH Miracle Global Pty,Ltd.)</a></p>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div>
                    <img src="/images/icons/kerjasama.png" width="400px" alt="kerjasama" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-4">
    <div class="container">
        <hr class="bg-danger">
        <h1 class="text-center text-bg-ld">OUR SERVICE</h1>
        <hr class="bg-danger">
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center g-2"> 
            <div class="col-12 col-lg-6">
                <div class="text-center">
                    <h4 class="text-bg-ld">Program Pelatihan Bahasa Inggris IELTS</h4>
                    <a>LPK Lumbung Deso menawarkan pelatihan Bahasa Inggris bagi calon peserta untuk mempersiapkan diri sebelum mengikuti tes IELTS agar dapat mencapai score minimal 4.5 disetiap bagian (Listening, Reading, Writing dan Speaking).</a>
                </div>
                <div class="d-block" style="height: 50px;"></div>
                <center>
                    <a href="{{ route('ielts.register') }}" class="button fw-bold">DAFTAR DISINI</a>
                </center>
            </div>
            <div class="col-12 col-lg-6">
                    <img src="images/icons/pelatihan.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="d-block" style="height: 30px;"></div>
        <div class="row justify-content-center align-items-center g-2"> 
            <div class="col-12 col-lg-6">
                    <img src="images/icons/magang.png" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
                <div class="text-center">
                    <h4 class="text-bg-ld">Program Pelatihan Kerja (Untuk Magang)</h4>
                    <a>LPK Lumbung Deso Bali menawarkan program pelatihan kerja di Australia pada bidang hospitality dengan Visa subclass 407 (cook, chef, waiter/waitress, bartender, dll) .</a>
                </div>
                <div class="d-block" style="height: 50px;"></div>
                <center>
                    <a href="{{ route('index.programs') }}" class="button fw-bold">ANDA TERTARIK?</a>
                </center>
            </div>
                
        </div>
    </div>
</div>
<div class="d-block" style="height: 70px;"></div>

@livewire('pages.index.news')

<div class="py-5 center">
    <div class="container"> 
        <center>
            <a href="{{ route('index.programs') }}" class="button fw-bold">KLIK DISINI UNTUK INFORMASI VISA</a>
        </center>
    </div>
</div>
<div class="d-block" style="height: 70px;"></div>
@endsection

@section('script')

@endsection