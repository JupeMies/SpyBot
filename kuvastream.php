<?php
    header("refresh: 3;");
?>

<?php
if (is_file($PathToFile . 'kukkuluuruu.jpg'))
{
   $FileDetails = stat($PathToFile . 'kukkuluuruu.jpg');
   echo '<img src="kukkuluuruu.jpg?MT=' . dechex($FileDetails['mtime']) . '" />';
}
?>
