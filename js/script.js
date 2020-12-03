$('#openNav').on('click', function() {
  $('#myNav').css("width", "100%");
});


$('#closeNav').on('click', function() {
  $('#myNav').css("width", "0%");
});


$(".dropdown-content a").click(function(){
    
   var text = $(this).css({"display": "inline", "font-size": "16px"});
    $(".dropbtn").html(text);
      
  }  
    );