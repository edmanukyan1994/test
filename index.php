<!DOCTYPE html>
<html lang="ro">

<?php
    require_once 'config.php';
?>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" href="css/order_me.min.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="css/orderForm.css">
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/utils.js"></script>
  <style>
    .hide , .flag-dropdown {display: none;}
    .error-box{
    color: #fff;
    background-color: #DE5042;
    border-radius: 5px;
    text-align: center;
    width: 240px;
    font-size: 13px;
    line-height: 20px;
    margin:5px auto !important;
    z-index: 100;
}
</style>
  <style>
  .ac_footer {
    position: relative;
    text-align: center;
    overflow: hidden;
    padding: 50px 0;
    color: #A12000;
  }

  .ac_footer a {
    color: #A12000;
  }

  .ac_footer p {
    text-align: center;
  }

  img[height="1"],
  img[width="1"] {
    display: none !important;
  }
 input:ivalid {
    box-shadow: none;
    outline: none;

  }
  </style>
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, user-scalable=no" name="viewport">
  <title> <?= $tr['str']['0']; ?></title>
  <link href="css/index.css" media="all" rel="stylesheet" type="text/css">

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		</head>
	

<body>
  <!--retarget-->
  <div class="page-wrap">
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="#order_form">  <?= $tr['str']['0']; ?></a>
        </h1>
        <div class="header__air">
          <a class="header__air-logo" href="#order_form">
          </a>
          <a class="header__air-title" href="#order_form"> <?= $tr['str']['1']; ?></a>
        </div>
        <a class="search" href="#order_form"> 
          <!-- <form action="" class="search__form">
		<input type="hidden" name="country" value="RO">
		<input type="hidden" name="goods_id" value="134910">
	
            <input class="search__text" name="q" placeholder="cerca" type="text">
            <input class="search__submit" type="submit" value="">
            <input type="hidden" name="time_zone" value="3"></form> -->
        </a>
        <div class="nav">
          <ul class="nav__inner">
            <li>
              <a data-hover="<?= $tr['str']['2']; ?>" href="#order_form"> <?= $tr['str']['2']; ?></a>
            </li>
            <li>
              <a data-hover="<?= $tr['str']['3']; ?>" href="#order_form"> <?= $tr['str']['3']; ?></a>
            </li>
            <li>
              <a data-hover="<?= $tr['str']['4']; ?>" href="#order_form"> <?= $tr['str']['4']; ?></a>
            </li>
            <li>
              <a data-hover="<?= $tr['str']['5']; ?>" href="#order_form"> <?= $tr['str']['5']; ?></a>
            </li>
            <li>
              <a data-hover="<?= $tr['str']['6']; ?>" href="#order_form"> <?= $tr['str']['6']; ?></a>
            </li>
          </ul>
        </div>
        <a class="header__menu-link" href="#order_form"></a>
      </div>
    </header>
    <div class="nav_mobile">
      <div class="search_mobile">
        <!-- <form action="" class="search__form">
		<input type="hidden" name="country" value="RO">
		<input type="hidden" name="goods_id" value="134910">
	
          <input class="search__text" name="q" placeholder="cerca" type="text">
          <input class="search__submit" type="submit" value="">
          <input type="hidden" name="time_zone" value="3"></form> -->
      </div>
      <ul class="nav__list_mobile">
        <li>
          <a href="#order_form"> <?= $tr['str']['2']; ?></a>
        </li>
        <li>
          <a href="#order_form"> <?= $tr['str']['3']; ?></a>
        </li>
        <li>
          <a href="#order_form"> <?= $tr['str']['4']; ?></a>
        </li>
        <li>
          <a href="#order_form"> <?= $tr['str']['5']; ?></a>
        </li>
        <li>
          <a href="#order_form"> <?= $tr['str']['6']; ?></a>
        </li>
        <li>
          <div class="header__air">
            <a class="header__air-logo" href="#order_form">
            </a>
            <a class="header__air-title" href="#order_form"> <?= $tr['str']['1']; ?></a>
          </div>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <div class="content">
        <div class="content__inner content__inner_wide">
          <div class="breadcrumbs">
            <h2>
              <a href="#order_form"> <?= $tr['str']['3']; ?></a>
              <a href="#order_form"> <?= $tr['str']['7']; ?></a>
              <a href="#order_form">  <?= $tr['str']['0']; ?></a>
            </h2>
          </div>
          <div class="article">
            <div class="article__date js-publish-date">
              
              <span class="article__time"></span>
              <!-- <span class="article__author"> Daniele Vallongo </span> -->
            </div>
            <h3 class="article__title">
              <strong> <?= $tr['str']['8']; ?> </strong>
            </h3>
            <div class="article__text js-mediator-article">
              <span class="myText2"> <?= $tr['str']['10']; ?>
                <b> <?= $tr['str']['11']; ?> </b>
                <?= $tr['str']['12']; ?> </span>
              <p> <?= $tr['block']['b0']['0']; ?>
                <b> <?= $tr['block']['b0']['1']; ?>:</b> <?= $tr['block']['b0']['2']; ?></p>
              <p> <?= $tr['str']['9']; ?> </p>
              <center>
                <img src="img/image2.jpg" width="400">
              </center>
              <p style="max-width: 550px;margin: 0 auto;">
                <i class="myText1">
                  <?= $tr['str']['13']; ?>
                </i>
              </p>
              <p> -
                <b> <?= $tr['str']['14']; ?> </b>
              </p>
              <p> - <?= $tr['str']['15']; ?> </p>
              <p>  <?= $tr['block']['b1']['0']; ?><b> <?= $tr['block']['b1']['1']; ?> </b> <?= $tr['block']['b1']['2']; ?> </p>
              <p> <?= $tr['str']['16']; ?> </p>
              <center>
                <img src="img/image1.jpg" width="400">
                <i class="myText1">
                  <?= $tr['str']['17']; ?>
                </i>
              </center>
              <br>
              <p> -
                <b> <?= $tr['str']['18']; ?> </b>
              </p>
              <p> - <?= $tr['str']['19']; ?> </p>
              <p> <?= $tr['str']['20']; ?>: </p>
              <ul class="myList">
                <li>
                  <b> <?= $tr['str']['21']; ?>. </b>
                  <?= $tr['str']['22']; ?>
                </li>
                <li>
                  <b> <?= $tr['str']['23']; ?>. </b>
                  <?= $tr['str']['24']; ?>
                </li>
                <li>
                  <b> <?= $tr['str']['25']; ?>. </b> <?= $tr['str']['26']; ?>
                </li>
                <li>
                  <b> <?= $tr['str']['27']; ?>. </b> <?= $tr['str']['28']; ?>
                </li>
                <li>
                  <b> <?= $tr['str']['29']; ?>. </b>
                  <?= $tr['str']['30']; ?>
                </li>
                <li>
                  <b> <?= $tr['str']['31']; ?>. </b>
                  <?= $tr['str']['32']; ?>
                </li>
              </ul>
              <p> <?= $tr['str']['33']; ?> </p>
              <center>
                <div class="cenz-image cenz-show">
                  <center>
                    <img class="myImg lazy_image" src="img/image4.jpg">
                  </center>
                  <br>
                </div>
              </center>
              <center>
                <p style="max-width: 550px;margin: 10px auto 0; text-align: center !important;">
                  <i class="myText1">
                   <?= $tr['str']['34']; ?>
                  </i>
                </p>
              </center>
              <center>
                <div class="cenz-image cenz-show">
                  <center>
                    <img class="myImg lazy_image" src="img/image3.jpg">
                  </center>
                  <br>
                </div>
              </center>
              <p style="max-width: 550px;margin: 10px auto 0;">
                <i class="myText1">
                  <?= $tr['str']['35']; ?>
                </i>
              </p>
              <center>
                <div class="cenz-image cenz-show">
                  <center>
                    <img class="myImg lazy_image" src="img/image6.jpg">
                  </center>
                </div>
              </center>
              <p style="max-width: 550px;margin: 10px auto 0;">
                <i class="myText1">
                  <?= $tr['str']['36']; ?>
                </i>
              </p>
              <br>
              <p> <?= $tr['str']['37']; ?> </p>
              <p> -
                <b> <?= $tr['str']['38']; ?> </b>
              </p>
              <p> - <?= $tr['str']['39']; ?>: </p>
              <ul class="myList">
                <li> <?= $tr['str']['40']; ?></li>
                <li> <?= $tr['str']['41']; ?></li>
                <li> <?= $tr['str']['42']; ?></li>
                <li> <?= $tr['str']['43']; ?></li>
                <li> <?= $tr['str']['44']; ?></li>
                <li> <?= $tr['str']['45']; ?></li>
                <li> <?= $tr['str']['46']; ?></li>
                <li> <?= $tr['str']['47']; ?></li>
                <li> <?= $tr['str']['48']; ?></li>
                <li> <?= $tr['str']['49']; ?></li>
              </ul>
              <p> <?= $tr['str']['50']; ?> </p>
              <p> <?= $tr['str']['51']; ?> </p>
              <p> -
                <b> <?= $tr['str']['52']; ?> </b>
              </p>
              <p> - <?= $tr['block']['b2']['0']; ?> <a href="#order_form"><?= $tr['block']['b2']['1']; ?></a><?= $tr['block']['b2']['2']; ?> </p>
              <center>
                <a href="#order_form"><img src="img/image11.png"></a>
                <i class="myText1">
                  <?= $tr['str']['53']; ?>
                </i>
              </center>
              <br>
              <p> <?= $tr['str']['54']; ?> </p>
              <p> <?= $tr['str']['55']; ?> </p>
              <p> <?= $tr['block']['b3']['0']; ?><a href="#order_form"><?= $tr['block']['b3']['1']; ?></a>. </p>
              <strong>
                <p class="myText"> <?= $tr['str']['56']; ?>: </p>
              </strong>
              <ul class="myList">
                <li> <?= $tr['str']['57']; ?>
                </li>
                <li> <?= $tr['str']['58']; ?></li>
                <li> <?= $tr['str']['59']; ?>
                </li>
                <li> <?= $tr['str']['60']; ?>
                </li>
                <li> <?= $tr['str']['61']; ?></li>
                <li> <?= $tr['str']['62']; ?></li>
              </ul>
              <p> -
                <b> <?= $tr['block']['b4']['0']; ?> <a href="#order_form"><?= $tr['block']['b4']['1']; ?></a> <?= $tr['block']['b4']['2']; ?> </b>
              </p>
              <p> - <?= $tr['block']['b5']['0']; ?> <a href="#order_form"><?= $tr['block']['b5']['1']; ?></a> <?= $tr['block']['b5']['2']; ?>
                <span class="js-current-date"></span>
              </p>
              <p> <a href="#order_form"><?= $tr['block']['b6']['0']; ?></a> <?= $tr['block']['b6']['1']; ?> </p>
              <p>
                <b> <?= $tr['str']['63']; ?></b>
              </p>
              <p> <?= $tr['str']['64']; ?>: </p>
              <ul class="myList">
                <li> <?= $tr['block']['b7']['0']; ?> 
                  <a href="#order_form"><?= $tr['block']['b7']['1']; ?> </a>
                </li>
                <li> <?= $tr['str']['65']; ?>
                </li>
                <li> <?= $tr['block']['b8']['0']; ?> <a href="#order_form"><?= $tr['block']['b8']['1']; ?></a> <?= $tr['block']['b8']['2']; ?>
                </li>
              </ul>
              <p> <?= $tr['str']['66']; ?> </p>
              <p> -
                <b> <?= $tr['str']['67']; ?> </b>
              </p>
              <p> <?= $tr['str']['68']; ?></p>
              <center>
                <p class="rub-ramka" style="">
                  <span class="myh4"><?= $tr['str']['69']; ?> <b class="js-publish-date"></b></span>
                  <b> <?= $tr['str']['70']; ?>! </b> <?= $tr['block']['b9']['0']; ?>
                    <span class="js-current-date"></span>
                   <?= $tr['block']['b9']['1']; ?> <br><?= $tr['block']['b9']['2']; ?>
                </p>
             </center>
              <form class="order_form" action="api.php" id="order_form" method="POST">
		<input type="hidden" name="country" value="RO">
		<input type="hidden" name="goods_id" value="134910">
	

                <div id="order_form_place" style="display:block;">
                  <center>
                    <img src="img/med.png" style="max-width:100px;">
                    <h2> <?= $tr['block']['b10']['0']; ?> </h2>
                    <span style="color:blue;font-size:14px;"> <?= $tr['block']['b10']['1']; ?>
                      <span class="js-current-date"></span>
                    </span>
                  </center>
                  <div style="text-align: center;">
                    <span style="font-size:16px;"> <?= $tr['block']['b10']['2']; ?> <span class="priceAndLabelForLandingInfoApi price price_main">39.0€</span></span>
                  </div>
                  <div class="toscroll" style="margin:15px 10px 10px 10px;border:2px solid #0299ff;padding:10px;     text-align: center;">
                    <span><b> <?= $tr['block']['b10']['3']; ?> </b></span>
                  </div>
                  <div class="order_form_pole">
                    <!-- <label> Il nome: </label> -->
                    <input name="name" placeholder="<?= $tr['str']['71']; ?>" required="" type="text">
                  </div>
                  <div class="order_form_pole">
                    <!-- <label> Il numero di telefono: </label> -->
                    <div class="form_phone">
                      <input class="only_number" name="phone" placeholder="<?= $tr['str']['72']; ?>" required="" type="tel">
                      <!-- <span class="help"> + 39 XX XX XX XX XX </span> -->
                    </div>
                  </div>
                  <div style="margin-bottom:20px;">
                    <button class="js_submit button__text" type="submit"> <?= $tr['str']['73']; ?>
                    </button>
                  </div>
                  <div class="timelimit" style="font-size:14px; padding-top: 20px;"> <?= $tr['str']['74']; ?>
                    <b class="timer"> </b></div>
                  <span class="additional"> *<?= $tr['str']['75']; ?> </span>
                </div>
                <!-- <input type="hidden" name="landing" value="it3.CardioActivend.com"> -->
              </form>

              <br>
            </div>
          </div>
          <strong>
          </strong>
        </div>
        <strong>
          <div class="comment-block">
            <div class="article">
              &nbsp; <br><br><br>
              <h3 class="article__title"> <?= $tr['str']['76']; ?> </h3>
              <div class="article__text myarticle-comment">
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['77']; ?> <span class="mycity"> <?= $tr['str']['78']; ?> </span>
                  </p>
                  <img src="img/ava1.jpg">
                  <p>
                    <?= $tr['block']['b11']['0']; ?>
                    <a href="#order_form"><?= $tr['block']['b11']['1']; ?></a>.
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['79']; ?> <span class="mycity"> <?= $tr['str']['80']; ?> </span>
                  </p>
                  <img src="img/ava2.jpg">
                  <p>
                    <?= $tr['block']['b12']['0']; ?> <a href="#order_form"><?= $tr['block']['b12']['1']; ?></a> <?= $tr['block']['b12']['2']; ?>
                    <br>
                    <img src="img/comm-2.jpeg" style="width:100%; max-width: 300px; float: none;" alt="">
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['81']; ?> <span class="mycity"> <?= $tr['str']['82']; ?> </span>
                  </p>
                  <img src="img/ava3.jpg">
                  <p>
                    <?= $tr['block']['b13']['0']; ?><a href="#order_form"><?= $tr['block']['b13']['1']; ?></a><?= $tr['block']['b13']['2']; ?>
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['83']; ?> <span class="mycity"> <?= $tr['str']['84']; ?> </span>
                  </p>
                  <img src="img/ava4.jpg">
                  <p>
                    <?= $tr['str']['85']; ?> <br>
                    <img src="img/comm-4.jpeg" style="width:100%; max-width: 300px; float: none;" alt="">
                  </p>
                </div>
                <div class="comment-user" style="display: table;">
                  <p class="user-name">
                    <?= $tr['str']['86']; ?> <span class="mycity"> <?= $tr['str']['87']; ?> </span>
                  </p>
                  <img src="img/ava5.jpg">
                  <p>
                    <?= $tr['str']['88']; ?>
                  </p>
                </div>
                <div class="comment-user" style="/*min-height: 620px;*/">
                  <p class="user-name">
                    <?= $tr['str']['89']; ?> <span class="mycity"> <?= $tr['str']['90']; ?> </span>
                  </p>
                  <img src="img/ava6.jpg">
                  <p>
                    <?= $tr['block']['b14']['0']; ?><a href="#order_form"><?= $tr['block']['b14']['1']; ?></a><?= $tr['block']['b14']['2']; ?>
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['91']; ?> <span class="mycity"> <?= $tr['str']['92']; ?> </span>
                  </p>
                  <img src="img/ava7.jpg">
                  <p>
                    <?= $tr['str']['93']; ?>
                  </p>
                </div>
                <div class="comment-user" style="display: table;">
                  <p class="user-name">
                    <?= $tr['str']['94']; ?> <span class="mycity"> <?= $tr['str']['95']; ?> </span>
                  </p>
                  <img src="img/ava8.jpg">
                  <p>
                    <?= $tr['block']['b15']['0']; ?> <a href="#order_form"><?= $tr['block']['b15']['1']; ?></a> <?= $tr['block']['b15']['2']; ?>
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['96']; ?> <span class="mycity"> <?= $tr['str']['97']; ?> </span>
                  </p>
                  <img src="img/ava9.jpg">
                  <p>
                    <?= $tr['str']['98']; ?>
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['99']; ?> <span class="mycity"> <?= $tr['str']['100']; ?> </span>
                  </p>
                  <img src="img/ava10.jpg">
                  <p>
                   <?= $tr['str']['101']; ?>
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['102']; ?> <span class="mycity"> <?= $tr['str']['103']; ?> </span>
                  </p>
                  <img src="img/ava11.jpg">
                  <p>
                    <?= $tr['block']['b16']['0']; ?> <a href="#order_form"><?= $tr['block']['b16']['1']; ?></a>.
                    <?= $tr['block']['b16']['2']; ?>
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['104']; ?> <span class="mycity"> <?= $tr['str']['105']; ?> </span>
                  </p>
                  <img src="img/ava12.jpg">
                  <p>
                    <?= $tr['str']['106']; ?>
                  </p>
                </div>
                <div class="comment-user" style="display: table;">
                  <p class="user-name">
                    <?= $tr['str']['107']; ?> <span class="mycity"> <?= $tr['str']['108']; ?> </span>
                  </p>
                  <img src="img/ava13.jpg">
                  <p>
                    <?= $tr['str']['109']; ?>
                  </p>
                </div>
                <div class="comment-user">
                  <p class="user-name">
                    <?= $tr['str']['110']; ?> <span class="mycity"> <?= $tr['str']['111']; ?> </span>
                  </p>
                  <img src="img/ava14.jpg">
                  <p>
                    <?= $tr['block']['b17']['0']; ?> <a href="#order_form"><?= $tr['block']['b17']['1']; ?></a> <?= $tr['block']['b17']['2']; ?>
                  </p>
                </div>
                <br>
                <center><a class="of-site" href="#order_form"> <?= $tr['str']['112']; ?></a></center>
              </div>
              <br><br>
            </div>
          </div>
        </strong>
      </div>
      <strong>
      </strong>
    </div>
    <strong>
    </strong>
  </div>
  <strong>
    <footer class="footer">
      <div class="footer-wrapper footer-wrapper_top">
        <div class="footer__inner">
          <ul class="nav_footer">
            <li>
              <a href="#order_form"> <?= $tr['str']['2']; ?></a>
            </li>
            <li>
              <a href="#order_form"> <?= $tr['str']['3']; ?></a>
            </li>
            <li>
              <a href="#order_form"> <?= $tr['str']['4']; ?></a>
            </li>
            <li>
              <a href="#order_form"> <?= $tr['str']['5']; ?></a>
            </li>
            <li>
              <a href="#order_form"> <?= $tr['str']['6']; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <center><a href="privacy.html" style="text-decoration: none; padding: 10px; display: block;"><b><?= $tr['str']['113']; ?></b></a></center>
  </strong>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


 <script>
        $(document).ready(function() {
            $("a[href*=#]").on("click", function(e) {
                var anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(anchor.attr('href')).offset().top
                }, 777);
                e.preventDefault();
                return false;
            });
        });
    </script>


			<?php
				require_once 'api.php';
			?>
			<script>
				infoForLannding = <?php echo $listCountries;?>;
			</script>
			<script src="js/jquery.maskedinput-1.2.2.js"></script>
			<script src="js/intlTelInput.min.js"></script>
			<script src="js/validator.js"></script>
		</body>
	

</html>
