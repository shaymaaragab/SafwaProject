$(":file").on('change', function(){
	var form = $("form")[0];
	$.ajax({
		url:"../ajax_php_file.php",
		type:"post",
		data: new FormData(form),
		cache: false,
        contentType: false,
        processData: false,
		success:function(data){
			$("#message").html(data);
		}
	});
});
