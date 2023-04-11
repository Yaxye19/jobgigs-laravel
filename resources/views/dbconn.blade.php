<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & MYDQL DB Connection</title>
</head>
<body>
    <div>
        <?php
            if(DB::connection()->getPdo()){
                echo "Connection succuessful, database name is " . DB::connection()->getDatabaseName();
            }
        ?>
    </div>
</body>
</html>