<?php 
extract ($_POST);
if (isset($save)){
    switch ($ch){
        case '+';
        $res = $num1 + $num2;
        break;
        case '-';
        $res = $num1 - $num2;
        break;
        case '*';
        $res = $num1 * $num2;
        break;
        case '/';
        $res = $num1 / $num2;
        break;
       
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <table border="1" align="center">
            <tr>
                <th>Your Result</th>
                <th><input type="number" name="res" value="<?php echo $res?>"></th>
            </tr>
            <tr>
                <th>Enter first number</th>
                <th><input type="number" name="num1"></th>
            </tr>
            <tr>
                <th>Enter second number</th>
                <th><input type="number" name="num2"></th>
            </tr>

            <tr>
                <th>Select your choice</th>
                <th>
                    <select name="ch">
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <input type="submit" name="save" value="Show Result">
                </th>
            </tr>
        </table>
    </form>

</body>
</html>