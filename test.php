<?php
    header("refresh: 1;");
?>

<script type="text/javascript">
window.setInterval(function()
{
  document.getElementById('yourimage').src = "http://192.168.1.38/output.jpg?random="+new Date().getTime();
}, 1000);
</script>

<?php
if (is_file($PathToFile . 'kukkuluuruu.jpg'))
{
   $FileDetails = stat($PathToFile . 'kukkuluuruu.jpg');
   echo '<img src="http://192.168.1.38/output.jpg?=' . dechex($FileDetails['mtime']) . '" />';
}
?>
