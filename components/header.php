<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>Coffee 4 You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="res/style.css">
    
</head>
<body>
   
    <!-- Fejlec -->
    <header>
       <img class="logo" src="res/logo.png">
       
       <nav>
           <ul class="nav_links">
              <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index') echo 'active'; ?>">
              	<a href="index.php">Rólunk</a></li>
              <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'galeria') echo 'active'; ?>">
              	<a href="galeria.php">Galéria</a></li>
              <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'arlista') echo 'active'; ?>">
              	<a href="arlista.php">Termékeink</a></li>
              <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'kapcsolatok') echo 'active'; ?>">
              	<a href="kapcsolatok.php">Kapcsolatok</a></li>
           </ul>
       </nav>
       
       <a class="order" href="rendeles.php"><button class="orderbutton">Rendelés</button></a>
   </header> 
   