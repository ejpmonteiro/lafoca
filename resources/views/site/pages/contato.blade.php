@extends('site.layouts.template2')

@section('title', 'Contato')

@section('page', 'contato')

@section('content')
<div class="row">
  <div class="col-sm-12 col-md-6 mt-4">
    <h1 style="margin: 0 0 20px 0;" class="cabecalho">Fale Conosco
      <small></small>
    </h1>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    <form method="POST" action="{{ route('contato.faleconosco') }}" class="needs-validation" novalidate>
      {!! csrf_field() !!}

      <div class="row">
        <div class="form-group col-md-12">
          <label for="name">Nome (opicional):</label>
          <input id="name" type="text" name="name" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group col-md-12">
          <label for="email">E-mail:</label>
          <input id="email" type="email" name="email" class="form-control" placeholder="E-mail" required>
          <div class="invalid-tooltip">
            Informe seu E-mail!
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="phone">Telefone (opicional):</label>
          <input id="phone" type="tel" name="phone" class="form-control" data-mask="(00) 00000-0000"
            placeholder="(00) 00000-0000">
        </div>
        <div class="form-group col-md-12">
          <label for="subject">Assunto:</label>
          <input id="subject" type="text" name="subject" class="form-control" placeholder="Assunto" required>
          <div class="invalid-tooltip">
            Informe o assunto!
          </div>
        </div>
        <div class="form-group col-md-12">
          <label for="message">Mensagem:</label>
          <textarea name="message" id="message" class="form-control" required></textarea>
          <div class="invalid-tooltip">
            Escreva a mensagem!
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-contact mb-4">
          <i class="fas fa-paper-plane"></i>
          Enviar
        </button>
      </div>
    </form>
  </div>

  <div class="col-sm-12 col-md-6 mt-4">
    <div class="contact">
      @foreach ($laboratories as $laboratory)
      <h1 class="cabecalho">{{ $laboratory->name }}
        <small></small>
      </h1>
      <P class="andress">{{ $laboratory->andress }}</P>
      <p>
        <div class="phone1">
          <strong>Tel:</strong>
          {{ $laboratory->phone }}
        </div>
        <div>
          <strong class="label">E-mail:</strong>
          <a href="mailto:{{ $laboratory->email }}">{{ $laboratory->email }}</a>
        </div>
        <div>
          <strong class="label">facebook:</strong>
          <a href="https://{{ $laboratory->facebook }}" target="_blank">{{ $laboratory->facebook }}</a>
        </div>
      </p>
      <h2>ligue para nós</h2>
      <div class="phone2">
        {{ $laboratory->phone }}
      </div>
      <div class="mb-4 attendance">Seg á Sex – 09:00AM até 18:00 PM</div>
      @endforeach
    </div>
  </div>
</div>
@endsection