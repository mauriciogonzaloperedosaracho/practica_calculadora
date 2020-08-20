<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Calculadora simple</title>
    
  </head>
  <body>
  <div class="container">
      <h1><span class="text-primary"> Calculadora simple</span></h1>
      <h2 class="text blue">Ingrese 2 números y seleccione el operador</h2>
      <form action="{{ route('formcalculadora.ejecucion') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="a" class="text-info"> Ingrese el primer número:</label>
            <input class="form-control" step="any" type="number" name="n1" id="n1" placeholder="Ingrese su número aquí">
        </div>
        <div>
        <label for="a" class="text-info">Elija el operador:</label>
        <select class="custom-select custom-select-sm" name="op" id="op">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
          <option value="^">^</option>
        
        </select>
        </div>
        <div class="form-group">
            <label for="b" class="text-info">Ingrese el segundo número:</label>
            <input class="form-control" step="any" type="number" name="n2" id="n2" placeholder="Ingrese su número aquí">
        </div>
            
        <button class="btn btn-primary">Calcular</button>
      </form>

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>