<?php ob_start() ; ?>
<?php include __DIR__ . '/../partials/navlogout.php'; ?>

<?php
echo "<h3>Au Revoir, bonne journée ! </h3>";
?>

<?php $content = ob_get_clean() ; ?>

<?php include __DIR__ . '/../layouts/master.php' ?>