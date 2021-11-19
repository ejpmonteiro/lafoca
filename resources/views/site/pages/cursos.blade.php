@extends('site.layouts.template')

@section('title', 'Minicursos')

@section('page', 'resultados')

@section('content')
<h1 class="my-4 cabecalho">Minicursos
  <!-- <small>Secondary Text</small> -->
</h1>
<div class="row">
  @foreach ($courses as $course)
  <div class="col-sm-12 col-md-6">
    <div class="card mb-4">
      <img class="card-img-top" src="{{ url('storage/'.$course->image) }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $course->title }}</h5>
        <p class="card-text text-justify">{!! str_limit(strip_tags($course->description), 120) !!}</p>
        <a href="{{ route('pages.visualizar_curso', $course->id) }}" class="btn btn-primary">Ler Mais &rarr;</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="pagination justify-content-center mb-4">
      {!! $courses->links() !!}
    </div>
  </div>
</div>
@endsection