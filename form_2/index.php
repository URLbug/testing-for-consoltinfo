<!DOCTYPE html>
<html>
<head>
    <title>Форма для чтения CSV файлов</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Форма для чтения CSV файлов</h1>
        <form action="csv.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Файл (.csv)</label>
                <input type="file" class="form-control-file" name="file" id="file" accept=".csv" required>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Отправить" required>
        </form>
        <br/>

        <a href="/">Назад</a>
    </div>
</body>
</html>
