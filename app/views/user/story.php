<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Header content -->
    <?php include_once(__DIR__ . '/../partical/header.php'); ?>
    <link rel="stylesheet" href="/public/css/styledetail.css">
</head>

<body>
    <main>
        <?php
            require_once('C:/xampp/htdocs/webdoctruyen/app/controllers/DefaultController.php');

            $storyId = isset($_GET['id']) ? $_GET['id'] : null;

            $controller = new DefaultController();
            $controller->showStoryDetails($storyId);
            ?>
    </main>
    <footer>
        <!-- Footer content -->
        <?php include_once(__DIR__ . '/../partical/footer.php'); ?>
    </footer>
</body>

</html>

