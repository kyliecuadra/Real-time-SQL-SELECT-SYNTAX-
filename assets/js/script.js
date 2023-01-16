$(function(){
  $("#query").keyup(function() {
    var query = $(this).val();
    if(query!='') {
      $.ajax({ 
        type: "POST",
        url: "assets/php/query.php",
        data: {query:query},
        cache: false,
        success: function(html) {
          $("#sql_output").html(html).show();
        }
      });
    }
    if(query.length === 0){
      $("#sql_output").html("");
    }
  });
});