<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// $a = 1;

// while ($a <= 10) {
//     $a ++ ;
//     echo('hello world' . '<br/>');
// }
echo '<pre>';
var_dump($_POST);
echo '</pre>'
?>
<form action ='<?php echo $_SERVER['PHP_SELF'] ?>' method ='POST'>
    <div>
        <input type ='text' name='first_name' placeholder='First Name'/>
</div>
    <div>
        <input type ='text' name='last_name' placeholder='Last Name'/>
</div>
    <div>
        <input type ='text' name='email_address' placeholder='email Address'/>
</div>
<button type='submit'>Submit </button>
</form>

</body>
</html>