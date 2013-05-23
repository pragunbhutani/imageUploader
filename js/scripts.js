$(document).ready(function()	{


	$('#img_file').change(function() {
		$('#photoCover').val($(this).val().replace("C:\\fakepath\\", ""));
	});


	$('.del-btn').click(function()	{
		var del_id = $(this).attr('rel');

		$.post('delete.php', {delete_id:del_id}, function(data)	{
			if(data == 'true') {
				$('#'+del_id).remove();
			} else {
				alert('Could not delete!');
			}
		});

	});


	$('#backtotop').click(function() {
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});


});