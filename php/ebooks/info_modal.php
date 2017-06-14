<?php

	session_start();

	if(isset($_GET['success'])){
		$result_text;
		if($_GET['success'] === "true"){		
			$result_text = "Thank you for your purchase!";	
		} else if($_GET['success'] === "false"){
			$result_text = "Sorry it didn't work out!";
		}
			
		
?>
			
		<script type="text/javascript">
		function hitModal(){
			$(document).ready(function(){	
			jQuery.noConflict(); 
			$('#myModal').modal('show');
			});
		} 
		
		<?php
			if(isset($_GET['success']) && $_GET['success'] === 'true'){
		?>
				window.location = "php/paypal/download.php";
				hitModal();
				
				
		<?php
			}
		?>
		
		</script>
		
		<!-- Modal -->
		
		<?php
			
		?>
		
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
				  <p><?php echo $result_text ?></p>
				  <p>Check back soon for more informative E-Books!</p>
				  <hr>
				  <p>Having unepxected issues? Please Email <strong class="emial-text">mammamia5504@gmail.com</strong> if you didn't quite get what you were looking for</p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>		  
			</div>
		  </div>	  
		</div>
		
		
<?php
	}
?>

<script>
//hitModal();
function hitModal(){
			$(document).ready(function(){	
				jQuery.noConflict(); 
				$('#myModal').modal('show');
			});
		} 
</script>