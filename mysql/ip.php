<meta charset="utf-8">
<?php
// ip2long()    long2ip()
// ip转数字
echo ip2long('14.130.112.17');
echo '<hr>';
echo long2ip('243429393');
echo '<hr>';
echo sprintf('%u',ip2long('192.168.152.112'));
echo '<hr>';
echo long2ip('-1062692752');