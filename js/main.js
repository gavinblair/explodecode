$(document).ready(function(){
	if($(".tab:target").length){
		tabactivate();
	}
	$(".tabs a").click(function(){
		tabactivate();
	});
});
function tabactivate(){
	$(".tab.current").removeClass("current");
	$(".tabs .active").removeClass("active");
	$(".tabs a[href="+window.location.hash+"]").parent("li").addClass("active");
}
