<?php
$HERO_IMAGE = "https://sfo2.digitaloceanspaces.com/kezzico-bucket/root-server-1.jpg";
$TITLE = "Thank you for signing up!";
$DESCRIPTION = "Thank you for signing up! You're on the list for updates.";
$KEYWORDS = "root server, coming soon, product launch";
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="<?= $KEYWORDS ?>" />
    <meta name="og:title" content="<?= $TITLE ?>" />
    <meta name="og:description" content="<?= $DESCRIPTION ?>" />
    <meta name="og:image" content="<?= $HERO_IMAGE ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png" />
    <title> <?= $TITLE ?> </title>
  
    <link rel="stylesheet" href="/style.css" />
  </head>
  <body>
    <header>
        <div class="hero" style="background-image: url('<?=$HERO_IMAGE?>');">
            <h1>Thank You!</h1>
        </div>
    </header>

    <main>
        <section>
            <h1>Thank you for signing up!</h1>
            <p>You're on the list for updates.</p>

            <FORM method="POST" action="/v1/otp">
                <input type="email" name="email" placeholder="Enter your email" />
                <input type="submit" value="Submit" />
            </FORM>
        </section>
    </main>

    <?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>
