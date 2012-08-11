Starting a PHP Session
Before you can store user information in your PHP session, you must first start up the session.
Note: The session_start() function must appear BEFORE the <html> tag:
<?php session_start(); ?>

<html>
<body>

</body>
</html> 
The code above will register the user's session with the server, allow you to start saving user information, and assign a UID for that user's session.
________________________________________
Storing a Session Variable
The correct way to store and retrieve session variables is to use the PHP $_SESSION variable:
<?php
session_start();
// store session data
$_SESSION['views']=1;
?>

<html>
<body>

<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>

</body>
</html> 
Output:
Pageviews=1 
In the example below, we create a simple page-views counter. The isset() function checks if the "views" variable has already been set. If "views" has been set, we can increment our counter. If "views" doesn't exist, we create a "views" variable, and set it to 1:
<?php
session_start();

if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?> 

________________________________________
Destroying a Session
If you wish to delete some session data, you can use the unset() or the session_destroy() function.
The unset() function is used to free the specified session variable:
<?php
unset($_SESSION['views']);
?> 
You can also completely destroy the session by calling the session_destroy() function:
<?php
session_destroy();
?> 
Note: session_destroy() will reset your session and you will lose all your stored session data.

