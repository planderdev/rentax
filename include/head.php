<!DOCTYPE html>
<html lang="ko-KR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" >
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/variable/pretendardvariable.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="js/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
    <!--Datepicker-->
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Slick-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/basic.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> 
 
    <script>
        $(function(){
          var includes1 = $('[data-include1="header"]');
          var includes2 = $('[data-include2="lease_info"]');
           jQuery.each(includes1, function(){
             $(this).load('include/header.html');
          });
          jQuery.each(includes2, function(){
            $(this).load('include/lease_info.html');
          });
          
        });
     </script>


    <title>RenTax</title>
</head>

