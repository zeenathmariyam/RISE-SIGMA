$(document).ready(function() {            
	$(function () {
		var activeTab = $('[href=' + location.hash + ']');
		activeTab && activeTab.tab('show');
		/*
		var hash = location.hash
		  , hashPieces = hash.split('?')
		  , activeTab = $('[href=' + hashPieces[0] + ']');
		activeTab && activeTab.tab('show');*/
	});


 $("a[data-tab-destination]").on('click', function() {
        var tab = $(this).attr('data-tab-destination');
        $("#"+tab).click();
    });
	
	
/*
		$("#link-btn").click(function() {
                var tabname = jQuery(this).attr("class");
				alert(tabname);
				
				//$(location).attr('href','http://localhost/rise/?#'+tabname);
				//location.reload(true);
				window.location.assign('http://localhost/rise/?#'+tabname);
				//window.location.assign("http://www.w3.org");
         });
	*/	 
			 
 });
		
	

	
   


	
		
