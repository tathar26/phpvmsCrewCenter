<h3>Jumpseat ticket purchase <?php echo $pfname.' '.$plname ;?></h3>
<table>
	<thead><tr><td>Jumpseat Confirmation</td></tr></thead>
<tbody>
    <tr><td>Destination:<b> <?php echo $airport->name; ?></b></td></tr>
    <tr><td>Departure Date:<b> <?php echo date('m/d/Y') ?></b></td></tr>
    <tr><td>Travel Class:<b> Employee (Best Available)</b></td></tr>
    <tr><td>Total Cost:<b> $<?php echo $cost; ?></b></td></tr>
	<tr>
		<td><a href="<?php echo url('/FBSV11'); ?>"><input class="button alt" type="submit" value="Cancel Purchase"></a>
		<?php echo '<a href="'.url('/FBSV11/purchase').'?id='.$airport->icao.'&cost='.$cost.'"><input class="button alt" type="submit" value="Purchase Ticket"></a>'; ?></td>
</tbody>
</table>
