

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Smart Parking</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>
<body>
    <style>
        
* {
    box-sizing:border-box;
    
  
  }
  
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: whitesmoke;
  }
  /*nav*/
  
  ul {
   
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    /* Change the link color to #111 (black) on hover */
    li a:hover {
      background-color: #111;
    }
    .active {
      background-color: #04AA6D;
    }
  /*nav*/
  
  .container {
    padding: 64px;
  }
  
  .row:after {
    content: "";
    display: table;
    clear: both
  }
  
  .column-66 {
    float: left;
    width: 66.66666%;
    padding: 20px;
  }
  
  .column-33 {
    float: left;
    width: 33.33333%;
    padding: 20px;
  }
  
  .large-font {
    font-size: 48px;
  }
  
  .xlarge-font {
    font-size: 64px
  }
  
  .button {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    background-color: #04AA6D;
  }
  
  img {
    display: block;
    height: auto;
    max-width: 100%;
  }
  
  @media screen and (max-width: 1000px) {
   
    .column-33 {
      width: 100%;
      text-align: center;
    }
    img {
      margin: auto;
    }
  }
  /*skill*/
  #column {
      float: left;
      width: 25%;
      padding-left: 15px;
      background-color: aliceblue;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    /*skill*/
  /*work*/
  
  .heading{
      font-size: 24px;
  }
  .work .box-container{
      display: flex;
      flex-wrap: wrap;
      gap:1.5rem;
  }
  .work .box-container .box{
      flex: 1 1 30rem;
      border-radius: .5rem;
      background:#fff;
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
      padding:2rem;
  }
  
  .work .box-container .box img{
      height:20rem;
      width:100%;
      border-radius: .5rem;
      object-fit: cover;
  }
  
  .work .box-container .box h3{
      color:var(--green);
      font-size: 2.5rem;
      padding:.5rem 0;
  }
  
  .work .box-container .box p{
      color:#666;
      font-size: 1.5rem;
      padding:.5rem 0;
  }
  /*work*/
  /*contact*/
  .contact .row{
      display:flex;
      align-items: center;
      flex-wrap: wrap;
      gap:1.5rem;
  }
  
  .contact .row .image{
      flex:1 1 40rem;
  }
  
  .contact .row .image img{
      width: 100%;
  }
  
  .contact .row form{
      flex:1 1 40rem;
      padding:1rem 2rem;
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
      border-radius: .5rem;
      background:#fff;
  }
  
  .contact .row form .inputBox{
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
  }
  
  .contact .row form .inputBox input,
  .contact .row form .box,
  .contact .row form textarea{
      width:100%;
      border-radius: .5rem;
      font-size: 1.7rem;
      color:#333;
      padding:1rem;
      margin:1rem 0;
      border:.1rem solid rgba(0,0,0,.1);
      text-transform: none;
  }
  
  .contact .row form .inputBox input:focus,
  .contact .row form .box:focus,
  .contact .row form textarea:focus{
      border-color: var(--green);
  }
  
  .contact .row form .inputBox input{
      width:49%;
  }
  
  .contact .row form textarea{
      height:20rem;
      resize: none;
  }
  
  .contact .row form .btn{
      margin:.5rem 0;
  }
  
  /*contact*/
  .skills{
    width: 100%;
    max-width: 600px;
    padding: 0 20px;
  }
  
  .skill-name{
    font-size: 18px;
    font-weight: 700;
    color: black;
    text-transform: uppercase;
    margin: 20px 0;
  }
  
  .skill-bar{
    height: 14px;
    background: #282828;
    border-radius: 3px;
  }
  
  .skill-per{
    height: 14px;
    background: #d13639;
    border-radius: 3px;
    position: relative;
    animation: fillBars 2.5s 1;
  }
  
  .skill-per::before{
    content: attr(per);
    position: absolute;
    padding: 4px 6px;
    background: #f1f1f1;
    border-radius: 4px;
    font-size: 12px;
    top: -35px;
    right: 0;
    transform: translateX(50%);
  }
  
  .skill-per::after{
    content: "";
    position: absolute;
    width: 10px;
    height: 10px;
   
    top: -20px;
    right: 0;
    transform: translateX(50%) rotate(45deg);
    border-radius: 2px;
  }
  
  @keyframes fillBars{
    from{
      width: 0;
    }
    to{
      width: 100%;
    }
  }
  
  
  
  
    </style>

<div style="text-align:center">
<div class="nav">
    <ul>
        
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">About</a></li>
        <li><a href="contact-us">Contact</a></li>
        <ul class="nav navbar-nav navbar-right">
      <li><a href="login"> Login</a></li>
      <li><a href="registration"> Register</a></li>
      <li><a href="#"> </a></li>
    </ul>
  </div>
        
      </ul>
     
</div>
</div>
<!-- Clarity Section -->
<div class="container" style="background-color:white;">
  <div class="row">
    <div class="column-33">
      <img src="image/smart-parking.jpg" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>Parking System</b></h1>
      <h1 class="large-font" style="color:red;"><h2>Why Do We Need Parking System?</h2></h1>
      <p><span style="font-size:16px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ipsam, illo praesentium quisquam veniam autem sequi alias! Nostrum inventore, quibusdam eligendi enim, incidunt saepe earum doloribus rem ex nam quos</p>
      <button class="button" style="background-color:red">Learn More</button>
    </div>
  </div>
</div>
<div class="container">
    <section class="work" id="work">

        <h1 class="heading">  News </h1>
        
        <div class="box-container">
            
            <div class="box tilt">
                <img src="image/update.webp" alt="">
                <h3> Update Alert! </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsam ad voluptatum distinctio delectus et, velit natus nihil sit odit consequatur, saepe harum optio voluptatibus placeat quo maiores tenetur eligendi</p>
                
                <a href="' class="btn">Show</a>
            </div>
        
            <div class="box tilt">
                <img src="image/hallo.jpg" alt="">
                <h3> Happy Halloween </h3>
                <p>Wishing everyone fun and spooky Halloween filled with lots of yummy treats!</p>
               
                <a href="#" class="btn">Show</a>
            </div>
        
            <div class="box tilt">
                <img src="image/winter.jpg" alt="" align="center">
                <h3> Winter is coming! </h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut minus, adipisci exercitationem maiores corporis tempora accusamus aspernatur quos. Dignissimos nesciunt itaque doloribus nostrum dicta repellendus nemo officia, aperiam ducimus dolorum.</p>
                <a href="#" class="btn">Show</a>
            </div>
        
        </div>
        
        </section>
</div>

@if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
 
<!-- <div class="container">
    <section class="contact" id="contact">

        <h1 class="heading"> Contact <span> Us </span> </h1>
        
        <div class="row">
        
            <div class="image">
                <img class="tilt" src="image/contact-img.svg" alt="">
            </div>
        
           <div>
            <h1>Phone Number : 01********<h1><br>
            <h1>Email        : hms@hms.com<h2><br>
            <h2>Address      : Parking Management Compant<h2><br>

           
          
          
          </div>







        
        </div>
        
        </section> -->
       
        <footer class="footer" text align="center">
            <p>&#169 Parking System, All rights reserved!</p>
    
        </footer>
        <br>
        <br>
  
</div>


</body>
</html>