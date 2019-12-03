$(document).ready(function(){
    $(".specialite").click(function(){
        $(".spec").show();
        $('.orint').hide();
        $('.recr').hide();
    });
    $(".orienter").click(function(){
        $(".orint").show();
        $('.spec').hide();
            $('.recr').hide();
    });
    $(".recours").click(function(){
        $(".recr").show();
        $('.spec').hide();
            $('.orint').hide();
    });
    
});
$("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
});