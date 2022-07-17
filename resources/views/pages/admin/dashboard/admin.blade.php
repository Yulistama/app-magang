@extends('layout.admin')
@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
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
              <h5 class="card-title">Dashboard</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col" style="text-align:center">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td style="text-align:center"><span class="badge bg-info">Magang</span></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td style="text-align:center"><span class="badge bg-info">Magang</span></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td style="text-align:center"><span class="badge bg-success">Selesai</span></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td style="text-align:center"><span class="badge bg-info">Magang</span></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td style="text-align:center"><span class="badge bg-info">Magang</span></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Raheem Lehner</td>
                    <td>Programer</td>
                    <td style="text-align:center"><span class="badge bg-info">Magang</span></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Raheem Lehner</td>
                    <td>Data Analys</td>
                    <td style="text-align:center"><span class="badge bg-info">Magang</span></td>
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