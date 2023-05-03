<?php 

$html_input = isset($_GET['html_input']) ? $_GET['html_input'] : '';
// $allowed_chars = '/^[0-9+\-*. \/]+$/'; //solved with chatGPT
$allowed_chars = '/^[0-9()+\-*. \/]+$/'; //solved with chatGPT

// eval('$rezultat = ' .$html_input.';');
// echo $rezultat;

if (preg_match($allowed_chars, $html_input)) {
    $result = eval('return '. $html_input. ';');
} else{
    echo '';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <section class="input_section">
    <form action="" method="get" class="top_form">
        <input type="text" id="html_input" name="html_input" class="html_input" value="<?php 
        if (isset($result)){
            echo $result;
        } else echo '';
        ?>" placeholder="0">
        <input type="submit" id="equal_sign" name="equal_sign" class="equal_sign" value="=">
    </form>
        </section>
    
    <section class="buttons_section">

    <div class="left_buttons">
    <div class="first_buttons">
            <input type="button" id="button_minus" name="button_minus" class="button_left" value="<-" onclick="backspace()">
            <input type="button" id="button_c" name="button_c" class="button_left" value="C" onclick="clearImput()">
            <input type="button" id="button_left_br" name="button_left_br" class="button_left" value="(" onclick="getValue('(')">
            <input type="button" id="button_right_br" name="button_right_br" class="button_left" value=")" onclick="getValue(')')">
        </div>
        <div class="first_buttons">
            <input type="button" id="button_7" name="button_7" class="button_left" value="7" onclick="getValue('7')">
            <input type="button" id="button_8" name="button_8" class="button_left" value="8" onclick="getValue('8')">
            <input type="button" id="button_9" name="button_9" class="button_left" value="9" onclick="getValue('9')">
            <input type="button" id="button_minus" name="button_minus" class="button_left" value="-" onclick="getValue('-')">
        </div>
        <div class="first_buttons">
            <input type="button" id="button_4" name="button_4" class="button_left" value="4" onclick="getValue('4')">
            <input type="button" id="button_5" name="button_5" class="button_left" value="5" onclick="getValue('5')">
            <input type="button" id="button_6" name="button_6" class="button_left" value="6" onclick="getValue('6')">
            <input type="button" id="button_add" name="button_add" class="button_left" value="+" onclick="getValue('+')">
        </div>
        <div class="first_buttons">
            <input type="button" id="button_1" name="button_1" class="button_left" value="1" onclick="getValue('1')">
            <input type="button" id="button_2" name="button_2" class="button_left" value="2" onclick="getValue('2')">
            <input type="button" id="button_3" name="button_3" class="button_left" value="3" onclick="getValue('3')">
            <input type="button" id="button_div" name="button_div" class="button_left" value="/" onclick="getValue('/')">
        </div>
        <div class="first_buttons">
            <input type="button" id="button_min" name="button_min" class="button_left" value="-" onclick="getValue('-')">
            <input type="button" id="button_0" name="button_0" class="button_left" value="0" onclick="getValue('0')">
            <input type="button" id="button_dot" name="button_dot" class="button_left" value="." onclick="getValue('.')">
            <input type="button" id="button_multi" name="button_multi" class="button_left" value="*" onclick="getValue('*')">
        </div>

    </div>
    </section>
    </div>






    

</body>
<script src="script.js"></script>
</html>

