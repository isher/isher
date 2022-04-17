<html>
<head>
<title>本地IPv4/Ipv6查询</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
	a {
		text-decoration: none;}
	.mz {
    text-align: center;
    position: absolute;
    bottom: 0px;
    margin: auto;
    right: 0;
    left: 0;
    font-size: 14px;
}
	</style>
	</head>
<?php
function getip() /*获取客户端IP*/
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

echo "您当前的ip地址<br>";
if (filter_var(getIP(), \FILTER_VALIDATE_IP,\FILTER_FLAG_IPV4)) {
echo "ipv4地址<br>".$ip."<br>";
echo "ipv6地址<br>";
echo "<iframe frameborder=no border=0 height=30px width=100% src=https://i.qsis.cn/ipecho.php></iframe>";
echo "如果这里没有显示出类似240e开头的ip，则可能您不具备ipv6条件或ipv6dns导致使用ipv6线路";
} else {
echo "ipv4地址<br>";
echo "<iframe frameborder=no border=0 height=30px width=100% src=ipecho.php></iframe>";
echo "ipv6地址<br>".$ip."<br>";
}

echo "<p class=mz>免责：数据直显,“如果”有错误与<a href=https://i.qsis.cn target=_blank>乔说</a>无关</p>";
?>
