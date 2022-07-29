@extends('layout.auth')
@section('register')
<div class="row">
    <div class="col-6 px-5">
        <div class="row px-5 pt-5">
            
            <div class="col-12 px-5 mt-5">
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
                    <span class="fw-bold ms-3" style="font-size:22px;"> Login Perusahaan</span>
                </div>

                <form class="row g-3 needs-validation" novalidate action="{{ route('post_login') }}" method="POST">
                    @csrf
                    <div class="mb-0 px-5">
                        <label for="emailLogin" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="emailLogin" placeholder="Email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3 px-5">
                        <label for="passwordLogin" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" placeholder="Password" name="password">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-info text-white btn-lg mt-3" type="submit">Masuk</button>
                    </div>
                </form>
            </div>
            <div class="text-center col-12 my-5">
                <span class="mt-3">Belum mempunyai akun magang ? </span> <a style="display: contents;" href="<?php echo e(route('registeraccount')); ?>"> <span class="text-primary fw-bold">Daftar Sekarang</span> </a>
                <p class="text-primary fw-bold">Lupa Password ?</p>
            </div>

        </div>
    </div>
    <div class="col-6 pt-5">
        <img src="<?php echo e(asset("landing/assets/img/why-us.png")); ?>" class="img-fluid mt-5" alt="">
    </div>
</div>
@endsection