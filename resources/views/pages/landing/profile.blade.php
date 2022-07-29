@extends('layout.landing')
@section('content')

  <!-- <section class="inner-page mt-5">
    <div class="container">
      <div class="section-title">
        <h2>Profile</h2>
      </div>
      
    </div>
  </section> -->
  <!-- ======= Contact Section ======= -->
<section id="contact" class="inner-page contact mt-5">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Profile</h2>
      <p>Data Profile</p>
    </div>
    
    <div class="row d-flex justify-content-center">
      <div class="col-6">
        <div class="card">

            <div class="card-body">
                @if (session('error') != null)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form class="row g-3 needs-validation" novalidate action="{{ route('update_profile') }}" method="POST">
                    @csrf
                    <div class="mb-2 px-5 mt-5">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="name" value="{{$profile->name}}">
                    </div>
                    <div class="mb-2 px-5">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email" value="{{$profile->email}}">
                    </div>
                    <div class="mb-2 px-5">
                        <label for="exampleFormControlInput1" class="form-label">NIK/NIM/NISN</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nim" value="{{$profile->nim}}">
                    </div>
                    <div class="mb-2 px-5">
                        <label for="exampleFormControlInput1" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nomor HP" name="phone" value="{{$profile->phone}}">
                    </div>
                    <div class="mb-2 px-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" placeholder="Alamat" value="{{$profile->alamat}}">{{$profile->alamat}}</textarea>
                    </div>
                    <div class="mb-2 px-5">
                        <label for="exampleFormControlTextarea1" class="form-label">About</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about" placeholder="About" value="{{$profile->about}}">{{$profile->about}}</textarea>
                    </div>

                    <div class="col-12 text-center">
                        <button class="btn btn-info text-white btn-lg my-2" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      
    </div>
  </div>
</section><!-- End Contact Section -->

@endsection