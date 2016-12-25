$(function(){
  //var titles = <?php echo $auto_title_rs; ?>;
  
  // setup autocomplete function pulling from titles[] array
  $('#autocomplete').autocomplete({
    lookup: titles,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      $('#outputcontent').html(thehtml);
    }
  });
});