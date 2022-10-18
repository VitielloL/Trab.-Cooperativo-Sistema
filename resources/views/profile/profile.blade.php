@extends('template.nav')

@section("conteudo")
<form action="{{ $profileEntity ? route('profile.update') : route('profile.store') }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-2">
            <div class="mt-3 mb-3 card" style="width: 16rem;">
                <img class="card-img-top" src="
                    {{ $profileEntity
                        ? $profileEntity->foto
                            ?: asset("storage/profile.jpg")
                        : asset("storage/profile.jpg")
                    }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Foto Perfil</h5>
                </div>
                <input type="text" class="form-control" id="foto" name="foto" value="https://upload.wikimedia.org/wikipedia/commons/a/a8/Bill_Gates_2017_%28cropped%29.jpg" hidden>
            </div>
        </div>
        <div class="form-group col-4">
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="github" name="github" placeholder="Digite seu github" value="{{ $profileEntity ? $profileEntity->github : '' }}">
                <label for="github" class="form-label text-secondary">Digite seu github</label>
            </div>
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Digite seu linkedin" value="{{ $profileEntity ? $profileEntity->linkedin : '' }}">
                <label for="linkedin" class="form-label text-secondary">Digite seu linkedin</label>
            </div>
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Digite seu instagram" value="{{ $profileEntity ? $profileEntity->instagram : '' }}">
                <label for="instagram" class="form-label text-secondary">Digite seu instagram</label>
            </div>
        </div>

        <div class="form-group col-4">
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu cep" value="{{ $profileEntity ? $profileEntity->cep : '' }}" required>
                <label for="cep" class="form-label text-secondary">Digite seu cep</label>
            </div>
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite seu estado" value="{{ $profileEntity ? $profileEntity->estado : '' }}" required>
                <label for="estado" class="form-label text-secondary">Digite seu estado</label>
            </div>
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite seu cidade" value="{{ $profileEntity ? $profileEntity->cidade : '' }}" required>
                <label for="cidade" class="form-label text-secondary">Digite seu cidade</label>
            </div>
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="logadouro" name="logadouro" placeholder="Digite seu logadouro" value="{{ $profileEntity ? $profileEntity->logadouro : '' }}" required>
                <label for="logadouro" class="form-label text-secondary">Digite seu logadouro</label>
            </div>
            <div class="mt-3 mb-3 form-floating">
                <input type="number" class="form-control" id="numero" name="numero" placeholder="Digite seu numero" value="{{ $profileEntity ? $profileEntity->numero : '' }}" required>
                <label for="numero" class="form-label text-secondary">Digite seu numero</label>
            </div>
            <div class="mt-3 mb-3 form-floating">
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite seu complemento" value="{{ $profileEntity ? $profileEntity->complemento : '' }}">
                <label for="complemento" class="form-label text-secondary">Digite seu complemento</label>
            </div>
        </div>
    </div>
    <button type="submit" class="w-100 mb-1 btn btn-primary btn-lg fst-italic">
        {{ $profileEntity ? 'Atualizar Dados' : 'Cadastrar Dados' }}
    </button>
</form>
@endsection
