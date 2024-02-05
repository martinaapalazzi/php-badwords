<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>

    <form action="about.php" method="GET">
        <div class="mb-3">
            <label for="insertText" class="form-label">
                Insert text
            </label>
            <input name="userTextarea" type="textarea" class="form-control" id="textarea" aria-describedby="">
        </div>
        <div class="mb-3">
            <label for="insertBadWord" class="form-label">Badword</label>
            <input name="badWord" type="text" class="form-control" id="textbadword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>