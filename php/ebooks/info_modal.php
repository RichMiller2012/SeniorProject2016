<?php

	if(isset($_GET['success'])){
		
		if($_GET['success'] === "true"){
?>
			
		<script type="text/javascript">
		
		$(document).ready(function(){	
			jQuery.noConflict(); 
			$('#myModal').modal('show');
		});
		
		</script>
		
		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
				  <p>Thank you for your purchase!</p>
				  <p>Check back soon for more informative E-Books!</p>
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
	}
?>