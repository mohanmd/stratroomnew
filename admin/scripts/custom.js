 $( document ).ready(function() {
    $("select").chosen(); 
});

//add remove image rows start
$(document).ready(function() {
    $("#input_table").on('click','.removerow',function(){
      $(this).parent().parent().remove();
  });
  });
  
  function addrow()
  {
    var el = $('#first_row').html();
    $('#input_table').append('<tr>'+el+'<td><i style="color: red !important;" class="fa fa-times removerow"></i></td></tr>');
  }
  
  //add remove image rows end
