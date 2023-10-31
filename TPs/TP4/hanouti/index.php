<pre>
<?php
    echo php_ini_loaded_file()."<br>";
    if(isset($_POST["upload"])){
        var_dump($_POST);
        move_uploaded_file($_POST);
    } 
?>
</pre>

<form action="index.php" method="POST">
    <input type="file" name="imageUpload" id="imageUpload" enctype="multipart/form-data">
    <input type="file" name="imageUpload1" id="imageUpload1" enctype="multipart/form-data">
    <input type="submit" value="Upload" name="upload">
</form>