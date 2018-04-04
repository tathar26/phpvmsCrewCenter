<tr>
	<th style="text-align: center;" bgcolor="#00405e" colspan="4">
	<font color="white">Fuel Calculation for 
	<?php 
	$plane = OperationsData::getAircraftByName($route->aircraft);
	echo $plane->fullname ; ?>
	</font>
	</th>
</tr>
	<?php
	$aircraft = $plane->name;
	$distance = $route->distance;
	$param = FCalculator::getparamaircraft($aircraft);
	$fuel_hour = $param->hour;
	$fuel_reserve = $param->hour * 3/4;
	$fuel_flow = $param->flow;
	$speed = $param->speed;
	$fuel_taxi = 200;
    $total = FCalculator::calculatefuel($aircraft, $distance);      
	?> 	
<tr>
    <td align="left" colspan="2">Average Cruise Speed:</td>
	<td align="left" colspan="2"><b><?php echo $speed;?> kt/h - 800 km/h</b></td>
</tr>
<tr>
    <td align="left" colspan="2">Fuel Per 1 Hour:</td>
	<td align="left" colspan="2"><b><?php	echo $fuel_hour ;?> kg - <?php echo ($fuel_hour *2.2) ;?> lbs</b></td>
</tr>
<tr>
	<td align="left" colspan="2">Fuel Per 100 NM:</td>
	<td align="left" colspan="2"><b><?php echo $fuel_flow ;?> kg - <?php echo ($fuel_flow *2.2) ;?> lbs</b></td>
</tr>
<tr>
	<td align="left" colspan="2">Taxi Fuel:</td>
	<td align="left" colspan="2"><b><?php echo $fuel_taxi ;?> kg - <?php echo ($fuel_taxi *2.2) ;?> lbs</b></td>
</tr>
<tr>
	<td align="left" colspan="2">Minimum Fuel Requiered At Destination:</td>
	<td align="left" colspan="2"><b><?php echo $fuel_reserve ;?> kg - <?php echo ($fuel_reserve *2.2) ;?> lbs</b></td>
</tr>
<tr><td align="center" colspan="4"><font color="blue" size="4">Total Estimated Fuel Requiered For This Route:&nbsp;&nbsp;&nbsp;<?php echo round($total, 1) ;?> kg - <?php echo round(($total *2.2), 1) ;?> lbs</font></td></tr>
<tr><td align="center" colspan="4"><font size="3" color="red"><b>TO PREVENT ANY MISCALCULATION ADD 500 KG EXTRA!</b></font></td></tr>