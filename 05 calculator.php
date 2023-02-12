<!DOCTYPE html>

<head>
    <title> Write a simple calculator program in PHP using the switch statement by T4Tutorials.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></head>

    <?php
        error_reporting(E_ERROR | E_PARSE);
        $FirstNumber = $_POST['FirstNumber'];
        $SecondNumber = $_POST['SecondNumber'];
        $operator = $_POST['operator'];
        $CalculatorResult = '';
            if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
                switch ($operator) {
                    case "Sum":
                        $CalculatorResult = $FirstNumber + $SecondNumber;
                        break;
                    case "Subtraction":
                        $CalculatorResult = $FirstNumber - $SecondNumber;
                        break;
                    case "Multiplication":
                        $CalculatorResult = $FirstNumber * $SecondNumber;
                        break;
                    case "Division":
                        $CalculatorResult = $FirstNumber / $SecondNumber;
                        break;
                }
            }
    ?>
<body>
    <div class="container-fluid">
        <h1>PHP - Simple Calculator Program</h1>
        <div class="row">
            <div class="col-sm pt-3">
                
                <div class="d-flex p-4 d-inline-flex justify-content-center bg-dark rounded text-white">
                    
                    <form action="" method="post" id="quiz-form">
                        <p>
                            <b>Value 1</b>
                            <input class="rounded" type="number" name="FirstNumber" id="FirstNumber" required="required"
                            value="<?php echo $FirstNumber; ?>" /> 
                        </p>
                        <p>
                            <b>Value 2</b>
                            <input class="rounded" type="number" name="SecondNumber" id="SecondNumber" required="required"
                            value="<?php echo $SecondNumber; ?>" /> 
                       </p>
                        <p>
                            <b class="#">Result</b>
                            <input class="rounded" readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>">
                        </p>
                        <input type="submit" class="btn btn-md btn-primary rounded" name="operator" value="Sum" />
                        <input type="submit" class="btn btn-md btn-danger rounded" name="operator" value="Subtraction" />
                        <input type="submit" class="btn btn-md btn-warning rounded" name="operator" value="Multiplication" />
                        <input type="submit" class="btn btn-md btn-outline-secondary text-white rounded" name="operator" value="Division" />
                    </form>                
                </div>
            </div>
            </div>
        </div>           
            <!-- Bootstrap JavaScript Loaded Here -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </body>
        
        </html>