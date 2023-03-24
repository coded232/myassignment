<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Sample Form</title>
   </head>
   <body>
      <center>
         <h1>Storing Form data in Database</h1>
         <form action="insert.php" method="post">
            <p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="first_name">
            </p>
            <p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
            </p>
            <p>
                <label for="cars">Choose a car:</label>
  <select id="gender" name="gender">
    <option value="Male">Male </option>
    <option value="Female">Female</option>
 
  </select>
            </p>
            <p>
               <label for="password">password:</label>
               <input type="password" name="password" id="password">
            </p>
			<p>
			 <label for="text">Enter Text :</label>
            <textarea id="text" name="entertext" rows="4" cols="50">
</textarea>
</p>
            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>
