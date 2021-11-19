@extends('site.layouts.template')

@section('title', 'Artigos')

@section('page', 'resultados')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12">
    <h1 class="my-4 cabecalho">Publicações
      <!-- <small>Secondary Text</small> -->
    </h1>
  </div>
</div>

<div class="row">
  @foreach ($publications as $publication)
  <div class="col-sm-12 col-md-12">
    <div class="card mb-4">
      <div class="card-body">
        <div class="local mb-5">
          <div class="box-name">
            {{ $publication->local }}
          </div>
        </div>
        <h5 class="card-title text-justify">{!! strip_tags($publication->title) !!}</h5>
        <p>
          @foreach ($publication->professionals as $professional)
          <img class="publication-img" src="{{ url('storage/'.$professional->image) }}" alt="pesquisador"
            class="rounded-circle">
          <a class="publication-link" href="{{ $professional->lattes }}"><strong>{{ $professional->name }}</strong></a>
          @endforeach
        </p>
        <a href="{{ route('pages.visualizar_artigo', $publication->id) }}" class="btn btn-primary">Ler Artigo &rarr;</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="row">
  <div class="col-sm-12 col-md-12 ">
    <div class="pagination justify-content-center mb-4">
      {!! $publications->links() !!}
    </div>
  </div>
</div>
@endsection