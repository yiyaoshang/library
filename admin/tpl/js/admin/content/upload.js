/**
 * 
 */
$(function(){
	$('#uploadPic').change(function(){		
		var fn = $(this).val();
		alert(fn);
	    if (!/\.(gif|jpg|png|jpeg)$/i.test(fn)) {
	        alert("���ϴ�jpg��jpeg��gif��png��ʽ��ͼƬ��");
	    }
	    document.getElementById('loadingPic').innerHTML="<img src='static/images/icon/loading.gif'/>&nbsp;�ϴ���";
	    $('#submitBtn').attr('disabled',true);
	    $('#uploadPicForm').submit();
	    var waitTimeID = window.setTimeout(function(){
	        $('#submitBtn').attr('disabled',false);
	        document.getElementById('loadingPic').innerHTML = '';
	        window.clearTimeout(waitTimeID);
	    },10000);
		
	});
	
});