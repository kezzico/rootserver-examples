<?php
$HERO_IMAGE = "https://sfo2.digitaloceanspaces.com/kezzico-bucket/root-server-0.jpg";
$TITLE = "Let's build something";
$DESCRIPTION = "A great product is coming soon. Enter your email to learn more.";
$KEYWORDS = "root server, coming soon, product launch, email signup";
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
            <h1>Let's do this</h1>
        </div>
    </header>

    <main>
        <section>
            <h1>Great Product Coming Soon!</h1>
            <p>Enter your email address to learn more.</p>

            <FORM method="POST" action="/v1/signup">
                <input type="email" name="email" placeholder="Enter your email" />
                <input type="submit" value="Submit" />
            </FORM>
        </section>
    </main>

	<?php require_once __DIR__ . '/footer.php'; ?>
  </body>

</body>
</html>
