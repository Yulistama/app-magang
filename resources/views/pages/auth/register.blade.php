@extends('layout.auth')
@section('register')
<div class="row">
    <div class="col-6 px-5">
        <div class="row px-5">
            
            <div class="col-12 px-5">
                @if(Session::has('alert.notification.users_add'))
                    <div class="alert alert-success text-center" role="alert">
                        <h4 class="alert-heading">Berhasil</h4>
                        <p>Anda telah berhasil membuat akun magang</p>
                        <hr>
                        @if(Session::has('pt'))
                            <a style="display: contents;" href="<?php echo e(route('loginpt')); ?>"><p class="mb-0">Masuk Disini</p></a>
                        @endif
                        @if(Session::has('mhs'))
                            <a style="display: contents;" href="<?php echo e(route('loginmhs')); ?>"><p class="mb-0">Masuk Disini</p></a>
                        @endif
                    </div>
                @endif

                @if (session('error') != null)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <div class="mb-3 px-5">
                    <a style="text-decoration: none; color:black;" href="<?php echo e(route('pilihlogin')); ?>">
                        <i style="font-size:20px; cursor:pointer" class="fa my-4">&#xf060; </i>
                    </a> 
                    <span class="fw-bold ms-3" style="font-size:18px;"> Daftar Akun Perusahaan / Mahasiswa</span>
                    
                </div>

                <form class="row g-3 needs-validation" novalidate action="{{ route('post_register') }}" method="POST">
                    @csrf
                    <div>
                        <div class="mb-3 px-4">
                            <label for="formNama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" id="formNama" placeholder="Nama Lengkap" name="name">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="formEmail" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" id="formEmail" placeholder="Email" name="email">
                        </div>
                        <div class="mb-0 px-4">
                            <label for="formNoHp" class="form-label fw-bold">No Telpon</label>
                        </div>
                        <div class="input-group mb-3 px-4">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                            <input type="text" class="form-control" id="formNoHp" placeholder="823 xxxx xxxx" name="phone">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="formPassword" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" id="formPassword" placeholder="Password" name="password">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="formKUlangiEmail" class="form-label fw-bold">Ulangi Password</label>
                            <input type="password" class="form-control" id="formKUlangiEmail" placeholder="Ulangi Password" name="confirm_password">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="formKUlangiEmail" class="form-label fw-bold">Pilih Role</label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="">--Pilih--</option>
                                <option value="1">Perusahaan</option>
                                <option value="2">Mahasiswa/Siswa</option>
                            </select>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                            <button class="btn btn-info text-white btn-lg mt-3" type="submit">Daftar</button>
                        </div>

                    </div>
                </form>
    
            </div>
            <div class="text-center col-12 my-5">
                <span class="mt-3">Sudah mempunyai akun magang ? </span> <a style="display: contents;" href="<?php echo e(route('pilihlogin')); ?>"> <span class="text-primary fw-bold">Masuk Disini</span> </a>
            </div>

        </div>
    </div>
    <div class="col-6 pt-5">
        <img src="<?php echo e(asset("landing/assets/img/hero-img.png")); ?>" class="img-fluid mt-5" alt="">
    </div>
</div>
@endsection