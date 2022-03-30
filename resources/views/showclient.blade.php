<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <table id="example1" class="table key-buttons text-md-nowrap">
    <thead>
    <tr>
        <th class="border-bottom-0">Client Name Arabic</th>
        <th class="border-bottom-0">Client Name English </th>
        <th class="border-bottom-0">Tax Number</th>
        <th class="border-bottom-0">Address</th>
        <th class="border-bottom-0">Mobile</th>
        <th class="border-bottom-0">Email</th>
    </tr>
    </thead>
    <tbody>
        @foreach($clients as $client )
        <tr>
               <td>{{$client->client_name_ar}}</td>
               <td>{{$client->client_name_en}}</td>
               <td>{{$client->tax_number}}</td>
               <td>{{$client->address}}</td>
               <td>{{$client->mobile}}</td>
               <td>{{$client->email}}</td>
        </tr>
       @endforeach
    </tbody>
</table>
</body>
</html>
