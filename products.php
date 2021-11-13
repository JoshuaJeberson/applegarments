<!DOCTYPE html>
<html lang="en">

  <head>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Apple Garments</title>
    <link rel="icon" href="assets/images/aaple.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
      #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
      }

      #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
      }

      @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
      }

      @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
      }

      @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 0; opacity: 0;}
      }

      @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
      }
      .display { 
        margin:12px;
        border-radius:8px;
        background-color:#FFD6CD;
        padding:4px;
        display:none;
      }
      .thumbnails{
         margin:12px;
      }
      .thumbnails img{
       margin:10px;
       width:40px;
       padding:6px;
       border:1px solid lightblue;
      }
       
      .fullpic img{
        /* width:30vw ; */
        /* height:80vh; */
          width:100%;
		  height: 100%;
      }
      .details{
        padding:18px;
      }
      .greyletters{
        color:grey;
      }
      td{
        padding:4px;
      }
      #price{
        font-size:3em;
        font-family: Arial, Helvetica, sans-serif;
      }
      .contact *{
        width:90%;
        margin:8px;
      }
      .product-item {
        border: 1px solid #eee;
        margin-bottom: 30px;
      }
      .product-item img {
        width: 100%;
        overflow: hidden;
        height: 200px;

      }
	  @media only screen and (max-width: 600px) {
	  	 .product-item {
			 width: 86%;
		  }
		  .product-item img {
			 height: 300px;
		  }
	  }

      .product-item .down-content h4 {
        font-size: 17px;
        color: #1a6692;

      }

      .product-item .down-content h6 {
        font-size: 18px;
        color: #121212;
        padding: 2px;         
      }
      .product-item .down-content p {
        font-size:10px;
      }
      .product-item .down-content{
        padding : 4px;
      }
      

    </style>
    <script>
      function showSnack(str) {
        var x = document.getElementById("snackbar");
        x.className = "show";
        x.innerText = str;
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
      }
      function product_selected(pro_id){
        /*alert(pro_id);*/
        $.ajax({
          url:"get_pro_detail.php?pro_id="+pro_id
        }).done(function( data ) {
         var pro = JSON.parse(data);
         protitle.innerText = pro.pro_name;
         var pro_desp = (pro.pro_desp).split("|");
         material.innerText = pro_desp[0];
         pattern.innerText = pro_desp[1];
         design.innerText = pro_desp[2];
         fit.innerText = pro_desp[3];
         size.innerText = pro_desp[4];
         if (pro.img1 && pro.img1 != ""){
           img1.src = 'images/'+pro.img1;
           fullpic.src = 'images/'+pro.img1;
          }
         if (pro.img2 && pro.img2 != "")img2.src = 'images/'+pro.img2;
         if (pro.img3 && pro.img3 != "")img3.src = 'images/'+pro.img3;
         if (pro.img4 && pro.img4 != "")img4.src = 'images/'+pro.img4;
         if (pro.img5 && pro.img5 != "") img5.src = 'images/'+pro.img5;
         if (pro.img6 && pro.img6 != "")img6.src = 'images/'+pro.img6;
         price.innerText = '₹'+pro.price1+'-₹'+pro.price2;
         hiddenproid.innerText = pro_id;
         detailview.style.display = 'block';
         scrollto('detailview');
        });
      }
      function showimg(img){
       fullpic.src=img.src;
      }
      function savedetails(){
        if(companyname.value != '' && mobilenumber.value != '') {
          $.ajax({
            url: 'savecust.php',
            type: 'post',
            data: {name:companyname.value, contact: mobilenumber.value, email: mailid.value, pro_id: hiddenproid.innerText},
            success: function(response){
              showSnack(response);
              companyname.value = "";
              mobilenumber.value = "";
              mailid.value = "";
          }
          });
        }
      }
      function scrollto(element){   
        var ele = document.getElementById(element);   
        window.scrollTo(ele.offsetLeft,ele.offsetTop-120); 
      }
    </script>
  </head>
  <body>
    <?php
      $cata=$_GET['cata'];
    ?>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
      <img src="assets/images/aaple.png"  alt="" width="100" > </a>
        <div class="container">
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payment.html">Payments</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>
   <div class="display" id="detailview">
      <div class="row">
        <p id="hiddenproid" style="display:none;"></p>
        <div class="thumbnails col-md-1" id="thumbnails">
           <img src="images/check.jpg" id="img1" onclick="showimg(this)"> 
           <img src="images/checked.jpg" id="img2"  onclick="showimg(this)"> 
           <img src="images/check.jpg" id="img3" onclick="showimg(this)"> 
           <img src="images/checked.jpg" id="img4" onclick="showimg(this)"> 
           <img src="images/check.jpg" id="img5" onclick="showimg(this)"> 
           <img src="images/checked.jpg"id="img6"  onclick="showimg(this)"> 
        </div>
        <div class="fullpic col-md-3">
          <img src="images/checked.jpg" id="fullpic">
        </div>
        <div class="details col-md-4">
          <h2 id="protitle">Titles goes here</h2><br>
          <table> 
            <tr><td><span class="greyletters">Material </span></td><td><span id="material">Cotton</span></td></tr> 
            <tr><td><span class="greyletters">Pattern </span></td><td><span id="pattern">Plain</span></td></tr> 
            <tr><td><span class="greyletters">Design </span></td><td><span id="design">Twill</span></td></tr>
            <tr><td><span class="greyletters">Fit </span></td><td><span id="fit">Regular Fit</span></td></tr>
            <tr><td><span class="greyletters">Size </span></td><td><span id="size">38-44</span></td></tr>
          </table><br>
          <h1 id="price">₹100-₹400</h1><span class="greyletters">(Appx.)</span>
        </div>
        <div class="col-md-3 contact" >
          <h3>Request a quote</h3> 
          <input class="form-control" placeholder="Customer Name" id="companyname">
          <input class="form-control" placeholder="Contact Number" id="mobilenumber" type="number">
          <input class="form-control" placeholder="Mail Id (optional)" id="mailid">
          <button class="btn  btn-primary" onclick ="savedetails()">Submit</button>
        </div>
      </div>
   </div>
    <div class="products">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                <?php include 'db_connect.php';?>
                <?php
                 //echo $cata;
                 $query="SELECT * FROM products WHERE pro_cats like '%$cata%'";
                 $result=$con-> query($query);
                  while($row = $result->fetch_assoc()) { ?>
                    <div class="col-md-2 all des" onclick="product_selected('<?= $row['pro_id']?>')">
                      <center><div class="product-item">
                        <img src="images/<?= $row['img1']?>" alt=""> 
                        <div class="down-content">
                           <h4> <?= $row['pro_name'] ?> <br> <div style="font-family:Arial, Helvetica, sans-serif;margin-top: 4px;"> ₹<?= $row['price1']?> - ₹<?= $row['price2'] ?> </div> </h4> 
                           <p style="font-size: 12px;"> <?= $row['pro_desp']?> </p>
                        </div>
						  </div></center>
                    </div>
                   <?php  }
                  ?> 
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="snackbar"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>DESIGNED AND DEVELOPED BY ALGORYTHMS</p>
            
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
  </body>
</html>
