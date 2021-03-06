<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<section style="padding-top:60px";>
    <div class="container">
       <div class="row">
           <div class="col-md-6 offset-md-3">
               <div class="card">
                   <div class="card-header">
                        Contact Us
                   </div>
                   <div class="card-body">
                       @if(Session::has('message_sent'))
                       <div class="alert alert-success" role="alert">
                           {{ Session::get('message_sent') }}

            
                       </div>

                       @endif
                       <form method="POST" action="{{ route('contact.send')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" name="name" class="form-control"/>

                          </div>

                          <div class="form-group">
                            <label for="email">Email </label>
                            <input type="text" name="email" class="form-control"/>

                          </div>
                          <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone"class="form-control"/>

                          </div>

                        <div class="form-group">
                            <label for="msg">message</label>
                            <textarea name="msg" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>


                       </form>
                   </div>



               </div>
           </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>