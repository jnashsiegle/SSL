<?php 
echo "My Own Hashed Password: " . md5("jmysalt". "secrets"); 
?>

<?php echo "<br />Class Example: " . md5("mysalt"."mypassword"); ?>

<?php 
echo "<br />Redoing Apples with Rainbows &amp; Unicorns: " . md5("janasOwnHashedRainbows&Unicorns". "apple"); 
?>

 <?php 
echo "<br />Redoing Apples the sha1 way: " . sha1("janasOwnHashedRainbows&Unicorns". "apple"); 
?>

<br /><br />//Tiger	b3606d0750ff9d29ab85dea85556f29d7fd5f5406c4e4a96
<br /><br />Whirlpool	78fed17e0ee893c25c91888ea6153fdd10f7a52b163c88224ad3c48c0aad6bd3d273cb305e9cf4cb1e3671723c843ad0e18e544606ba1bf49fbc57360e1bd78d
