<!DOCTYPE html>
<html>
<head>
    <title>Vol-Evade Hunger</title>
    <link rel="stylesheet" href="style.css">
<style>
body{
    width: 100%;
    height: 100vh;
    margin:0;
    background-color: #18181d;
    color: #f5f6f7;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 20px;
}
table {
    border: 1px solid #1e1e60;
    width: 100%;
    color: #f5f6f7;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}
td{
    border: 1px solid #1e1e60;
}
th {
color: white;
}

</style>
</head>
<body>
<div class="topnav">
            <a href="index.html">Home</a>
          </div>
    <center><h1>Evade Hunger Volunteer Portal</h1></center><br><br><br>
<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Mail ID</th>
<th>Phone Number</th>
<th>Food Supplies</th>
<th>Address</th>
<th>Pincode</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "weboe");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fname, lname, mail, pno, donno, addr, pcode FROM food";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["fname"]. "</td><td>" . $row["lname"] . "</td><td>"
. $row["mail"]. "</td><td>" . $row["pno"]. "</td><td>" . $row["donno"]. "</td><td>" . $row["addr"]. "</td><td>" . $row["pcode"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>