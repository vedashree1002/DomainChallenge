<?php
include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MySQL</title>
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
    line-height: 40px;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

#container {
    display: flex;           
    align-items: center;     
    height:200px;
    justify-content: center;

}

.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
</head></title>
<body>
<?php
  $sql = "SELECT * from domain";

$result=mysqli_query($conn,$sql);
$content=mysqli_num_rows($result);

?>

<h2 align="center">Already existing domains</h2>
<table align="center">
  <tr>
    <th>Domain Name</th>
    <th>Description</th>
    <th>Creation date & time</th>
  </tr>
<?php

while($rows=mysqli_fetch_assoc($result)){

?>
<tr>
<td><?php echo $rows['domain_name'] ?></td>
<td><?php echo $rows['description'] ?></td>
<td><?php echo $rows['CreationDate'] ?></td>

</tr>

<?php
}
?>

</table>
<div id=container>
<input class=button button 1 type="button" onclick="location.href = 'index.html'" value="Back to my home page" />
</div>
</body>
</html>
