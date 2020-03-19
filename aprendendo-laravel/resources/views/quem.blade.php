@extends('layouts.master')

@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
         
          <div class="carousel-item" data-interval="2000">
            <img src="{{ asset('img/banner-carrossel-2.jpg') }}" class="d-block w-100" alt="...">
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

 
    <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8 p-0">
                    <img class="img-fluid" src="{{ asset('img/foto-sobre_a_loja.jpg') }}" alt="Sala com quadros">
                </div>
                <div class="col-12 col-md-4 p-1 p-md-5 d-flex align-items-center" id="bg-sobre-nos">
                    <div class="d-flex flex-column align-items-left my-5 mx-4">
                        <h1 class="m-0">Nossa <span class="d-md-block">missão</span></h1>
                        <p class="text-justify my-4 my-md-5 cor-texto-padrao">A <b>Unframed </b>está no mercado para levar aos seus clientes o que há de melhor na arte brasileira, sempre com o objetivo de valorizar o investimento de quem se interessa por esse mercado. Temos um acervo diversificado, que conta com obras entre pinturas, desenhos e esculturas.</p> <br>
                        <p>Queremos tornar o mercado de arte acessível a todos, sendo a melhor opção de galeria neste segmento e sempre focando no alto nível de satisfação dos nossos usuários.</p>
                       
                    </div>
                </div>
            </div>
           
    </div>
@endsection