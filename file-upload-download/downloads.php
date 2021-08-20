<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<div class="header">
    <h1>Upload Download Ask Answer</h1>
    <p>By Students For Students</p>
  </div>

<div class="navbar">
    <a href="#">Dashboard</a>
    <a href="index.php">File Upload</a>
    
    <a href="#" class="right">Logout</a>
  </div>



  <center><h1>DOWNLOADS
    </h1></center>
<table>
<thead>
    <th>ID</th>
    <th>Course Name</th>
    <th>Description</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['course_name']; ?></td>
      <td><?php echo $file['course_description']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>