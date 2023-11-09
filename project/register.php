<?php

//cookie max 30 days
//it has limit 4kb

// print_r($_COOKIE);
require_once('header.php');

if(isset($_REQUEST['submit']))
{
    setcookie("email",$_REQUEST['email'],time()+3600);
    setcookie("password",$_REQUEST['password'],time()+3600);
    setcookie("name",$_REQUEST['name'],time()+3600);
    setcookie("username",$_REQUEST['username'],time()+3600);

    header("location:login.php");
    // print_r($_REQUEST);



}
// else
// {
//     echo "inside else";
// }

// require('header.php');
// require('heade.php');
// require('header.php');
// require('heade.php');
// require('header.php');

// require_once('header.php');
// require_once('header.php');
// require_once('header.php');
// require_once('heade.php');
// require_once('header.php');


// include('header.php');
// include('header.php');
// include('heade.php');
// include('header.php');
// include('header.php');

// include_once('header.php');
// include_once('header.php');
// include_once('heade.php');
// include_once('header.php');




?>




<!-- Preview only in Full page view -->
    <section class="darksoul-section">
        
        <div class="darksoul-left">
          
            <button class="darksoul-btn-small" type="button" onclick="register()"><h1 class="darksoul-r-h1" id="regh"></h1></button>
            <button class="darksoul-btn-small" type="button" onclick="login()"><h1 class="darksoul-l-h1" id="logh">Register</h1></button>
            
        </div>
        <div class="darksoul-right">
            <div class="darksoul-container" id="card">
                <div></div>
                <div class="darksoul-header">
                 
                </div>
                <div class="darksoul-content" id="Login">
                    <form class="darksoul-form" action="" method="post">
                        <input class="darksoul-input" required type="email" name="email" placeholder=" Email ID" />
                        <input class="darksoul-input" required type="name" name="name" placeholder=" Enter your name" />
                        <input class="darksoul-input" required type="username" name="username" placeholder=" Enter your username" />
                        <input class="darksoul-input" required type="password" name="password" placeholder=" Password" />
                      
                </div>
                <div class="darksoul-signup-content" id="Register">
                    <h2 class="darksoul-h2">Sign up</h2>
                    <div class="darksoul-logo">
                    <svg  height="10" >
                        <line x1="1000" y1="0" x2="0" y2="0" style="stroke:rgb(0, 0, 0);stroke-width:5" />
                        Sorry, your browser does not support inline SVG.
                      </svg>
                    </div>
                    <div class="darksoul-logo">
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero"><g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25.99609,48c-12.68359,0 -23.00391,-10.31641 -23.00391,-23c0,-12.68359 10.32031,-23 23.00391,-23c5.74609,0 11.24609,2.12891 15.49219,5.99609l0.77344,0.70703l-7.58594,7.58594l-0.70312,-0.60156c-2.22656,-1.90625 -5.05859,-2.95703 -7.97656,-2.95703c-6.76562,0 -12.27344,5.50391 -12.27344,12.26953c0,6.76563 5.50781,12.26953 12.27344,12.26953c4.87891,0 8.73438,-2.49219 10.55078,-6.73828h-11.55078v-10.35547l22.55078,0.03125l0.16797,0.79297c1.17578,5.58203 0.23438,13.79297 -4.53125,19.66797c-3.94531,4.86328 -9.72656,7.33203 -17.1875,7.33203z"></path></g></g></svg>
                    
