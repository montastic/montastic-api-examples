

<?php
// -------------- Updating a checkpoint

$url = "https://www.montastic.com/checkpoints/update/9813";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1); // set POST method
curl_setopt($ch, CURLOPT_POSTFIELDS, "<checkpoint><name>user@example.com</name></checkpoint>"); // add POST fields
curl_setopt($ch, CURLOPT_USERPWD, "user@example.com:111111");  
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/xml', 'Content-type: application/xml'));
$result = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
?>


<?php
// -------------- Displaying a checkpoint

$url = "https://www.montastic/checkpoints/show/9813";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user@example.com:111111");  
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/xml', 'Content-type: application/xml'));
$result = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
echo $url
echo $httpcode;
echo $result;
?>
