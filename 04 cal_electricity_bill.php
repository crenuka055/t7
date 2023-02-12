<!DOCTYPE html>

<head>
    <title>Final Result!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"></head>

    <?php
        error_reporting(E_ERROR | E_PARSE);
        $units = $_POST['units'];
        $bill = '';

        if (is_numeric($units)) {
            $tmp = $units;
            if($units <= 50) 
                $bill = ($units * 3.5);
                // echo "Total amount of" + $units "-" + $bill;
            else if($units >= 250)
                $bill = ($units * 6.5);
            else if($units >= 200)
                $bill = ($units * 5.20);
            else if($units >= 100)
                $bill = ($units * 4.00);
            else
                $bill = "Server Issue, Plz..try again later!";
        }
    ?>
<body>
    <div class="container-fluid">
        <h1>04 - Calc Electricity Bill</h1>
        <div class="row">
            <div class="col-sm pt-3">
                
                <div class="d-flex p-4 d-inline-flex justify-content-center bg-dark rounded text-white">
                    
                    <form action="" method="post" id="quiz-form">
                        <p>
                            <b>Unit</b>
                            <input class="rounded" type="number" placeholder="Please enter no. of Unit" name="units" id="units" required="required"
                            value="<?php echo $units; ?>" /> 
                        </p>
                       <br>
                        <p>
                            <b class="#">Bill</b>
                            <input class="rounded"  placeholder="Get Bill" readonly="readonly" name="bill" value="<?php echo $bill; ?>">RS
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