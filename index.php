<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $text = "Back in black
        I hit the sack
        I've been too long, I'm glad to be back
        Yes, I'm let loose
        From the noose
        That's kept me hanging about
        I've been looking at the sky
        'Cause it's gettin' me high
        Forget the hearse 'cause I never die
        I got nine lives
        Cat's eyes
        Abusin' every one of them and running wild
        'Cause I'm back
        Yes, I'm back
        Well, I'm back
        Yes, I'm back
        Well, I'm back, back
        Well, I'm back in black
        Yes, I'm back in black";
        echo $text;
        echo strlen($text);
    ?>
    <form action="./index.php" method="get">
        <label for="censorship">Type a word to censor</label>
        <input type="text" name="censoredWord" id="censoredWord">
        <p><?php echo str_replace($_GET["censoredWord"],"***", $text); ?></p>
    </form>
</body>
</html>





