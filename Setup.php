<!<!DOCTYPE <html>
    <html>
        <head>
            <title>Setting up database</title>
</head>
<body>
 <h3> Setting up... </h3>

 <?php
 require_once 'Funciones.php';
createTable('members',
            'user VARCHAR(26),
             pass VARCHAR(16),
             INDEX(user(6))');
createTable('messages',
            'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             auth VARCHAR(16),
             recip VARCHAR(16),
             pm CHAR(1),    
             time INT UNSIGNED,
             message VARCHAR(4096),
             INDEX(auth(6)),
             INDEX(recip(6))');
             
createTable('Pagos', 
             'tarjeta VARCHAR(16),
             clave VARCHAR(16),
             pais VARCHAR(16),
             postal VARCHAR(16),
             INDEX(user(6)),
             INDEX(friend(6)');

createTable('Perfiles',
            'user VARCHAR(16),
            text VARCHAR(4096),
            INDEX(user(6))');
?>

<br>...done.
</body>
</html>