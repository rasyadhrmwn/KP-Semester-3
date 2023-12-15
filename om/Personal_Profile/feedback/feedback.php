<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <section id ="Feedback">
        <div class="feedback-box">
            <h1>Feedback</h1>
            <form action="process_feedback.php" method="POST" onsubmit="alert('data berhasil masuk')">
                <input type="text" name="nama" placeholder="Your name...">
                <input type="email" name="email" placeholder="Email Address. . .">
                <textarea name="pesan" placeholder="Type your Feedback. . ."></textarea>
                <button type="submit" name="submit">Submit</button>
                <button class="btn-back" href="index.html"><a href="index.html">Back</a></button>
            </form>    
        </div>
    </section>

</body>
</html>