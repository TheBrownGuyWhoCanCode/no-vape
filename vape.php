<?php

if (isset($_POST["vape1"]) {
    if($_POST["vape1"]=="vape1"){
        header("Location:vape1.html");
    }
}
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Don't Vape</title>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#dialog" ).dialog();
          } );
  </script> 
    <link rel="stylesheet" type="text/css" href="vape.css">
    <script src="vape.js"></script>
</head>
<body>
    <h1>Are you sucking on a usb stick?</h1>
    <div id="divContainer">
        <div class="divs">
            <img src="vape.jpg" alt="E-cigarette">
            <button onclick="myFunction1()" name = "vape1" value = "vape1">Click me for more...</button>
            <div id="div1">This button works good!</div>
        </div>
        <br>
        <div class="divs">
            <img src ="vape image.jpeg">
            <button>Click me</button>
        </div>
        <br>
        <div class="divs">
            <img src = "vaping-vs-smoking.jpg">
            <button>Click me</button>
        </div>
        <br>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Website for some more material: -->
<!-- https://tonic.vice.com/en_us/article/qvxwpw/is-vaping-bad -->
</body>

<!-- Website for some more material: -->
<!-- https://tonic.vice.com/en_us/article/qvxwpw/is-vaping-bad
https://www.stalbertgazette.com/article/exploding-vape-sparks-safety-concerns-20181127
https://draxe.com/juuling/
https://www.canada.ca/en/health-canada/services/smoking-tobacco/vaping.html
https://www.buyagift.co.uk/content/foodhealth/index.html -->
<!-- Fix the JQuery UI-->
<!-- ENSURE TO PUT COMMENTS BEFORE HTML or BEFORE BODY TAG-->
</html>

