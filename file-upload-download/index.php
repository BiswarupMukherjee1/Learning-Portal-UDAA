<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>


  <div class="header">
    <h1>Upload Download Ask Answer</h1>
    <p>By Students For Students</p>
  </div>

  <div class="navbar">
    <a href="#">Dashboard</a>
    <a href="downloads.php">Downloads</a>
    <a href="downloads.php">Uploaded Files</a>
    <a href="#" class="right">Logout</a>
  </div>


<div class="row">
  <div class="side">
    <h2>File Upload
    </h2>
    <h3>Please upload the file and fill the details in the form. Then click the submit button.</h3>
    <p style="font-size:20px;">Do not Worry! Your file is safe with us.</p>
  </div>

  <div class="main">
    <h1>File Upload</h1>
    <h3>Fill in the required Details</h3>

    <div class="container">
      <div class="rw">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Course id</h3>
          <input type="text" name="id" id="id"><br>
          <h3>Course Name</h3>
          <input type="text" name="c_name" id="c_name"><br>
          <h3>Course Description</h3>
          <input type="text" name="descrip" id="descrip"><br>
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>

          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="footer">
  
  <p style="font-size:20px;">“Always have a willing hand to help someone, you might be the only one that does.”
– Roy T. Bennett</p>
</div>
  </body>
</html>