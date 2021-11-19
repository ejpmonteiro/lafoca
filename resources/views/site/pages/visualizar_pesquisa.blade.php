@extends('site.layouts.template')

@section('title', 'Artigos')

@section('page', 'pesquisas')

@section('content')
<h1 class="my-4 cabecalho">Pesquisa
  <!-- <small>Secondary Text</small> -->
</h1>
<div class="row">
  @foreach ($research->professionals as $professional)
  <div class="col-md-6">
    <div class="card mb-4">
      <div class="card-body">
        <div class="container-img">
          <img class="publication-img" src="{{ url('storage/'.$professional->image) }}" alt="pesquisador"
            class="rounded-circle">
        </div>
        <div class="container-link">
          <a href="{{ $professional->lattes }}"><strong>{{ $professional->name }}</strong></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="card mb-4">
  <div class="card-header">
    Descrição
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">{{ $research->title }}</h5>
    <p class="card-text text-justify">{!! ($research->description) !!}</p>
  </div>
</div>
<a href="{{ route('pages.pesquisas') }}" class="float-right mb-4">
  <i class="fas fa-chevron-left"></i> voltar
</a>
@endsection