@extends('site.layouts.template')

@section('title', 'Pesquisas')

@section('page', 'pesquisas')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12">
    <h1 class="my-4 cabecalho">Pesquisas
      <!-- <small>Secondary Text</small> -->
    </h1>
  </div>
</div>

<div class="row">
  @foreach ($researches as $research)
  <div class="col-sm-12 col-md-12">
    <div class="card mb-4">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="{{ url('storage/'.$research->image) }}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $research->title }}</h5>
            <p class="card-text text-justify">{!! str_limit(strip_tags($research->description), 300) !!}</p>
            <p>
              @foreach ($research->professionals as $professional)
              <img class="publication-img" src="{{ url('storage/'.$professional->image) }}" alt="pesquisador"
                class="rounded-circle">
              <a class="publication-link"
                href="{{ $professional->lattes }}"><strong>{{ $professional->name }}</strong></a>
              @endforeach
            </p>
            <a href="{{ route('pages.visualizar_pesquisa', $research->id) }}" class="btn btn-primary">Ler mais
              &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="pagination justify-content-center mb-3">
      {!! $researches->links() !!}
    </div>
  </div>
</div>
@endsection