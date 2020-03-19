@extends('layouts.master')

@section('content')
<div class="container mt-5">
        <div class="row">
        <div class="col-4">
             
            <form action="/add" method="POST" >

            @csrf
            {{ method_field('POST') }}

            <div class="form-group mt-5">
            <h2>Crie sua conta</h2><br>
            <h3>É rápido e fácil</h3>
                <label for="nomeInput">Nome</label>
                <input id="nomeInput" name="nome" type="text" class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" />
                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                
            </div>
            <div class="form-group">
                <label for="emailInput">E-mail</label>
                <input id="emailInput" name="email" type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}} " />
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                
            </div>
            <div class="form-group">
                <label for="senhaInput">Senha <br> <small class="text-muted">Mínimo 6 caracteres</small></label>
                <input id="senhaInput" name="senha" type="password" class="form-control{{$errors->has('senha') ? ' is-invalid':''}} " />
                <div class="invalid-feedback">{{ $errors->first('senha') }}</div>
               
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-dark ">Cadastrar</button>
            <a href="/login" type="button" class="btn btn-secondary ">Já tenho cadastro</a>

            <br>
            <br>
            <br>
            

                        
</div>
            </form>
        </div>
        </div>
</div>


@endsection
<!-- </body>
</html> -->