(function(){
	$("div[class*='col-'][class*='margin-']").each(function(){
		$(this).width($(this).width() - 20);
	});
})();