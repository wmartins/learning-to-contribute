<?php require 'se_1505408_insert.php' ?>
<!DOCTYPE html>
<html>
<head>
  <link rel = "stylesheet" type = "text/css" href = "se_1505408_style.css">
</head>
<body>
  <h1>E-Form</h1>
  <form method="post" action="se_1505408_form.php">
    <label>Student ID:</label>
    <input type="text" name="studentId" pattern="^(0|[1-9][0-9]*)$">
    <br><br>
    <label>Name:</label>
    <input type="text" name="name" pattern="^[a-zA-Z ]*$">
    <br><br>
    <label>Email:</label>
    <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
    <br><br>
    <input type="submit" name="submit">
    <br><br>
  </form>
  <?php  if (count($errors) > 0) : ?>
      <?php foreach ($errors as $error) : ?>
        <p><?php echo $error ?></p>
      <?php endforeach ?>
    </div>
  <?php  endif ?>
  <?php echo $request ?>
</body>
</html>
