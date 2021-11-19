@extends('site.layouts.template')

@section('title', 'Notícia')

@section('page', 'noticias')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12">
    <!-- Title -->
    <h1 class="mt-4">{{ $news->title }}</h1>

    <!-- Author -->
    <p class="lead">
      Por
      <a href="#">{{ $news->user->name }}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Postado em {{ $news->created_at->format('d/m/Y H:i:s') }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="{{ url('storage/'.$news->image) }}" alt="">

    <hr>

    <!-- Post Content -->
    <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p> -->

    <p>{!! $news->description !!}</p>

    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p> -->

    <!-- <blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in
      <cite title="Source Title">Source Title</cite>
    </footer>
  </blockquote>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p> -->

    <hr>
    <a href="{{ route('pages.noticias') }}" class="float-right mb-4">
      <i class="fas fa-chevron-left"></i> voltar
    </a>
  </div>
</div>
@endsection