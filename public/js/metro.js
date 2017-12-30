(function(){

	if(document.getElementById('metroUserInput')) {
		postMetroInput()			
	}

	$(".dropdown-menu li").click(function(){
  		var selText = $(this).text()
  		console.log($(this).parents('.dropdown.btn'))
  		$(this).parents('.dropdown').find('button').text(selText)
	});

})()

function postMetroInput() {
	/*
	need to add the rest of the XHR call here
	*/
	$('#metroUserInput').on('submit', function(){
		var form = document.getElementById('metroUserInput')
		var data = new FormData(form)
		window.console.log(data)
	})
	// var req = new XMLHttpRequest()
	// req.send(data)
}