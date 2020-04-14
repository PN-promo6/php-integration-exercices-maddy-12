<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php
        $dirname = "img/";
        $images = glob($dirname . "*.jpg");

        foreach ($images as $image) {
            echo '<img src="' . $image . '" /><br />';
        }
        ?>
        <img src="https://unsplash.it/700/345?image=564" />
        <img src="https://unsplash.it/700/550?image=587" />
        <img src="https://unsplash.it/700/450?image=589" />
        <img src="https://unsplash.it/700/500?image=421" />
        <img src="https://unsplash.it/700/300?image=455" />
        <img src="https://unsplash.it/700/150?image=406" />
        <img src="https://unsplash.it/700?image=594" />
        <img src="https://unsplash.it/700/450?image=417" />
        <img src="https://unsplash.it/700/400?image=410" />
        <img src="https://unsplash.it/700/550?image=582" />
        <img src="https://unsplash.it/700/175?image=591" />
        <img src="https://unsplash.it/700/345?image=421" />
        <img src="https://unsplash.it/700/567?image=572" />
        <img src="https://unsplash.it/700/978?image=401" />
        <img src="https://unsplash.it/700/654?image=388" />
        <img src="https://unsplash.it/700/500?image=423" />
    </section>
</body>

</html>