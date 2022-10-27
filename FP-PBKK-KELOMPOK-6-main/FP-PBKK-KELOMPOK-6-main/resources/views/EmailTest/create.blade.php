<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Queue jobs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
        <br>
         <h3>Send mail to multiple users using Queue in Laravel 8.</h3>
         <br>
         <br>
         <div class="card">
            <form method="post" action="{{route('send.email')}}">
               @csrf
               <div class="card-header">Please fill up all the Field's.</div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <label for="Name">Product Name :</label>
                        <input type="text" class="form-control" name="name" required>
                     </div>
                     <div class="col-md-6">
                        <label for="description">Description  :</label>
                        <input type="text" class="form-control"  name="description" required>
                     </div>
               </div>
               </div>
               <div class="col-md-3">
                  <button type="submit" class="btn btn-block btn-info btn-sm">Save</button>
               </div>
          </div>
         </form>
      </div>
   </body>
   </html>