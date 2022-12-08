@extends('template.nav')

@section("conteudo")
<form action="{{ $profileEntity ? route('profile.update') : route('profile.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-center">
        <img  class="img-profile" src="
        {{ $profileEntity
            ? $profileEntity->foto
                ? url('public/image/profile/'. $profileEntity->foto)
                : asset("storage/profile.jpg")
            : asset("storage/profile.jpg")
        }}" alt="Imagem de capa do card
        ">
    </div>
    <input type="file" class="form-control mt-3" id="profile" name="profile">
    <div class="form-group row">
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Digite seu cargo atual ou profissão" value="{{ $profileEntity ? $profileEntity->profissao : '' }}">
            <label for="profissao" class="form-label text-secondary">Digite seu cargo ou profissão</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="github" name="github" placeholder="Digite seu github" value="{{ $profileEntity ? $profileEntity->github : '' }}">
            <label for="github" class="form-label text-secondary">Digite seu github</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Digite seu linkedin" value="{{ $profileEntity ? $profileEntity->linkedin : '' }}">
            <label for="linkedin" class="form-label text-secondary">Digite seu linkedin</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Digite seu instagram" value="{{ $profileEntity ? $profileEntity->instagram : '' }}">
            <label for="instagram" class="form-label text-secondary">Digite seu instagram</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="site" name="site" placeholder="Digite seu site" value="{{ $profileEntity ? $profileEntity->site : '' }}">
            <label for="site" class="form-label text-secondary">Digite seu site</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu cep" value="{{ $profileEntity ? $profileEntity->cep : '' }}" required>
            <label for="cep" class="form-label text-secondary">Digite seu cep</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado" value="{{ $profileEntity ? $profileEntity->estado : '' }}" required>
            <label for="estado" class="form-label text-secondary">Digite seu estado</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite seu cidade" value="{{ $profileEntity ? $profileEntity->cidade : '' }}" required>
            <label for="cidade" class="form-label text-secondary">Digite seu cidade</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Digite seu logradouro" value="{{ $profileEntity ? $profileEntity->logradouro : '' }}" required>
            <label for="logradouro" class="form-label text-secondary">Digite seu logradouro</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="number" class="form-control" id="numero" name="numero" placeholder="Digite seu numero" value="{{ $profileEntity ? $profileEntity->numero : '' }}" required>
            <label for="numero" class="form-label text-secondary">Digite seu numero</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite seu complemento" value="{{ $profileEntity ? $profileEntity->complemento : '' }}">
            <label for="complemento" class="form-label text-secondary">Digite seu complemento</label>
        </div>
        <div class="col-md-3 mt-3 mb-3 form-floating">
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite seu complemento" value="{{ $profileEntity ? $profileEntity->celular : '' }}">
            <label for="complemento" class="form-label text-secondary">Digite o numero do seu celular para contato</label>
        </div>
    </div>
    <button type="submit" class="w-100 mb-1 btn btn-primary btn-lg fst-italic">
        {{ $profileEntity ? 'Atualizar Dados' : 'Cadastrar Dados' }}
    </button>
</form>
@endsection
