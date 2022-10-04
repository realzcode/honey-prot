<style>
html {
font-family: "Arial"; 
text-align: center;
margin: 15% auto;
color: #7CFC00;
background: #111111; 
}
</style>
<?php
/* Honey Prot 
 * ----------
 * By @realzcode
 */
date_default_timezone_set('Asia/Jakarta');
$log = array(
"User Agent   : " . @$_SERVER ['HTTP_USER_AGENT'],
"Link Referer : " . @$_SERVER['HTTP_REFERER'],
"Remote IP    : " . $_SERVER['REMOTE_ADDR'],	
"Remote Port  : " . $_SERVER['REMOTE_PORT'],
"Datetime     : " . date('Y-m-d H:i:s')
);
echo "<h1>HONEY PROT ?</h1>";
echo implode("<br>", $log); 
echo "<br><a href='/.log'>View Log</a>";
$file=dirname(__FILE__).DIRECTORY_SEPARATOR.'.log';
$write_log=implode("\r\n",$log);
$fileContents="\r\n\r\n".file_get_contents($file);
file_put_contents($file,$write_log.$fileContents);
?>
