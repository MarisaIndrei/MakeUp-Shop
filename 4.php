<?php require_once ('php/component.php');

require_once ("php/CreateDb.php");
$database = new CreateDb("BD", "TabelProduse");
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
    }
}
?>
<html>
	<head>
		<meta charset=utf-8>
	
		<title> MakeUp Shop </title>

		<link href="4.css" rel="stylesheet" type="text/css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="myscripts_3.js"></script>
	</head>
	<body>
		<ul>
			<center>
				<li class="dropdown">
				<a target="blank" href=" " class="dropbtn">Cosul meu</a>
				</li>
			<li><a href="1.html">Login</a></li>
			<li><a href="2.php">Wishlist</a></li>
			<li class="dropdown"> 
					<a target="blank "class="dropbtn">Noutati</a>
				<div class="dropdown-content">
						<a href="4.php">Ochi </a>
						<a href="5.php">Fata </a>
						<a href="6.php">Buze </a>
					</div>
			</li>
			<li><a href="4.php">Ochi</a></li>
			<li><a href="5.php">Fata</a></li>
			<li><a href="6.php">Buze</a></li>
			</center>
		</ul>
		<div class="transbox">
			<h1><font  size="6"><em><strong id="title" onmouseover="schimba()" onmouseout="reschimba()">aici vor fi produsele pt ochi</strong></em> </h1>
			 <div class="shop-box-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                        <div class="right-product-box">
                            <div class="product-item-filter row">
                                <p>Produsele noastre:</p>
                                
                            </div>
                            

                            <div style="clear: both"></div>
    <div id="container" style="width:99.5%; background: none; box-shadow: none; margin: 0.5% auto">
                                            <?php
                                            $result = $database->getData();
                                            while ($row = mysqli_fetch_assoc($result)){
                                            component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                                                    }
                                            ?>
	</div>
        

		

     
  
			
		</div>
	</body>
</html>