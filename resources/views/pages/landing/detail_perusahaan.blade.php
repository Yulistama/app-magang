@extends('layout.landing')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <ol>
      <li><a href="{{ URL::previous() }}">Home</a></li>
      <li>Detail Perusahaan</li>
    </ol>
    <h2>Detail Perusahaan</h2>
  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ $perusahaan->image }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo e(asset("landing/assets/img/company/room2.jpg")); ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?php echo e(asset("landing/assets/img/company/room3.jpg")); ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{$perusahaan->name}}</h3>
              <ul>
                <li><strong>Location</strong>: {{$perusahaan->location}}</li>
                <li><strong>Category</strong>: {{$perusahaan->category}}</li>
                <li><strong>Employe</strong>: {{$perusahaan->employee}}</li>
                <li><strong>Email</strong>: <a href="#">{{$perusahaan->email}}</a></li>
              </ul>
            </div>

            <div class="portfolio-info mt-3">
              <div class="portfolio-description">
                <h2>Portfolio</h2>
                <p>
                {{$perusahaan->name}} adalah {{$perusahaan->about}}
                </p>
              </div>
            </div>
            
          </div>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>{{ $jumlah_job }} Internship Positions</strong></h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>

            <div class="accordion-list">
              <ul>
                @foreach($jobs as $index => $item)
                <li>
                  <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-{{ $item->id }}"> {{ $item->name }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-{{ $item->id }}" class="collapse" data-bs-parent=".accordion-list">
                    <div class="row px-3 my-4">
                      <div class="col-12 text-center mt-4 "><h4 class="fw-bold">Job description & requirements</h4></div>
                      <div class="col-12">
                        <p>
                          {{ $item-> descriptions }}
                        </p>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Job Descriptions :</p>
                        <ul>
                          <ol>- {{ $item-> jobdesc_1 }}</ol>
                          <ol>- {{ $item-> jobdesc_2 }}</ol>
                          <ol>- {{ $item-> jobdesc_3 }}</ol>
                          <ol>- {{ $item-> jobdesc_4 }}</ol>
                          <ol>- {{ $item-> jobdesc_5 }}</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Requirements :</p>
                        <ul>
                          <ol>- {{ $item-> requirements_1 }}</ol>
                          <ol>- {{ $item-> requirements_2 }}</ol>
                          <ol>- {{ $item-> requirements_3 }}</ol>
                          <ol>- {{ $item-> requirements_4 }}</ol>
                          <ol>- {{ $item-> requirements_5 }}</ol>
                        </ul>
                      </div>
                      <form class="row g-3 needs-validation" novalidate action="{{ route('ajukanmagang') }}" method="POST">
                        @csrf
                        <input type="hidden" class="form-control" name="id_user" value="{{ Session::get('user.id') }}">
                        <input type="hidden" class="form-control" name="id_perusahaan" value="{{$perusahaan->id_perusahaan}}">
                        <input type="hidden" class="form-control" name="nama_pt" value="{{$perusahaan->name}}">
                        <input type="hidden" class="form-control" name="nama_mhs" value="{{ Session::get('user.name') }}">
                        <input type="hidden" class="form-control" name="position" value="{{ $item->name }}">
                        <div class="col-12 mt-4">
                          <p class="fw-bold">Magang :</p>
                          @if (session('error') != null)
                              <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                  {{ session('error') }}
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                          @endif
                          <div class="mb-3 px-4 mt-3">
                              <label for="exampleFormControlInput1" class="form-label">Dari</label>
                              <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="start_date" required>
                          </div>
                          <div class="mb-3 px-4">
                              <label for="exampleFormControlInput1" class="form-label">Sampai</label>
                              <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="end_date" required>
                          </div>
                          <div class="d-grid gap-2 col-6 mx-auto mt-4">
                              <button class="btn btn-info text-white" type="submit">Ajukan Magang</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    
                  </div>
                </li>
                @endforeach

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo e(asset("landing/assets/img/why-us.png")); ?>");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>
    <!-- End Why Us Section -->

      </div>
    </div>
</section><!-- End Portfolio Details Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Contact</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    <div class="row">
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>{{$perusahaan->address}}</p>
          </div>
          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>{{$perusahaan->email}}</p>
          </div>
          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>{{$perusahaan->phone}}</p>
          </div>          
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1818.7483492035194!2d106.79125624785945!3d-6.168466731671632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f65cb460416b%3A0x9e6e30cd9313eeb4!2sTrisakti%20University!5e0!3m2!1sen!2sid!4v1659200139977!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

@endsection
