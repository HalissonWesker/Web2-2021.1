<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>


  
  <link rel="stylesheet" href="/css/forms.css">

  <style> 
  @-webkit-keyframes opacity {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }
    @-moz-keyframes opacity {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }
    @-o-keyframes opacity {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }
    @keyframes opacity {
        0% {
            opacity: 0;
        }
        30% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }
  
  #alert {
        display: none;
        opacity: 0;
        position:absolute;
        text-align: center;
        display: flex;
        justify-content: center;
        top:100px;
        width:100%;
        z-index:9999;
        -webkit-animation: opacity 5s;
        /* Safari 4+ /
        -moz-animation: opacity 5s;
        / Fx 5+ /
        -o-animation: opacity 5s;
        / Opera 12+ /
        animation: opacity 5s;
        / IE 10+, Fx 29+ */


        
    }</style>

</head>
<body>
  <!-- partial:index.partial.html -->
<main class="site-wrapper">
  <div class="pt-table desktop-768">
    <div class="pt-tablecell page-home relative" style="background-image: url(https://karzansoft.com/wp-content/uploads/2015/08/Car-rental-Software-Systems.jpg);
    background-position: center;
    background-size: cover;">
       
  
<div class="container">

<div class="overlay">
 
@yield('content')
</div>
@if(session()->has('error'))
    <div style="" id="alert" class="absolute-center">
        <p class="alert alert-warning" role="alert" style="width:300px;">{{session()->get('error')}}</p>
    </div>
@elseif(session()->has('succes'))
    <div id="alert" class="absolute-center">
        <p class="alert alert-success" role="alert" style="width:300px;">{{session()->get('succes')}}</p>
    </div>
@endif
</div>
</div>
</main>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>
 </body>
</html>
