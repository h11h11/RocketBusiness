<?php
$dbc = mysqli_connect('localhost', 'root', '', 'checkup')
or die(mysqli_connect_error());
//mysqli_set_charset($dbc, 'utf-8');
if (mysqli_ping($dbc)) {
//  echo 'Сервер mysql'. mysqli_get_server_info($dbc).' на '. mysqli_get_host_info($dbc);

  $sql = 'SELECT * FROM checkup';
  $result = mysqli_query($dbc, $sql);


}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGO</title>
  <!--  <link rel="stylesheet" href="css/normalize.css">-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>-->
  <!--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>-->

  <!--  <link rel="preconnect" href="https://fonts.googleapis.com">-->
  <!--  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
  <!--  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">-->
</head>

<body>


<script src="js/scripts.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <svg class="ham hamRotate ham1 navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
         aria-controls="navbarTogglerDemo03" aria-expanded="false" viewBox="0 0 100 100" width="80"
         onclick="this.classList.toggle(" active
    ")">
    <path
      class="line top"
      d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"/>
    <path
      class="line middle"
      d="m 30,50 h 40"/>
    <path
      class="line bottom"
      d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"/>
    </svg>
    <!--    <button class="navbar-toggler absolute" type="button" data-bs-toggle="collapse"-->
    <!--            data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"-->
    <!--            aria-label="Toggle navigation">-->
    <!--      <span class="navbar-toggler-icon"></span>-->
    <!--    </button>-->

    <a class="navbar-brand col-md-6" id="logo" href="#">LOGO</a>

    <div class="navTop ">
      <a class="icon"><img src="img/icons/whatsapp.png"></a>

      <a class="navbar-brand col-md-6" id="phone" href="#">+7(863) 000 00 00</a>
      <img src="img/icons/Vector.png" class="cityInfo" id="gps">
      <p class="cityInfo" id="city">Ростов-на-Дону</p>
      <p class="cityInfo" id="street">ул. Ленина</p>
      <a class="btn btn-primary" id="doctorApp2" href="#" role="button" data-bs-toggle="modal"
         data-bs-target="#exampleModal" data-bs-whatever="@mdo">Записаться на прием</a>

    </div>

  </div>
</nav>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link" id="info" aria-current="page" href="#">О клинике</a>
    </li>
    <li class="nav-item">
      <a class="nav-link moreBtn" href="#">Услуги</a>
    </li>
    <li class="nav-item">
      <a class="nav-link moreBtn">Цены</a>
    </li>
    <li class="nav-item">
      <a class="nav-link moreBtn" id="contacts">Контакты</a>
    </li>
    <li class="nav-item">
      <a class="btn btn-primary" id="doctorApp" href="#" role="button" data-bs-toggle="modal"
         data-bs-target="#exampleModal" data-bs-whatever="@mdo">Записаться на прием</a>

    </li>
  </ul>

</div>
<div class="firstPost">
  <div class="imgClinic col-md-6">
    <img src="img/Rectangle%209.png" class="img-fluid" alt="...">
  </div>
  <div class="textClinic col-md-6">
    <p class="h1">Многопрофильная клиника для детей и взрослых</p>
    <p class="lead">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna
      aliqua
    </p>
  </div>
</div>

<div class="checkUp">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <?php
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $active = $row['id'] == 1 ? ' active' : '';


        echo '
           <div class="carousel-item ' . $active . '">
              <div class="checkUpText">
                <h1 class="checkUp">CHECK-UP</h1>
                <p class="subtitle">' . $row['forTo'] . '</p>
                <ul>
                  <li><span>' . $row['li_1'] . '</span></li>
                  <li><span>' . $row['li_2'] . '</span></li>
                  <li><span>' . $row['li_3'] . '</span></li>
                  <li><span>' . $row['li_4'] . '</span></li>
                </ul>
                <p class="count">' . $row['count'] . '</p>
                <a class="btn btn-primary" id="doctorApp3" href="#" role="button" data-bs-toggle="modal"
                   data-bs-target="#exampleModal" data-bs-whatever="@mdo">Записаться </a>
                <a class="btn btn-primary" id="doctorApp4" href="#" role="button">Подробнее </a>

              </div>
             <img src="img/doctor-working-table%201.png" class="d-block w-100 checkUpImg" alt="...">
            </div>
          ';
      }

      ?>


    </div>

  </div>
</div>

<footer class="footer-20192">
  <div class="site-section">
    <div class="container">


      <div class="row">

        <div class="col">
          <a href="#" class="footer-logo">LOGO</a>

        </div>
        <div class="col-sm ">
          <a href="#" class="nav-link"><h3>О клинике</h3></a>

        </div>
        <div class="col-sm">
          <a href="#" class="nav-link"><h3>Услуги</h3></a>

        </div>
        <div class="col-sm">
          <a href="#" class="nav-link"><h3>Специалисты</h3></a>

        </div>
        <div class="col-sm">
          <a href="#" class="nav-link"><h3>Цены</h3></a>

        </div>
        <div class="col-sm">
          <a href="#" class="nav-link"><h3>Контакты</h3></a>

        </div>
        <div class="col-md-3">
          <ul class="list-unstyled social">
            <li class="icon"><a href="#"><span class=" instagram"><img src="img/icons/free-icon-instagram-2111463.png"></span></a>
            </li>
            <li class="icon"><a href="#"><span class=" whatsapp"><img src="img/icons/whatsapp.png"></span></a></li>
            <li class="icon"><a href="#"><span class=" telegram"> <img src="img/icons/telegram.png"></span></a></li>

          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Записаться на прием</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="form">
          <div class="mb-3">
            <label for="recipient_name" class="col-form-label">Имя</label>
            <input type="text" class="form-control _req" id="recipient_name" name="recipient_name">
          </div>
          <div class="mb-3">
            <label for="recipient_phone" class="col-form-label">Телефон</label>
            <input type="text" class="form-control _phone" id=" recipient_phone " name="recipient_phone" required>

          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" id="form-submit" class="btn btn-success btn-primary" name="sab">Отправить</button>
      </div>

    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

</body>

</html>

