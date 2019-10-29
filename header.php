<!DOCTYPE html>
<html>
	<head>
		<title>BabyStore</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="css/wicart.css" type="text/css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.12.5.min.js" type="text/javascript" ></script>
		<script src="js/wicart.js"  type="text/javascript" ></script>
	</head>
	<body>
		<!-- верхняя часть -->
		<header>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  					<a class="navbar-brand" href="index.php">BabyStore</a>
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button>

  					<div class="collapse navbar-collapse" id="navbarSupportedContent">
    					<ul class="navbar-nav mr-auto">
      						<li class="nav-item active">
        						<a class="nav-link" href="index.php">Головна <span class="sr-only">(current)</span></a>
      						</li>

      						<li class="nav-item dropdown">
        						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          						Каталог
        						</a>
        						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php foreach ($categories as $categoryItem): ?>
          							<a class="dropdown-item" href="category.php?category_id=<?= $categoryItem['category_id']; ?>">
                          <?= $categoryItem['name']; ?>       
                        </a>
          						<?php endforeach; ?>	
    	    					</div>
      						</li>
<!--       						<li class="nav-item">
        						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      						</li> -->
	    				</ul>
    					<form class="form-inline my-2 my-lg-0">
      						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    					</form>
  					</div>
  					<div>
						<span style="color: white;">Корзина: </span><br>
						<a href="#" onclick="cart.clearBasket()" style="float: right;">Очистить</a>
						<a href="#" id="basketwidjet" onclick="cart.showWinow('bcontainer', 1)"></a> <span style="font: normal 11px Arial"></span>
					</div>
				</nav>
				<nav aria-label="breadcrumb" role="navigation">
					<ol class="breadcrumb">

            <?php foreach($breadcrumb as $breadcrumbItem) : ?>

              <?php if(!empty($breadcrumbItem['link'])) :?>
            		<li class="breadcrumb-item"><a href="<?= $breadcrumbItem['link'] ?>"><?= $breadcrumbItem['text'] ?></a></li>
              <?php else:?>
                <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumbItem['text'] ?></li>
              <?php endif; ?>

            <?php endforeach; ?>
            
					</ol>
					
				</nav>				
			</div>
		</header>

		<script>
			var priceList = {
    			"001" : {"id" : "001", "subid" : {}, "name" : "IPhone 5", "price" : "20500"},
    			"002" : {"id" : "002", "subid" : {}, "name" : "IPad MINI", "price" : "10500"}
    		};
		</script>  

		<script>
			var cart;
			var config;
			var wiNumInputPrefID;

			$(document).ready(function(){  
 		    	cart = new WICard("cart");
    			cart.init("basketwidjet", config);    
			});    

			document.addEventListener('visibilitychange', function(e) {
				cart.init("basketwidjet", config);
				}, false);
		</script>