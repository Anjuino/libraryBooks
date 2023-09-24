@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ru">
  <head>
  <link href="/site.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реестр книг</title>
  </head>
  <body>
    <header>
      <h1>Вэб библиотека книг</h1>
        <ul>
          <form action=1.blade.php>
          <button>Вывести список жанров</button>
          </form>
          <br>
          <form action=5.blade.php>
          <button>Вывести список авторов</button>
          </form>
          <br>
          <form action=3.blade.php>
          <button>Вывести список книг</button>
          </form>
          <br>
          <form action=2.blade.php>
          <button>Вывести список авторов с указанием количества книг</button>
          </form>
          <br>
          <form action=4.blade.php>
          <button>Вывести авторов и количество книг</button>
          </form>
        </ul>
    </header>
    <footer>
      <p>Разработано в рамках выполнения тестового задания</p>
    </footer>
  </body>
</html>
@endsection