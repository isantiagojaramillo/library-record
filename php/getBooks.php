<?php
    include "connection.php";

    $data = $connection -> query("SELECT * FROM books");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Books</title>
</head>
<body class="row vh-100 d-flex justify-content-center bg-dark">
    <div class="container p-5">
        <h1 class="text-white text-center">Book Table</h1>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col"># ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $i){ ?>
                    <tr>
                        <th scope="row"> <?php echo $i['id']; ?>        </th>
                        <td>             <?php echo $i['title']; ?>     </td>
                        <td>             <?php echo $i['author']; ?>  </td>
                        <td>             <?php echo $i['description']; ?>  </td>
                        <td> 
                            <a class="btn btn-primary" href="editBook.php?id=<?php echo $i['id']; ?>">Edit</a> 
                            <a class="btn btn-danger" href="deleteBook.php?id=<?php echo $i['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>

        
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>