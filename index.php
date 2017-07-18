<?php

if (!isset($_GET["site"])):?>

<form method="GET" action="">
<input type="text" name="site" />
<input type="submit" value="GET" />
</form>

<?php
else:
$content = file_get_contents($_GET["site"]);

?>

<?php echo $content; ?>

<?php
endif;
?>

