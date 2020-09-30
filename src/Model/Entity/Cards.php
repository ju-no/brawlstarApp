<!DOCTYPE HTML>
<html>
<head>
<?php
header('Content-Type: text/html; charset=UTF-8');
$token = "<API TOKEN>";

$url = "https://api.brawlstars.com/v1/brawlers"

$ch = curl_init($url);

$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);
function test_input($form_var) {
$data = trim($form_var);
$data = stripslashes($form_var);
$data = htmlspecialchars($form_var);
return $form_var;
}
if (isset($data["reason"])) {
echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
exit;
}
?>
<title>
Cards
</title>
</head>
<body>
<pre>
<?php var_dump($data); ?>
</pre>
</body>
</html>