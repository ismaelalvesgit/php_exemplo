<?php
function test($callback){
	$callback();
}

test(function(){
	echo "terminou!";
})
?>