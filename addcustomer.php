<!DOCTYPE html>
<html>
  <div class="container">
  <h1>Add Customer</h1>
  <form method="POST" enctype="multipart/form-data" action="user.php">
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
	<label for="password">Password:</label><br>
    <input type="text" id="password" name="password"><br>   
    <label for="mobile">Mobile:</label><br>
    <input type="text" id="mobile" name="mobile"><br>   
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <input type="submit" name="add_user" value="Add User" />
  </form>

  </div>
</html>

