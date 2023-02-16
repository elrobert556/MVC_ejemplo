<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>Name: <?php echo $user->getName(); ?></p>
    <p>Email: <?php echo $user->getEmail(); ?></p>
    <p>Age: <?php echo $user->getAge(); ?></p>
</body>
</html>