<svg class="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="64px" height="64px" fill-rule="nonzero"><g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(3.55556,3.55556)"><path d="M36,12c-13.255,0 -24,10.745 -24,24c0,13.255 10.745,24 24,24c13.255,0 24,-10.745 24,-24c0,-13.255 -10.745,-24 -24,-24zM36,20c8.837,0 16,7.163 16,16c0,7.28418 -4.8717,13.42017 -11.53125,15.35547c-0.27019,-0.25234 -0.52712,-0.61184 -0.51562,-1.07031c0.027,-1.052 0,-3.5062 0,-4.4082c0,-1.548 -0.98047,-2.64648 -0.98047,-2.64648c0,0 7.68164,0.08567 7.68164,-8.11133c0,-3.162 -1.65039,-4.80859 -1.65039,-4.80859c0,0 0.86822,-3.37659 -0.30078,-4.80859c-1.31,-0.142 -3.6562,1.25134 -4.6582,1.90234c0,0 -1.58752,-0.65039 -4.22852,-0.65039c-2.641,0 -4.22852,0.65039 -4.22852,0.65039c-1.001,-0.651 -3.3482,-2.04334 -4.6582,-1.90234c-1.169,1.432 -0.30078,4.80859 -0.30078,4.80859c0,0 -1.6543,1.64559 -1.6543,4.80859c0,8.197 7.68164,8.11133 7.68164,8.11133c0,0 -0.87405,0.99625 -0.96289,2.42188c-0.51328,0.18107 -1.21313,0.39648 -1.88086,0.39648c-1.61,0 -2.8342,-1.56506 -3.2832,-2.28906c-0.443,-0.714 -1.35127,-1.3125 -2.19727,-1.3125c-0.557,0 -0.82812,0.27966 -0.82812,0.59766c0,0.318 0.78187,0.54086 1.29688,1.13086c1.087,1.245 1.0655,4.04297 4.9375,4.04297c0.45827,0 1.28282,-0.10333 1.93945,-0.19336c-0.00363,0.8787 -0.01384,1.71997 0,2.25977c0.01042,0.4152 -0.20082,0.74689 -0.44141,0.99414c-6.51017,-2.02753 -11.23633,-8.10141 -11.23633,-15.2793c0,-8.837 7.163,-16 16,-16z"></path></g></g></svg>
                    
<svg class="svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero"><g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M50.0625,10.4375c-1.84766,0.82031 -3.82812,1.37109 -5.91016,1.62109c2.125,-1.27344 3.75781,-3.28906 4.52344,-5.6875c-1.98437,1.17578 -4.19141,2.03125 -6.53125,2.49219c-1.875,-2 -4.54687,-3.24609 -7.50391,-3.24609c-5.67969,0 -10.28516,4.60156 -10.28516,10.28125c0,0.80469 0.09375,1.58984 0.26953,2.34375c-8.54687,-0.42969 -16.12109,-4.52344 -21.19531,-10.74609c-0.88672,1.52344 -1.39062,3.28906 -1.39062,5.17187c0,3.56641 1.8125,6.71484 4.57422,8.5625c-1.6875,-0.05469 -3.27344,-0.51953 -4.66016,-1.28906c0,0.04297 0,0.08594 0,0.12891c0,4.98438 3.54688,9.13672 8.24609,10.08594c-0.85937,0.23438 -1.76953,0.35938 -2.70703,0.35938c-0.66406,0 -1.30859,-0.0625 -1.9375,-0.1875c1.3125,4.08203 5.10938,7.0625 9.60547,7.14453c-3.51562,2.75781 -7.94922,4.39844 -12.76953,4.39844c-0.83203,0 -1.64844,-0.04687 -2.44922,-0.14453c4.54687,2.92188 9.95312,4.62109 15.76172,4.62109c18.91406,0 29.25781,-15.66797 29.25781,-29.25391c0,-0.44531 -0.01172,-0.89453 -0.02734,-1.33203c2.00781,-1.44922 3.75,-3.26172 5.12891,-5.32422z"></path></g></g></svg>
</div>
            </div>
                <div class="darksoul-footer" id="footer">
                    <button class="darksoul-btn" type="submit" name="submit">Register</button>
                </div>
                    
                </form>
            </div>
        </div>
    </section>


    <style>
           
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap');

body
{
    width: 100%;
    height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
 
    font-family: 'Open Sans', sans-serif;
    background-color: rgb(255, 255, 255);
    overflow: hidden;
}
.darksoul-section
{
  
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100%;
 
}
.darksoul-left
{
   
    width: 40%;
    height: 50%;
    display: flex;
    flex-direction: row;
    align-items: end;
    
   
}
.darksoul-right
{
  
    margin: auto;
    width: 60%;
    height: 100%;
    display: flex;
    transform: rotate(30deg);
   
}
.darksoul-container
{
    margin: auto;
    width: 45%;
    height: 70%;
    box-shadow: 0px 0px 1000px 2px rgb(255, 204, 0);
    border-radius: 25px;
    display: flex;
    flex-direction: column;
    background-color: rgba(255, 204, 0, 0.714);
    
    

}

