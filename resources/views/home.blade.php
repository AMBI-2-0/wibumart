@extends('layouts.master')

@section('content')
        <div class="carousel slide" data-ride="carousel">
                
        <div class="carousel-inner">
                <div class="carousel-item active">
                        <img class="d-block w-100" src="https://disk.mediaindonesia.com/files/news/2022/12/30/WhatsApp%20Image%202022-12-22%20at%2017.07.10%20(1).jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                        <img class="d-block w-100" src="https://disk.mediaindonesia.com/files/news/2022/12/30/WhatsApp%20Image%202022-12-22%20at%2017.06.59.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                        <img class="d-block w-100" src="https://disk.mediaindonesia.com/files/news/2022/12/30/WhatsApp%20Image%202022-12-22%20at%2017.06.50.jpg" alt="Third slide">
                </div>
        </div>
                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
<div class="container">
        
        @for ($i = 0; $i < 3; $i++)
                <div class="row">
                        @for ($a = 0; $a < 4; $a++)
                            <div class="col">
                   <div class="card mt-5" style="width: 13rem;">
                        <img class="card-img-top" src="https://foto.kontan.co.id/U9uyqRKY07FwuFwPeYscphOpZbA=/smart/2022/11/04/1057840375p.jpg" alt="Card image cap">
                     <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                   </div>
                </div>
                        @endfor
                </div>      
        @endfor
            
        <h1>{{ $title }}</h1>
        <p>This is the home page for an example Laravel web application.</p>
</div>
@endsection
    