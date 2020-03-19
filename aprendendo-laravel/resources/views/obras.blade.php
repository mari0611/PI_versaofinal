@extends('layouts.master')

@section('content')

    <section class="mt-5 mb-5 container">
        <div class="card-deck mt-5">
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro1.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro2.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro3.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro1.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro2.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro3.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro1.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro2.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
            <div class="card mt-5">
                <img class="card-img-top" src="{{ asset('img/quadro3.png') }}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ route('produto') }}" class="btn btn-dark">Detalhes</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-laranja">
        <div class="row">
            <div class="col-12 p-0">
                <form class="d-flex flex-column align-items-center my-5 mx-4 form-padrao" method="POST" action="#">
                    <button type="button" class="mt-2 mt-md-0 btn btn-padrao">Veja mais opções<i class="fa fa-arrow-right"></i></button>
                </form>
            </div>
        </div>  
    </section>
    
@endsection