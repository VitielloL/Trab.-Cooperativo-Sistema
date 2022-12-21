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
                <form action="{{route('requestNewPass')}}" method="POST">
                    {{-- deve ser verificado se existe um cadastro com esse email --}}
                    @csrf
                    <div class="mt-3 mb-3 form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email"  required >
                        <label for="email" class="form-label text-secondary">Digite seu email para mudar a senha</label>
                    </div>
                    <button type="submit" class="w-100 mb-1 btn btn-primary btn-lg fst-italic">
                        Enviar
                    </button>
                </form>
                <div class="d-flex justify-content-center align-itens-center mb-3">
                    <a class="text-decoration-none" style="color:rgb(421, 77, 31);" href='{{route('login')}}'><h5>Ir para Login</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
