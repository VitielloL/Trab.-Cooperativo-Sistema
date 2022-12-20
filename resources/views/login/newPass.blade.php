@extends('template.login')

@section('conteudo')
<div class="login-center">
    <div class="container">
        <div class="justify-content-center row" >
            <div class="mb-5 col-md-5 col-xl-4 card" style=" box-shadow: 1px 5px 30px rgb(185, 77, 31);">
                <h2 class="text-center fst-italic">
                    {{-- <img class="mt-2 mb-3 img-thumbnail" alt="Logo" src={{asset("storage/logo.jpg")}}> --}}
                    <br/>
                    <span style="color:rgb(421, 77, 31); text-shadow: 1px 5px 30px rgb(185, 77, 31);"><b><i>Job Free</i></b></span>
                </h2>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3 form-floating">
                        <input type="password" class="form-control" id="pass1" name="password" placeholder="Digite sua senha" required>
                        <label for="password" class="form-label text-secondary">Digite sua senha</label>
                    </div>

                    <div class="mt-3 mb-3 form-floating">
                        <input type="password" class="form-control" id="pass2" name="password" placeholder="Repita a Senha" required>
                        <label for="username" class="form-label text-secondary">Repita sua senha</label>
                    </div>
                    <button type="submit" id="register" href='{{route('login')}}' class="w-100 mb-1 btn btn-primary btn-lg fst-italic">
                        Trocar senha
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@vite(['resources/js/register.js'])
