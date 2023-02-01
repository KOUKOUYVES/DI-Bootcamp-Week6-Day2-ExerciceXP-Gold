<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">ExerciceXP 3 Get The Century</h1>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer une année</label>
                <input type="number" name="number" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php
        function calculSiecle($number)
                {
                    ///verification et calcul de siecle
                    if( $number <= 1000 || $number > 2010 )
                        echo " $number pas de siècle pour cette année\n";
                    else
                        echo floor($number / 100) + 1 , " siècle à pour année " . $number;    
                }
                ///verification des inputs
                if(isset($_POST['submit']))
            { 
                $number = $_POST['number']; 
                /////appelle la fonction calcul
                echo calculSiecle($number);
            }

                    
        ?>
    </div>
</body>
</html>