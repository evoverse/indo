var $j2 = jQuery.noConflict(); 
$j2(document).ready(function() {

	$j2(".cat_content:first").show(); //Show first tab content

	$j2(".lnk").click(function() {
		$j2(".cat_content").hide(); //Hide all tab content
		var activeTab = $j2(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$j2(activeTab).fadeIn(); //Fade in the active content
		return false;
	});
	
});