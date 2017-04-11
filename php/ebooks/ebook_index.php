<div class="row ebook-list">
	<div class="col-md-8">
		<ul>
<?php

	include("php/paypal/payment.php");

	$ebook_sql = "SELECT * FROM ebooks";
	$ebook_query = mysqli_query($dbconnect, $ebook_sql);
	$ebook_rs = mysqli_fetch_assoc($ebook_query);
	
	if(!empty($ebook_rs)){
		do{
?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-5">
						<div class="title-box">
							<button class="add-cart-button btn-primary">Add to Cart</button>
							<h4 class="ebook-title" value='<?php echo $ebook_rs['title'] ?>'><?php echo $ebook_rs['title'] ?></h4>
							<p class="ebook-description"><?php echo $ebook_rs['description'] ?></p>
							<h4 class="ebook-price" value=<?php echo $ebook_rs['price'] ?>>$<?php echo $ebook_rs['price'] ?></h4>
							<a href="php/paypal/payment.php?price=<?php echo $ebook_rs['price'] ?>"  class="btn">Buy it!</a>
							<data class="ebook-id" value=<?php echo $ebook_rs['ebook_id']?>></data>
						</div>
					</div>
				</div>
			</li>
			
<?php
		} while($ebook_rs=mysqli_fetch_assoc($ebook_query));
	}
?>
        </ul>
    </div>
	<div class="col-md-1">
	</div>
	
	<script>
		
		var cartItems = [];
		
		function printCartList(){
			//update the shopping cart with all the selected items
			$(document).ready(function(){
				var totalPrice = 0;
				$(".selected-items").html("");
				cartItems.forEach(function(item){
					$(".selected-items").append(item.html);
					totalPrice += parseFloat(item.price);
				});
				
				//convert to currency
				
				$("#cart-value").html("$" + totalPrice.toFixed(2));
			});			
		}
			
		
		$(document).ready(function(){	
			
			$(".add-cart-button").click(function(){
				var arrayHasItem = false;
				
				//get the data from the selected item
				var price = $(this).siblings('.ebook-price').attr('value');
				var id = $(this).siblings('.ebook-id').attr('value');
				var title = $(this).siblings('.ebook-title').attr('value');
						
				var cart_item = {};
				cart_item.price = price;
				cart_item.id = id;
				cart_item.title = title;
				
				cart_item.html = 
					"<div class='row'>\n" +
						"<div class='col-md-10'>\n" +
							"<li>\n" +
							"<div class='cart-item'>\n" +
								"<p>" + cart_item.title + "</p>\n" +
								"<h4 class='item-price'>Price: " + cart_item.price + "</h4>\n" +
							"</div>\n" +
							"</li>\n" +
						"</div>\n" + 
						"<div class='col-md-2'>\n" +
							"<button class='item-remove btn-danger' value=" + cart_item.id + ">-</button>\n" +
						"</div>\n" +
						"<data class='user-selected-pdfs' value=" + cart_item.id + "></data>"
					"</div>\n";	
				
				
				//determine if the array has the item selected
				cartItems.forEach(function(item){
					if(item.id == id){
						arrayHasItem = true
					}	
				});
				
				if(!arrayHasItem){
					cartItems.push(cart_item);	
				}
						
				printCartList();
			});
		
			$(document).on('click', '.item-remove', function(){
				var itemId = $(this).attr("value");
				
				cartItems = cartItems.filter(function(el){
					return parseInt(el.id) != parseInt(itemId); 
				});
				
				printCartList();
			});
			
			
			//checkout button functionality
			$(".checkout-btn").click(function(){
				
				ids = []
				//gather the selected Ids for database lookup and verification
				$('.user-selected-pdfs').each(function(){
					ids.push($(this).attr('value'));
				})
				
				//make sure the user has selected at least one
				if(ids.length > 0){}
					$.ajax({
						type: "POST",
						url: 'php/ebooks/shopping-cart/prepare-purchase.php',
						data: {ids : ids}
					});
			    }
			});
		});
	</script>
	
	<div class="col-md-3">
		<div class="shopping-cart">
			<h2>Shopping Cart</h2>
			<hr>
			<div class="row">
				<div class="col-md-10">
					<ul class="selected-items">
						<li>Select an Ebook!</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="shopping-cart-total">
				<h2 id="cart-total-label">Total:</h2>
				<h2 id="cart-value">$0.00</h2>
			</div>
			<div class="row">
			<?php include("php/ebooks/shopping-cart/prepare-purchase.php"); ?>
			    <button class="checkout-btn btn-success">Check Out Items</button>
		    </div>
		</div>
	</div>

	<?php include("php/ebooks/shopping-cart/prepare-purchase.php"); ?>
	
</div>

	