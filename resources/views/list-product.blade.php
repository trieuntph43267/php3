<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào tất cả các bạn</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
        </thead>

        <tbody>
            @foreach($product as $value)
                <tr>
                    <td><?=$value['id'] ?></td>
                    <td><?=$value['name'] ?></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>