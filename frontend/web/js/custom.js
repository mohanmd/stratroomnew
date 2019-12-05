// pagination table
// $(document).ready(function () {
//   $('#dtBasicExample').DataTable({
//     "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
//   });
//   $('.dataTables_length').addClass('bs-select');
// });

// translater
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
}

function triggerHtmlEvent(element, eventName) {
  var event;
  if (document.createEvent) {
    event = document.createEvent('HTMLEvents');
    event.initEvent(eventName, true, true);
    element.dispatchEvent(event);
  } else {
    event = document.createEventObject();
    event.eventType = eventName;
    element.fireEvent('on' + event.eventType, event);
  }
}

$('.lang-select').click(function() {
  var theLang = $(this).attr('data-lang');
  $('.goog-te-combo').val(theLang);

  //alert($(this).attr('href'));
  window.location = $(this).attr('href');
  location.reload();

});

//hide show flo id fields start
$('#users-typeid').change(function(){

  var user_id = $('#users-typeid').val();
  
  var ft = ['1','2','3','4','5','6'];

  if (ft.includes(user_id)) {
    $('#flo_id').show();
  } else {
    $('#flo_id').hide();
  }

});
//hide show flo id fields end

// enquiry popup model link click selection start
jQuery('.anchoracc').click( function(e) {
  var divs = $(".anchoracc");
  var curIdx = divs.index($(this));
  $(this).parent().find('input').prop('checked', 'checked');  	

  jQuery('.collapse').collapse('hide');
});

// enquiry popup model link click selection end


//add remove image rows start
$(document).ready(function() {
  $("#input_table").on('click','.removerow',function(){
    $(this).parent().parent().remove();
});
});

function addrow()
{
  var el = $('#first_row').html();
  $('#input_table').append('<tr>'+el+'<td><i style="color: red !important;" class="fa fa-close removerow"></i></td></tr>');
}

//add remove image rows end

//change image on hover start
$('.pro_thumbnail').mouseover(function() {
   var img = $(this).attr('src');
   $('#pro_bigimg').attr('src',img);
});
//change image on hover end
