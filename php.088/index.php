<?php
$file = "counter.txt";
if(!file_exists($file)) file_put_contents($file, 0);

$count = file_get_contents($file);
$count++;
file_put_contents($file, $count);
?>
<!DOCTYPE html>
<html>
<body>
<h2>عداد زيارات الصفحة</h2>
<p>عدد الزيارات: <?= $count ?></p>
</body>
</html>
