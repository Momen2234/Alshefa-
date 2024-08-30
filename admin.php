<?php
    include "header.php";
?>

<table>
    <th>الرقم</th>
    <th>اسم المريض</th>
    <th>البريد الإلكتروني</th>
    <th>التاريخ</th>

<?php
    $host ="localhost";
    $user ="root";
    $password="";
    $dbName="hospital";
    $conn=mysqli_connect($host, $user,$password,$dbName);

    $query='SELECT * FROM users ';
    $result = mysqli_query($conn,$query);
    if ($result) {
        while ($r = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$r['id']."</td><td>".$r['name']."</td><td>".$r['email']."</td><td>".$r['date']."</td></tr>";
        }
    }
    
?>
</table>