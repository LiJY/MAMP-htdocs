$(document).ready(function() {
	$('div').click(function(){
		window.location=$(this).find('a').attr('href');
		return false;
	})
});