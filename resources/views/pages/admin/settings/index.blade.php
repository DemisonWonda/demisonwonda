@extends('layouts.default')

@section('title')
Pengaturan
@endsection

@push('before-script')
    @if (session('status'))
    <x-sweetalertsession tipe="{{session('tipe')}}" status="{{session('status')}}"/>
    @endif
@endpush


@section('content')
        <section class="section">
            <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
                {{-- <div class="breadcrumb-item"><a href="#">Layout</a></div> --}}
                <div class="breadcrumb-item">@yield('title')</div>
            </div>
            </div>

            <div class="section-body">
            <div class="card">
                <div class="card-header">
                <h4>Pengaturan Aplikasi</h4>
                </div>
                <div class="card-body">

<form action="{{ url('/admin/settings') }}" method="POST">
@csrf

<div class="form-group">
    <label>Nama Aplikasi</label>
    <input type="text"
           name="app_nama"
           class="form-control"
           value="{{ old('app_nama', $datas->app_nama) }}"
           required>
</div>

<div class="form-group">
    <label>Nama Pendek</label>
    <input type="text"
           name="app_namapendek"
           class="form-control"
           value="{{ old('app_namapendek', $datas->app_namapendek) }}"
           required>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>


                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <h4>Seeder dan Reset Data</h4>
                </div>
                <div class="card-body">

                    <form action="{{route('seeder.kelas')}}" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-info">Seeder Data Kelas</button>
                    </form>

                    <form action="{{route('seeder.siswa')}}" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-info">Seeder Data Siswa</button>
                    </form>


                    <form action="{{route('seeder.guru')}}" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-info">Seeder Data Guru</button>
                    </form>


                    {{-- <form action="{{route('seeder.mapel')}}" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-info">Seeder Data Mapel</button>
                    </form> --}}


                    <form action="{{route('kko')}}" method="get" class="d-inline">
                        @csrf
                        <button class="btn btn-success">Fungsi KKO</button>
                    </form>
                    <br>
                    <br>

                    <form action="{{route('seeder.hard')}}" method="post"  class="d-inline ">
                        @csrf
                        <button class="btn btn-danger">Hard Reset</button>
                    </form>

                    <form action="{{route('cleartemp')}}" method="post"  class="d-inline ">
                        @csrf
                        <button class="btn btn-danger">Clear Temporary</button>
                    </form>

                </div>
            </div>
            </div>
        </section>
@endsection
