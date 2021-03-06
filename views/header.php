<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css" type="text/css">
        
        <title>Film</title>
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="/">Главная</a>
    <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/film/create">Добавить новый фильм</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/film/alphabet">Сортировать по алвафиту</a>
            </li>
            <form name="search" method="post" action="/film/search" class="form-inline my-2 my-lg-0">
                <input name="title" class="form-control mr-sm-2" type="search" placeholder="Поиск по названию" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item active">
                <a class="nav-link btn btn-warning" href="/film/import">Импорт данных</a>
            </li>
        </ul>
        <form name="search" method="post" action="/film/search" class="form-inline my-2 my-lg-0">
            <input name="stars" class="form-control mr-sm-2" type="search" placeholder="Поиск по актерам" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>

    </div>
</nav>

    <!-- Пустой блок -->        
    <div class="col-12 ml-auto mr-3" style="height: 50px;"></div>

