<?php include "includes/a_config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<?php include "includes/head-tag-contents.php"; ?>
</head>
<body>

<?php $page_title = "phptests"; ?>

<main>
    <h1><?php echo $page_title; ?> </h1>
    <!-- Note, the '?= "str"' below is same as '?php echo "str";' -->
    <?php if ($page_title == "phptests") {
        echo "this is just a simple test page where im playing with basic PHP features.";
    } else {
        echo $page_title;
    } ?>


    <?php $random = random_int(0, PHP_INT_MAX) / PHP_INT_MAX; ?>

    <p>
        <?php if ($random >= 0.5) {
            echo "COIN_TOSS:" . " " . "heads" . " " . "(toss=$random)";
        } else {
            echo "COIN_TOSS:" . " " . "tails" . " " . "(toss=$random)";
        } ?>
    </p>

</main>

<?php include "includes/footer.php"; ?>

</body>
</html>
