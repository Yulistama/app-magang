@extends('layout.admin')
@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Profile Magang</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Master Magang</a></li>
      <li class="breadcrumb-item active">Profile Magang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src="<?php echo e(asset("admin/assets/img/profile-img.jpg")); ?>" alt="Profile" class="rounded-circle">
          <h2>{{$mhs->name}}</h2>
          <!-- <h3>Web Designer</h3> -->
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-status">Status</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">About</h5>
              @if($mhs->about == null)
                <p class="small fst-italic">About me</p>
              @else
                <p class="small fst-italic">{{$mhs->about}}</p>
              @endif
              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Name</div>
                <div class="col-lg-9 col-md-8">{{$mhs->name}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nomor HP</div>
                <div class="col-lg-9 col-md-8">(+62) {{$mhs->phone}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{$mhs->email}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Alamat</div>
                <div class="col-lg-9 col-md-8">{{$mhs->alamat}}</div>
              </div>

            </div>

            <div class="tab-pane fade pt-3" id="profile-status">

              <!-- Settings Form -->

                <div class="row mb-3">
                  <div class="col-md-3">
                    <span>Status saat ini : </span>
                  </div>
                  <div class="col-8">
                    <div class="row">
                      <div class="col-md-12">
                        @if($status_magang->status == 'Melamar')
                          <span class="badge bg-warning py-2">{{$status_magang->status}}</span>
                        @elseif($status_magang->status == 'Terima')
                          <span class="badge bg-info py-2">{{$status_magang->status}}</span>
                        @elseif($status_magang->status == 'Tolak')
                          <span class="badge bg-danger py-2">{{$status_magang->status}}</span>
                        @elseif($status_magang->status == 'Selesai')
                          <span class="badge bg-success py-2">{{$status_magang->status}}</span>
                        @endif
                      </div>

                      @if($status_magang->status == 'Selesai' || $status_magang->status == 'Tolak')
                        
                      @else
                        <form class="row g-3 needs-validation" novalidate action="{{ route('updatestatusmagang') }}" method="POST">
                          @csrf
                          <input type="hidden" class="form-control" name="id_mhs" value="{{$mhs->id_mhs}}">
                          <div class="col-md-12 mt-3">
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="">--Ubah Status--</option>
                                @if($status_magang->status == 'Melamar')
                                  <option value="1">Terima</option>
                                  <option value="2">Tolak</option>
                                @elseif($status_magang->status == 'Terima')
                                  <option value="3">Selesai</option>
                                @endif
                            </select>
                          </div>
                          <div class="col-12 text-center">
                            <button class="btn btn-info text-white btn-lg my-2" type="submit">Update</button>
                          </div>
                        </form>
                      @endif
                    </div>
                  </div>
                </div>

                <!-- <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div> -->
             

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

  @endsection