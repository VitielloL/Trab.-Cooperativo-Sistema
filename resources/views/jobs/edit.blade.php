@extends('template.nav')

@section("conteudo")
<div class="pt-5 pr-3 pl-3">
    <h2 class="fw-bold fst-italic" style="margin-bottom:15px;"> Editar Job </h2>
    <form action='{{route('jobs.update', ['id'=> 1])}}' method="POST">
        @csrf
        <p class="text-center table-warning fw-bold fst-italic">Dados do Job</p>

        <div class="form-group row">
            <div class="col-md-5">
                <label class="form-label" for="titulo">Titulo: </label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{$jobsEntity->titulo}}">
            </div>
            <div class="col-md-1">
                <label class="form-label" for="job_type_id">Tipo de Job:</label>
                <input type="number" class="form-control" id="job_type_id" name="job_type_id" value="{{$jobsEntity->job_type_id}}">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="descricao">Descrição: </label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{$jobsEntity->descricao}}">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="valor">Valor hora:</label>
                <input type="text" class="form-control" id="valor" name="valor_hora" value="{{$jobsEntity->valor_hora}}">
            </div>
        </div>

        <div class="mt-4 text-left">
            <button type="submit" class="btn btn-success text-white">Salvar</button>
            <a href="{{route('jobs')}}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</div>
@endsection
