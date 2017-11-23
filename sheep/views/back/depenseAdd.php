<?php ob_start() ; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>

<?php
echo "<h3>Depense ajoutée</h3>";
?>

<?php $content = ob_get_clean() ; ?>

<?php include __DIR__ . '/../layouts/master.php' ?>