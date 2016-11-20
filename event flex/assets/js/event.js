function register(){
	var 
		ename=$("#ename").val(),
		tag=$("#tag").val(),
		var ev = events.toString();
		alert(ev);
		$.ajax({
                url: "../controller/index.php",
                type: 'post',
                data: ({
                ename:ename,
                tag:tags,
			}),
			success: function(data){
				alert(data);
			},
			error: function(xhr){
				alert("error" + xhr.status);
			}
		});
}