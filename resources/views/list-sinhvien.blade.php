<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sinh viên</h1>
    <table border="1"> 
        <thead>
            <tr>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Chuyên ngành</th>
                <th>Tuổi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ( $sinhvien as $value )

            <tr>
                <td><?=$value['hoTen']?></td>
                <td><?=$value['ngaySinh']?></td>
                <td><?=$value['chuyenNganh']?></td>
                <td><?=$value['tuoi']?></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>