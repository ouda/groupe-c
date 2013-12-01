<?php
include 'includes/header.inc';
?>
<div class="container">
	<table>
		<tr>
			<td>ID</td>
			<td>Libelle</td>
		</tr>
		<?php foreach($items as $item){?>
		<tr>
			<td><?php echo $item->getId() ;?></td>
			<td><?php echo $item->getLibelle() ;?></td>
		</tr>
		<?php }?>
	</table>			
</div>

<?php
include 'includes/footer.inc';
?>