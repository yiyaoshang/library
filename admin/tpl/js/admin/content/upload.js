/**
 * 
 */
$(function(){
	$('#uploadPic').change(function(){		
		var fn = $(this).val();
		alert(fn);
	    if (!/\.(gif|jpg|png|jpeg)$/i.test(fn)) {
	        alert("请上传jpg、jpeg、gif、png格式的图片。");
	    }
	    document.getElementById('loadingPic').innerHTML="<img src='static/images/icon/loading.gif'/>&nbsp;上传中";
	    $('#submitBtn').attr('disabled',true);
	    $('#uploadPicForm').submit();
	    var waitTimeID = window.setTimeout(function(){
	        $('#submitBtn').attr('disabled',false);
	        document.getElementById('loadingPic').innerHTML = '';
	        window.clearTimeout(waitTimeID);
	    },10000);
		
	});
	
});