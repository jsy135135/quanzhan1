<?php
//开启ob
ob_start();
echo 'ob is already start';
#情况缓存区内容
// ob_clean();
// ob_end_flush();
$content = ob_get_contents();
ob_end_clean();
//获取ob缓存的内容
echo $content;
