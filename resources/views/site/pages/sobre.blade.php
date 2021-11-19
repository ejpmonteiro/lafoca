@extends('site.layouts.template2')

@section('title', 'Sobre')

@section('page', 'sobre')

@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1 class="my-4 cabecalho">Sobre
      <small></small>
    </h1>
  </div>
</div>
<div class="row mb-4">
  <div class="col-sm-12 col-md-12">
    {{-- <div class="row">
      <div class="col-md-8">
        <p class="text-justify">
          O principal objetivo deste Laboratório de Pesquisa é a definição e disponibilização de um portal de
          abordagens de ensino focadas no aluno. Este portal pretende fornecer a professores e alunos recomendações,
          material de apoio e estratégias de ensino.
          Este grupo de pesquisa assume relevância dada a carência de alunos qualificados para atuarem nas diversas
          áreas de conhecimento (multidisciplinar). Neste sentido, busca-se atender às demandas do mercado por
          profissionais competentes em suas atividades. Os pesquisadores deste grupo acreditam que a partir da
          aplicação de abordagens e técnicas de ensino, pode-se motivar e tornar os alunos o centro do processo de
          aprendizagem.
        </p>
      </div>
      <div class="col-md-4">
        <div class="my-2">
          <img src="{{ url('storage/img/reuniao.jpg') }}" alt="Lafoca">
  </div>
</div>
</div> --}}
<div class="container-sobre">
  <div class="grid">
    <div class="text-sobre">
      <p class="text-justify">
        O principal objetivo deste Laboratório de Pesquisa é a definição e disponibilização de um portal de
        abordagens de ensino focadas no aluno. Este portal pretende fornecer a professores e alunos recomendações,
        material de apoio e estratégias de ensino.
        Este grupo de pesquisa assume relevância dada a carência de alunos qualificados para atuarem nas diversas
        áreas de conhecimento (multidisciplinar). Neste sentido, busca-se atender às demandas do mercado por
        profissionais competentes em suas atividades. Os pesquisadores deste grupo acreditam que a partir da
        aplicação de abordagens e técnicas de ensino, pode-se motivar e tornar os alunos o centro do processo de
        aprendizagem.
      </p>
    </div>
    <div class="image-sobre img-responsive d-none d-sm-block"
      style="background-image: url('{{ url('storage/img/sobre1.jpg') }}')"></div>
    <div class="image-sobre img-responsive d-none d-sm-block"
      style="background-image: url('{{ url('storage/img/sobre2.jpg') }}')"></div>
    <div class="text-sobre">
      <p class="text-justify">
        O principal objetivo deste Laboratório de Pesquisa é a definição e disponibilização de um portal de
        abordagens de ensino focadas no aluno. Este portal pretende fornecer a professores e alunos recomendações,
        material de apoio e estratégias de ensino.
        Este grupo de pesquisa assume relevância dada a carência de alunos qualificados para atuarem nas diversas
        áreas de conhecimento (multidisciplinar). Neste sentido, busca-se atender às demandas do mercado por
        profissionais competentes em suas atividades. Os pesquisadores deste grupo acreditam que a partir da
        aplicação de abordagens e técnicas de ensino, pode-se motivar e tornar os alunos o centro do processo de
        aprendizagem.
      </p>
    </div>
  </div>
  {{-- <div style="width: 59%; margin-right: 2%;">
        <p class="text-justify">
          O principal objetivo deste Laboratório de Pesquisa é a definição e disponibilização de um portal de
          abordagens de ensino focadas no aluno. Este portal pretende fornecer a professores e alunos recomendações,
          material de apoio e estratégias de ensino.
          Este grupo de pesquisa assume relevância dada a carência de alunos qualificados para atuarem nas diversas
          áreas de conhecimento (multidisciplinar). Neste sentido, busca-se atender às demandas do mercado por
          profissionais competentes em suas atividades. Os pesquisadores deste grupo acreditam que a partir da
          aplicação de abordagens e técnicas de ensino, pode-se motivar e tornar os alunos o centro do processo de
          aprendizagem.
        </p>
      </div>
      <div style="width: 49%; ">
        <img src="{{ url('storage/img/reuniao.jpg') }}" alt="Lafoca">
</div> --}}
</div>
{{-- <div class="row">
  <div class="col-md-4">
    <div class="my-2 hidden-xs">
      <img src="{{ url('storage/img/reuniao.jpg') }}" alt="Lafoca">
</div>
</div>
<div class="col-md-8">
  <p class="text-justify">
    O principal objetivo deste Laboratório de Pesquisa é a definição e disponibilização de um portal de
    abordagens de ensino focadas no aluno. Este portal pretende fornecer a professores e alunos recomendações,
    material de apoio e estratégias de ensino.
    Este grupo de pesquisa assume relevância dada a carência de alunos qualificados para atuarem nas diversas
    áreas de conhecimento (multidisciplinar). Neste sentido, busca-se atender às demandas do mercado por
    profissionais competentes em suas atividades. Os pesquisadores deste grupo acreditam que a partir da
    aplicação de abordagens e técnicas de ensino, pode-se motivar e tornar os alunos o centro do processo de
    aprendizagem.
  </p>
</div>
</div> --}}
</div>
</div>
@endsection