<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.getJSON("info.json", function(result){
		console.log(result);
            $.each(result, function(i, field){
		    // Each i is one element from JSON object in .json file
                $("div").append(field + "<hr>");
            });
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