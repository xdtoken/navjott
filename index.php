<?php 

session_start();

error_reporting(0);

// using banned in role will show user that he is banned when he try to login . 

$users = array(
    "navjot" => array("name" => "love1", "role"=> "admin"),
    
    "gulraiz" => array("name" => "Gulraiz Rehman", "role"=> "admin"),
    
    "ali" => array("name" => "Ali Hassan", "role"=> "admin"),
    
    "naseer" => array("name" => "Naseer Kootwal", "role"=> "admin"),
    
    "sana" => array("name" => "Sana Khan", "role"=> "admin")
    
    );

if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){

    unset($_SESSION['logged']);
    
    unset($_SESSION['password']);
    
    unset($_SESSION['username']);
    
    }




if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
    
    $showlogin = true;
    
    $loginerror = "";
    
    if(isset($_POST['password'])){
        
    $password = $_POST['password'];

    if(!empty($password)){

    if(isset($users[$password])){
        
    if($users[$password]['role'] !== 'banned'){
    
    $_SESSION['logged'] = true;
    
    $_SESSION['password'] = $password;
    
    $_SESSION['username'] = $users[$password]['name'];
    
    $showlogin = false;
    
    }else{
    
    if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){

    $loginerror =  $users[$password]['msg'];

    }else{

    $loginerror = "!! Jani Ab Niklo Baned Ho Gaye Ho Mere Site Se Haha !!";
    
    }}
    
    }else{
    
    $loginerror = "!! Jani Wrong Password !!";
    
    }

    }else{
    
    $loginerror = "!! Enter Password To Use Our Bot !!";
    
    }}}
    
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Navjot singh website</title>

<link rel="stylesheet" type="text/css" href="mujahid.css" media="all,handheld"/>

<link rel="shortcut icon" type="image/png" href=""/>

</head>

<?php

error_reporting(0);

$bot=new bot();

class bot{ 


public function getGr($as,$bs){
    
$ar=array(

    'graph',
        
    'fb',
        
    'me',
        
);

$im='https://'.implode('.',$ar);

return $im.$as.$bs;

}

public function getUrl($mb,$tk,$uh=null){

$ar=array(
    
    'access_token' => $tk,

);

if($uh){
    
$else=array_merge($ar,$uh);

    }else{

$else=$ar;

}

foreach($else as $b => $c){

    $MujahidGangster[]=$b.'='.$c;

}

$true='?'.implode('&',$MujahidGangster);

$true=$this->getGr($mb,$true);

$true=json_decode($this->

one($true),true);

if($true[data]){
    
return $true[data];

    }else{
    
return $true;}

}

private function one($url){
    
$cx=curl_init();

curl_setopt_array($cx,array(

CURLOPT_URL => $url,

CURLOPT_CONNECTTIMEOUT => 5,

CURLOPT_RETURNTRANSFER => 1,

CURLOPT_USERAGENT => '{* Created By Mujahid Khan *}',

));

$ch=curl_exec($cx);

    curl_close($cx);

    return ($ch);

}

public function savEd($tk,$id,$z=null,$bb=null){

    if(!is_dir('MujahidGangster')){
    
    mkdir('MujahidGangster');
    
}

if($bb){
$blue=fopen('MujahidGangster/'.$id,'w');

    fwrite($blue,$tk.'*on*on*on*on'.$bb);
    
    fclose($blue);

echo'

<script type="text/javascript">

alert("INFO : Love Reaction Has Been Saved !!  !!")

</script>';

    }else{

if($z){
    
if(file_exists('MujahidGangster/'.$id)){
    
$file=file_get_contents('MujahidGangster/'.$id);

$ex=explode('*',$file);

$str=str_replace($ex[0],$tk,$file);

$xs=fopen('MujahidGangster/'.$id,'w');

    fwrite($xs,$str);
        
    fclose($xs);
        
    }else{
    
$str=$tk.'*on*on*on*on';

$xs=fopen('MujahidGangster/'.$id,'w');

    fwrite($xs,$str);
    
    fclose($xs);
    
}

$_SESSION[key]=$tk.'_'.$id;

    }else{
    
$file=file_get_contents('MujahidGangster/'.$id);

$file=explode('*',$file);

    if($file[5]){
        
$up=fopen('MujahidGangster/'.$id,'w');

fwrite($up,$tk.'*on*on*on*on'.$file[5]);

    fclose($up);
    
    }else{
        
$up=fopen('MujahidGangster/'.$id,'w');

    fwrite($up,$tk.'*on*on*on*on');
    
    fclose($up);

}

echo'

<script type="text/javascript">

alert("INFO : Love Reaction Has Been Saved !! Good Luck !!")

</script>';

}}}


public function lOgbot($d){
    
    unlink('MujahidGangster/'.$d);
    
    unset($_SESSION[key]);

echo'

<script type="text/javascript">alert("INFO : Logout success !!")

</script>';

    $this->atas();
    
    $this->home();
    
    $this->bwh();

}

public function cek($tok,$id,$nm){
    
$if=file_get_contents('MujahidGangster/'.$id);

$if=explode('*',$if);

echo'
<div id="user">

<div class="css">

<a target="_blank" href="http://facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?width=900" style="border-radius: 105px; border: 14px; border: 2px; box-shadow: 0px 0px 7px 7px #ffffe0; padding: 2px;" width="340" height="340" title=""/></a>

</br></br>

Welcome to my reaction bot'.$nm.'</br> Click Save 

<form action="index.php" method="post"></br>

<input type="hidden" name="logout" value="'.$id.'">

<input class="button" type="submit" value="Logout"></br>

<form action="index.php" method="post">

<input class="submit" type="submit" value="Save"></form></div>';

$this->membEr();

}

public function atas(){
    
$hari=array(1=>

    "Monday",
    
    "Tuesday",
    
    "Wednesday",
    
    "Thursday",
    
    "Friday",
    
    "Saturday",
    
    "Sunday"
    
);

$bulan=array(1=>

    "January",
    
    "February",
    
    "March",
    
    "April",
    
    "May",
    
    "June",
    
    "July",
    
    "August",
    
    "September",
    
    "October",
    
    "November",
    
    "Desember"
    
);




$hr=$hari[gmdate('N',time()+60*60*7)];

$tgl=gmdate('j',time()+60*60*7);

$bln=

$bulan[gmdate('n',time()+60*60*7)];

$thn=gmdate('Y',time()+60*60*7);

$jam=gmdate('H',time()+60*60*7);

echo'';

}

public function home(){
    
echo'';
}


public function showlogin(){
    
echo '

<div id="login">

<form action="index.php" method="post">

<div class="login-error">'.$GLOBALS["loginerror"].'</div> </br>

<input class="search" style="width:65%" type="password" name="password" placeholder="Enter Password To Continue" required> </br>

<input class="button" type="submit" value="Continue"> </form> </div>';
}

public function bwh() {
    
    if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
    
    $this->showlogin();
    
    $this->membEr();
    
    return;
    
}
    
echo '

<div id="header">

<marquee behavior="alternate">

<script src="header.js"></script></marquee>

<hr> </div>

<div id="profile">

<div class="css">

<a target="_blank"  href="https://www.facebook.com/100013817557224"><img src="https://graph.facebook.com/100013817557224/picture?width-900" alt="" style="border-radius: 50px; border: 2px; box-shadow: 0px 0px 15px 7px 	#ff0000; padding: 0px;" width="300" height="300" title=""/></a>
</div> </br>

<div id="center">

<a href="http://mytoken.ga" target="_blank"><input class="button" type="button" value="GeT Token"> </a> <a href="https://facebook.com/100013817557224" target="_blank"><input class="button" type="button" value="My Facebook"></a></center>

</br> </br>

<form action="index.php" method="post">

<input class="search" type="text" style="width:65%" name="token" placeholder="Paste Your iphone Token Here" required></br>

<input class="submit" type="submit" value="Submit"></form></div>';

$this->membEr();

}

