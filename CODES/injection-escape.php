<!--Injection Prevention - mysql_real_escape_string()
Lucky for you, this problem has been known for a while and PHP has a specially-made function to prevent these attacks. All you need to do is use the mouthful of a function mysql_real_escape_string. 
What mysql_real_escape_string does is take a string that is going to be used in a MySQL query and return the same string with all SQL Injection attempts safely escaped. Basically, it will replace those troublesome quotes(') a user might enter with a MySQL-safe substitute, an escaped quote \'.
Lets try out this function on our two previous injection attacks and see how it works.
MySQL & PHP Code:
NOTE: you must be connected to the database to use this function!
-->
<?php
$name_bad = "' OR 1'"; 

$name_bad = mysql_real_escape_string($name_bad);

$query_bad = "SELECT * FROM customers WHERE username = '$name_bad'";
echo "Escaped Bad Injection: <br />" . $query_bad . "<br />";


$name_evil = "'; DELETE FROM customers WHERE 1 or username = '"; 

$name_evil = mysql_real_escape_string($name_evil);

$query_evil = "SELECT * FROM customers WHERE username = '$name_evil'";
echo "Escaped Evil Injection: <br />" . $query_evil;
?>
<!--Display:
Escaped Bad Injection:
SELECT * FROM customers WHERE username = '\' OR 1\''
Escaped Evil Injection:
SELECT * FROM customers WHERE username = '\'; DELETE FROM customers WHERE 1 or username = \'' 
Notice that those evil quotes have been escaped with a backslash \, preventing the injection attack. Now all these queries will do is try to find a username that is just completely ridiculous:
•	Bad: \' OR 1\'
•	Evil: \'; DELETE FROM customers WHERE 1 or username = \'
And I don't think we have to worry about those silly usernames getting access to our MySQL database. So please do use the handy mysql_real_escape_string() function to help prevent SQL Injection attacks on your websites. You have no excuse not to use it after reading this lesson!
-->


