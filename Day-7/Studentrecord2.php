<?php
$connection = mysqli_connect("localhost", "root", "","db_internship");
echo "<table border = '1'>";
    $s = mysqli_query($connection,"select * from tbl_student where is_delete = 0") or die(mysqli_error($connection));

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
echo "<th>Address</th>";
echo "<th>Password</th>";
echo "<th>City</th>";
echo "<th>Bloodgroup</th>";
echo "<th>Dob</th>";
echo "<th>Action</th>";
echo "</tr>";

while($row = mysqli_fetch_array($s)){
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_password']}</td>";
    echo "<td>{$row['st_city']}</td>";
    echo "<td>{$row['st_bloodgroup']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td><a href='Delete2.php?deleteid={$row['st_id']}'>Delete</a></td>";
    echo "</tr>";
    
}
echo "<table>";    
    if($s){
        echo "<script>alert('record added');</script>";
    }
    

echo "<a href='InsertRecord2.php'>Add Record</a>";