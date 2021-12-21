<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Привіт</title>
</head>
<body>

    <h1>ім'я: {{$name?? 'Неправельний запит,поміняйте мову введення'}}</h1>
    <h1>прізвище: {{$familyname?? 'Неправельний запит,поміняйте мову введення'}}</h1>

<h2>Дата: {{$date ?? ' Дату не знайдено '}}</h2>
</body>
</html>
