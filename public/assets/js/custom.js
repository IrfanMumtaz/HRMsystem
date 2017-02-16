$(document).ready(function(){
	$('#editProfile').click(function(){
		$('.profileForm input').removeAttr('readonly');
		$('#updateProfile').show();
		$(this).hide();
	})
})