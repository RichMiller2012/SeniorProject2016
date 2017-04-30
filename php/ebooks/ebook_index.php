<div class="row ebook-list">
	<div class="col-md-8">
		<ul>
<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/php/dbconnect.php");

	$ebook_sql = "SELECT * FROM ebooks";
	$ebook_query = mysqli_query($dbconnect, $ebook_sql);
	$ebook_rs = mysqli_fetch_assoc($ebook_query);
	
	if(!empty($ebook_rs)){
		do{
?>
			<li class="list-group-item shopping-cart-item">
				<div class="row">
					<div class="col-md-5">
						<div class="title-box">
						  <div class="row">
							<h4 class="ebook-title" value='<?php echo $ebook_rs['title']?>'><?php echo $ebook_rs['title'] ?></h4>
							<p class="ebook-description"><?php echo $ebook_rs['description']?></p>
							<data class="ebook-id" value='<?php echo $ebook_rs['ebook_id']?>'></data>
							<data class="ebook-price" value='<?php echo $ebook_rs['price']?>'></data>
						  </div>
						</div>
					</div>
					<div class="col-md-3">
					</div>
					<div class="col-md-4">
					  <div class="row">
						<div class="col-md-6">
							<img class="add-cart-button cart-button" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png" alt="Add to Cart">
						</div>
						<div class="col-md-6">
							<form action="/php/paypal/payment.php" method="POST">
								<input id="single-id" type="hidden" name="ids" value="<?php echo $ebook_rs['ebook_id']?>"> 
								<input id="selected-price" type="hidden" name="price" value="<?php echo $ebook_rs['price']?>">
								<input type="image" class="buy-now-button cart-button" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
							</form>
						</div>
					  </div>
					  <div class="row">
						<div class="col-md-12" id="price-label">
							<h1>$<?php echo $ebook_rs['price'] ?></h1>
						</div>
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
				
				var ids = [];
				//gather the selected Ids for database lookup and verification
				$('.user-selected-pdfs').each(function(){
					ids.push($(this).attr('value'));
				});
				
				$("#selected-ids").attr("value", ids);
				$("#selected-price").attr("value", totalPrice);
			});	
		}
			
		
		$(document).ready(function(){	
			
			$(".add-cart-button").click(function(){
				var arrayHasItem = false;
				
				//get the data from the selected item
				var price = $(this).closest(".shopping-cart-item").find('.ebook-price').attr('value');
				var id = $(this).closest(".shopping-cart-item").find('.ebook-id').attr('value');
				var title = $(this).closest(".shopping-cart-item").find('.ebook-title').attr('value');
						
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
			  <form action="/php/paypal/payment.php" method="POST">
			    <input id="selected-ids" type="hidden" name="ids"> 
				<input id="selected-price" type="hidden" name="price">
				<input type="image" class="cart-button" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-44px.png" alt="PayPal Checkout">
			  </form>
		    </div>
		</div>
	</div>	
</div>

<?php
 include("info_modal.php");
?>

	