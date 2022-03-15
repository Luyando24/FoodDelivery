<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--external css-->
    <link rel="stylesheet" href="all.css"> 
    
    <!--google icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>AZFOODS</title>
  </head>
  <body>

  	<!--Top navigation bar-->
    <nav class="navbar topnav sticky-top">
    	<div class="container-fluid">
        
    		<a class="navbar-brand" href="#"><span class="logo1">AZ</span><span class="logo2">FOODS</span></a>
        <i class="UserProvince">Delivering to: <span class="city" style="font-weight: bolder;">Lusaka</span></i>
        <div>
    		<div class="AddRes">
    	    </div>
    		<div class="loginRegister">
    		<button class="btn btn btn-register register"><a href="backsystem/public/register">Register</a></button>
    		<button class="btn btn login"><a href="backsystem/public/login">Login</a></button>
        <button class="btn btn-lg cart"><span class="material-icons">shopping_cart</span></button>

    	</div>
    	</div>
    </nav>

    <!--Banner-->
    <div class="banner">
    	<div class="bannerTitle">
    		Are You Hungry?
    	</div>
    	<form class="AddressForm">
    		<input type="text" name="address" class="addressInput" placeholder="Search Food/restaurant">
        <button type="submit" class="btn submitAdd"><span class="material-icons">search</span></button>
    	</form>
    </div>

    
<br>
    <!--provinces-->
    <div class="category padding">
      <h4>Select province</h4>
    </div>
    <section class="Provinces padding">
      <div class="card ProvinceCard">
  <img src="images/lusaka.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Lusaka</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/ndola.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Copperbelt</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/liv.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Southern</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/eastern.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Eastern</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/western.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Western</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/north-west.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">North-western</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/location.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Province Name</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/location.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Province Name</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/location.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Province Name</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>

<div class="card ProvinceCard">
  <img src="images/location.jpg" class="card-img-top" alt="...">
  <div class="card-body restCount">
    <h5 class="card-title">Province Name</h5>
    <div class="restaurantCount">
      <span class="material-icons">storefront</span>
      <div class="rCount">
        : 500
      </div>
    </div>
  </div>
</div>
    </section>

    
    <!--All foods-->
    <div class="category padding">
    	<h4>Recommended for you</h4>
    	<h4>See All</h4>
    </div>

    <section class="allFood padding">
    	<div class="card NearMeCard" style="width: 29rem;">
  <img src="images/ns.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Food Name</h5>
    <p class="card-text">Food Description</p>
    
    
  </div>
</div>

<div class="card NearMeCard" style="width: 29rem;">
  <img src="images/b.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Food Name</h5>
    <p class="card-text">Food Description</p>
    
    
  </div>
</div>

<div class="card NearMeCard" style="width: 29rem;">
  <img src="images/pz.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Food Name</h5>
    <p class="card-text">Food Description</p>
   
    
  </div>
</div>

<div class="card NearMeCard" style="width: 29rem;">
  <img src="images/f.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Food Name</h5>
    <p class="card-text">Food Description</p>
    
    
  </div>
</div>

<div class="card NearMeCard" style="width: 29rem;">
  <img src="images/ck.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Food Name</h5>
    <p class="card-text">Food Description</p>
   
    
  </div>
</div>

<div class="card NearMeCard" style="width: 29rem;">
  <img src="images/hn.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Food Name</h5>
    <p class="card-text">Food Description</p>
    
    
  </div>
</div>
    </section>
   <!--Actions-->
    <section class="Actions padding">
      <div class="card cardActions" style="width: 28rem;">
  <img src="images/ck.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Browse Foods</h5>
    <p class="card-text">Find your favorite foods</p>
  </div>
</div>

<div class="card cardActions" style="width: 28rem;">
  <img src="images/res.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Add restaurant</h5>
    <p class="card-text">Add your restaurant and start selling</p>
  </div>
</div>

<div class="card cardActions" style="width: 28rem;">
  <img src="images/deliver.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Deliver Food</h5>
    <p class="card-text">Register to deliver and earn money</p>
  </div>
</div>
    </section>
    <!--footer-->
    <div class="footer">
    	<div>
    <a class="navbar-brand" href="#"><span class="logo11">AZ</span><span class="logo2">FOODS</span></a>
</div>
    <div class="footerDiv">
    	<a href="#">Help</a>
    	<a href="#">Add restaurant</a>
    	<a href="#">Register to deliver</a>
    </div>

    <div class="footerDiv">
    	<a href="#">Help</a>
    	<a href="#">Restaurants near me</a>
    	<a href="#">All cities</a>
    	<a href="#">About US</a>
    	<a href="#">Terms and conditions</a>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>