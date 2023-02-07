<?php include "header.php"?>

<h3>
    
</h3>

<h2>
Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site. 

</h2>

<form action="action.php" method="post">
 <div class= "row">

 <div class = "col">
 <input type= "text" name="fname" required placeholder="First Name"class= "form control">  
</div>
<div class = "col">
<input type= "text" name="lname" required placeholder= "Last Name" > </div>
</div>

Birth Date: <input type= "date" name= "bdate"> <br>
Select fav color: <input type= "color" name= "color"> <br>
<input type = "submit" value= "submit">

<h3>
Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.
</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pekka</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Johanna</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
</form>

<h4>
Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string
</h4>

<?php
$Occupation= "Student";
$Course= "Computer Applications";

$joined = $Occupation. " " . $Course;
echo $joined;
?>
<h4>
Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.

</h4>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1 + $num2 + $num3;

echo "The sum of " . $num1 . ", " . $num2 . " and " . $num3 . " is: " . $sum . "\n";
?>

<h4>
Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER).
</h4>

<?php
echo $_SERVER ['HTTP_USER_AGENT']
?>






<?php include "footer.php"?>