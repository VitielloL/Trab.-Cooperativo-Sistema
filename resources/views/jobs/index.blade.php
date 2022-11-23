@extends('template.nav')

@section("conteudo")
<div class="pt-5 pl-3 pr-3">
    <div class="d-flex justify-content-between mb-4">
        <h2 class="fst-italic fw-bold">Lista de Jobs</h2>
        <div class="pr-5">
            <a href='{{route('jobs.create')}}' class='btn btn-success' style="height:40px;"><i class="fas fa-plus mr-1"></i> Cadastrar</a>
        </div>
    </div>
    <form action='{{route('jobs.search')}}' method="GET">
        <div class="input-group">
            <input type="text" name="titulo" class="form-control rounded mr-2" placeholder="Busque pelo titulo" aria-label="Search" aria-describedby="search-addon" />
            <input type="text" name="descricao" class="form-control rounded" placeholder="Busque pela descrição" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-success">
                Pesquisar <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
    @if (!empty($jobsEntity))
    <table class="table table-light table-striped mt-4">
        <thead class="table-warning">
            <tr>
                <td>Título</td>
                <td>Função</td>
                <td>Descrição</td>
                <td>Valor</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            @foreach ( $jobsEntity as $job )
                @php
                    $linkReadMore = url('/job/showMore/' . $job->id);
                    $linkEditItem = url ('/job/edit/' . $job->id);
                @endphp
                <tr>
                    <td style="vertical-align:middle">{{$job->titulo}}</td>
                    <td style="vertical-align:middle">{{$job->job_type->nome}}</td>
                    <td style="vertical-align:middle">{{$job->descricao}}</td>
                    <td style="vertical-align:middle">{{$job->valor_hora}}</td>
                    <td>
                        <div class="d-flex">
                            <a href={{$linkReadMore}} class="btn btn-info mr-2"><i class="fa fa-eye mr-1 mb-0" aria-hidden="true"></i> Ver Mais</a>
                            @if (auth()->user()->id === $job->user_id)
                                <a href={{$linkEditItem}} class="btn btn-warning mr-2" style="color:white"><i class="fa fa-pen mr-1 mb-0" aria-hidden="true"></i>Editar</a>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endif
</div>
@endsection
