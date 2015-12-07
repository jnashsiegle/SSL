<?php
echo __FILE__ . 'file' . "<br />";
echo __LINE__ . 'line' . "<br />"; // be careful once you include files, the line number won't be what you expect
echo dirname(__FILE__) . ' directory name' . "<br />";
echo __DIR__ . ' directory name'. "<br />"; //this is the same as above for php 5.3 and above.

echo "on to the next<br /><br />";

echo file_exists(__FILE__) ?  'yes' : 'no';
echo "<br />";
echo file_exists(dirname(__FILE__). "/index.html") ?  'yes' :'no' ; //but it isn't a file so use following instead
echo "<br /><br />";

echo is_file(__FILE__) ? 'yes' : 'no';
echo "<br />";
echo is_file(dirname(__FILE__). "/index.html")  ?  'yes' :'no' ;
echo "<br /><br />";

echo is_dir(__FILE__) ?  'yes' : 'no';
echo "<br />";
echo is_dir(dirname(__FILE__). "/index.html") ?  'yes' :'no' ;
echo "<br /><br />";

echo is_dir('..') ? 'yes' : 'no';
?>