@extends('layout.admin')
@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Melamar</h1>
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
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Melamar</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Date</th>
                    <th scope="col" style="text-align:center">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($magang as $index => $item)
                    <tr>
                      <th scope="row">{{$index+1}}</th>
                      <td>{{$item->nama_mhs}}</td>
                      <td>{{$item->position}}</td>
                      <td>{{$item->start_date}}</td>
                      <td style="text-align:center"><span class="badge bg-warning">{{$item->status}}</span></td>
                      <td><a href="<?php echo e(route('profilemagang', ['id' => $item->id_mhs])); ?>">Detail</a></td>
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