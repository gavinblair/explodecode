$(document).ready(function(){
	setTimeout(function(){
		if($(".tab:target").length){
			tabactivate();
		}
	}, 100);
	$(".tabs a").click(function(){
		//async
		setTimeout(function(){ tabactivate(); }, 0);
	});
});
function tabactivate(){
	$(".tab.current").removeClass("current");
	$(".tabs .active").removeClass("active");
	$(".tabs a[href="+window.location.hash+"]").parent("li").addClass("active");
}
