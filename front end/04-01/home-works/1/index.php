<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Home works</title>
    </head>
    <body>
        <div class="container">
            <div class="card text-center">
                <h5 class="card-header">Nupieškite" tokio tipo piramidę:</h5>
                <div class="card-body text-left">
                    <?php 
                    print "1<br>";
                    print "22<br>";
                    print "333<br>";
                    print "4444<br>";
                    print "55555<br>";
                    print "666666<br>";
                    print "7777777<br>";
                    print "88888888<br>";
                    print "999999999<br>";
                    ?>
                </div>
            </div>
            <div class="card text-center">
                <h5 class="card-header">Parašykite funkciją kuri unserscore_case konvertuoja i camelCase;</h5>
                <div class="card-body">
                    <?php 
                    $string='this-is-a-string' ;
                    echo   str_replace('-', ' ', ucwords($string, "-"));
                    ?>
                </div>
            </div>
            
            <!--nepabaikta-->
            
            <!--<div class="card text-center">
                <h5 class="card-header">Parašykite funkciją kuri priima kaip argumentą/paramėtrą "2014-12-31" formato datą ir grąžina zodiako ženklą.</h5>
                <div class="card-body">
                    <div class="md-form input-with-pre-icon md-4">
                        <i class="fas fa-user input-prefix"></i>
                        <input type="text" id="prefixInside" class="form-control" >
                        <label for="prefix">Example label </label>
                    </div>
                    <?php ?>
                </div>
            </div>-->
            <div class="card text-center">
                <h5 class="card-header">Sukurkite formą su GET metodu, kurioje būtų
                    skaičiuojama dviejų skaičių daugyba.</h5>
                <div class="card-body">
                    <div class="md-form input-with-pre-icon md-4">
                        <i class="fas fa-user input-
                                  prefix"></i>
                        <form>
                            <p class="text-left">Pirmas numeris</p>
                            <input type="text" name="first" id="prefixInside" class="form-control" >
                            <br>
                            <p class="text-left">Antras numeris</p>
                            <input type="text" name="second" id="prefixInside" class="form-control" >
                            <br>
                            <button type="submit" name="calc" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    <?php 
                    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['calc']))
                    {
                        calculate();
                    }

                    function calculate() { 
                        $x = $_GET["first"];
                        $y = $_GET["second"];
                        $total = $x * $y;
                        print $total;
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>