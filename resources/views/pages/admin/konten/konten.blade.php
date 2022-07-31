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
              <p class="small fst-italic">{{$perusahaan->about}}</p>

              <h5 class="card-title">Company Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Company Name</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->name}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Location</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->location ? $perusahaan->location : '-'}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Category</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->category ? $perusahaan->category : '-'}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Address</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->address ? $perusahaan->address : '-'}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->phone ? $perusahaan->phone : '-'}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->email ? $perusahaan->email : '-'}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Employee</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->employee ? $perusahaan->employee : '-'}}</div>
              </div>
              
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Web Url</div>
                <div class="col-lg-9 col-md-8">{{$perusahaan->project_url ? $perusahaan->project_url : '-'}}</div>
              </div>

            </div>

            <div class="tab-pane fade pt-3" id="profile-status">

                <!-- Profile Edit Form -->
                <form method="POST" action="{{ route('ubahperusahaan', $perusahaan->id) }}">
                @csrf
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Company Image</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ $perusahaan->image }}" alt="" style="width: 150px">
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
                        <input name="name" type="text" class="form-control" id="name" value="{{$perusahaan->name}}" placeholder="Name">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">{{$perusahaan->about}}</textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Location" class="col-md-4 col-lg-3 col-form-label">Location</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="location" type="text" class="form-control" id="location" value="{{$perusahaan->location}}" placeholder="Location">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Category</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="category" type="text" class="form-control" id="category" value="{{$perusahaan->category}}" placeholder="Category">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="address" value="{{$perusahaan->address}}" placeholder="Addres">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="phone" value="{{$perusahaan->phone}}" placeholder="Phone">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="{{$perusahaan->email}}" placeholder="Email">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Employee</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="employee" type="text" class="form-control" id="employee" value="{{$perusahaan->employee}}" placeholder="Employe">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Web Url</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="project_url" type="text" class="form-control" id="project_url" value="{{$perusahaan->project_url}}" placeholder="https://perusahaanabc.com">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Image Url</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="image" type="text" class="form-control" id="image" value="{{$perusahaan->image}}" placeholder="https://perusahaanabc.com/image.png">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-info text-white">Ubah</button>
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
              @foreach($jobs as $index => $item)
                  <tr>
                    <th scope="row">{{$index+1}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->position}}</td>
                    <td>{{$item->date}}</td>                    
                    <td style="text-align:center">
                      @if($item->status == 'Aktif')
                      <span class="badge bg-success">
                      @elseif($item->status == 'Tidak Aktif')
                      <span class="badge bg-danger">
                      @else
                      <span class="badge bg-success">
                      @endif
                      {{$item->status}}</span>
                    </td>
                    <td style="text-align:center">
                        <span class="badge bg-info py-2 edit-item-button" data-bs-update-link="{{ route('ubahjob', $item->id) }}" data-bs-toggle="modal" data-bs-item="{{ $item }}" data-bs-target="#ubahKontenModal" style="font-size: 14px; cursor:pointer"><i class="bi bi-pencil-square" ></i></i> Edit</span>
                        <span class="badge bg-danger py-2 delete-item-button" data-bs-delete-link="{{ route('hapusjob', $item->id) }}" data-bs-toggle="modal" data-bs-target="#hapusKontenModal" style="font-size: 14px; cursor:pointer"><i class="bi bi-trash"></i></i> Delete</span>
                    </td>
                  </tr>
                @endforeach
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