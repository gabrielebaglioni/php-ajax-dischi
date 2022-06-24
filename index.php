 <?php
require_once __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <div class="container">
   <?php foreach ($database as $album) { ?>
                    <?php
                    echo "<img src='{$album["poster"]}' alt='{$album["title"]}'";
                    echo "<h3 {$album["title"]}</h3>";
                    echo "<div>{$album["author"]}</div><div>{$album["year"]}</div>"
                    ?>
            <?php } ?>
   </div>
</body>
</html>

