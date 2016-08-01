<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        
	$.getJSON( "info.json", function( data ) {
  		var items = [];
  		$.each( data, function( key, val ) {
    			items.push( "<li id='" + key + "'>" + val + "</li>" );
  		});
 
  		$( "<ul/>", {
    			"class": "my-new-list",
    			html: items.join( "" )
  			}).appendTo( "body" );
	});
        $("button").hide();
    });
});
</script>
</head>
<body>

<button>Get JSON data</button>

<div></div>

</body>
</html>