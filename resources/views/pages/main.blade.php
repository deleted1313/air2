@extends('layouts.master')

@section('content')

<section class="project">

  <div class="container">
    <div class="row">



      <div class="col l2 m6 s12 project_1">
        <div class="card pull_card">
          <div class="card-image pull_card_img">
            <img src="assets/img/top_pic_1.png" class="top_pull">
          </div>
          <div class="card-content pull_card_content">
            <p class="pull_text">ВСЕРОССИЙСКАЯ
              <br> ПРОГРАММА
              <br> IT-START</p>
          </div>
          <a href="#modal1" class="waves-effect waves-light btn pull_btn">ПОДРОБНЕЕ</a>
        </div>
        <div id="modal1" class="modal modal1">
          <div class="modal-content modal_con">
            <img src="assets/img/chel_sin.png"></img>
            <h4 class="modal_size">ВСЕРОССИЙСКАЯ <br> ПРОГРАММА <br> IT-START</h4>
            <a href="/itstart" class="waves-effect waves-light btn modal_button">ПОДРОБНЕЕ</a>
            <p class="modal_p_1">Программа поддержки молодых программистов
              <br> и молодежных проектов
              <br> в сфере информационных технологий.</p>
          </div>
        </div>
      </div>

      <div class="col l2 m6 s12 project_1">
        <div class="card pull_card">
          <div class="card-image pull_card_img">
            <img src="assets/img/chel2.png" class="top_pull1">
          </div>
          <div class="card-content pull_card_content">
            <p class="pull_text">КРУЖОК
              <br> робототехники
              <br> ROBO START</p>
          </div>
          <a href="#modal2" class="waves-effect waves-light btn pull_btn">ПОДРОБНЕЕ</a>
        </div>
        <div id="modal2" class="modal modal2">
          <div class="modal-content modal_con">
            <img src="assets/img/chel_sin2.png"></img>
            <h4 class="modal_size">кружок <br>
робототехники<br>
ROBO START</h4>
            <a href="/robostart" class="waves-effect waves-light btn modal_button">ПОДРОБНЕЕ</a>
            <p class="modal_p_1">Программы по развитию образовательной робототехники,мехатроники и научно-технического творчества молодежи</p>
          </div>
        </div>
      </div>
      <div class="col l2 m6 s12 project_1">
        <div class="card pull_card">
          <div class="card-image pull_card_img">
            <img src="assets/img/chel3.png" class="top_pull2">
          </div>
          <div class="card-content pull_card_content">
            <p class="pull_text">Наука
            <br>Публикации <br> Конференции
            </p>
          </div>
          <a href="#modal3" class="waves-effect waves-light btn pull_btn">ПОДРОБНЕЕ</a>
        </div>
        <div id="modal3" class="modal modal3">
          <div class="modal-content modal_con">
            <img src="assets/img/chel_sin3.png"></img>
            <h4 class="modal_size1">Наука
            <br>НИЦ АНО АИР<br>Публикации и конференции<br>Книги и пособия</h4>
            <a href="/publication" class="waves-effect waves-light btn modal_button">ПОДРОБНЕЕ</a>
            <p class="modal_p_1">Публикация результатов научных исследований аспирантов, соискателей и докторантов российских и зарубежных ВУЗов и научных центров.</p>
          </div>

        </div>
      </div>
      <div class="col l2 m6 s12 project_1">
        <div class="card pull_card">
          <div class="card-image pull_card_img">
            <img src="assets/img/chel4.png" class="top_pull3">
          </div>
          <div class="card-content pull_card_content">
            <p class="pull_text3">DIGITAL и
              <br> Дизайн Студия
              <br> AIR CREATIVE
              <br>GROUP.</p>
          </div>
          <a href="#modal4" class="waves-effect waves-light btn pull_btn">ПОДРОБНЕЕ</a>
        </div>
        <div id="modal4" class="modal modal4">
          <div class="modal-content modal_con">
            <img src="assets/img/chel_sin4.png"></img>
            <h4 class="modal_size">DIGITAL и Дизайн <br>
Студия <br>
AIR CREATIVE <br>
GROUP</h4>
            <a href="/creative" class="waves-effect waves-light btn modal_button">ПОДРОБНЕЕ</a>
            <p class="modal_p_1">Эффективные и комплексные бизнес-решения для продвижения бизнеса, рекламного сопровождения мероприятий и т.д.</p>
          </div>

        </div>
      </div>
      <div class="col l2 m6 s12 project_1">
        <div class="card pull_card">
          <div class="card-image pull_card_img">
            <img src="assets/img/chel5.png" class="top_pull4">
          </div>
          <div class="card-content pull_card_content">
            <p class="pull_text">Конструкторы
              <br> образовательной
              <br> робототехники</p>
          </div>
          <a href="#modal5" class="waves-effect waves-light btn pull_btn">ПОДРОБНЕЕ</a>
        </div>
        <div id="modal5" class="modal modal5">
          <div class="modal-content modal_con">
            <img src="assets/img/chel_sin5.png"></img>
            <h4 class="modal_size">Конструкторы<br>
