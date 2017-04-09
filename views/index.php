<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $pageTitle ?></h1>

<?php if(count($names)): ?>
    <ul>
        <?php foreach($names as $name): ?>
            <li>
                <a href="/profile?name=<?= $name ?>"><?= $name ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>