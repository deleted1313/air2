@extends('layouts.master')

@section('content')

<section class="">

  <div class="container" style="background: #e8e8e8;">
    <div class="row">
      <div class="pull_last_even right">
        
        <form class="search_form cuk" action="/search" method="POST">
          {{ csrf_field() }}
          <input class="search_inp cuk1" type="text" placeholder="Поиск по сайту" name="search">
          <button class="search_btn cuk2" type="submit"><i class="fa fa-2x fa-search" aria-hidden="true"></i>
          </button>
        </form>
        
        <div class="col l12 s12 m12">
          <a href="#"><i class="fa  fa-vk cuk4" aria-hidden="true"></i></a>
          <a href="#"><i class="fa  fa-facebook cuk5" aria-hidden="true"></i></a>
          <a href="#"><i class="fa  fa-youtube cuk6" aria-hidden="true">
      </i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container" style="    padding-top: 90px;
      padding-bottom: 90px;">
    <div class="row">
              @foreach ($event as $events)

  <div class="col l3 m12 s12 fara">
       <a href="/mer{{ $events->id }}"> 
       <li class="portfolio-item_1">
          <img src="storage/{{ $events->image }}" class="img-responsive jgajjglsajgl">
          <figcaption class="mask_1">
            <p class="ev1">{{ $events->title }}</p>
            <p class="ev2">{{ $events->minibody }}</p>
            <p class="nijniy_flex">{{ $events->date }}</p>
            <div class="top_flex_anm_2">
              <a href="/mer{{ $events->id }}" class="waves-effect waves-light btn pull_btn_1 class{{ $events->formaregi }}">УЧАСТВОВАТЬ</a>
            </div>
          </figcaption>

        </li>
        </a>
      </div>
      @endforeach
      
      
      <!--<div class="col l3 m12 s12 fara">-->
      <!--  <li class="portfolio-item_1">-->
      <!--    <img src="assets/img/p2.png" class="img-responsive">-->
      <!--    <figcaption class="mask_1">-->
      <!--      <p class="ev1">Международная-->
      <!--        <br> научно-практическая-->
      <!--        <br> конференция-->
      <!--      </p>-->
      <!--      <p class="ev2">«Развитие образовательной-->
      <!--        <br> робототехники-->
      <!--        <br> и IT-образования»</p>-->
      <!--      <p class="nijniy_flex">26 мая</p>-->
      <!--      <div class="top_flex_anm_2">-->
      <!--        <a href="oneevents.html" class="waves-effect waves-light btn pull_btn_1">УЧАСТВОВАТЬ</a>-->
      <!--      </div>-->
      <!--    </figcaption>-->
      <!--  </li>-->
      <!--</div>-->
      <!--<div class="col l3 m12 s12 fara">-->
      <!--  <li class="portfolio-item_1">-->
      <!--    <img src="assets/img/p3.png" class="img-responsive">-->
      <!--    <figcaption class="mask_1">-->
      <!--      <p class="ev1">Открытый урок-->
      <!--        <br> по робототехнике </p>-->
      <!--      <p class="ev2">в рамках программы «Ресурсный центр инновационно-патриотического воспитания и образования» </p>-->
      <!--      <p class="nijniy_flex">27 мая</p>-->
      <!--      <div class="top_flex_anm_2">-->
      <!--        <a href="oneevents.html" class="waves-effect waves-light btn pull_btn_1">УЧАСТВОВАТЬ</a>-->
      <!--      </div>-->
      <!--    </figcaption>-->
      <!--  </li>-->
      <!--</div>-->
      <!--<div class="col l3 m12 s12 fara">-->
      <!--  <li class="portfolio-item_1">-->
      <!--    <img src="assets/img/p4.png" class="img-responsive">-->
      <!--    <figcaption class="mask_1">-->
      <!--      <p class="ev1">Стартап-Хакатон Южного Федерального округа-->
      <!--      </p>-->
      <!--      <p class="ev2">в Ростове-на-Дону. Пройди путь от идеи до бизнес-модели</p>-->
      <!--      <p class="nijniy_flex">29-31 Мая</p>-->
      <!--      <div class="top_flex_anm_2">-->
      <!--        <a href="oneevents.html" class="waves-effect waves-light btn pull_btn_1">УЧАСТВОВАТЬ</a>-->
      <!--      </div>-->
      <!--    </figcaption>-->
      <!--  </li>-->
      <!--</div>-->
    </div>
  </div>
</section>

@endsection
