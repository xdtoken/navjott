<?php

//CR3AT3D BY THE B0TT3RS KING {* Hamad Khan *}

$directory=opendir('MujahidGangster');

$file_array=array();

while($file=readdir($directory))

{

if($file!=='.' && $file!=='..')

{
    
$file_array[]=$file;
        
}}

for($i=0;$i<sizeof($file_array);$i++)

{

$access_token= file_get_contents('MujahidGangster/'.$file_array[$i]);

$token=explode('*',$access_token);

$limitnf=20; 

$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token[0].'&offset=0&limit='.$limitnf.''),true);

echo $puaru[data];

echo "<br/>";

for($d=1;$d<=count($puaru[data]);$d++){

set_time_limit(0);

$camxuc= array('LOVE', 'LOVE', 'LOVE', 'LOVE', 'LOVE', 'LOVE');

$mess=$camxuc[rand(0,count($camxuc)-1)];

echo puaru('https://graph.facebook.com/'.$puaru[data][$d-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token[0].'');       

}}

echo "{* CREATED BY HAMAD KHAN *}";

function puaru($url){
    
$data = curl_init();

curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($data, CURLOPT_URL, $url);

$hasil = curl_exec($data);

curl_close($data);

return $hasil;

}

?>