образовательной<br>
робототехники</h4>
            <a href="/constract" class="waves-effect waves-light btn modal_button">ПОДРОБНЕЕ</a>
            <p class="modal_p_1">Продажа интерактивных систем, мультимедийных технологий, образовательной робототехники и обучающих систем.</p>
          </div>

        </div>
      </div>

      <div class="col l2 m6 s12 project_1 luls">
        <div class="card pull_card">
          <div class="card-image pull_card_img">
            <img src="assets/img/chel6.png" class="top_pull5">
          </div>
          <div class="card-content pull_card_content">
            <p class="pull_text">международные
              <br> образовательные
              <br> стажировки</p>
          </div>
          <a href="#modal6" class="waves-effect waves-light btn pull_btn">ПОДРОБНЕЕ</a>
        </div>
        <div id="modal6" class="modal modal6">
          <div class="modal-content modal_con">
            <img src="assets/img/chel_sin6.png"></img>
            <h4 class="modal_size">международные<br>
образовательные<br>
стажировки</h4>
            <a href="/stazir" class="waves-effect waves-light btn modal_button">ПОДРОБНЕЕ</a>
            <p>Получение опыта и знаний от экспертов международного уровня, знакомство с инновационной и бизнес инфраструктурой передовых стран.</p>
          </div>

        </div>
      </div>

      <div class="pull_last">
        
        <!--ФОРМА ПОИСКА-->
        
        
        
        <form class="search_form" action="/search" method="POST">
          {{ csrf_field() }}
          <input class="search_inp" type="text" placeholder="Поиск по сайту" name="search">
          <button class="search_btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
        
        
        <!--КОНЕЦ ФОРМЫ-->
        
        <a href="https://vk.com/aidrussia"><i class="fa  fa-vk" aria-hidden="true" style="    margin-top: 345px;
padding-left: 5px;
font-size: 24px;
padding-bottom: 20px; color:#95969a;"></i></a>
        <a href="https://www.facebook.com/ProgrammaItStart/"><i class="fa  fa-facebook" aria-hidden="true" style="padding-left: 11px;
font-size: 24px;
padding-bottom: 20px; color:#95969a;"></i></a>
        <a href="https://www.instagram.com/airpressa/"><i class="fa fa-instagram" aria-hidden="true" style="padding-left: 9px;
font-size: 24px;
padding-bottom: 20px; color:#95969a;">
</i></a>

      </div>

    </div>

  </div>


</section>

<section class="project_2">
  <div class="row">
    <div class="col s12 m12 l2 offset-l2 max2" style="    padding-top: 180px;">
      <h4 class="h4rel max1">АКТУАЛЬНЫЕ <br>НОВОСТИ</h4>
      <a href="/thenews" class="waves-effect waves-light btn btn_project_2 btnflex h4rel">ВСЕ НОВОСТИ</a>
    </div>
    <div class="col s12 m12 l7 offset-l1">
      <div class="wrap">



        <div class="frame max3" id="basic">
          <ul class="clearfix">
             @foreach ($allnews as $allnew)
            <li class="oliu">
<h3>&raquo;&raquo;</h3>
              <a class="n3" href="/new{{ $allnew->id }}">
                <div class="hyt">
                  <p class="n1">{{ $allnew->date }}</p>
                  <div class="iu2 kkk">
                    <p class="n2">{!! str_limit($allnew->body, 200) !!}</p>
                  </div>

                  <img src="storage/{{ $allnew->image }}" class="oi">
                </div>
              </a>


            </li>
            @endforeach
            <!--<li>-->
            <!--  <h3>02 &raquo;</h3>-->
            <!--  <a class="n3" href="onenews1.html">-->
            <!--    <div class="hyt">-->
            <!--      <p class="n1">11/05/2017</p>-->
            <!--      <div class="iu2 kkk">-->
            <!--        <p class="n2">Всероссийская профильная смена-->
            <!--          <Br> по IT и Робототехнике.</p>-->
            <!--      </div>-->

            <!--      <img src="assets/img/nn1.png" class="responsive-img oi">-->
            <!--    </div>-->
            <!--  </a>-->

            <!--</li>-->

            <!--<li>-->
            <!--  <h3>03 &raquo;</h3>-->
            <!--  <a class="n3" href="onenews1.html">-->
            <!--    <div class="hyt">-->
            <!--      <p class="n1">11/05/2017</p>-->
            <!--      <div class="iu2 kkk">-->
            <!--        <p class="n2">Всероссийская профильная смена-->
            <!--          <Br> по IT и Робототехнике.</p>-->
            <!--      </div>-->

            <!--      <img src="assets/img/nn1.png" class="responsive-img oi">-->
            <!--    </div>-->
            <!--  </a>-->

            <!--</li>-->

            <!--<li>-->
            <!--  <h3>04 &raquo;</h3>-->
            <!--  <a class="n3" href="onenews1.html">-->
            <!--    <div class="hyt">-->
            <!--      <p class="n1">11/05/2017</p>-->
            <!--      <div class="iu2 kkk">-->
            <!--        <p class="n2">Всероссийская профильная смена-->
            <!--          <Br> по IT и Робототехнике. </p>-->
            <!--      </div>-->

            <!--      <img src="assets/img/nn1.png" class="responsive-img oi">-->
            <!--    </div>-->
            <!--  </a>-->

            <!--</li>-->







          </ul>
        </div>

        <div class="scrollbar">
          <div class="handle">
            <div class="mousearea"></div>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>




