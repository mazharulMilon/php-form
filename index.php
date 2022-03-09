<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form with PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form action="form.php" method="post" id="contact-form">
        <input type="text" name="name" class="form-control" placeholder="name" required>
        <input type="email" name="email" class="form-control" placeholder="emaol" required>
        <input type="text" name="subject" class="form-control" placeholder="emaol" required>
        <textarea name="message" class="form-control" placeholder="message" required></textarea>
        <button type="submit" value="submit" class="form-control" name="send">mamza</button>
    </form>

</body>
</html>