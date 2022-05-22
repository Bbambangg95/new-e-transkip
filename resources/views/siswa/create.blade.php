@extends('layout.main')
@section('content')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container">
            <div class="row row-cards">
                <div class="col">
                    <form action="form-elements.php" method="post" class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Input Data Baru</h4>
                            </div>
                        <div class="card-body">
                            <div class="col-md-3 col-xl-12">
                                <div class="form-group mb-3 ">
                                    <label class="form-label required">NAMA LENGKAP</label>
                                    <div>
                                    <input  class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required="">
                                    <small class="form-hint">We'll never share your email with anyone else.</small>
                                    </div>
                                </div>

                                <div class="form-group mb-3 ">
                                    <span class="form-label required">NISN (Nomor Induk Siswa Nasional)</span>
                                    <input class="form-control" type="number" name="nisn" placeholder="Masukkan NISN " required="number">
                                    <small class="form-hint">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group mb-3 ">
                                    <span class="form-label required">NIS</span>
                                    <input class="form-control" type="number" name="nis" placeholder="Masukkan NIS" required="number">
                                    <small class="form-hint">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group mb-3 ">
                                <span class="form-label required">Tahun Masuk</span>
                                    <select name="tahun_masuk" class="form-select" required="">
                                        <option value="">Pilih Tahun</option>
                                        <option value="2025" >2025</option>
                                        <option value="2024" >2024</option>
                                        <option value="2023" >2023</option>
                                        <option value="2021" >2021</option>
                                        <option value="2020" >2020</option>
                                        <option value="2019" >2019</option>
                                        <option value="2018" >2018</option>
                                        <option value="2017" >2017</option>
                                    </select>
                                    <small class="form-hint">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="col">
                                        <button class="btn btn-primary" type="submit" name="submit">Buat Transkip</button>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
