<?php if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
$database   = 'df';

fclose($fp);
if(!get_magic_quotes_gpc())
{
$fileName = addslashes($fileName);
}
$connection=mysqli_connect("localhost","root","");

mysqli_select_db($connection,$database);
$query = "INSERT INTO gravator (name, size, type, content )".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

mysqli_query($connection,$query) or die('Error, query failed');
echo "
File $fileName uploaded
";
}
?>
<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellspacing="1" cellpadding="1">
<tbody>
<tr>
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
<input id="userfile" type="file" name="userfile" /></td>
<td width="80"><input id="upload" type="submit" name="upload" value=" Upload " /></td>
</tr>
</tbody>
</table>
</form>