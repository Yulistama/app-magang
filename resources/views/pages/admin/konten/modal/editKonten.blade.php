<!-- Basic Modal -->
<div class="modal fade" id="ubahKontenModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold">Edit Konten</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 px-5" id="dataStatusEdit" style="display: '';">
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
          <div class="col-12 px-5" id="dataDescripsiEdit" style="display: none;">
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
          <div class="col-12" id="display-next-edit" style="display: ''">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-info text-white" id="btn-next-edit">Selanjutnya</button>
          </div>
          <div class="col-12" id="display-prev-edit" style="display: none;">
            <button type="button" class="btn btn-outline-secondary" id="btn-prev-edit">Sebelumnya</button>
            <button type="button" class="btn btn-info text-white">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Basic Modal-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#btn-next-edit').click(function() {
    // show
    $('#dataDescripsiEdit').css({
      'display': '',
    });
    $('#display-prev-edit').css({
      'display': '',
    });
    
    // hidden
    $('#dataStatusEdit').css({
      'display': 'none',
    });
    $('#display-next-edit').css({
      'display': 'none',
    });
  });
  
  $('#btn-prev-edit').click(function() {
    // hidden
    $('#dataDescripsiEdit').css({
      'display': 'none',
    });
    $('#display-prev-edit').css({
      'display': 'none',
    });
    
    // show
    $('#dataStatusEdit').css({
      'display': '',
    });
    $('#display-next-edit').css({
      'display': '',
    });
  });

</script>