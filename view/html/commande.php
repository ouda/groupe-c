<div class="container">
	<table border="1">
	<tr>
		
		<td>Statut</td>
		<td>Date de commande</td>
		<td>ClientID</td>
		<td>ProduitID</td>
	</tr>
	<?php 
	$count=count($items);
	while(!empty($items)){?>
	<tr>
		<td><?php echo $items['statut']; ?></td>
		<td><?php echo $items['dateCommande']; ?></td>
		<td></td>
		<td></td>
	</tr>
	</table>
    <?php  } ?>
    
</div>
