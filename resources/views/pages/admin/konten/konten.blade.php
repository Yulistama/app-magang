@extends('layout.admin')
@section('content')

  <main id="main" class="main">
    @include('pages.admin.konten.modal.tambahKonten')
    @include('pages.admin.konten.modal.editKonten')
    @include('pages.admin.konten.modal.hapusKonten')
    <div class="pagetitle">
      <h1>Konten</h1>
      <nav>
        <ol class="breadcrumb">
          <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
          <!-- <li class="breadcrumb-item active">Dashboard</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- <h1>Dashboard</h1> -->
        <div class="col-12">
            <!--  -->
            <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-status">Edit Profile Company</button>
            </li>

          </ul>
          <div class="tab-content pt-2 my-3 mx-3">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">About</h5>
              <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

              <h5 class="card-title">Company Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Company Name</div>
                <div class="col-lg-9 col-md-8">Perusahaan ABC</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Location</div>
                <div class="col-lg-9 col-md-8">Jakarta, Indonesia</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Category</div>
                <div class="col-lg-9 col-md-8">Media</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Address</div>
                <div class="col-lg-9 col-md-8">Jl. Jakarta Pusat No 01</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8">(021) 486-3538 2907</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">example@gmail.com</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Employe</div>
                <div class="col-lg-9 col-md-8">5000</div>
              </div>
              
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Web Url</div>
                <div class="col-lg-9 col-md-8">https://perusahaanabc.com/</div>
              </div>

            </div>

            <div class="tab-pane fade pt-3" id="profile-status">

                <!-- Profile Edit Form -->
                <form>
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Company Image</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo e(asset("landing/assets/img/company/room1.jpg")); ?>" alt="" style="width: 150px">
                                <div class="pt-2">
                                  <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                  <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="<?php echo e(asset("landing/assets/img/company/room2.jpg")); ?>" alt="" style="width: 150px">
                                <div class="pt-2">
                                  <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                  <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="<?php echo e(asset("landing/assets/img/company/room3.jpg")); ?>" alt="" style="width: 150px">
                                <div class="pt-2">
                                  <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                  <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Perusahaan ABC">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Location" class="col-md-4 col-lg-3 col-form-label">Location</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Location" type="text" class="form-control" id="Location" value="Jakarta, Indonesia">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Category</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Category" type="text" class="form-control" id="Category" value="Media">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="Jl. Jakarta Pusat No 01">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="(021) 486-3538 2907">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="example@gmail.com">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Employe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="5000">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Web Url</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://perusahaanabc.com/">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-info text-white">Simpan</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>
            <!--  -->
        <div class="card">
            <div class="card-body">
                <div class="row mt-5 mb-4">
                    <div class="col-12">
                        <h5 class="card-title me-3 ms-2" style="display: inline;">Data Jobs</h5>
                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal" data-bs-target="#tambahKontenModal">+ Tambah Konten</button>
                    </div>
                    <!-- <div class="mt-3 col-10">
                    </div> -->
                </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Date</th>
                    <th scope="col" style="text-align:center">Status</th>
                    <th scope="col" style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Web Developer</td>
                    <td>IT</td>
                    <td>1 Juni 2022</td>
                    <td style="text-align:center"><span class="badge bg-success">Aktif</span></td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2" data-bs-toggle="modal" data-bs-target="#ubahKontenModal" style="font-size: 14px; cursor:pointer"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2" data-bs-toggle="modal" data-bs-target="#hapusKontenModal" style="font-size: 14px; cursor:pointer"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Front End Developer</td>
                    <td>IT</td>
                    <td>1 Juni 2022</td>
                    <td style="text-align:center"><span class="badge bg-success">Aktif</span></td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2" style="font-size: 14px;"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2" style="font-size: 14px;"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Marketing</td>
                    <td>Marketing</td>
                    <td>1 Juni 2022</td>
                    <td style="text-align:center"><span class="badge bg-danger">Non-Aktif</span></td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2" style="font-size: 14px;"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2" style="font-size: 14px;"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Video Editor</td>
                    <td>Media</td>
                    <td>1 Juni 2022</td>
                    <td style="text-align:center"><span class="badge bg-success">Aktif</span></td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2" style="font-size: 14px;"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2" style="font-size: 14px;"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Fotografer</td>
                    <td>Media</td>
                    <td>1 Juni 2022</td>
                    <td style="text-align:center"><span class="badge bg-danger">Non-Aktif</span></td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2" style="font-size: 14px;"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2" style="font-size: 14px;"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Auditor</td>
                    <td>Akuntan</td>
                    <td>1 Juni 2022</td>
                    <td style="text-align:center"><span class="badge bg-success">Aktif</span></td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2" style="font-size: 14px;"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2" style="font-size: 14px;"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Data Analys</td>
                    <td>IT</td>
                    <td>1 Juni 2022</td>
                    <td style="text-align:center"><span class="badge bg-success">Magang</span></td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2" style="font-size: 14px;"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2" style="font-size: 14px;"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>

      </div>
    </section>

  </main>
  <!-- End #main -->

  @endsection