@extends('layouts.master')

@section('content')

<div class="container-fluid">
  <div class="row">

  <div class="col-12 col-md-6 mt-5">

  <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/quadro2.png') }}"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/quadro1.png') }}"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/quadro3.png') }}"  alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  <div class="mini">
  <div class="container mt-2">
   
    <div class="flex">
      <div class="box1">
       <a href=""> <img src="{{ asset('img/quadro3.png') }}" width="120" height="105" alt="" /></a>
       
      </div>
      <div class="box1">
        <a href=""><img src="{{ asset('img/quadro2.png') }}" alt="" /></a>
      
      </div>
      <div class="box1">
        <a href=""><img src="{{ asset('img/quadro1.png') }}" alt="" /></a> 
        

      </div>
      <div class="box1">
        <a href=""><img src="{{ asset('img/quadro3.png') }}" alt="" /></a> 
        

      </div>
     
</div>

  </div>

    </div>
</div>


  
  
  </div>

  <div class="col-12 col-md-6 mt-5">
    <div class="title mt-5">
    <span style="width:40%">
    Obra: La Japonaise au bain.
    </span>
    <span>Artista: James Tissot</span>
    <span>
    R$ XX,XXX.XX
    </span>

  </div>

  <br>
  <div class="sup">
    <p><i>"No quadro de James Tissot, La Japonaise au bain, uma menina está nua, mal coberta por um quimono bordado, solto sobre os obros, de pé no umbral de uma sala japonesa."</i></p>

  </div>
  <div class="detalhes">
   Detalhes técnicos: 
    <br>
    Descrição feita por Edmund de Waal, no livro A Lebre com Olhos de Âmbar.Rio de Janeiro: Intrínseca, 2011. P. 62</p>
  </div>
  
  <br>
  <button class="btn btn-dark aside mt-5">COMPRAR<i class="material-icons"  >add_shopping_cart</i></button>
  </div>
  
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="ter">
    <div class="row">
      <div class="col-12 col-md-4">
      

       <img src="{{ asset('img/foto-sobre_a_loja.jpg') }}" width="380" height="300"alt="">
      </div>

      <div class="col-12 col-md-8">

      <div class="sobre">

        <h2>Sobre o Artista e a obra</h2>
        <span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ab vero, dolor distinctio fugit iste perferendis, eius repudiandae, modi sunt necessitatibus optio explicabo voluptatum. Harum ea quam quisquam possimus culpa?
        
        </span>
        Lorem ipsum dolor sit amet consectetur adim laudantium et, molestias quas autem consequatur reprehenderit.
      
      </div>
     

      </div>
    </div>
        
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="titulo">

  <h3>  Produtos relacionados</h3>
 
  
  
  </div>
 
</div>


<div class="relacionados">
  <div class="container">
   
    <div class="flex">
      <div class="box">
       <a href=""> <img src="{{ asset('img/quadro3.png') }}" alt="" /></a>
        <p>NOME DO PRODUTO</p>
        <span>ARTISTA</span>

      </div>
      <div class="box">
        <a href=""><img src="{{ asset('img/quadro2.png') }}" alt="" /></a>
        <p>NOME DO PRODUTO</p>
        <span>ARTISTA</span>

      </div>
      <div class="box">
        <a href=""><img src="{{ asset('img/quadro1.png') }}" alt="" /></a> 
        <p>NOME DO PRODUTO</p>
        <span>ARTISTA</span>

      </div>
     
</div>

  </div>

    </div>
<div class="container-fluid">


@endsection



<!-- 
</div>

  </body>
</html> -->
