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
               <label for="userName">User Name:</label>
               <input type="text" name="user_name" id="userName">
            </p>
            <p>
               <label for="marks">Score:</label>
               <input type="int" name="marks" id="marks">
            </p>
            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>
