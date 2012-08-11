<!--How to Create a Cookie?
The setcookie() function is used to set a cookie.
Note: The setcookie() function must appear BEFORE the <html> tag. 
Syntax
setcookie(name, value, expire, path, domain); 
Example 1
In the example below, we will create a cookie named "user" and assign the value "Alex Porter" to it. We also specify that the cookie should expire after one hour:
-->
<?php
setcookie("user", "Alex Porter", time()+3600);
?>

<html>
<!--..... 
Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
Example 2
You can also set the expiration time of the cookie in another way. It may be easier than using seconds.
-->
<?php
$expire=time()+60*60*24*30;
setcookie("user", "Alex Porter", $expire);
?>

<html>
<!--..... 
In the example above the expiration time is set to a month (60 sec * 60 min * 24 hours * 30 days).
________________________________________
How to Retrieve a Cookie Value?
The PHP $_COOKIE variable is used to retrieve a cookie value. 

In the example below, we retrieve the value of the cookie named "user" and display it on a page:
-->
<?php
// Print a cookie
echo $_COOKIE["user"];

// A way to view all cookies
print_r($_COOKIE);
?> 
<!--In the following example we use the isset() function to find out if a cookie has been set:
-->
<html>
<body>

<?php
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>

</body>
</html> 

<!--________________________________________
How to Delete a Cookie?
When deleting a cookie you should assure that the expiration date is in the past.
Delete example:
-->
<?php
// set the expiration date to one hour ago
setcookie("user", "", time()-3600);
?> 
<!--
________________________________________
What if a Browser Does NOT Support Cookies?
If your application deals with browsers that do not support cookies, you will have to use other methods to pass information from one page to another in your application. One method is to pass the data through forms (forms and user input are described earlier in this tutorial).
The form below passes the user input to "welcome.php" when the user clicks on the "Submit" button:
-->
<html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>

</body>
</html> 
<!--Retrieve the values in the "welcome.php" file like this:

-->
<html>
<body>

Welcome <?php echo $_POST["name"]; ?>.<br />
You are <?php echo $_POST["age"]; ?> years old.

</body>
</html> 

