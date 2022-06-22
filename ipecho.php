<body topmargin='0' leftmargin='0'>
<?php
function getip() /*以浏览者角度，查询自己当前IP地址----获取客户端IP*/
{
if (@$_SERVER["HTTP_X_FORWARDED_FOR"]){ //跳过代理获取客户端IP
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else if (@$_SERVER["HTTP_CLIENT_IP"]){//直接获取获取客户端IP
$ip = $_SERVER["HTTP_CLIENT_IP"];
}
else if (@$_SERVER["REMOTE_ADDR"]){
$ip = $_SERVER["REMOTE_ADDR"];
}
else if (@getenv("HTTP_X_FORWARDED_FOR")){
$ip = getenv("HTTP_X_FORWARDED_FOR");
}
else if (@getenv("HTTP_CLIENT_IP")){
$ip = getenv("HTTP_CLIENT_IP");
}
else if (@getenv("REMOTE_ADDR")){
$ip = getenv("REMOTE_ADDR");
}
else {
$ip = "Unknown";
}
return $ip;
}

$ip=getIP(); //echo "var ip_address ='$ip'; ";

echo $ip;

?>
</body>
