@extends('site.layouts.template2')

@section('title', 'Minicursos')

@section('page', 'result')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12">
    <!-- Title -->
    <h1 class="mt-4">{{ $course->title }}</h1>

    <!-- Author -->
    <p class="lead">
      <strong>Ministrante</strong>
      <div>
        <img class="publication-img" src="{{ url('storage/'.$course->professional->image) }}" alt="pesquisador"
          class="rounded-circle">
        <a class="publication-link"
          href="{{ $course->professional->lattes }}"><strong>{{ $course->professional->name }}</strong></a>
      </div>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><strong>Início: </strong>{{ Carbon\Carbon::parse($course->date_beginning)->format('d/m/Y') }}</p>
    <p><strong>Término: </strong>{{ Carbon\Carbon::parse($course->date_finish)->format('d/m/Y') }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="{{ url('storage/'.$course->image) }}" alt="">

    <hr>

    <!-- Post Content -->

    <p>{!! $course->description !!}</p>

    <hr>
    <a href="{{ route('pages.cursos') }}" class="float-right mb-4">
      <i class="fas fa-chevron-left"></i> voltar
    </a>
  </div>
</div>

@endsection