<html>
    <head></head>
    <body>
        <form method="POST">
            <label for="name">Enter your name</label>
            <input type="text" name="name"/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>

<?php
 $greetings = array(
    "hello", "hi", "bonjour", "hi there", "hola"
 );

 $randomGreeting = $greetings[array_rand($greetings)];
 if(isset($_POST["name"])){
    $name = $_POST["name"];
    echo "$randomGreeting, $name!";
 }
?>