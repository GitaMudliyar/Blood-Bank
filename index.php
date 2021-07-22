<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Bootstrap Demo</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div id="bestCarsCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#bestCarsCarousel" data-slide-to="0" class="active"></li>
<li data-target="#bestCarsCarousel" data-slide-to="1"></li>
<li data-target="#bestCarsCarousel" data-slide-to="2"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<img src="images/crouse1.jpg">
<div class="carousel-caption">

</div>
</div>
<!--<div class="item">
<img src="images/crouse1.jpg">
<div class="carousel-caption">

</div>
</div>-->
<div class="item">
<img src="images/crouse2.jpg">
<div class="carousel-caption" >

</div>
</div>
</div>
<!-- Controls -->
<a class="left carousel-control" href="#bestCarsCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#bestCarsCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function(){
var options = {
interval: 3000,
pause: 'hover',
wrap: true
};
$('#bestCarsCarousel').carousel(options);
});
</script>
</body>
</html>