.darksoul-header
{
    width: 100%;
    margin: auto;
    height: 20%;
    display: flex;
}
.darksoul-l-h1
{
   

    color: rgba(255, 204, 0, 0.714); 
    font-size: 60px;
    width: fit-content;
    height: fit-content;
    animation-name: steady-l;
    animation-iteration-count: 1;
    animation-duration: 2s;
    animation-fill-mode: forwards;
   
}
.darksoul-r-h1
{
    color: rgb(0, 0, 0);
    font-size: 60px;
    width: fit-content;
    height: fit-content;
  
    animation-name: steady-r;
    animation-iteration-count: 1;
    animation-duration: 2s;
    animation-fill-mode: forwards;
}
.darksoul-h2
{
    color: rgb(0, 0, 0);
    margin: auto;
}
.darksoul-content
{
    margin: auto;
    display: flex;
    flex-direction: column;
    height: 60%;
    width: 100%;
    
}
.darksoul-signup-content
{
    display: none;
    margin: auto;
    
    flex-direction: column;
    height: 100%;
    width: 80%;
    transform: rotate(-30deg);
    padding-top: 35%;
    padding-bottom: 35%;
}
svg
{
    margin: auto;
}

.svg:hover
{
    transform: translateY(-10px);
    transition: 1s;
    cursor: pointer;
}
svg:hover g
{
    fill: rgb(255, 204, 0);
}
.darksoul-logo
{
    margin: auto;
    display: flex;
    
}
.darksoul-form
{
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 60%;
    align-items: center;
    justify-content: space-around;
    margin: auto;
    transform: rotate(-30deg);
    
}
.darksoul-input
{
    
    width: 80%;
    height: 50px;
    border: none;
    outline: none;
    border-radius: 15px;
    background-color: rgb(0, 0, 0);
    color: white;
    font-weight: bolder;
    font-family: 'Open Sans', sans-serif;
    text-indent: 15px;
    
}
::placeholder 
{
    color: rgb(255, 255, 255);
    
}
.darksoul-input[type='email']
{
    color: white;
}
.darksoul-input[type='email']:focus
{
    background-color: rgb(255, 255, 255);
    color: rgb(255, 204, 0);
    zoom: 1.5;
    transition: 0.5s;
    
}
.darksoul-input[type='password']
{
    color: white;
}
.darksoul-input[type='password']:focus
{
    background-color: rgb(255, 255, 255);
    color: rgb(255, 204, 0);
    zoom: 1.5;
    transition: 0.5s;
 
    
}
.darksoul-footer
{
    width: 80%;
    margin: auto;
    display: flex;
    height: 42%;

}
.darksoul-btn
{
    margin: auto;
    margin-right: 2px;
    width: fit-content;
    height: 50px;
    padding: 8px 20px 8px 20px;
    background-color: rgb(0, 0, 0);
    border: none;
    border-radius: 10px;
    font-family: 'Open Sans', sans-serif;
    color: white;
    transform: rotate(-30deg);
    zoom: 1.3;
    
}
.darksoul-btn:hover
{
    cursor: pointer;
    color: rgb(255, 204, 0);
}

