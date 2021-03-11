<?php
include('dbconfig.php');
$output = '';

if(isset($_POST["action"]))
{
	$query = "Select*from product where Product_Status ='Available'";
		if(isset($_POST["sort"]))
	{
		if(isset($_POST["sort"]))
		{
		$sort_filter = implode("','", $_POST["sort"]);
		$query .= "AND Product_PRICE <=('".$sort_filter."')";
		}
		else 
		{
		$query = "SELECT * FROM product";
		}
	}
	if(isset($_POST["brands"]))
	{
		if(isset($_POST["brands"]))
		{
		$brand_filter = implode("','", $_POST["brands"]);
		$query .= "AND Product_BRAND IN('".$brand_filter."')";
		}
		else 
		{
		$query = "SELECT * FROM product";
		}
	}
	if(isset($_POST["category"]))
	{
		if(isset($_POST["category"]))
		{
		$category_filter = implode("','", $_POST["category"]);
		$query .= "AND Product_CATEGORY IN('".$category_filter."')";
		}
		else 
		{
		$query = "SELECT * FROM product";
		}
	}
		if(isset($_POST["connectivity"]))
	{
		if(isset($_POST["connectivity"]))
		{
		$connectivity_filter = implode("','", $_POST["connectivity"]);
		$query .= "AND Product_Connectivity IN('".$connectivity_filter."')";
		}
		else 
		{
		$query = "SELECT * FROM product ";
		}
	}
	
		$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result))
	{
		while($row = mysqli_fetch_array($result) )
		{
			?>
									<div class="col-6 col-md-4 col-lg-4" >
                                        <div class="product product-7 text-center" >
                                            <figure class="product-media" style="width:auto;heigh:auto;">
                                                <a href="product.php?detail&id=<?php echo $row['Product_ID']?>">
                                                    <img src="assets/images/products/<?php echo $row["Product_PIC"]; ?>" alt="Product image" class="product-image" >
                                                </a>


                                                <div class="product-action">
                                                    <a href="product.php?detail&id=<?php echo $row['Product_ID']?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body" style="width:auto;heigh:auto;">
                                                <div class="product-cat">
                                                    <a href="product.php?detail&id=<?php echo $row['Product_ID']?>"><?php echo $row["Product_CATEGORY"]; ?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.php?detail&id=<?php echo $row['Product_ID']?>"><?php echo $row["Product_NAME"]; ?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    RM <?php echo $row["Product_PRICE"]; ?>
                                                </div><!-- End .product-price -->
															
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 -->
			<?php
		}

		}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}

?>