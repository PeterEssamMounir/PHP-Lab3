<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
  <h1>Application name: AAST_BIS class registration </h1>
  <p style="color:red">* Required field</p>

<form method="post" action="part1.php">
  <div>
    <label for="name">Name:*</label>
    <input type="text" id="name" name="name" required >
  </div>
  <div>
    <label for="email">Email:*</label>
    <input type="email" id="email" name="email" required oninvalid="this.setCustomValidity('Please enter your Email')">
  </div>
  <div>
    <label for="group">Group #:</label>
    <input type="number" id="group" name="group">
  </div>
  <div>
    <label for="classDetails">Class details:</label>
    <textarea id="class_details" name="classDetails"></textarea>
  </div>
  <div>
    <label for="gender">Gender:</label>
    <label><input type="radio" name="gender" value="male" required> Male</label>
    <label><input type="radio" name="gender" value="female" required> Female</label>
  </div>
  <div>
    <label for="courses">Courses:</label>
    <select id="courses" name="courses[]" multiple >
      <option value="PHP">PHP</option>
      <option value="MySQL">MySQL</option>
      <option value="CSS">CSS</option>
      <option value="HTML">HTML</option>
    </select>
  </div>
  <div>
    <label for="agree">I agree:*</label>
    <input type="checkbox" id="agree" name="agree" required>
  </div>
  <button type="submit">Submit</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $group = $_POST['group'];
  $class_details = $_POST['classDetails'];
  $gender = $_POST['gender'];
  $courses = $_POST['courses'];
  $agree = isset($_POST['agree']) ? 'Yes' : 'No';

  echo "<p>Name: $name</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Group: $group</p>";
  echo "<p>Class Details: $class_details</p>";
  echo "<p>Gender: $gender</p>";
  echo "<p>Courses: " . implode(', ', $courses) . "</p>";
}
?>



</body>
</html>
