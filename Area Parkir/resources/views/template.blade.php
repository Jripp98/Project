<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/template.css">

    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <img src="https://thumbs.dreamstime.com/b/cars-parking-lot-parking-icon-logo-dark-background-white-cars-parking-lot-parking-icon-logo-dark-132661617.jpg" alt="logo" width="30px" height="30px"> 
        <a class="navbar-brand" href="/"> Area Parkir</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/tambahdata">Tambah Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/tampildata">Lihat Data</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <br/>
    <br/>

    <h3 style="color:blue">@yield('judul')</h3>

        @yield('konten')
        <br>
       
            
        <footer class="footer">
            
        <p style="color:black; font-size:14px; font-weight:bold">create by: Arif Maulana
        <br>Npm:2008107010026    
        </p>            
        <p style="color:white; font-size:14px; font-weight:bold">&copy; 2022 AreaParkir</p>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .footer{
            position: absolute;
            bottom: 0; 
        }
        .footer p{
            font-style:bold;
        }
    </style>
</body>
</html>