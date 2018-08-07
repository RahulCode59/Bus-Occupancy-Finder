<?php

echo "
<html>
<head>
<SCRIPT LANGUAGE='javascript'>
function DivClos() {
alert (\"this is a test\");
}
</SCRIPT>
</head>
<body>
";

$x=1;

if($x==0)
{
// SOME CODE
}
else
{
echo "<SCRIPT LANGUAGE='javascript'>DivClos();</SCRIPT>\n";
}

echo "
</body>
</html>
";
?>