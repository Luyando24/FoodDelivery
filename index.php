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
  <style type="text/css">
    body{
      overflow-x: hidden;
  margin: 0;
  background: #fff;
  font-family: 'Roboto', sans-serif;
}
.topnav{
background: #FFF9EE;
height: 80px;
border-style: none;
padding-left: 100px;
padding-right: 100px;
}
@media screen and (max-width: 600px) {
  .topnav {
    padding: 0;
  }
}

.logo1{
font-weight: bolder;
font-size: 20px;
text-decoration: none;
color: #616161;
}
.logo2{
font-size: 20px;
text-decoration: none;
color: #F26505;
}


.addRestaurant{
  text-decoration: none;
  color: #535353;
}
.addRestaurant a: hover{
  color: #f26505;
}

.register{
  background: #E5E5E5;
  border-radius: 10px;
}
@media screen and (max-width: 600px) {
  .register {
    display: none;
  }
}
@media screen and (max-width: 600px) {
  .UserProvince {
    display: none;
  }
}
.login{
  background: #f26505;
  border-radius: 10px;
  color: #fff;
}
.register:hover{
  opacity: 0.7;
}
.login:hover{
  opacity: 0.7;
}
.banner{
  display: flex;
  justify-content: ;
  background: #FFF9EE;
  flex-direction: column;
  height: 450px;
}
.primaryText{
  color: #F26505;
}
.ProvinceBanner{
  display: flex;
  justify-content: ;
  background: #CACC69;
  height: 220px;
  flex-direction: column;
  text-align: center;

}
.Open{
  background: green;
}
.Closed{
  background: red;
}
.order{
  margin-top: 10px;
}
@media screen and (max-width: 600px) {
  .order {
    display: flex;
    flex-wrap: wrap;
  }
}
.orderSlider{
  width: 1000px;
}

@media screen and (max-width: 600px) {
  .orderRow {
    display: flex;
    flex-wrap: wrap;
  }
}

