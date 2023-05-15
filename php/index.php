<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <title>Document</title>
</head>
<body>
<div class="col-6 container mx-auto my-5"> 
<form action="outputpage.php" method="GET">
  <div class="mb-3">
    <label for="testo" class="form-label">Inserisci un piccolo testo</label>
    <input type="text" class="form-control" id="testo" name="testo" placeholder="Inserisci ">
  </div>
  <div class="mb-3">
    <label for="wordCensured" class="form-label">Inserisci parola da censurare</label>
    <input type="text" class="form-control" id="wordCensured"
    name="wordCensured">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>