<?php

    if(isset($_POST['fact-submit'])){

        $divident_amount_val = $_POST['factorval'];

        $factoral_output = $divident_amount_val;

        $factorby = 1;

        for($i = $factoral_output; $i>0; $i--){
            $factorby = $factorby*$i;

            $factor_result = $factorby;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="input-container">
            <form action="" method="post">
        
                <label for="factoral">Get Factorial Of</label>
                <input type="number" name="factorval" id="factoral" required>
                
                <input type="submit" name="fact-submit">
            </form>
            <?php if(isset($factor_result)) : 
            ?>

            <div class="result">
                <h4 id="remainderdiv"><?php echo "Factorial of {$factoral_output} is {$factor_result}";;  ?></h4>
            </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</body>
</html> 