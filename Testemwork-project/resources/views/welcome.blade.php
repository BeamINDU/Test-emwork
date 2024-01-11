<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>

<body>

    <form method="post">
        @csrf
        <label for="title_prefix">คำนำหน้าชื่อ:</label>
        <select name="title_prefix" id="title_prefix">
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
        <br>
        <label for="first_name">ชื่อ:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>
        <label for="last_name">นามสกุล:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>
        <label for="birth_date">วันเดือนปีเกิด:</label>
        <input type="date" name="birth_date" id="birth_date" required>
        <br>
        <label for="profile_picture">รูปภาพโปรไฟล์:</label>
        <input type="file" name="profile_picture" id="profile_picture" accept="image/*">
        <br>

        <input type="submit" value="บันทึกรายการ">
    </form>

    <table>
        <thead>
            <tr>
                <th>คำนำหน้าชื่อ</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>วันเดือนปีเกิด</th>
                <th>อายุ</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
    </table>
</body>

</html>