<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PERPUSTAKAAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Aplikasi Perpustakaan</h1>

    <a class="btn btn-primary" href="./buku.php">Lihat daftar buku</a>
    <a class="btn btn-success" href="./staff.php">Lihat daftar staff</a>
    
    <!-- form logout -->
    <form class="mt-3" action="logout_process.php" method="POST">
        <button class="btn btn-danger" type="submit">LOGOUT</button>
    </form>
    </div>
</body>
</html>