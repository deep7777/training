/*
multi line comment
*/

// single line comment


// https://www.w3schools.com/jquery/jquery_ref_selectors.asp

// <input  type="text" id="full_name" class="form-control" name="full-name">
document.getElementById("full_name").value; // using javascript
$("#full_name").val(); // using jquery


// <input class="form-control full_name" type="text"  name="full-name">
document.getElementsByClassName("full_name")[0].value; // using javascript
$(".full_name").val(); // // using jquery

/*
//structure for getting $("p:first-child")
<div>
	<p>1</p>
	<p>2</p>
	<p>3</p>
	<p>4</p>
	<p>5</p>
</div>

*/
