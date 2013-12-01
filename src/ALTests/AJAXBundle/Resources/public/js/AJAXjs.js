
// Links handling for multiple actors results. 
// Loads the URL given by the template on each link.
function handleLinks(url) {
	var ajax_load = "loading search results...";
	$(".results").html(ajax_load).load(url);
	return false;
}

// Button submit handling. 
// Builds an url to be loaded and load it dinamically.
function buttonSubmit() {
	var url=$("#search_form").attr("action");
	var ajax_load = "loading search results...";
	var form_name = $("#form_name").val();
	
 	// Validating for empty searchs.
	if(form_name.replace(/\s/g,'')) {
		url = url.replace("term_name",encodeURIComponent(form_name)); 
		url = url.replace("page_number","1"); 
		url = url.replace("quick_flag",encodeURIComponent($("#form_lucky").val())); 
	
		$(".results").html(ajax_load).load(url);
	}
	else
		$(".results").html("Please search for a valid actor's name!");
}

// Button submit handling. 
// Builds an url to be loaded and load it dinamically.
$(document).ready(function() {
	$('.results').on("click", "a", function (e){  // Links Handling on results block
		handleLinks(e.toElement.href);
	});
	
	$("#form_search").click(function() {  // Standard search button
		$("#form_lucky").val("0");
		buttonSubmit();
		return false;   		
	});
	
	$("#form_lucky_search").click(function() {  // Lucky search button
		$("#form_lucky").val("1");
		buttonSubmit();
		return false;
   	});

});