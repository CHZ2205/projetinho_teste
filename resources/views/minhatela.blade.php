<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.1/dist/full.css" rel="stylesheet" type="text/css" />
    <title>Primeira Tela</title>
</head>
<body>
    <head>
    <nav class="menuFixo">
        <div class="nav-container"> 
        <ul>
            <li class="dropdown">
                <button class="mainmenubtn">QUEM SOMOS?</button>
                <div class="dropdown-child">
                    <a href="#">O Início</a>
                    <a href="#">Visão e Propósito</a>
                    <a href="#">Nossos Pastores</a>
                </div>
            </li>
            <li class="dropdown">
                <button class="mainmenubtn">ENVOLVA-SE</button>
                <div class="dropdown-child">
                    <a href="#">Celebrações</a>
                    <a href="#">Integração</a>
                    <a href="#">Células</a>
                    <a href="#">Plano de Leitura Anual</a>
                    <a href="#">Arquivos Downloads</a>
                    <a href="#">IBP kids</a>
                </div>
            </li>
            <li class="dropdown">
                <button class="mainmenubtn">FALE CONOSCO</button>
                <div class="dropdown-child">
                    <a href="#">Pedidos de Oração</a>
                    <a href="#">Contato</a>
                </div>
            </li>
            <li class="dropdown">
            <button class="mainmenubtn">DOAÇÕES</button>
            </li>
        </ul>
    </div>
    </nav>
    <div class="carousel w-full">
    <div id="slide1" class="carousel-item relative w-full">
      <img src="https://http2.mlstatic.com/D_NQ_629739-MLA71248117977_082023-OO.webp" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide4" class="btn btn-circle">❮</a> 
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div> 
    <div id="slide2" class="carousel-item relative w-full">
      <img src="https://picsum.photos/200/300      " class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1" class="btn btn-circle">❮</a> 
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div> 
</div>

<div class="grid grid-cols-5 gap-5" >
    <div class="card card-compact w-50 bg-base-100 shadow-xl">
        <figure><img src="https://picsum.photos/400/200" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>

       <div class="card card-compact w-50 bg-base-100 shadow-xl">
        <figure><img src="https://picsum.photos/400/201" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>

      <div class="card card-compact w-50 bg-base-100 shadow-xl">
        <figure><img src="https://picsum.photos/400/202" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>

       <div class="card card-compact w-50 bg-base-100 shadow-xl">
        <figure><img src="https://picsum.photos/400/203" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>

       <div class="card card-compact w-50 bg-base-100 shadow-xl">
        <figure><img src="https://picsum.photos/400/204" alt="Shoes" /></figure>
        <div class="card-body">
          <h2 class="card-title">Shoes!</h2>
          <p>If a dog chews shoes whose shoes does he choose?</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
          </div>
        </div>
      </div>
  </div>

<script src="https://cdn.tailwindcss.com"></script>
</body>

    
<head>
</html>