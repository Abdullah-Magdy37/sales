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
            <h3>Add New product </h3>
            <hr>
            <form action="/product/save" method="POST">

               @csrf
               <div class="form-group">
                   <label for="title">product Name In Arabic</label>
                   <input type="text" name="productnamear" id="title" class="form-control" required >
               </div>

               <div class="form-group">
                  <label for="body">Product Name In English</label>
                  <input type="text" name="productnameen" id="title" class="form-control" required>
              </div>

            <div class="form-group">
                <label for="body">Description In Arabic </label>
                <input type="text" name="descriptionar" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Description In English</label>
                <input type="text" name="descriptionen" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Selling Price</label>
                <input type="text" name="sellingprice" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Item Barcode</label>
                <input type="text" name="itembarcode"  class="form-control" required>
            </div>


               <div class="form-group">
                  <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>




        </div>
    </div>

</body>
</html>
