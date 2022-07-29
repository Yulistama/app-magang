@extends('layout.landing')
@section('content')

  <section class="inner-page mt-5">
    <div class="container">
      <div class="section-title">
        <h2>Info Magang</h2>
      </div>
      @include('component.cardDetailInfoMagang', ['perusahaan', $perusahaan])
    </div>
  </section>

@endsection