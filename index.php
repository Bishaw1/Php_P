

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--  //*Email Validation & Password Validation-->
    <form action="./verification.php" method="POST" class="col-4 mx-auto mt-5">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- //*Bill system  -->
<form action="./bill.php" method="POST" class="col-4 mx-auto mt-5">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Bill Amount</label>
    <input name="amount" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- //*TimeTable  -->
<form action="./timeTable.php" method="POST" class="col-4 mx-auto mt-5">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Time Table</label>
    <input name="number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- //*Odd and Even number check  -->
<form action="./numberCheck.php" method="POST" class="col-4 mx-auto mt-5">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Odd or Even Number Check</label>
    <input name="num" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>