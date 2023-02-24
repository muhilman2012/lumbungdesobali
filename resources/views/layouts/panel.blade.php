<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink, shrink-to-fit=no">
    <meta name="author" content="Muhammad Hilman">
    <meta name="description"
        content="lumbungdesobali.com merupakan platform dari PT, LPK dan LKP. Saat ini kami sedang mempunyai SO (Sending Organization) untuk ikut berkontribusi dalam program magang/jisshuusei. lumbungdesobali.com berdiri sejak tahun 2022 dan telah mensupport ratusan siswa/siswi untuk sekolah di berbagai negara. Selain itu, lumbungdesobali.com juga men-support pemuda/pemudi Indonesia yang optimis dan memiliki semangat tinggi untuk bekerja di luar negeri.">
    <meta name="keywords"
        content="lumbungdeso, lumbungdesobali, kerja di luar negeri, cari kerja luar negeri">
    <link rel="alternate" type="application/rss+xml" title="Platform Lowongan Kerja Luar Negeri terbaik di indonesia.">
    
    <meta name="msapplication-navbutton-color" content="#ff0000" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff0000" />
    <link rel="icon" type="image/png" href="{{asset('/images/logo/lumbungdesobali.png')}}" />

    @yield('head')
    <link rel="stylesheet" href="{{ url('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/index.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/animated.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/splide/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/owl/css/owl.carousel.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-img fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('index') }}">
                <img src="{{ url('/images/logo/lumbungdesobali.png') }}" alt="lumbungdesobali" height="32px" style="margin-top: -4px"> LUMBUNGDESO <span class="text-bg-ld"> BALI</span>
            </a>
            <button class="btn px-3 d-inline d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSlider">
                <i class="fas fa-bars fa-sm fa-fw"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSlider">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('index.programs') }}">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('index.news') }}">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        @yield('pages')
    </section>

    <footer>
        <div class="py-5 bg-img2">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 col-md-8">
                        <div class="text-light mb-4">
                            <span class="fw-bold fs-5 fw-bold">Info Lumbung Deso Bali</span>
                            <hr class="soft" width="50px">
                            <div class="pe-0 pe-md-5">
                                <p>LPK Lumbung Deso Bali adalah Lembaga pelatihan yang focus untuk menyiapkan calon-calon peserta untuk mengikuti pelatihan Bahasa Inggris sebagai persiapan tes IELTS</p>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-phone fa-fw"></i>
                                    <p class="mb-0 ms-2">+62 821 - 4580 - 6835</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <p class="mb-0 ms-2">info@lumbungdesobali.com</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-map-marked fa-fw"></i>
                                    <p class="mb-0 ms-2">Jl. Tukad Yeh Aya No. 116, Denpasar Selatan, Bali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="text-light">
                            <span class="fw-bold fs-5">Link Terkait</span>
                            <hr class="soft" width="50px">
                            <nav class="nav flex-column text-grey">
                                <a class="nav-link link-light px-0" href="https://balisanitya.com/">Bali Sanitiya</a>
                                <a class="nav-link link-light px-0" href="https://lumbungdeso.id/">Lumbung Deso</a>
                                <a class="nav-link link-light px-0" href="{{ route('index.news') }}">Berita Terupdate</a>
                                <a class="nav-link link-light px-0" href="{{ route('index.aboutus') }}">Tentang Kami</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-8 col-md-2">
                        <div class="text-light">
                            <span class="fw-bold fs-5">Informasi</span>
                            <hr class="soft" width="50px">
                            <nav class="nav flex-column text-grey">
                                <a class="nav-link link-light px-0" href="{{ route('ielts.register') }}">Formulir Pendaftaran Pelatihan Bahasa Inggris IELTS</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-light">
                            <span class="fw-bold fs-5 fw-bold">Social Media</span>
                            <hr class="soft" width="50px">
                            <nav class="nav">
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://web.facebook.com/profile.php?id=100086311137239">
                                    <img src="{{ url('/images/icons/facebook.png') }}" alt="facebook"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://twitter.com/LumbungdesoBali">
                                    <img src="{{ url('/images/icons/twitter.png') }}" alt="twitter"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://www.instagram.com/lumbungdesobali/">
                                    <img src="{{ url('/images/icons/instagram.png') }}" alt="instagram"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk" href="https://www.tiktok.com/@lumbungdeso">
                                    <img src="{{ url('/images/icons/tiktok.png') }}" alt="facebook"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-2" style="background-color: #E8E2E1">
            <div class="container">
                <div class="text-center text-black">
                    <small>Suported by IT lumbungdesobali.com</small>
                </div>
            </div>
        </div>
    </footer>

    <div class="menu-balloon">
        <a class="btn btn-menu-fixed" href="https://api.whatsapp.com/send?phone=6282145806835" target="_blank">
            <i class="fab fa-whatsapp fa-2x fa-fw"></i>
        </a>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ url('/dist/style/js/popper.js') }}"></script>
    <script src="{{ url('/dist/app/js/app.js') }}"></script>
    <script src="{{ url('/dist/style/js/alert.js') }}"></script>
    <script src="{{ url('/dist/style/js/index.js') }}"></script>
    <script src="{{ url('/dist/style/js/user/index.js') }}"></script>
    <script src="{{ url('/dist/splide/js/splide.min.js') }}"></script>
    {{-- <script src="{{ asset('/dist/owl/owl.carousel.min.js') }}"></script> --}}
    @livewireScripts
    @yield('script')

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Good Jobs!',
            text: '{{ session()->get("success") }}',
        })
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: '{{ session()->get("error") }}',
        })
    </script>
    @endif
</body>

</html>