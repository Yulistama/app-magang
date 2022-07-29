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
                  <img src="<?php echo e(asset("landing/assets/img/company/room1.jpg")); ?>" alt="">
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
                <li><strong>Location</strong>: Jakarta, Indonesia</li>
                <li><strong>Category</strong>: Media</li>
                <li><strong>Employe</strong>: 502 - 1.000</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>

            <div class="portfolio-info mt-3">
              <div class="portfolio-description">
                <h2>Portfolio</h2>
                <p>
                {{$perusahaan->name}} Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
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
              <h3><strong>5 Jobs</strong></h3>
              <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p> -->
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"> Web Developer <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <div class="row px-3 my-4">
                      <div class="col-12 text-center mt-4 "><h4 class="fw-bold">Job description & requirements</h4></div>
                      <div class="col-12">
                        <p>
                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Job Descriptions :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Requirements :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <form class="row g-3 needs-validation" novalidate action="{{ route('ajukanmagang') }}" method="POST">
                        @csrf
                        <input type="hidden" class="form-control" name="id_user" value="{{ Session::get('user.id') }}">
                        <input type="hidden" class="form-control" name="id_perusahaan" value="{{$perusahaan->id_perusahaan}}">
                        <input type="hidden" class="form-control" name="nama_pt" value="{{$perusahaan->name}}">
                        <input type="hidden" class="form-control" name="nama_mhs" value="{{ Session::get('user.name') }}">
                        <input type="hidden" class="form-control" name="position" value="Web Developer">
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

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"> Videografer <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <div class="row px-3 my-4">
                      <div class="col-12 text-center mt-4 "><h4 class="fw-bold">Job description & requirements</h4></div>
                      <div class="col-12">
                        <p>
                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Job Descriptions :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Requirements :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-4">
                        <p class="fw-bold">Magang :</p>
                        <div class="mb-3 px-4 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Dari</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="exampleFormControlInput1" class="form-label">Sampai</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                            <button class="btn btn-info text-white" type="button">Ajukan Magang</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"> Marketing <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <div class="row px-3 my-4">
                      <div class="col-12 text-center mt-4 "><h4 class="fw-bold">Job description & requirements</h4></div>
                      <div class="col-12">
                        <p>
                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Job Descriptions :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Requirements :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-4">
                        <p class="fw-bold">Magang :</p>
                        <div class="mb-3 px-4 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Dari</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="exampleFormControlInput1" class="form-label">Sampai</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                            <button class="btn btn-info text-white" type="button">Ajukan Magang</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"> Data Analys <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <div class="row px-3 my-4">
                      <div class="col-12 text-center mt-4 "><h4 class="fw-bold">Job description & requirements</h4></div>
                      <div class="col-12">
                        <p>
                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Job Descriptions :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Requirements :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-4">
                        <p class="fw-bold">Magang :</p>
                        <div class="mb-3 px-4 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Dari</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="exampleFormControlInput1" class="form-label">Sampai</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                            <button class="btn btn-info text-white" type="button">Ajukan Magang</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"> Sales <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <div class="row px-3 my-4">
                      <div class="col-12 text-center mt-4 "><h4 class="fw-bold">Job description & requirements</h4></div>
                      <div class="col-12">
                        <p>
                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Job Descriptions :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-3">
                        <p class="fw-bold">Requirements :</p>
                        <ul>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                          <ol>- is simply dummy text of the printing and typesetting industry.</ol>
                        </ul>
                      </div>
                      <div class="col-12 mt-4">
                        <p class="fw-bold">Magang :</p>
                        <div class="mb-3 px-4 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Dari</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3 px-4">
                            <label for="exampleFormControlInput1" class="form-label">Sampai</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-4">
                            <button class="btn btn-info text-white" type="button">Ajukan Magang</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

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
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>
          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 55s</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
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
