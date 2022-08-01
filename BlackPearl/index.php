<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./app.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    
    <title>BlackPearl</title>
</head>
<body >
<nav class="navbar navbar-expand-sm " >
  <div class="img-navbar"> 
  <img  class="img-nav" src="./Фоточечечки/Logo3.png" alt=""> 
</div>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Головна</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cataloggg">Каталог</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Контакти">Контакти</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button" style="margin-right: 20px;">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="background"> <img src="./Фоточечечки/BlackPearl2.jpg" alt=""></div>
<div class="Shturval"> <img  class="shturval" src="./Фоточечечки/shturval.png" alt=""></div>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

 
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img   src="./Фоточечечки/1.jpg" alt="" class="d-block w-100">
      <div class="carousel-caption">
    <h3>Мегатрон</h3>
    <p>125.000.000$</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="./Фоточечечки/22.jpg" alt="" class="d-block w-100">
      <div class="carousel-caption">
    <h3>СуперПуперЯхта 228</h3>
    <p>200.000.000$</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="./Фоточечечки/3.jpg" alt="" class="d-block w-100">
      <div class="carousel-caption">
    <h3>Яхта Laraki Perdulee</h3>
    <p>315.500.000$</p>
  </div>
    </div>
  </div>

 
</div>


<div id="demo2" class="carousel slide" data-bs-ride="carousel">

  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
  </div>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img   src="./Фоточечечки/22.jpg" alt="" class="d-block w-100">
      <div class="carousel-caption">
    <h3>СуперПуперЯхта 228</h3>
    <p>200.000.000$</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="./Фоточечечки/3.jpg" alt="" class="d-block w-100">
      < <div class="carousel-caption">
    <h3>Яхта Laraki Perdulee</h3>
    <p>315.500.000$</p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="./Фоточечечки/1.jpg" alt="" class="d-block w-100">
      <div class="carousel-caption">
    <h3>Мегатрон</h3>
    <p>125.000.000$</p>
  </div>
    </div>
  </div>
</div>
<div class="BlackBackground"> </div>


<div class="BackgroundFlot">
   <div class="OurFlot">
     <img class="Tablet" src="./Фоточечечки/Tablet.png" alt="">
    <span class="NameFlot"> <h1 style="    font-size: 5.6rem;
    font-weight: bold 500;
    color: aliceblue;" >Наш флот</h1></span>
    </div>
    <div class="Flot" id="cataloggg">
   
    <?php
            $link = mysqli_connect("localhost", "root", "", "blackpearl" );
            $resp = "SELECT * FROM `catalog` ";
              $sql = mysqli_query($link, $resp);
              

              while ($result = mysqli_fetch_array($sql)) {
                echo '
                <div class="card">
                <img class="card-img-top" src="'.$result["img"].'" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">'.$result["name"].'</h4>
                 <p class="card-text"><b>Плюси: </b> </p>
                  <p class="card-text">'.$result["discript"].'</p>
                  <button type="button" class="btn btn-primary formButton" metod = "GET" name="'.$result["id"].'" id="'.$result["id"].'">Primary</button>
                 
                  <script>
                
                  $( "#'.$result["id"].'" ).click(function() {
                       let a = '.$result["id"].';
                         $.get( "Page.php",  a);
                         
                    window.location.href = "./Page.php";
                  let b = "<?php $as= '.$result["id"].'; $as($_GET);?>";});
                
                
                </script>
                 
                </div>
              </div>;
              ';};
            
                 ?>
     
                
             
                 



<div class="card" >
  <img class="card-img-top" src="https://marine-trade.com.ua/wp-content/uploads/2020/04/5b911fdd0000000000000000_d.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Яхти з Флайбриджем</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br>
    <b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
    <button type="button" class="btn btn-primary formButton">Primary</button>
  </div>
</div>
<div class="card" >
  <img class="card-img-top" src="https://marine-trade.com.ua/wp-content/uploads/2020/04/5b911fdd0000000000000000_d.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Яхти з Флайбриджем</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br>
    <b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
</div>
<div class="card" >
  <img class="card-img-top" src="https://marine-trade.com.ua/wp-content/uploads/2020/04/p520-s-profil-2019-bd_d-1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Спортивні яхти</h4>
    <p class="card-text"><b>Плюси: &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  Мінусів немає!!! </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br>
    <b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
</div>
<div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  <div class="card" >
  <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHaA5ZnVVp7gYL2-jMdQH_gP4sxChpigVj3M0yLYUTexGENujRmvRgSx0zkiKtvLaLuwg&usqp=CAU" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Парусні Човни</h4>
    <p class="card-text"><b>Плюси: </b> </p>
    <p class="card-text"><b>Матеріал:</b> Червоний дуб;<br><b> Весла:</b> Вони є; <br><b>Підходить:</b> Вікінгам і справжнім чоловікам;<br> <b>Папуга у подарунок</b></p>
   
    <a href="#" class="btn btn-primary">Докладніше</a>
  </div>
  </div>
  
</div>
<div class="servise">
    <img  src="./Фоточечечки/Услуги2.png" alt="">
  </div>

  <div class="footer">

 

  
<div class="row mt-3 Footerr">
 
  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
    <h6 class="text-uppercase fw-bold mb-4">
    <br>
      <i class="fas fa-gem me-3"></i>Korablic
    </h6>
    <p>
     <b> Продаємо Корабліки</b> <br>У нашому магазині також є аксесуари:<br>Пов'язки на око<br>Папуги<br>Дерев'яні імпланти ніг<br>Крюки  
    </p>
  </div>
 

  
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  <br>
    <h6 class="text-uppercase fw-bold mb-4">
      Гарантії
    </h6>
    <p>
      <a href="#!" class="text-reset">Їх Немає</a>
    </p>

   
  </div>
  
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
       <br>
   
    <h6 class="text-uppercase fw-bold mb-4">
      Адреса
    </h6>
    <p>
      <a href="#!" class="text-reset" id="pupa" name="lupa" >Кто проживает </a>
    </p>
    <p>
      <a href="#!" class="text-reset">на дне</a>
    </p>
    <p>
      <a href="#!" class="text-reset">Океана</a>
    </p>
    <p>
      <a href="#!" class="text-reset">СпанчБоб СквэрПэнтс!!!</a>
    </p>
  </div>
  
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  <br>
    <h6 id="Контакти"class="text-uppercase fw-bold mb-4">
      Контакти
    </h6>
    <p><i class="fas fa-home me-3"></i> Дзвоніть нам пж(</p>
    <p>
      <i class="fas fa-envelope me-3"></i>
     gleblox@gmail.com
    </p>
    <p><i class="fas fa-phone me-3"></i> +380 95 839 93 34</p>
    <p><i class="fas fa-print me-3"></i> +380 95 839 93 34</p>
  </div>
   
 </div>
  
</div>
</div>










</body>
</html>