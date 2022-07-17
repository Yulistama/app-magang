@extends('layout.landing')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="#">Home</a></li>
          <li>Data Magang</li>
        </ol>
        <h2>Data Magang</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12">
                    <table id="tabelMagang" class="ui celled table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Perusahaan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Perusahaan A</td>
                                <td>Melamar</td>
                                <td>Detail</td>
                            </tr>
                            <tr>
                                <td>Perusahaan B</td>
                                <td>Melamar</td>
                                <td>Detail</td>
                            </tr>
                            <tr>
                                <td>Perusahaan C</td>
                                <td>Melamar</td>
                                <td>Detail</td>
                            </tr>
                            <tr>
                                <td>Perusahaan D</td>
                                <td>Melamar</td>
                                <td>Detail</td>
                            </tr>
                            <tr>
                                <td>Perusahaan E</td>
                                <td>Melamar</td>
                                <td>Detail</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <!-- End Portfolio Details Section -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabelMagang').DataTable({
                "columns": [
                    null,
                    null,
                    { "width": "10%" }
                ]
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.semanticui.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
@endsection