.orderDetails{
  width: 100%;
  margin-top: 2px;
}
@media screen and (max-width: 600px) {
  .OrderButtons {
    position: fixed;
    bottom: 0;
    display: flex;
    justify-content: space-between;
    background: #fff;
    width: 100%;
    padding: 5px;
    overflow: hidden;
    margin-left: -35px;
  }
}
@media screen and (max-width: 600px) {
  .orderSlider {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
  }
}
.orderRow{
  display: flex;
  justify-content: space-between;
}
.orderSlider img{
  background: red;
  height: 350px;
}
.OrderInfoTitle{
  font-weight: bold;
}
.OrderButtons{
  margin-top: 5px;
  display: flex;
  justify-content: space-between;
}
.btnCart{
  background: #E5E5E5;
  border-radius: 10px;
}
.btnBuy{
  background: #f26505;
  border-radius: 10px;
  color: #fff;
}
.orderDetails{
  padding: 30px;
  display: flex;
  flex-direction: column;
  background: #fff;
  margin-left: 2px;
}
.orderInfo{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.orderSlider{
  background: #fff;
  display: flex;
  flex-direction: column;
}
.share{
  color: green;
}
.foodTitle{
  display: flex;
  justify-content: space-between;
  font-weight: bold;
  margin-top: 5px;
}
.foodPrice{
  font-weight: bold;
  color: green;
  margin-bottom: 5px;
}
.RestFeatures{
  display: flex;
  justify-content: space-between;
  font-size: 13PX;

}
.RestFeatures .material-icons{

  font-size: 16PX;

}

.AddressForm{
  text-align: left;

}
 .ProvinceAdress{
margin-top: 0px;
}
.AddressForm input{
  height: 60px;
  border-radius: 10px;
  border: 1px solid #D4D1D1;
}

.bannerTitle{
  margin-top: 100px;
  font-weight: bolder;
  font-size: 50px;
  color: #fff;
  font-style: italic;
}
@media screen and (max-width: 600px) {
  .bannerTitle {
    margin: 30px;
  }
}
.addressInput{
  height: 53px;
  width: 519px;
  border-style: none;
  padding-left: 10px;
}
@media screen and (max-width: 600px) {
  .addressInput {
    height: 53px;
  width: 270px;
  border-style: none;
  padding-left: 10px;
  }
}
@media screen and (max-width: 600px) {
  .submitAdd {
    border-style: none;
  height: 53px;
  background: #0F0E0E;
  color: #fff;
  }
}
.submitAdd{
  border-style: none;
  height: 60px;
  border-radius: 10px;
  width: 150px;
  background: #F26505;
  color: #fff;
}

.Actions{
  display: flex;
  margin-top: 10px;
  justify-content: space-between;
  flex-wrap: wrap;
}


.cardActions img{
  height: 200px;

}
.cardActions{
  margin-top: 60px;
}


.padding{
  margin-right: 100px;
  margin-left: 100px;
}
.category{
  margin-top: 15px;
  font-weight: bold;
  display: flex;
  color: #303030;
  font-size: 18px;
  justify-content: space-between;
}
.categoryh{
  margin-top: 15px;
  font-weight: bold;

  color: #303030;
  font-size: 18px;

}

.h4{
  font-weight: bolder;
}

.restCount{
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: space-between;
}
.restaurantCount .material-icons{
  font-size: 16px;

}
.restaurantCount{
  color: green;
  font-size: 13px;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: space-between;
}
.NearMe{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.BuyNow{
  background: #1EC91B;
  color: #fff;
}
.AddCart{
  background: #0F0E0E;
  color: #fff;
}
.groupedButtons{
  display: flex;
  justify-content: space-between;
}

.footer{
  background: #616161;
  margin-top: 10px;
  padding: 50px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.footerDiv a{
  text-decoration: none;
  color: #fff;
}
.footerDiv{
  display: flex;
  flex-direction: column;
  line-height: 50px;
}
.logo11{
  color: #fff;
  font-weight: bolder;
font-size: 28px;
text-decoration: none;
}

@media screen and (max-width: 600px) {
  .padding {
    margin: 3px;
  }
}
.loginPane{
  text-align: center;
  margin-top: 90px;

}

.loginInput{
  border-style: none;
  border-radius: 10px;
  height: 40px;
  padding: 10px;
  background: #E5E5E5;
  width: 100%;
}
.loginSubmit{
  border-style: none;
  border-radius: 10px;
  height: 40px;
  padding: 10px;
  width: 45%;
  color: #fff;
  background: #1EC91B;
}
.btn a{
  text-decoration: none;
  color: #fff;
}
.btn-register a{
  text-decoration: none;
  color: #000;
}

@media screen and (max-width: 600px) {
  .loginPicture {
    display: none;
  }
}
@media screen and (max-width: 600px) {
  .loginPane {
    margin-top: 20px;
  }
}
.DeliveryArea{
  margin-top: 20px;
}
.brand{
  display: flex;
  flex-direction: column;
}
.cartMessage{
  display: flex;
  justify-content: center;
  background: #CACC69;
  font-size: 25px;
  font-weight: bolder;
  color: #fff;
  width: 800px;
  padding: 50px;
  height: 400px;
}
.cartHolder{
  display: flex;
  margin-top: 20px;
}
@media screen and (max-width: 600px) {
  .cartMessage {
    display: none;
  }
}
.cartItemCol{
  background: #fff;
  display: flex;
  height: 105px;
  margin-left: 5px;
  border-radius: 10px;
  width: 100%;
}
.cartItemsRow{
  background: #E5E5E5;
}

.cartPicture img{
  width: 150px;
  border-radius: 10px;
}
.cartItemBody{
  display: flex;
  flex-direction: column;
  padding: 5px;
}
.cartItemHeader{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 100%;
}
.CartFoodName{
  font-weight: bolder;
}
.cartPicture img{
  width: 160px;
  height: 100px;
}
@media screen and (max-width: 600px) {
  .cartPicture img {
    width: 70px;
  height: 50px;
  }
}
@media screen and (max-width: 600px) {
  .submitAdd {
  margin-top: 3px;
  text-align: center;
  }
}

.cartPicture{
  background: red;
}
.cardItems{
  display: flex;
  justify-content: space-between;
}
.cartAddress{
  display: flex;
  justify-content: space-between;
  flex-direction: column;
}

.paymentMethods{
  display: flex;
  justify-content: center;
}
.Primary{
  background: #1EC91B;
  color: #fff;
}
.PaymentButtons{
  display: flex;
  justify-content: center;
}
.HeroMessage{
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.bigHero{
 font-size: 36px;
font-weight: bolder;
text-align: left;
color: #616161;
}
.smallHero{
  text-align: left;
  font-size: 20px;
  color: #303030;
  }
.userLocation{
  color: #F26505;
  margin: 5px;
}
.HeroImage{
  text-align: center;
  background: #FCDD3E;
  padding: 10px;
}
.cart{
  color: #F26505;
  font-size: 25px;
}
.searchContainer{
  background: #fff;
  padding: 5px;
  padding-bottom: 20px;
  width: 905px;
  padding-left: 10px;
  }
  .alertAdd{
   border-radius: 0;
    color: #fff;
    margin: 0;
    text-align: center;
    background: #F26505;
  }
.provincesCard{
 margin-bottom: 25px;
}
.pcol{
  padding: 0;
}
.card img:hover{
  opacity: 0.9;
}
.reDescription{
  font-size: 12px;
}
.resDistance{
  font-weight: bold;
  color: #F26505;
  font-size: 14px;
}
  </style>
  <div class="alert alertAdd alert-dismissible fade show center " role="alert">
  Open a business account and start selling <strong>Add restaurant</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  	<!--Top navigation bar-->
    <nav class="navbar topnav">
    	<div class="container-fluid">
        
    		<a class="navbar-brand" href="#"><img src="images/logo.png" height="50" width="50"><span class="logo2">azfoods</span></a>
        <div class="UserProvince">Delivering to: <span class="city" style="color: #616161;">Lusaka</span></div>
        <div>
    		<div class="AddRes">
    	    </div>
    		<div class="loginRegister">
    		<button class="btn btn login"><a href="backsystem/public/login">Sign in</a></button>
        <button class="btn btn-lg cart"><span class="material-icons">shopping_cart</span></button>

    	</div>
    	</div>
    </nav>

    <!--Banner-->
    <div class="banner">
    	<div class="row Hero mt-5">
    		<div class="col HeroMessage padding" style="background-color:">
         <div class="bigHero"> We deliver your deliver your <span class="primaryText"> favorite </span> food in <span class="primaryText"> minutes </span></div>
         <div class="smallHero mt-2">Buy from nearest restaurants



<br>and get your food in<br>
<span class="primaryText"> minutes </span></div>
        </div>

        <div class="col HeroImage padding" style="background-color:">
         <img src="images/here.png">
        </div>
        <div class="row searching padding" style="background-color:">
          <div class="searchContainer">
         <form class="AddressForm">
        <input type="text" name="address" class="addressInput" placeholder="Enter your delivery address">
        <badge class="userLocation"><span class="material-icons">my_location</span></badge>
        <button class="btn submitAdd">Delivery</button>
        or
        <button class="btn submitAdd">Pick-Up</button>
      </form>
    </div>
        </div>
    	</div>
 </div>

    	 


    <!--provinces-->
    <div class="category padding mt-3">
      Find nearest restaurants in the following provinces
    </div>
    
<div class="container mt-4" style="padding:0">
  <div class="row g-3">
    <div class="col-6 col-md-6 col-lg-3" style="">
      <div class="card" style="border-radius: 0;">
        <img src="images/lsk.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Lusaka</h6>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/cb.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Copperbelt</h6>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/sp.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Southern</h6>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/et.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Eastern</h6>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/wp.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Western</h6>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/lp.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Luapula</h6>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/np.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Northern</h6>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/nw.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">North-western</h6>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <div class="container padding mt-5" style="padding:0">
    <div class="row">
      <div class="col">
        <div class="category">
          Add restaurant
        </div>
        <p>Open a business account for your restaurant and start selling food</p>
        <button class="btn btn login"><a href="backsystem/public/login">Get started</a></button>
      </div>
      <div class="col" style="text-align: right;">
        <img src="images/rest.jpg">
      </div>
    </div>
  </div>
  <div class="container padding mt-5" style="padding:0">
    <div class="row">
      <div class="col" style="text-align: left;">
        <img src="images/bike.jpg">
      </div>
      <div class="col" style="text-align: right;">
        <div class="categoryh" style="text-align: right;">
          Register to deliver
        </div>
        <p>Have a bike? Register as a rider and make money delivering food</p>
        <button class="btn btn login"><a href="backsystem/public/login">Get started</a></button>
      </div>
    </div>
  </div>

   <div class="category padding mt-5">
      Featured restaurants
    </div>
    
<div class="container mt-4" style="padding:0">
  <div class="row g-3">
    <div class="col-6 col-md-6 col-lg-3" style="">
      <div class="card" style="border-radius: 0;">
        <img src="images/lsk.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Restaurant name</h6>
          <p class="reDescription">Restaurant description</p>
          <p class="resDistance">4.5km</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/cb.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Restaurant name</h6>
          <p class="reDescription">Restaurant description</p>
          <p class="resDistance">4.5km</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/sp.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Restaurant name</h6>
          <p class="reDescription">Restaurant description</p>
          <p class="resDistance">4.5km</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-6 col-lg-3">
      <div class="card" style="border-radius: 0;">
        <img src="images/et.jpg" height="232" class="card-img-top" style="border-radius: 0;">
        <div class="card-body">
          <h6 class="card-title">Restaurant name</h6>
          <p class="reDescription">Restaurant description</p>
          <p class="resDistance">4.5km</p>
        </div>
      </div>
    </div>
  </div>
  </div>

  

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