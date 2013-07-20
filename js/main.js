$(document).ready(function(){
	if(!$(".tab:target").length){
		$(".tabs li:first").addClass("active");
		$(".tab:first").show();
	}
	setTimeout(function(){
		window.addEventListener("hashchange", tabactivate, false);
		tabactivate();
	}, 100);
});
function tabactivate(){
	//remove display: block from the first tab
	$(".tab:first").attr('style', function(i, style)
	{
	    return style.replace(/display[^;]+;?/g, '');
	});
	if($(".tab:target").length){
		$(".tabs .active").removeClass("active");
		$(".tabs a[href="+window.location.hash+"]").parent("li").addClass("active");
	} else {
		$(".tab:first").show();
		$(".tab").not(":first").each(function(){
			if($(this).css("display") === "block"){
				$(".tab:first").hide();
			}
		});
	}
}
