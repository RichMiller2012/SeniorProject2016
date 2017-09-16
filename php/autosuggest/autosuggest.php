<?php
	$auto_title_sql = "SELECT title FROM textblock";
	$auto_title_query = mysqli_query($dbconnect, $auto_title_sql);
	$auto_title_rs = mysqli_fetch_assoc($auto_title_query);
	
	echo $auto_title_rs;
	
	$title_array = array();
	
	if(!empty($auto_title_rs)){
		do{
			$title_item = $auto_title_rs["title"];
			array_push($title_array, $title_item);
		} while($auto_title_rs=mysqli_fetch_assoc($auto_title_query));
	} else {
		$default_text = "No Titles";
		array_push($title_array, $default_text);
	}
?>

<div id="search-bar">
      <div id="searchfield">
        <form>
		    <input type="text" name="auto_title" class="biginput" id="autocomplete" placeholder="Search...">
			 <input type="submit" hidden="true" />
		</form>
      </div><!-- @end #searchfield -->
<?php
	if(isset($_GET['auto_title'])){
		include("php/autosuggest/autosuggest-find.php");
	}
	
	echo $_SERVER['DOCUMENT_ROOT'];
?>

</div>

<script type="text/javascript">
var titles = <?php echo json_encode($title_array); ?>;

$(function(){
  
  // setup autocomplete function pulling from titles[] array
  $('#autocomplete').autocomplete({
    lookup: titles,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      $('#outputcontent').html(thehtml);
    }
  });
});
</script>