<!-- Modal -->
<div class="modal" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header" id="modalHeader">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-5">
            <div class="col-12 my-4" id="chooseLogin">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

    $('#cardMhs').click(function() {
        window.location.href = "{{ route('loginmhs')}}";
    });
    
    $('#cardPerusahaan').click(function() {
        window.location.href = "{{ route('loginpt')}}";
    });

</script>