<!DOCTYPE html>
<html>

<head>
    <title><?= ucfirst($page); ?> | My Portpolio</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css/'); ?>">
</head>

<body>
    <!-- Navbar -->
    <div id="navbar">
        <div class="nav">
            <a href="?page=home">Home</a>
            <a href="?page=article">Article</a>
            <a href="?page=about">About</a>
            <a href="?page=contact">Contact</a>
        </div>
    </div>
    <!-- end of Navbar -->