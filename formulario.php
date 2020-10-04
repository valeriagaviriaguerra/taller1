<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
<header>
    </header>
    <main>
    
          <div class="container text-purple">
              <div class="row justify-content-center mt-5">
                   <div class="col-4">

                   <form action="index.php" method="POST">
                   <h3 class="text-center mb-4">factura de compra</h3>
                     <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="producto1" name="producto1">
                        </div>
                        <div class="col">
                        <input type="number" class="form-control" placeholder="precio($)"name="precio">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="producto2"name="producto2">
                        </div>
                        <div class="col">
                          <input type="number" class="form-control" placeholder="precio($)"name="precio">
                        </div>
                      </div>
                      <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="producto3"name="producto3">
                        </div>
                        <div class="col">
                          <input type="number" class="form-control" placeholder="precio($)"name="precio">
                        </div>
                        <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="producto4"name="producto4">
                        </div>
                        <div class="col">
                          <input type="number" class="form-control" placeholder="precio($)"name="precio">
                        </div>
                        <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="producto5"name="producto5">
                        </div>
                        <div class="col">
                          <input type="number" class="form-control" placeholder="precio($)"name="precio">
                        </div>
                    </form>
                  <button type="submit" class="btn btn-primary btn-block"name=botoncalcular>calcular</button>
                </form>
              </div>
             </div>
           </div>

      <?php
      if(isset($_POST["botoncalcular"])):
        ?>

        <div class="border mt-5 px-2">
        <?php
      
        $producto1=$_POST["producto1"];
        $precio1=$_POST["precio1"];

        $producto2=$_POST["producto2"];
        $precio2=$_POST["precio2"];

        $producto3=$_POST["producto3"];
        $precio3=$_POST["precio3"];

        $producto4=$_POST["producto4"];
        $precio4=$_POST["precio4"];

        $producto5=$_POST["producto5"];
        $precio5=$_POST["precio5"];

        $total=$precio1+$precio2+$precio3+$precio4+$precio5;

          echo("el producto 1 es:".$producto1."----($)".$precio1.);
          echo("<br>");
          echo("el producto 2 es:".$producto2."----($)".$precio2.);
          echo("<br>");
          echo("el producto 3 es:".$producto3."----($)".$precio3.);
          echo("<br>");
          echo("el producto 4 es:".$producto4."----($)".$precio4.);
          echo("<br>");
          echo("el producto 5 es:".$producto5."----($)".$precio5.);
          echo("<br>");
          echo("<br>");
          echo("el total de su compra es de:". $total.);
        
      ?>
        
      
      <?php endif ?>
          

    
    </main>
    <footer>

    </footer>

    
</html> 
</body>
