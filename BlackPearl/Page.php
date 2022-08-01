<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./PageApp.css" rel="stylesheet" type="text/css">
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


<div class="BackgroundFlot">
  <script> 
   $.get( "./index.php", function(data) {
  alert( "Data Loaded: " + data);
});
  
 
</script>
<?php  
$id = $_GET["as"];
echo ' <h1> '.$id.'</h1>

'
?>
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










</body>
</html>