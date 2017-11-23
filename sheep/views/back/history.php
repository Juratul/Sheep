<?php ob_start() ; ?>
<?php include __DIR__ . '/../partials/nav.php'; ?>
<?php CONST paginate = "5" ?>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th> 
        <th>Date</th>
    </tr>
    <?php if( $depenses != false ) : ?>
    <?php foreach ($depenses as $data) : ?>
    <tr>
        <td><?php echo $data['names']; ?></td>
        <td><?php echo $data['price']; ?></td>
        <td><?php echo $data['pay_date']; ?></td>
    </tr>
    <?php endforeach; ?>
    <ul style="list-style-type: none">
        <?php for ($i = 1; $i <= 6; $i++): ?>
        <li style="display: inline-block;">
            <a href="/history/?page=<?php echo $i; ?>">
                <?php echo $i; ?>
            </a>
        </li>
         <?php endfor; ?>
    </ul>
    <?php else : ?>
        <p>Pas de dépenses pour l'instant </p>
    <?php endif; ?>
</table>
<?php $content = ob_get_clean() ; ?>

<?php include __DIR__ . '/../layouts/master.php' ?>