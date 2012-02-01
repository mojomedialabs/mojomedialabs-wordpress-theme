jQuery(function($){
	var callsToAction = $(".textwidget .call-to-action-text");

	$(callsToAction[Math.floor(Math.random() * callsToAction.length)]).toggle();
});