public function membEr(){
    
if(!is_dir('MujahidGangster')){
        
mkdir('MujahidGangster');
    
}

$up=opendir('MujahidGangster');

while($use=readdir($up)){
    
if($use != '.' && $use != '..'){
    
$user[]=$use;}

}

echo'

<div id="footer">

Active Users : '.count($user).'</br>

Created By : NavjoT Singh sandhu</div>';

}

public function toXen($h){
    
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');

}}

if(isset($_SESSION[key])){
    
    $a=$_SESSION[key];
    
    $ai=explode('_',$a);
    
    $a=$ai[0];
    
if($_POST[logout]){
    
    $ax=$_POST[logout];
    
    $bot->lOgbot($ax);
    
    }else{
        
$b=$bot->getUrl('/me',$a,array(

'fields' => 'id,name',

));

if($b[id]){
    
if($_POST[likes]){
    
    $as=$_POST[likes];
    
    $bs=$_POST[emot];
    
    $bx=$_POST[target];
    
    $cs=$_POST[opsi];
    
    $tx=$_POST[text];
    
if($cs=='text'){
    
    unlink('MujahidGangster/'.$b[id]);
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,'off');
    
    }else{

if($tx){
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
    
    }else{
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
    
}
    
    $bot->atas();
    
    $bot->home();
    
    $bot->cek($a,$b[id],$b[name]);
    
    }else{
        
echo '

<script type="text/javascript">

alert("INFO: !! Token Expired Jani !!")

</script>';
    
    unset($_SESSION[key]);
    
    unlink('MujahidGangster/'.$ai[1]);
    
    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}}
    
    }else{
        
    if($_POST[token]){

    $a=$_POST[token];
    
if(preg_match('/token/',$a)){
    
    $tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
    
    }else{
    
    $cut=explode('&',$a);
    
    $tok=$cut[0];
    
}

$b=$bot->getUrl('/me',$tok,array(

    'fields' => 'id,name',
    
));

if($b[id]){
    
    $bot->savEd($tok,$b[id],'on','on','on','on','null');
    
    $bot->atas();
    
    $bot->home();
    
    $bot->cek($tok,$b[id],$b[name]);
    
}else{
    
echo '

<script type="text/javascript">

alert("INFO: !! Jani Token Sahi Nahi Hai !!")

</script>';

    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}
    
    }else{
        
if($_GET[token]){
    
    $a=$_GET[token];
    
    $bot->toXen($a);
    
}else{
    
    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}}
    
}

?>
