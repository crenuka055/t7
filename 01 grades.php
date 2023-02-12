<!DOCTYPE html>

<head>
    <title>Final Result!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></head>

    <?php
        error_reporting(E_ERROR | E_PARSE);
        $maths = $_POST['maths'];
        $web = $_POST['web'];
        $java = $_POST['java'];
        $python = $_POST['python'];
        $result = '';

        if (is_numeric($maths) && is_numeric($web) && is_numeric($java) && is_numeric($python)) {
            $result = ($maths+$web+$java+$python)/4;
            if($result >= 90)
                $grade = "A+";
            else if($result >= 80)
                $grade = "A";
            else if($result >= 60)
                $grade = "B";
            else if($result >= 50)
                $grade = "C";
            else if($result < 33)
                $grade = "Failed";
            else
                $grade = "Server is down, Please Try again later!";
            
        }
    ?>
<body>
    <div class="container-fluid">
        <h1>01 - Student Grade System</h1>
        <div class="row">
            <div class="col-sm pt-3">
                
                <div class="d-flex p-4 d-inline-flex justify-content-center bg-dark rounded text-white">
                    
                    <form action="" method="post" id="quiz-form">
                        <p>
                            <b>Maths</b>
                            <input class="rounded" type="number" name="maths" id="maths" required="required"
                            value="<?php echo $maths; ?>" /> 
                        </p>
                        <p>
                            <b>Web</b>
                            <input class="rounded" type="number" name="web" id="web" required="required"
                            value="<?php echo $web; ?>" /> 
                       </p>
                       <p>
                        <b>Java</b>
                        <input class="rounded" type="number" name="java" id="java" required="required"
                        value="<?php echo $java; ?>" /> 
                        </p>
                        <p>
                            <b>Python</b>
                            <input class="rounded" type="number" name="python" id="python" required="required"
                            value="<?php echo $python; ?>" /> 
                       </p>
                       <br>
                        <p>
                            <b class="#">Result</b>
                            <input class=="rounded" readonly="readonly" name="CalculatorResult" value="<?php echo $grade; ?>">
                        </p>
                        <input type="submit" class="btn btn-md btn-danger rounded" name="operator" value="SUBMIT" />
                    </form>                
                </div>
            </div>
            </div>
        </div>           
            <!-- Bootstrap JavaScript Loaded Here -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </body>
        
        </html>