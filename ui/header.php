<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <title>Netflix</title>
</head>

<body class="bg-dark text-white">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark border-bottom border-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="/netflix/index.php">Netflix</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/netflix/series.php">Series</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/netflix/films.php">Films</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">A propos</a>
          </li>
        </ul>
        <form action="" class="d-flex" method="get" role="search">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search" name="mc">
          <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </nav>
  <section>
  