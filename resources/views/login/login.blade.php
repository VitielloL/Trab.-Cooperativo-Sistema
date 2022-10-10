@extends('template.login')

@section("conteudo")
<div class="login-center">
    <div class="container">
        <div class="justify-content-center row" >
            <div class="mb-5 col-md-5 col-xl-4 card" style=" box-shadow: 1px 5px 30px rgb(185, 77, 31);">
                @if ($errors->any())
                    <div class="alert alert-danger mt-1">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('danger'))
                    <div class="alert alert-danger mt-1">
                        {{ session('danger') }}
                    </div>
                @endif

                <h2 class="text-center fst-italic">
                    {{-- <img class="mt-2 mb-3 img-thumbnail" alt="Logo" src={{asset("storage/logo.jpg")}}> --}}
                    <br/>
                    <span style="color:rgb(421, 77, 31); text-shadow: 1px 5px 30px rgb(185, 77, 31);"><b><i>Job Free</i></b></span>
                </h2>

                <form action="{{route('auth.user')}}" method="POST">
                    @csrf

                    <div class="mt-3 mb-3 form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email"  required >
                        <label for="username" class="form-label text-secondary">Digite seu email</label>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                        <label for="password" class="form-label text-secondary">Digite sua senha</label>
                    </div>

                    <button type="submit" class="w-100 mb-1 btn btn-primary btn-lg fst-italic">
                        Entrar
                    </button>
                </form>

                <div class="d-flex justify-content-center align-itens-center mb-3">
                    <a class="text-decoration-none" style="color:rgb(421, 77, 31);" href="{{route('register')}}"><h5><i>Cadastre-se</i></h5></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
