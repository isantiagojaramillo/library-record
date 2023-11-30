<?php
    include "connection.php";

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $newTitle = $_POST['title'];
            $newAuthor = $_POST['author'];
            $newDescription = $_POST['description'];

            $updateQuery = "UPDATE books SET title = '$newTitle', author = '$newAuthor', description = '$newDescription' WHERE id = $id";

            $updateResult = $connection->exec($updateQuery);
        }

        $query = "SELECT * FROM books WHERE id = $id";
        $record = $connection->query($query)->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "No ID provided for editing.";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Library</title>
</head>
<body>
    <header>
        <h1>Update Book Record</h1>
    </header>

    <main>
        <section class="form">
            <form action="<?php echo $_SERVER['PHP_SELF'] . "?id=$id"; ?>" method="post">
                <div class="title">
                    <label for="title">Book Title: </label>
                    <input type="text" id="title" name="title" value="<?php echo $record['title']; ?>">
                </div>

                <div class="author">
                    <label for="author">Author: </label>
                    <input type="text" id="author" name="author" value="<?php echo $record['author']; ?>">
                </div>

                <div class="description">
                    <label for="description">Book Description: </label>
                    <textarea name="description" id="description"><?php echo $record['description']; ?></textarea>
                </div>

                <div class="button">
                    <button type="submit" class="button">Update</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>Made by Santiago Jaramillo - Frontend Developer</p>
    </footer>
</body>
</html>

