<html>
    <head></head>
    <body>
        <form method="POST">
            <label for="name">Name</label>
            <input type="text" name="name"/>
            <label for="usn">USN</label>
            <input type="text" name="usn"/>
            <label for="email">Email</label>
            <input type="text" name="email"/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
if(isset($_POST['name']) && isset($_POST['usn']) && isset($_POST['email'])){
    $name = $_POST["name"];
    $usn = $_POST['usn'];
    $email = $_POST['email'];

    echo "user " . $name . " " . "successfully registered with usn " . $usn . " and email " . $email;
}
else{
    echo "Please enter your details";
}

?>