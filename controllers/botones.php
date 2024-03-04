<?php
// session_start();
// Inicializar el contador en 0
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}
// Sumar
if (isset($_POST['sumar'])) {
    $_SESSION['contador']++;
}
// Restar
if (isset($_POST['restar']) && $_SESSION['contador'] > 0) {
    $_SESSION['contador']--;
}
?>
<form method="post">
    <button class="button" type="submit" name="restar" <?php if ($_SESSION['contador'] == 0) echo 'disabled'; ?>>-</button>
    <span class="number"><?php echo $_SESSION['contador']; ?></span>
    <button class="button" type="submit" name="sumar">+</button>
</form>