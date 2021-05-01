<?php
$url = $_SERVER['HTTP_HOST'];
$httpurl = 'http://'.$url;
$httpsurl = 'https://'.$url;
$ipv4 = $mc_config['site_link_ipv4'];
if ($httpurl == $ipv4 || $httpsurl == $ipv4) {
   if (filter_var(getIP(), \FILTER_VALIDATE_IP,\FILTER_FLAG_IPV6)) { 

?>
<script language=javascript>

var current_url = window.location.href;
target_url = current_url.replace("<?php echo mc_site_link_ipv4(); ?>","<?php echo mc_site_link_ipv6(); ?>");
window.location = target_url;
    </script>
<?php
}
}

?>



