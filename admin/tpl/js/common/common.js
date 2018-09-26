/**
 * 
 */
function confirmurl(url,msg){
	if(confirm(msg)==true){
		location.href=url;
	}
}

$(function(){
	$(".table-list tr").hover(function(){
		$(this).css("backgroundColor","#EEF3F7");	
	},function(){		
		$(this).css("backgroundColor","#F7F8F9");
	});
	
});