<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sms teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>

        <center>
            <form action="{{ url('/sendsms') }}" method="post">
                @csrf
        <div class="mb-3">
            <label>telefone</label>
            <input type="text" name="phone">
          
        </div>
        <div class="mb-3">
            <label for="" class="">mensagem</label>
            <input type="text" name="message">
        </div>
        
        <input type="submit" class="btn btn-primary" value="enviar"></input>
        </form>
        </center>
    
</body>
</html>