@keyframes spin {
    100% { transform:rotateY(360deg); } 
    /* form
    {
        transform: rotate(30deg);
        transform: rotateY(0deg)
    }
    to
    {
        transform: rotateY(180deg) rotate(30deg);
        background-color: rgba(255, 204, 0, 0.714);
        box-shadow: 0px 0px 400px 2px rgb(255, 204, 0);
    } */
}
@keyframes spin-b{
    0% { transform:rotateY(360deg); } 
    100% { transform:rotateY(0deg); }
    /* form
    {
        transform: rotate(30deg);
        transform: rotateY(0deg)
    }
    to
    {
        transform: rotateY(180deg) rotate(30deg);
        background-color: rgba(255, 204, 0, 0.714);
        box-shadow: 0px 0px 400px 2px rgb(255, 204, 0);
    } */
}
@keyframes slide 
{
    0% { margin-left: 0px;}
    100%{ margin-left: 250px;}
}
@keyframes back 
{
    0% { margin-left: 250px;}
    100%{ margin-left: 0px;}
}
@keyframes rotate360-l {
from {transform: scale(0.4)translateX(300%);}
to{transform: scale(1.3) translateY(90%) translateX(50%);}
}
@keyframes rotate360-b-l {
from {transform: scale(1.3) translateY(90%) translateX(50%);}
to{transform: scale(0.4)translateX(300%);}
}
@keyframes rotate360-r {
from {transform: scale(0.4)translateX(500px);}
to{transform: scale(1) translateY(100px) translateX(300px);}
}
@keyframes rotate360-b-r {
from {transform: scale(1) translateY(100px) translateX(300px);}
to{transform: scale(0.4) translateX(500px);}
}
@keyframes steady-l {
from {transform: scale(1.3) translateY(90%) translateX(50%);}
to {transform: scale(1.3) translateY(90%) translateX(50%);}
}
@keyframes steady-r {
from {transform: scale(0.4) translateX(500px);}
to {transform: scale(0.4) translateX(500px);}
}
.darksoul-btn-small
{
    outline: none;
    border: none;
    background-color: white;
    color: rgb(255, 204, 0); 
    font-size: 20px;
    width: fit-content;
    height: fit-content;
    font-family: 'Open Sans', sans-serif;
    cursor: pointer;
}
    </style>

    <script>
            var n = 2;
    var card = document.getElementById("card");
    var log = document.getElementById("Login");
    var logh = document.getElementById("logh");
    var reg = document.getElementById("Register");
    var regh = document.getElementById("regh");
    var footer = document.getElementById("footer");
    var p = document.getElementById("p")
    var l = 1;
    var r = 0;


    function login() 
    {
        if(l==0)
        {
          
        card.style.animationName = "spin-b";
        card.style.animationDuration = "2s";
        card.style.animationDirection = "linear"
        card.style.animationIterationCount = "1";
       
        logh.style.animationName = "rotate360-l";
            logh.style.animationDuration = "2s";
            logh.style.animationDirection = "linear"
            logh.style.animationIterationCount = "1";
            logh.style.animationFillMode = "forwards";
            logh.style.opacity = "1";
           
            regh.style.animationName="rotate360-b-r";
            regh.style.animationDuration = "2s";
            regh.style.animationDirection = "linear"
            regh.style.animationIterationCount = "1";
            regh.style.animationFillMode = "forwards";
        
      
        setTimeout(codingCourse, 1000);

        function codingCourse() 
        {
           
            
            footer.style.display = "flex";
            log.style.display = "flex";
            regh.style.display = "flex";
            reg.style.display = "none";
            card.style.backgroundColor = "rgba(255, 204, 0, 0.714)";
            card.style.boxShadow = "0px 0px 1000px 10px rgb(255, 204, 0)";
        }
        l=1;
        r=0;
        }
    }
    
    function register() 
    {
        if(r==0)
        {
            card.style.animationName = "spin";
        card.style.animationDuration = "2s";
       
       card.style.animationIterationCount = "1";
     
       logh.style.animationName = "rotate360-b-l";
            logh.style.animationDuration = "2s";
            logh.style.animationDirection = "linear"
            logh.style.animationIterationCount = "1";
            logh.style.animationFillMode = "forwards";
            
          
            regh.style.animationName = "rotate360-r"
            regh.style.animationDuration = "2s";
            regh.style.animationDirection = "linear"
            regh.style.animationIterationCount = "1";
            regh.style.animationFillMode = "forwards";
      
        setTimeout(codingCourse, 1000);

        function codingCourse() 
        {
          
         
            footer.style.display = "none";
            log.style.display = "none";
            regh.style.display = "flex";
            reg.style.display = "flex";
            card.style.backgroundColor = "rgba(255, 55, 0, 0)";
            card.style.boxShadow = "0px 0px 1000px 2px rgb(183, 183, 183)";
      
                  
     
       
        }
        l=0;
        r=1;
     
        }
    }
  
    </script>


<?php


require('footer.php');
?>
