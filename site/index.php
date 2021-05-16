<?php 
  session_start(); 
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Интернет-магазин</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header-line"></div>
	<div class="container">
		<div class="header">
			<div class="icon">
				<img src="images/icon.png" alt="icon" height="60px">
			</div>
			<div class="nav">
				
				<div class="dropdown">
					<button class="dropbtn">Dropdown</button>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Dropdown</button>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Dropdown</button>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Dropdown</button>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Dropdown</button>
					<div class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</div>

			</div>
			<div class="korzina">
				<a href="cart.html" class="korzina-font">Корзина</a>
			</div>
			<div class="login-section">
				<?php  if (isset($_SESSION['username'])) : ?>
					<p><strong><?php echo $_SESSION['username']; ?></strong></p>
					<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
				<?php endif ?>
			</div>
		</div>
		<div class="content">
			<div class="products-section">
				<a href="cart.html">Cart</a>
				<div class="mini-cart"></div>
				<a href="later.html">Желание</a>
				<div class="goods-out"></div>
			</div>
		</div>
	</div>
	<footer></footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>