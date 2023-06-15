<html>
    <head></head>
    <body>
        <form method="GET">
            <label for="fname">First Name</label>
            <input type="text" name="fname"/>
            <label for="lname">Last Name</label>
            <input type="text" name="lname"/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php

if(isset($_GET['fname']) && isset($_GET['lname'])){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    echo "Welcome " . $fname . " " . $lname;
}
else{
    echo "Please enter your first name and last name";
}

?>