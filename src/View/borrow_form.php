<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Books</title>
    <style>
        form {
            width: 300px;
        }

        label {
            display:block;
            margin-top: 10px;
        }

        input, button{
            width:100%;
            padding:8px;
            margin-top: 5px;
        }
        </style>
</head>
<bod>
    <h2>Borrow a Book</h2>

    <form action="/public/index.php?act=borrow"method="POST">

    <label>Student ID</label>
    <input type="number" name="student_id" required>

    <label>Book ID</label>
    <input type="number" name="book_id" required>

    <label>Days to Borrow</label>
    <input type="number" name="days" value="14" required>

    <button type="submit">Borrow Book</button>

</form>
</body>
</html>