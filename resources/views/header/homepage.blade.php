@extends('layout.master')
@section('content')
    <div class="row">
      <div class="col-2">

        {{--sidebar starts--}}
        <div class="margin-top-70">
           <div class="sidebar">
            <div class="list-group" style="width: 100%">
              <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
              <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
             </div>
           </div>
        </div>

        {{--sidebar ends--}}
      </div>

        <div class="col-10">

            {{--slider starts--}}
              <div class="image">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 height-resize" src="{{asset('images/pic3.jpg')}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 height-resize" src="{{asset('images/pic4.jpg')}}" alt="Second slide">
                      </div>
                      {{--<div class="carousel-item">
                        <img class="d-block w-100 height-resize" src="{{asset('images/pic4.jpg')}}" alt="Third slide">
                      </div>--}}
                    </div>
                </div>
  {{--slider ends--}}

  {{--card starts--}}
             <div class="card">


                <div class="card1 col-md-2">
                           {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item list-group-item-action">Cras justo odio</li>
                          <li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
                          <li class="list-group-item list-group-item-action">Vestibulum at eros</li>
                        </ul>
                      <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                </div>

                 {{--card ends--}}

                 <div class="card2 col-md-2" >
                  {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action">Cras justo odio</li>
                            <li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-action">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                        </div>
                </div>

               </div>

             </div>
           </div>
         </div>

@endsection


