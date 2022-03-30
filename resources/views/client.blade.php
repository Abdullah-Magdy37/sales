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
            <h3>Add New Client </h3>
            <hr>
            <form action="/client/save" method="POST">

               @csrf
               <div class="form-group">
                   <label for="title">Client Name In Arabic</label>
                   <input type="text" name="namear" id="title" class="form-control" required>
               </div>

               <div class="form-group">
                  <label for="body">Client Name In English</label>
                  <input type="text" name="nameen" id="title" class="form-control" required>
              </div>

            <div class="form-group">
                <label for="body">Tax Number</label>
                <input type="text" name="taxnum" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Address</label>
                <input type="text" name="address" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Mobile</label>
                <input type="text" name="phonenum" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Email</label>
                <input type="text" name="email"  class="form-control" required>
            </div>


               <div class="form-group">
                  <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>




        </div>
    </div>

</body>
</html>
