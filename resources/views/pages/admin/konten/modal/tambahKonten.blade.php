<!-- Basic Modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKontenModal">
  Basic Modal
</button> -->
<div class="modal fade" id="tambahKontenModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Tambah Konten</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 px-5" id="dataStatus" style="display: '';">
            <!-- Vertical Form -->
            <form class="row g-3">
              <div class="col-12">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="col-12">
                <label for="position" class="form-label fw-bold">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Position">
              </div>
              <div class="col-12">
                <label for="date" class="form-label fw-bold">Date</label>
                <input type="date" class="form-control" id="date">
              </div>
              <div class="col-12">
                  <label for="status" class="form-label fw-bold">Status</label>
                  <div class="col-sm-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>--Pilih Status--</option>
                      <option value="1">Aktif</option>
                      <option value="2">Non Aktif</option>
                    </select>
                  </div>
              </div>
            </form>
            <!-- Vertical Form -->
          </div>
          <div class="col-12 px-5" id="dataDescripsi" style="display: none;">
            <div class="row">
              <div class="col-12">
                <form class="row g-3 mt-2">
                    <div class="col-12">
                      <label for="position" class="form-label fw-bold">Job Descriptions</label>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Jobdesc 1</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Jobdesc 2</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Jobdesc 3</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Jobdesc 4</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Jobdesc 5</label>
                      </div>
                    </div>
                  
                  </form>
                  <!-- Vertical Form -->
              </div>
              
              <div class="col-12 my-5">
                <form class="row g-3">
                    <div class="col-12">
                      <label for="position" class="form-label fw-bold">Requirements</label>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Requirements 1</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Requirements 2</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Requirements 3</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Requirements 4</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Requirements 5</label>
                      </div>
                    </div>
                  
                  </form>
                  <!-- Vertical Form -->
              </div>

              <div class="col-12">
              <label for="position" class="form-label fw-bold">Descriptions</label>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Descriptions</label>
                </div>
              </div>
            </div>
            <!-- Vertical Form -->
          </div>
        </div>
      </div>
      <div class="modal-footer" style="margin: auto;">
        <div class="row">
          <div class="col-12" id="display-next" style="display: ''">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" id="btn-next">Selanjutnya</button>
          </div>
          <div class="col-12" id="display-prev" style="display: none;">
            <button type="button" class="btn btn-secondary" id="btn-prev">Sebelumnya</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Basic Modal-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#btn-next').click(function() {
    // show
    $('#dataDescripsi').css({
      'display': '',
    });
    $('#display-prev').css({
      'display': '',
    });
    
    // hidden
    $('#dataStatus').css({
      'display': 'none',
    });
    $('#display-next').css({
      'display': 'none',
    });
  });
  
  $('#btn-prev').click(function() {
    // hidden
    $('#dataDescripsi').css({
      'display': 'none',
    });
    $('#display-prev').css({
      'display': 'none',
    });
    
    // show
    $('#dataStatus').css({
      'display': '',
    });
    $('#display-next').css({
      'display': '',
    });
  });

</script>