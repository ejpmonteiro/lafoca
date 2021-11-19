@extends('site.layouts.template')

@section('title', 'Artigos')

@section('page', 'result')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12">
    <h1 class="my-4 cabecalho">Publicação
      <small>{{ $publication->local }}</small>
    </h1>
  </div>
</div>
<div class="row">
  @foreach ($publication->professionals as $professional)
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
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="card mb-4">
      <div class="card-header">
        Resumo
      </div>
      <div class="card-body">
        <h5 class="card-title text-center">{{ $publication->title }}</h5>
        <p class="card-text text-justify">{!! strip_tags($publication->abstract) !!}</p>
        <button class="btn btn-primary"
          onClick="exibirPdf('{{ url('storage/'.str_replace('\\', '/', json_decode($publication->article)[0]->download_link)) }}');">
          Artigo Completo &darr;
        </button>
      </div>
    </div>
    <a href="{{ route('pages.artigos') }}" class="float-right">
      <i class="fas fa-chevron-left"></i> voltar
    </a>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="article my-4"></div>
  </div>
</div>
@endsection