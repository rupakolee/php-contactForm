<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="module">
        <header>Contact Us</header>

        <form action="" method="post">
            <div class="items">
                <div class="field">
                    <input type="text" name="name" id="name" placeholder="Enter your name" autofocus>
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="field">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <i class="glyphicon glyphicon-envelope"></i>
                </div>
                <div class="field">
                <input type="tel" name="tel" id="tel" placeholder="Enter your phone">
                <i class="glyphicon glyphicon-earphone"></i>
                </div>
                <div class="field">
                <input type="url" name="url" id="url" placeholder="Enter your website">
                <i class="glyphicon glyphicon-globe"></i>
                </div>
            </div>

            <div class="message">
                <textarea name="message"></textarea>
                <i class="glyphicon glyphicon-comment"></i>
            </div>
            <div class="btn">
                <button type="submit">Send</button>
                <span>Sending your message...</span>
            </div>
    </form>
    </div>
</body>

</html>