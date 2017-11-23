<?php ob_start() ; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>

<?php echo "<h2>Ajouter des nouvelles dépenses</h2>"; ?>

<form action="#" method="post">

	Titre<input type="text" name="titre" placeholder="Titre de l'achat"><br>
	Montant<input type="text" name="montant" placeholder="Prix de l'achat"><br>
	Date<input type="date" name="date"><br>

	<?php foreach ($userName as $name) :  ?>
    	<input type="checkbox" name=""> <?php echo htmlentities($name['name']) ."<br>" ;?>
	<?php endforeach; ?>

	Vérifier le montant<input type="checkbox" name="verifierMontant"><br>
	<input type="submit" value="Ajouter" name="ajouter">
</form>

<?php $content = ob_get_clean() ; ?>

<?php include __DIR__ . '/../layouts/master.php' ?>