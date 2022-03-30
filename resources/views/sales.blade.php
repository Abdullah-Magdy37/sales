<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <div class="row">
        <div class="col-md-7 offset-md-2">
            <h3> Sales  </h3>
            <hr>
            <form action="/sales/save" method="POST">

               @csrf
           

            <div class="form-group">
                <label for="body">Client </label>
                <input type="text" name="client" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body"> Prouduct</label>
                <input type="text" name="product" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Quantitey</label>
                <input type="text" name="quantitey" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Tax</label>
                <input type="text" name="tax"  class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Paid Up</label>
                <input type="text" name="paidup"  class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Residual </label>
                <input type="text" name="residual"  class="form-control" required>
            </div>


               <div class="form-group">
                  <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>




        </div>
    </div>

</body>
</html>
