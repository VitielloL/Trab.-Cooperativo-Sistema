@extends('template.nav')

@section("conteudo")
<div class="pt-2 pl-3 pr-3">
    @if (!empty($jobEntity))
        <h2 class="fw-bold fst-italic" style="margin-bottom:15px;">{{$jobEntity->titulo}}</h2>
        <p class="text-center table-warning fw-bold fst-italic">Dados do Job</p>
        <div class="form-group row">
            <div class="col-md-5">
                <label class="form-label" for="titulo">Titulo: </label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{$jobEntity->titulo}}" disabled>
            </div>
            <div class="col-md-2">
                <label class="form-label" for="job_type_id">Tipo de Job:</label>
                <input type="text" class="form-control" id="job_type_id" name="job_type_id" value="{{$jobEntity->job_type->nome}}" disabled>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="descricao">Descrição: </label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{$jobEntity->descricao}}" disabled>
            </div>
            <div class="col-md-1">
                <label class="form-label" for="valor">Valor hora:</label>
                <input type="text" class="form-control" id="valor" name="valor_hora" value="{{$jobEntity->valor_hora}}" disabled>
            </div>
        </div>
    @endif

    @if (!empty($jobEntity->user->profile))
        <p class="text-center table-warning fw-bold fst-italic mt-5">Dados do perfil do usuário que disponibiliza o serviço</p>
        <div class="form-group row">
            <div class="d-flex justify-content-center">
                <img  class="img-profile" src="
                {{ $jobEntity
                    ? $jobEntity->user->profile->foto
                        ? url('public/image/profile/'. $jobEntity->user->profile->foto)
                        : asset("storage/profile.jpg")
                    : asset("storage/profile.jpg")
                }}" alt="Imagem de capa do card
                ">
            </div>
            <div class="col-md-3 mt-5">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->name}}" disabled>
            </div>
            <div class="col-md-3 mt-5">
                <label class="form-label">Profissão:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->profissao}}" disabled>
            </div>
            <div class="col-md-3 mt-5">
                <label class="form-label">Github:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->github}}" disabled>
            </div>
            <div class="col-md-3 mt-5">
                <label class="form-label">Linkedin:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->linkedin}}" disabled>
            </div>
            <div class="col-md-3 mt-2">
                <label class="form-label">Instagram:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->instagram}}" disabled>
            </div>
            <div class="col-md-3 mt-2">
                <label class="form-label">Site:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->site}}" disabled>
            </div>
            <div class="col-md-3 mt-2">
                <label class="form-label">Estado:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->estado}}" disabled>
            </div>
            <div class="col-md-3 mt-2">
                <label class="form-label">Cidade:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->cidade}}" disabled>
            </div>
            <div class="col-md-3 mt-2">
                <label class="form-label">Celular:</label>
                <input type="text" class="form-control" value="{{$jobEntity->user->profile->celular}}" disabled>
            </div>
        </div>
    @endif
    <div class="text-left">
        <a href="{{route('jobs')}}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection
