@extends('layouts.master')

@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="{{ asset('img/banner-carrossel-1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="{{ asset('img/banner-carrossel-2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/banner-carrossel-3.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <section class="mt-5 mb-5 container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/quadro1.png') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Artista</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/quadro2.png') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Artista</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/quadro3.png') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Artista</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-laranja">
        <div class="row">
            <div class="col-12 p-0">
                <form class="d-flex flex-column align-items-center my-5 mx-4 form-padrao" method="POST" action="#">
                    <button type="button" class="mt-2 mt-md-0 btn btn-padrao">ver todos<i class="fa fa-arrow-right"></i></button>
                </form>
            </div>
        </div>  
    </section>
    <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 p-0">
                    <img class="img-fluid" src="{{ asset('img/foto-sobre_a_loja.jpg') }}" alt="Sala com quadros">
                </div>
                <div class="col-12 col-md-4 p-1 p-md-5 d-flex align-items-center" id="bg-sobre-nos">
                    <div class="d-flex flex-column align-items-left my-5 mx-4">
                        <h1 class="m-0">Sobre <span class="d-md-block">a loja</span></h1>
                        <p class="text-justify my-4 my-md-5 cor-texto-padrao">Queremos oferecer à você, apreciador de arte, o que há de melhor no mercado brasileiro, através de um acervo com obras de qualidade e com garantia de autenticidade, sempre oferecendo as melhores perspectivas de investimento.</p>
                        <button type="button" class="align-self-center align-self-md-start btn btn-padrao">saiba mais<i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-1 p-md-0">
                    <form class="d-flex flex-column align-items-center my-5 mx-4 form-padrao" method="POST" action="#">
                        <div class="cor-texto-padrao text-justify mb-4 mb-md-5">
                            <h1 class="m-0">Participe</h1>
                            <p class="my-4">O interessado em vender obras de arte deve enviar (por email, inicialmente) fotos digitais da frente, do verso e da assinatura da peça, incluindo as seguintes informações: nome do artista, dimensões (altura e largura), técnica (óleo sobre tela, acrílico, etc.) e ano, além de outras características que achar necessário para que seja feita avaliação correta.</p>
                            <input class="input-padrao" type="email" name="email_participe" placeholder="email">
                        </div>
                        <button type="button" class="mt-2 mt-md-0 btn btn-padrao">inscreva-se<i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
    </div>
@endsection