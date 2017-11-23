<?php ob_start() ; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>
<?php echo SITE_NAME; ?>
<section class="sheep_main dashboard">
    <section class="sheep_graph grid-1"> 
 
 		<?php include  __DIR__ . '/../partials/graphic.php'; ?>
    
    </section>
<?php  ?>
    <section class="sheep_spending grid-1"> 
        <?php if( $lastDepenses != false ) : ?>
       	<ul>
        	<?php foreach ($lastDepenses as $data) : ?>
            	<li>Nom(s) <?php echo htmlentities($data['names']); ?>, Prix : <?php echo floatval($data['price']); ?>, date : <?php echo intval($data['pay_date']);?></li>
            <?php endforeach; ?>


              <?php foreach ($userName as $name) :  ?>
                  <?php echo $name['name'] ; ?>
                <?php endforeach; ?>
        </ul>
       <?php else : ?>
       	<p>Pas de dépenses pour l'instant </p>
       <?php endif; ?>
	<ul>
		<a href="/history">
			<h5>Voir toutes les dépenses</h5>
		</a>
	</ul>

    </section>

</section>

 

<?php include __DIR__ . '/../layouts/master.php' ?>