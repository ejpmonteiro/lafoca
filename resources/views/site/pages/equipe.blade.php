@extends('site.layouts.template2')

@section('title', 'Equipe')

@section('equipe')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endsection

@section('page', 'equipe')

@section('content')
{{-- <!-- Header -->
<header class="bg-equipe text-center py-5 mb-4 my-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Equipe</h1>
  </div>
</header> --}}

<div class="row">
  <div class="col-sm-12 col-md-12">
    <h1 class="text-center my-4 cabecalho">Equipe
      <!-- <small>Secondary Text</small> -->
    </h1>
  </div>
</div>

<!-- Section: Team -->

<section class="section team-section">

  <!-- Grid row -->
  <div class="row text-center">
    @foreach ($professionals as $professional)
    <!-- Grid column -->
    <div class="col-12 col-sm-6 col-md-4">
      <!-- Card -->
      <div class="card profile-card mb-4">
        <!-- Avatar -->
        <div class="avatar z-depth-1-half">
          <img src="{{ url('storage/'.$professional->image) }}" class="rounded-circle" alt="...">
        </div>
        <div class="card-body card-equipe pt-0 mt-0">
          <!-- Name -->
          <h3 class="mb-3 font-weight-bold"><strong>{{ $professional->name }}</strong></h3>
          <h6 class="font-weight-bold mb-2 info">{{ $professional->formation->title }}</h6>
          <h6 class="font-weight-bold mb-2 info">{{ $professional->profiles[0]->function }}</h6>
          <h6 class="font-weight-bold mb-2 info">{{ $professional->researches[0]->title }}</h6>
          <a class="info" href="mailto:{{ $professional->contact->email }}">{{ $professional->contact->email }}</a><br>
          <a class="btn btn-equipe btn-rounded" href="{{ $professional->lattes }}" target="_blank"> Lattes</a>
        </div>
      </div>
      <!-- Card -->
    </div>
    <!-- Grid column -->
    @endforeach
  </div>
  <!-- Grid row -->
</section>
@endsection