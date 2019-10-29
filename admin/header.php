<!DOCTYPE html>
<html>
	<head>
		<title>BabyStore</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<!-- верхняя часть -->
		<header>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  					<a class="navbar-brand" href="index.php">BabyStore Admin</a>
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button>

  					<div class="collapse navbar-collapse" id="navbarSupportedContent">
    					<ul class="navbar-nav mr-auto">
      						<li class="nav-item dropdown">
        						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          						Категорії
        						</a>
        						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          							<a class="dropdown-item" href="category_list.php">Список категорій</a>
                        <a class="dropdown-item" href="category_add_edit.php">Нова категорія</a>
    	    					</div>
      						</li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Товари
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="product_list.php">Список товарів</a>
                        <a class="dropdown-item" href="product_add_edit.php">Новий товар</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php?logout">Вийти</a>
                  </li>

	    				</ul>

    					<form class="form-inline my-2 my-lg-0">
      						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    					</form>
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