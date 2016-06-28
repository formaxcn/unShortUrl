$( document ).ready(function() {
    $("a").livePreview();
});

function Validate(url) { 
    var v = new RegExp(); 
    v.compile("^[A-Za-z]+://[A-Za-z0-9-_]+\\.[A-Za-z0-9-_%&\?\/.=]+$"); 
    if (!v.test(url)) { 
        //alert("You must supply a valid URL."); 
        return false; 
    } 
	else{
		return true;
	}
} 