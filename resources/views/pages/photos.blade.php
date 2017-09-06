@extends('layouts.master')

@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12">
        <h2 class="mero-text">ГАЛЛЕРЕЯ</h2>
      </div>
      
      @if(!empty($data) && $data->count())

 @foreach ($data as $photo)
      <div class="col l12 s12 m12">
        <a href="/gall{{ $photo->id }}"><h2 class="mero-text666">{{ $photo->title }}</h2></a>
        <?php $count = 0; ?>

        @foreach (json_decode($photo->images, true) as $image)
        <?php if($count == 4) break; ?>
                <div class="col l3 s12 m12">
                  
                   
   

              <img src="{{ URL::to('/storage/'.$image)}}"
              class="materialboxed jhytfgtr responsive-img pubg" alt="--">

              </div>
               <?php $count++; ?>
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

@endforeach
@else
		    
		        There are no data.
		    
		@endif
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
       <div class="center"> {!! $data->render() !!}</div>

  </div>
</section>

@endsection
