<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?=htmlspecialchars((string) $book->getId())?></td>
            <td><?=htmlspecialchars($book->getTitle())?></td>
            <td><?=htmlspecialchars($book->getAuthor())?></td>
            <td><?=htmlspecialchars($book->getYear())?></td>
            <td><?=htmlspecialchars($book->getGenre())?></td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>
