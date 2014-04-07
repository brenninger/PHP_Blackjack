<?php
$a = "hello";
?>


<script>
function echoHello()
{
 alert("<?php hello(); ?>");
 }
</script>
<?php
function hello()
{
 global $a;
 echo $a;
 }
?>
<button onclick="echoHello()">Say Hello</button>