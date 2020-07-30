<!-- <!DOCTYPE html>
<html>
    <body>
        Welcome <?php echo $_POST['name']; ?><br>
        Your email <?php echo $_POST["email"]; ?><br>
        Gender: <?php echo $_POST["gender"]; ?><br>
        <?php echo("hello world") ?>
    </body>
</html> -->
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        // $email = $_POST['email'];
        $gender = $_POST['gender'];
        $personality = $_POST['personality'];

        echo "Name: ".$name."<br>";
        echo "Gender:".$gender."<br>";
        echo "Personality:".$personality."<br>";
        // echo "Email:".$email."<br>";
    }
    elseif(isset($_GET['submit'])){
        $name = $_GET['name'];
        $gender = $_GET['gender'];
        $personality = $_GET['personality'];

        echo "Name: ".$name."<br>";
        echo "Gender:".$gender."<br>";
        echo "Personality:".$personality."<br>";
    }
?>

<?php
pre_r($_POST);
pre_r($_GET);
pre_r($_REQUEST);

function pre_r($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>