@extends('template.nav')

@section("conteudo")
<div class="pt-5 pr-3 pl-3">
    <h2 class="fw-bold fst-italic" style="margin-bottom:15px;"> Novo Job </h2>
    <form action='{{route('jobs.store')}}' method="POST">
        @csrf
        <p class="text-center table-warning fw-bold fst-italic">Dados do Job</p>
        <div class="form-group row">
            <div class="col-md-5">
                <label class="form-label" for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="col-md-1">
                <label class="form-label" for="job_type_id">Tipo de Job:</label>
                <input type="number" class="form-control" id="job_type_id" name="job_type_id">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="valor_hora">Valor_hora</label>
                <input type="text" class="form-control" id="valor_hora" name="valor_hora">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{route('jobs')}}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
