<!DOCTYPE html>
<html>
<head>
<style>
div { color:red; }
</style>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<select name="sweets" multiple="multiple" id="myselect">
<option>Chocolate</option>
<option selected="selected">Candy</option>
<option>Taffy</option>
<option selected="selected">Caramel</option>
<option>Fudge</option>
<option>Cookie</option>
</select>
<div></div>
<script>
$("#myselect").change(function () {
var str = "";
$("select option:selected").each(function () {
str += $(this).text() + " ";
});
$("div").text(str);
})
.change();
</script>
</body>
</html>