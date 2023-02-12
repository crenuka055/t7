<!DOCTYPE html>

<head>
    <title>Final Result!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></head>

    <?php
        error_reporting(E_ERROR | E_PARSE);
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $max = '';

        if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
            if($num1 > $num2 && $num1 > $num3)
                $max = $num1;
            else if($num2 > $num1 && $num2 > $num3)
                $max = $num2;
            else
                $max = $num3;      
        }
    ?>
<body>
    <div class="container-fluid">
        <h1>02 - Find Max Number</h1>
        <div class="row">
            <div class="col-sm pt-3">
                
                <div class="d-flex p-4 d-inline-flex justify-content-center bg-dark rounded text-white">
                    
                    <form action="" method="post" id="quiz-form">
                        <p>
                            <b>1st Value</b>
                            <input class="rounded" type="number" name="num1" id="num1" required="required"
                            value="<?php echo $num1; ?>" /> 
                        </p>
                        <p>
                            <b>2nd Value</b>
                            <input class="rounded" type="number" name="num2" id="num2" required="required"
                            value="<?php echo $num2; ?>" /> 
                       </p>
                       <p>
                        <b>3nd Value</b>
                        <input class="rounded" type="number" name="num3" id="num3" required="required"
                        value="<?php echo $num3; ?>" /> 
                        </p>
                       <br>
                        <p>
                            <b class="#">Result</b>
                            <input class="rounded" readonly="readonly" name="max" value="<?php echo $max; ?>">
                        </p>
                        <input type="submit" class="btn btn-md btn-danger rounded" name="operator" value="GET" />
                    </form>                
                </div>
            </div>
            </div>
        </div>           
            <!-- Bootstrap JavaScript Loaded Here -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </body>
        
        </html>