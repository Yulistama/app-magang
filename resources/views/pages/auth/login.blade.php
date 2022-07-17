@extends('layout.auth')
@section('register')

<!-- Modal -->
<div class="modal fade " id="formLogin" tabindex="1" aria-labelledby="loginLabel" aria-hidden="true" style="opacity: unset; display:unset;">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content border rounded shadow">
        <div class="modal-header" id="modalHeader" style="display: '';">
            <a style="display: contents;" href="<?php echo e(route('landing')); ?>">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </a>
        </div>
        <div class="modal-body px-5">
            <div class="col-12 my-4" id="chooseLogin" style="display: '';">
                <h5 class="modal-title fw-bold" id="loginLabel">Masuk Magang</h5>
                <p class="mt-3">Saya ingin masuk sebagai</p>
                <div class="card" id="cardMhs" style="cursor: pointer;">
                    <div class="card-body fw-bold">
                        Siswa/Mahasiswa
                    </div>
                </div>
                <div class="card mt-3 mb-5" id="cardPerusahaan" style="cursor: pointer;">
                    <div class="card-body fw-bold">
                        Perusahaan
                    </div>
                </div>
            </div>

            <!-- s.login mhs -->
            <div class="col-12 mt-5" id="loginMhs" style="display: none;">
                <i style="font-size:20px; cursor: pointer" class="fa mt-3 mb-5" id="backMhs">&#xf060;</i> <span class="fw-bold ms-3" style="font-size:22px;">Login Siswa/Mahasiswa</span>
                <div class="mb-3">
                    <label for="emailLogin" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" id="emailLogin" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="passwordLogin" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="passwordLogin" placeholder="Password">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary btn-lg mt-3" type="button">Masuk</button>
                </div>
            </div>
            <!-- e.login mhs -->

            <!-- s.login perusahan -->
            <div class="col-12 mt-5" id="loginPerusahaan" style="display: none;">
                <i style="font-size:20px; cursor: pointer" class="fa mt-3 mb-5" id="backPt">&#xf060;</i> <span class="fw-bold ms-3" style="font-size:22px;">Login Perusahaan</span>
                <!-- <h5 class="modal-title fw-bold mb-5 mt-3" id="loginLabel">Login Perusahaan</h5> -->
                <div class="mb-3">
                    <label for="emailLogin" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" id="emailLogin" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="passwordLogin" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" id="passwordLogin" placeholder="Password">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary btn-lg mt-3" type="button">Masuk</button>
                </div>
            </div>
            <!-- e.login perusahan -->

            <div class="text-center col-12 my-5" id="linkRegister" style="display: none;">
                <span class="mt-3">Belum mempunyai akun magang ? </span> <a style="display: contents;" href="<?php echo e(route('registermhs')); ?>"> <span class="text-primary fw-bold">Daftar Sekarang</span> </a>
                <p class="text-primary fw-bold">Lupa Password ?</p>
            </div>

        </div>
    </div>
  </div>
</div>

<script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
        var myModal = new bootstrap.Modal(document.getElementById("formLogin"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

    // klik card login mhs
    $('#cardMhs').click(function() {
        console.log('mhs');

        // display show
        $('#loginMhs').css({
            'display': '',
        });
        $('#linkRegister').css({
            'display': '',
        });
        
        // display hidden
        $('#modalHeader').css({
            'display': 'none',
        });
        $('#chooseLogin').css({
            'display': 'none',
        });
    });

    // klik card login perusahaan
    $('#cardPerusahaan').click(function() {
        // display show
        $('#loginPerusahaan').css({
            'display': '',
        });
        $('#linkRegister').css({
            'display': '',
        });
        
        // display hidden
        $('#modalHeader').css({
            'display': 'none',
        });
        $('#chooseLogin').css({
            'display': 'none',
        });
    });

    // klik back login mhs
    $('#backMhs').click(function() {
        // display show
        $('#modalHeader').css({
            'display': '',
        });
        $('#chooseLogin').css({
            'display': '',
        });

        // display hidden
        $('#loginMhs').css({
            'display': 'none',
        });
        $('#linkRegister').css({
            'display': 'none',
        });
    });
    
    // klik back login pt
    $('#backPt').click(function() {
        // display show
        $('#modalHeader').css({
            'display': '',
        });
        $('#chooseLogin').css({
            'display': '',
        });

        // display hidden
        $('#loginPerusahaan').css({
            'display': 'none',
        });
        $('#linkRegister').css({
            'display': 'none',
        });
    });

</script>
@endsection