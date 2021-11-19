@extends('site.layouts.template')

@section('title', 'Notícias')

@section('page', 'noticias')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12">
    <h1 class="my-4 cabecalho">Notícias
      <!-- <small>Secondary Text</small> -->
    </h1>
  </div>
</div>

<div class="row">
  @foreach ($news as $noticia)
  <div class="col-sm-12 col-md-12">
    <!-- Blog Post -->
    <div class="card mb-4">
      <a href="{{ route('pages.noticia_completa', $noticia->id) }}"><img class="card-img-top"
          src="{{ url('storage/'.$noticia->image) }}" alt="Card image cap"></a>
      <div class="card-body">
        <a href="{{ route('pages.noticia_completa', $noticia->id) }}">
          <h2 class="card-title">{{ $noticia->title }}</h2>
        </a>
        <p class="card-text">{!! str_limit(strip_tags($noticia->description), 300) !!}</p>
        <a href="{{ route('pages.noticia_completa', $noticia->id) }}" class="btn btn-primary">Ler mais &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Postado em {{ $noticia->created_at->format('d/m/Y H:i:s') }} por
        <a href="#">{{ $noticia->user->name }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="row">
  <div class="col-sm-12 col-md-12">
    <!-- Pagination -->
    <div class="pagination justify-content-center mb-3">
      {!! $news->links() !!}
    </div>
  </div>
</div>
@endsection