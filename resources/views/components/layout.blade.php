<html>
<head>
    <title>{{ $title ?? 'Examen Poo/Framework' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="nav">
    <a href="{{ route('home') }}" class="nav-link">Accueil</a>
    <a href="index.php?view=view/profile" class="nav-link">Profil</a>
    <a href="index.php?view=view/create" class="nav-link">Create</a>
    <?php
    if (!empty($_SESSION['userid'])) {
        ?>
    <a href="index.php?view=view/logout" class="nav-link">Logout</a>
        <?php
    } else {
        ?>
    <a href="index.php?view=view/login" class="nav-link">Login</a>
        <?php
    }
    ?>
{{ $slot }}
<footer>
</footer>
</body>
</html>
