<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <input type="checkbox" name="is_active" value="1"> Is Active
        <input type="submit" value="Submit">
    </form>
</body>
</html>
