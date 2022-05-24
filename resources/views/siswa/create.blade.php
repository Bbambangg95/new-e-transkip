@extends('layout.main')
@section('content')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container">
            <div class="row row-cards">
                <div class="col">
                    <form method="POST" action="/siswa" class="card">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title text-center">Input Data Baru</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-3 col-xl-12">
                                <div class="form-group mb-3 ">
                                    <span class="form-label required">Nama Lengkap</span>
                                    <div>
                                        <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group mb-3 ">
                                    <span class="form-label required">Asal</span>
                                    <input class="form-control" type="text" name="asal" placeholder="Masukkan Asal ">
                                </div>

                                <div class="form-group mb-3 ">
                                    <span class="form-label required">NISN (Nomor Induk Siswa Nasional)</span>
                                    <input class="form-control" type="number" name="nisn" placeholder="Masukkan NISN " required="number">
                                </div>

                                <div class="form-group mb-3 ">
                                    <span class="form-label required">NIS</span>
                                    <input class="form-control" type="number" name="nis" placeholder="Masukkan NIS" required="number">
                                </div>
                                <div class="form-group mb-3 ">
                                    <span class="form-label required">Tahun Masuk</span>
                                    <select name="tahun_masuk" class="form-select">
                                        <option value="">Pilih Tahun</option>
                                        @for ($i = date('Y')-5; $i <= date('Y'); $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col">
                                        <button class="btn btn-primary" type="submit">
                                            Buat Transkip
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
