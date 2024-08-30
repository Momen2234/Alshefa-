<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alshefa'</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/logo.png" >
            <h2>مستشفى الشفاء</h2>
        </div>
    <div class="book">
        <p>اهلا بكم في مستشفى الشفاء. للحجز يرجى ملئ الاستمارة</p>
        <form action="index.php" method="post">
            <input type="text" placeholder="ادخل اسمك" name="name"  >
            <input type="text" placeholder="ادخل البريد" name="email"  >
            <input type="date" name="date"  >
            <input type="submit" value="احجز الان" name="send">
        </form>
        <?php
            $host ="localhost";
            $user ="root";
            $password="";
            $dbName="hospital";
            $conn=mysqli_connect($host, $user,$password,$dbName);

            $pName=$_POST['name'];
            $pEmail=$_POST['email'];
            $pDate=$_POST['date'];
            $pSend=$_POST['send'];
            if ($pSend) {
                $query= "INSERT INTO users (name,email,date)VALUE('$pName','$pEmail','$pDate')";
                $result=mysqli_query($conn,$query);
                echo 'تم الحجز';
            }
        ?>
    </div>
    </div>
</body>
</html>