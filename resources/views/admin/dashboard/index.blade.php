@extends('admin.layouts.panel')

@section('head')
    <title>Dashboard</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row bg-white p-3 mb-3">
            <div>
                <p class="fs-4 fw-bold mb-0">Welcome Admin</p>
                <p class="mb-0">Hallo, {{ auth('admin')->user()->email }}</p>
            </div>
        </div>
        <div class="d-block mb-3">
            <div class="row g-3">

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card border-0 p-2 shadow-sm">
                        <div class="d-flex align-items-center px-2">
                            <i class="fas fa-question fa-3x"></i>
                            <div class="card-body text-end">
                                <p class="card-title fs-2 mb-0"></p>
                            </div>
                        </div>
                        <div class="card-footer bg-white px-1">
                            <small class="text-start fw-bold">Banners</small>
                        </div>
                        <a href="" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection