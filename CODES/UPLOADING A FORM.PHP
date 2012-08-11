Create an Upload-File Form
/*To allow users to upload files from a form can be very useful. 
Look at the following HTML form for uploading files:*/
<html>
<body>

<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html> 
/*Notice the following about the HTML form above:
•	The enctype attribute of the <form> tag specifies which content-type to use when submitting the form. "multipart/form-data" is used when a form requires binary data, like the contents of a file, to be uploaded
•	The type="file" attribute of the <input> tag specifies that the input should be processed as a file. For example, when viewed in a browser, there will be a browse-button next to the input field
Note: Allowing users to upload files is a big security risk. Only permit trusted users to perform file uploads.

Create The Upload Script
The "upload_file.php" file contains the code for uploading a file:
*/
<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
?> 
/*By using the global PHP $_FILES array you can upload files from a client computer to the remote server.
The first parameter is the form's input name and the second index can be either "name", "type", "size", "tmp_name" or "error". Like this:
•	$_FILES["file"]["name"] - the name of the uploaded file
•	$_FILES["file"]["type"] - the type of the uploaded file
•	$_FILES["file"]["size"] - the size in bytes of the uploaded file
•	$_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
•	$_FILES["file"]["error"] - the error code resulting from the file upload
This is a very simple way of uploading files. For security reasons, you should add restrictions on what the user is allowed to upload.
Restrictions on Upload
In this script we add some restrictions to the file upload. The user may only upload .gif or .jpeg files and the file size must be under 20 kb:
*/
<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
    }
  }
else
  {
  echo "Invalid file";
  }
?> 
/*Note: For IE to recognize jpg files the type must be pjpeg, for FireFox it must be jpeg.
Saving the Uploaded File
The examples above create a temporary copy of the uploaded files in the PHP temp folder on the server.
The temporary copied files disappears when the script ends. To store the uploaded file we need to copy it to a different location:
*/
<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?> 
/*The script above checks if the file already exists, if it does not, it copies the file to the specified folder.
Note: This example saves the file to a new folder called "upload"
*/
