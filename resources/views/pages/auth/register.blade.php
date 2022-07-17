@extends('layout.auth')
@section('register')
<div class="row">
    <div class="col-6 px-5">
        <div class="row px-5">
            
            <div class="col-12 px-5">
                <div class="mb-3 px-5">
                    <a style="text-decoration: none; color:black;" href="<?php echo e(route('login')); ?>">
                        <i style="font-size:20px; cursor:pointer" class="fa my-4">&#xf060; </i>
                    </a> 
                    <span class="fw-bold ms-3" style="font-size:22px;"> Daftar Akun Siswa / Mahasiswa</span>
                    <label for="formNama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="formNama" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3 px-5">
                    <label for="formEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="formEmail" placeholder="Email">
                </div>
                <div class="mb-3 px-5">
                    <label for="formNoHp" class="form-label">No Telpon</label>
                    <input type="text" class="form-control" id="formNoHp" placeholder="0823xxxxxxxx">
                </div>
                <div class="mb-3 px-5">
                    <label for="formPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="formPassword" placeholder="Password">
                </div>
                <div class="mb-3 px-5">
                    <label for="formKUlangiEmail" class="form-label">Ulangi Email</label>
                    <input type="password" class="form-control" id="formKUlangiEmail" placeholder="Ulangi Password">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-info text-white btn-lg mt-3" type="button">Daftar</button>
                </div>
    
            </div>
            <div class="text-center col-12 my-5">
                <span class="mt-3">Sudah mempunyai akun magang ? </span> <a style="display: contents;" href="<?php echo e(route('login')); ?>"> <span class="text-primary fw-bold">Masuk Disini</span> </a>
            </div>

        </div>
    </div>
    <div class="col-6 pt-5">
        <img src="<?php echo e(asset("landing/assets/img/skills.png")); ?>" class="img-fluid mt-5" alt="">
    </div>
</div>
@endsection