$(document).ready(function(){
  $( function() {
    $( "#tabs" ).tabs();
  } );
 });
 
$(document).ready(function(){
  //hides dropdown content
  $(".size_chart, .size_chart-2").hide();
  //unhides first option content
  $("#option1").show();
  //listen to dropdown for change
  $("#size_select, #size_select-2").change(function(){
    //rehide content on change
    $('.size_chart, .size_chart-2').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  }); 
});
$(document).ready(function(){
	$(function(){
		$('.ta').Wload({text:''})
		$('.ta').Wload('hide',{time:1500})
	})
});

