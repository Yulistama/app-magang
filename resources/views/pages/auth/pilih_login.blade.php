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
        window.location.href = "{{ route('loginmhs')}}";
    });
    
    $('#cardPerusahaan').click(function() {
        window.location.href = "{{ route('loginpt')}}";
    });
</script>
@endsection