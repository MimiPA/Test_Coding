<?php
session_start();
$rambu = array("Merah", "Kuning", "Hijau");

// if counter is not set, set to zero
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = $rambu[0];
}

// if button is pressed, increment counter
if (isset($_POST['button'])) {
    $cari = array_search($_SESSION['counter'], $rambu);
    if ($cari != count($rambu) - 1) {
        $_SESSION['counter'] = $rambu[++$cari];
    } else {
        $_SESSION['counter'] = $rambu[0];
    }
}

// reset counter
if (isset($_POST['reset'])) {
    $_SESSION['counter'] = $rambu[0];
}

?>

<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
    <input type="submit" name="button" value="Counter" />
    <input type="submit" name="reset" value="Reset" />
    <br /><?php echo $_SESSION['counter']; ?>
</form>