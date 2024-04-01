

<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$country = $_REQUEST['country'];
$city = $_REQUEST['city'];
$addres = $_REQUEST['addres'];
$password = $_REQUEST['password'];;
$fam = $_REQUEST['fam'];
$lang = $_REQUEST['lang'];
$prof = $_REQUEST['prof'];
$info = $_REQUEST['info'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/Профиль.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <header class="container-fluid d-flex  align-items-center ">  
        <div class="cont col-12 d-flex justify-content-between align-items-center">
        <div class="container-list col-6 d-flex justify-content-end align-items-center">
          <a href="#" class="b0 col-1">NOWIIGA</a>
        </div>
        <div class="container-list1 col-6 d-flex justify-content-end align-items-center">
            <a href="http://127.0.0.1:5500/Main.html"><img src="img/home.svg" width="60px"  alt="Home">
            </a>
        </div>
      </header>
      <main class="main col-12 d-flex justify-content-between">
        <div class="cont-main col-6 d-flex justify-content-center">
          <div class="card col-md-2 col-lg-4" style="width: 25rem; height: 30rem">
            <img class="card-img-top" src="img/AVA.jpg"  height="350px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo "<p>$name";?></h5>
              <p class="card-text"> <?php echo "<p>$fam";?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">✓ Казанский Национальный Иследовательский Технологический Университет</li>
              <li class="list-group-item">✓ Институт Управления Автоматизации и Информационных Технологий</li>
              <li class="list-group-item">✓ Группа 4311-21</li>
            </ul>
          </div>
        </div>
        <div class="cont-info col-10 d-block justify-content-between">
            
            <div class="card col-md-6 col-lg-6">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Личная информация
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                 Страна <?php echo "$country";?>
                </div>
                <div class="card-body">
                 Город <?php echo "$city";?>
                </div>
                <div class="card-body">
                 Язык <?php echo "$lang";?>
                </div>
                <div class="card-body">
                    Дата рождения: 07.07.2003
                </div>
              </div>
            </div>
            <div class="card col-6 col-md-6 col-lg-6">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Контактная информация
                    </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Телефон: +7-952-336-08-69
                </div>
                <div class="card-body">
                    Email: <?php echo "$email";?>
                </div>
                <div class="card-body">
                    Занятость: <?php echo "$prof";?>
                </div>
              </div>
            </div>
            <div class="card col-md-6 col-lg-6">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                     Совершённые заказы
                    </button>
                  </h5>
                </div>
            
                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    Покупка загородного дома
                  </div>
                  <div class="card-body">
                    Планировка загородного дома
                  </div>
                  <div class="card-body">
                    Аренда квартиры в казаниы
                  </div>
                </div>
              </div>
              <div class="card col-md-6 col-lg-6">
                <div class="card-header" id="headingfive">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        Образование
                    </button>
                  </h5>
                </div>
            
                <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="card-body">
                    КНИТУ (бывш. КГТУ, КХТИ)
                  </div>
                  <div class="card-body">
                    ИУАИТ
                </div>
                  <div class="card-body">
                    гр. 4311-21
                  </div>
                </div>
              </div>

              <div class="card col-6">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      О себе
                      </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                     <?php echo "$info";?>
                  </div>
                </div>
              </div>
        </div>    

  
      </main>
      <futer class="futer">
        <div class="cont-futer col-12 d-flex  justify-content-between align-items-center     border-top: 10px;
        ">
            <div class="container-list col-2 d-flex justify-content-center align-items-center">
              <img class="QR" src="img/QR!.jpg" height="150px" width="150px" alt="Card image cap">
            </div>
            <div class="cont-phone container-list col-2 d-flex justify-content-between align-items-center">
              <img class="Vk" src="img/Vk.png" height="30px" width="30px" alt="Card image cap">
              <img class="Telegram" src="img/Telegram.png" height="30px" width="30px" alt="Card image cap">
              <img class="Googl" src="img/Googl.png" height="30px" width="30px" alt="Card image cap">
              </div>
              <div class="cont-phone-last cont-phone container-list col-3 d-flex justify-content-center align-items-center">
                <a href="#" class="a badge badge-danger">Поддержка</a>
                <a href="http://127.0.0.1:5500/Профиль.html" class="a badge badge-success ">+7-945-231-98-11</a>
              </div>
              

  <script src="js/main.js"></script>
</body>
</html>