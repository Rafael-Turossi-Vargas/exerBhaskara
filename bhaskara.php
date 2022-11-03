<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>bhaskara</title>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Resolvendo bhaskara</h1>
        </div>
        <form action="" method="GET">
            <div class="input-group input-group-lg mt-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Valor A </span>
                <input type="text" class="form-control" aria-label="sizing example input" name="a" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="input-group input-group-lg mt-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Valor B </span>
                <input type="text" class="form-control" aria-label="sizing example input" name="b" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="input-group input-group-lg mt-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Valor C </span>
                <input type="text" class="form-control" aria-label="sizing example input" name="c" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="col-auto mt-3">
                <button type="submit" class="btn btn-primary mb-3">Resolver questão</button>
            </div>
        </form>
        <?php
        //precisa pegar esses valores
        $a = $_GET['a'] ?? null;
        $b = $_GET['b'] ?? null;
        $c = $_GET['c'] ?? null;
        if ($a && $b && $c) {
            $delta = ($b * $b) - ((4 * $a) * $c);
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);

            echo "<div class='alert alert-sucess' role='alert'>
        o delta é $delta
      </div>";

            echo "<div class='alert alert-sucess' role='alert'>
        O x1 é igual $x1
      </div>";

            echo "<div class='alert alert-sucess' role='alert'>
        O x2 é igual $x2
      </div>";
        }
        ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>