<section class="project_3">
  <div class="container">
    <div class="row">

      <div class="col l12 m12 s12r" style="    padding-bottom: 40px;">
        <h2 class="mero-text">МЕРОПРИЯТИЯ</h2>
        <a href="/events" class="waves-effect waves-light btn btn_project_2">ВСЕ МЕРОПРИЯТИЯ</a>
      </div>

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


<section class="project_4">

  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <h2 class="mero-text"> БЛАГОДАРНОСТИ</h2>
        <p class="mero-text_g">Официальные благодарности от партнеров</p>
      </div>
      <div class="col l12 m12 s12">
        <div class="wrap1">



          <div class="frame1" id="basic1" style="overflow: hidden;">
            <ul class="clearfix">
            @foreach ($blag as $blags)
           
              <a href="{{ $blags->link }}">
              <li>
                <img src="storage/{{ $blags->img1 }}" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='storage/{{ $blags->img1 }}';">

                </img>
              </li>
              </a>
@endforeach
              <!--<li>-->

              <!--  <img src="assets/img/hes.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/hes.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/pbk.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/pbk.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/1blag.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/1blag.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/hes.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/hes.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/pbk.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/pbk.png';">-->

              <!--  </img>-->

              <!--</li>-->
              <!--<li>-->

              <!--  <img src="assets/img/1blag.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/1blag.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/hes.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/hes.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/pbk.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/pbk.png';">-->

              <!--  </img>-->

              <!--</li>-->
              <!--<li>-->

              <!--  <img src="assets/img/1blag.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/1blag.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/hes.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/hes.png';">-->

              <!--  </img>-->

              <!--</li>-->

              <!--<li>-->

              <!--  <img src="assets/img/pbk.png" class="smena_fona_k smena_fona_ki" onmouseover="this.src='assets/img/1blaghov.png';" onmouseout="this.src='assets/img/pbk.png';">-->

              <!--  </img>-->

              <!--</li>-->

            </ul>
          </div>

          <div class="scrollbar1">
            <div class="handle">
              <div class="mousearea"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="project_5">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h2 class="mero-text">ПАРТНЕРЫ</h2>
        <p class="mero-text_g">Компании и организации, которые нам доверяют</p>
      </div>

      <div class="col l12 pffff_d center">
        <div class="col l2 s6 m6">
          <a href="http://www.pilotlz.ru/"><img src="assets/img/pic_part1.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://granimagazine.ru/"><img src="assets/img/2.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://raec.ru/"><img src="assets/img/pic_part2.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="https://future-rf.ru/"><img src="assets/img/4.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://inspirussia.com/"><img src="assets/img/5.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="https://robot-ex.ru/ru"><img src="assets/img/6.png" class="responsive-img rovn_part"></a>

        </div>
      </div>


      <div class="col l12 pffff_dd center">
        <div class="col l2 s6 m6">
          <a href=""><img src="assets/img/7.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://rs.gov.ru/ru"><img src="assets/img/8.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://www.ulsu.ru/ru/"><img src="assets/img/9.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://spasibodonor.ru/"><img src="assets/img/10.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="https://mkgtu.ru/"><img src="assets/img/11.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://generation-startup.ru/"><img src="assets/img/12.png" class="responsive-img rovn_part"></a>

        </div>
      </div>


      <div class="col l12 pffff_dd center">
        <div class="col l2 s6 m6">
          <a href="http://www.mts.ru/"><img src="assets/img/13.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://www.rvc.ru/"><img src="assets/img/14.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://www.dprpko.ru/"><img src="assets/img/15.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://www.smena.org/"><img src="assets/img/16.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="https://fadm.gov.ru/"><img src="assets/img/17.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
         <a href="http://www.artscienceandsport.com/"> <img src="assets/img/18.png" class="responsive-img rovn_part"></a>

        </div>
      </div>

      <div class="col l12 pffff_dd center">
        <div class="col l2 s6 m6">
          <a href="http://www.etcetera.pro/"><img src="assets/img/19.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://xn--80abucjiibhv9a.xn--p1ai/"><img src="assets/img/20.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="https://mai.ru/"><img src="assets/img/21.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
         <a href="http://www.mesi.ru/"> <img src="assets/img/22.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://vologda-oblast.ru/"><img src="assets/img/24.png" class="responsive-img rovn_part"></a>

        </div>
        <div class="col l2 s6 m6">
          <a href="http://rusinnovations.com/its-robot"><img src="assets/img/25.png" class="responsive-img rovn_part"></a>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection
