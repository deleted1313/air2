@extends('layouts.master')

@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12">
      </div>
      <div class="col l12 s12 m12">
        <h2 class="mero-text666">{{ $solo->title }}</h2>
      
        @foreach(json_decode($solo->images, true) as $image)
                <div class="col l3 s12 m12">

              <div class="">
                <img src="{{ URL::to('/storage/'.$image)}}"
              class="materialboxed jhytfgtr responsive-img pubg" alt="--">
              </div>
              </div>
          @endforeach
        <!--<div class="col l3 s12 m12">-->
        <!--  <img class="materialboxed jhytfgtr responsive-img" src="assets/img/head.png">-->

        <!--</div>-->

        <!--<div class="col l3 s12 m12">-->
        <!--  <img class="materialboxed jhytfgtr responsive-img" src="assets/img/head.png">-->

        <!--</div>-->

        <!--<div class="col l3 s12 m12">-->
        <!--  <img class="materialboxed jhytfgtr responsive-img" src="assets/img/head.png">-->

        <!--</div>-->

      </div>

      <!--<div class="col l12 s12 m12">-->
      <!--  <a href="vsefoto.html"><h2 class="mero-text666">Какое то событие 1</h2></a>-->
      <!--  <div class="col l3 s12 m12">-->
      <!--    <img class="materialboxed jhytfgtr responsive-img" src="assets/img/head.png">-->

      <!--  </div>-->

      <!--  <div class="col l3 s12 m12">-->
      <!--    <img class="materialboxed jhytfgtr responsive-img" src="assets/img/head.png">-->

      <!--  </div>-->

      <!--  <div class="col l3 s12 m12">-->
      <!--    <img class="materialboxed jhytfgtr responsive-img" src="assets/img/head.png">-->

      <!--  </div>-->

      <!--  <div class="col l3 s12 m12">-->
      <!--    <img class="materialboxed jhytfgtr responsive-img" src="assets/img/head.png">-->

      <!--  </div>-->

      <!--</div>-->



    </div>
  </div>
</section>

@endsection
