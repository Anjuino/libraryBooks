@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
<link href="/site.css" rel="stylesheet" />
<meta charset="utf-8" />
</head>
<body>
<form action="/">
<button>На главную</button>
</form>
<h2>Авторы</h2>
<?php
$conn = new mysqli("localhost", "root", "acea", "books");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT id, FIO, Date_of_Birth, City FROM `author` ORDER BY `ID`;";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; 
    echo "<p>Всего авторов: $rowsCount</p>";
    echo "<table><tr><th>Автор</th><th>Год рождения</th><th>Город</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["FIO"] . "</td>";    
            echo "<td>" . $row["Date_of_Birth"] . "</td>";
            echo "<td>" . $row["City"] . "</td>";
            if (Auth::check()) {
            echo "<td><form action='deleteauthor.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' value='Удалить'>
                   </form></td>";
            echo "<td><form action='updateauthor.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                       <!-- <input type'text' placeholder='ФИО' name='FIO' /> -->
                        <input type='text' placeholder='Город' name='City' />
                        <input type='submit' value='Изменить'>
              </form></td>";
            }
        echo "</tr>";
    }
    echo "</table>";
    if (Auth::check()) {
        echo "<h3> Добавление автора </h3>
        <form action='author.php' method='post'>
        <p>Фамилия имя отчество: <input type='text' name='author' /> </p>
        <p>Дата рождения: <input type='date' id='date' name='data'/> </p>
        <p>Город: <input type='text' name='city' /> </p>
        </form>";
        }
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>
@endsection