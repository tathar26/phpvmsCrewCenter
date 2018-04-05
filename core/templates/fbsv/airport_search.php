<?php
$pilotid = Auth::$userinfo->pilotid;
$last_location = FBSVData::get_pilot_location($pilotid, 1);
$last_name = OperationsData::getAirportInfo($last_location->arricao);
if(!$last_location)
{
FBSVData::update_pilot_location(Auth::$userinfo->hub);
}

?>
<!--<script src="https://code.jquery.com/jquery-latest.js"></script>-->
	<script>
$(document).ready(function(){
	$("select").change(function () {
		var cost = "";
		$("select option:selected").each(function (){
			cost = $(this).attr("name");
                        airport = $(this).text();
		});
		$("input[name=cost]").val( cost );
                $("input[name=airport]").val( airport );
		}).trigger('change');
});
	</script>
<div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Schedule Search <small><?php echo SITE_NAME?> Flight Ops</small>
                            </h2>
                        </div>
                        <div class="body">
						<ul>
								<li>Current Location: <b><font color="#FF3300"><?php echo $last_location->arricao?> - <?php echo $last_name->name?></font></b></li>
							</ul>
							<form action="<?php echo url('/FBSV11');?>" method="post" enctype="multipart/form-data">
								<div class="row">
									
									
										<div class="col-lg-6" id="tab_1">
                          					<p>Select your Arrival airport:</p>
                            				<div class="form-group">
                              					<select id="arricao" name="arricao" class="selectpicker" data-live-search="true" >
                                				<option value="">Select All</option>
                                				<?php
													$airs = FBSVData::arrivalairport($last_location->arricao);
													if(!$airs)
														{
															echo '<option>No Airports Available!</option>';
														}
													else
														{
															foreach ($airs as $air)
																{
																	$nam = OperationsData::getAirportInfo($air->arricao);
																	echo '<option value="'.$air->arricao.'">'.$air->arricao.' - '.$nam->name.'</option>';
																}
														}
												?>
                                				</select>
                            				</div>
                        				</div>
										<div class="col-lg-6" id="tab_2">
                          					<p>Select your airline:</p>
                            				<div class="form-group">
                              					<select id="airline" name="airline" class="selectpicker" data-live-search="true" >
                                				<option value="">Select All</option>
												<?php
													if(!$airlines) $airlines = array();
														foreach($airlines as $airline)
														{
															echo '<option value="'.$airline->code.'">'.$airline->name
																	.' ('.$airline->code.')</option>';
														}
												?>
												</select>
											</div>
										</div>
								</div>
								<div class="row">		
										<div class="col-lg-6" id="tab_3">
                          					<p>Select your Aircraft :</p>
                            				<div class="form-group">
                              					<select id="aircraft" name="aircraft" class="selectpicker" data-live-search="true" >
                                				<option value="">Select All</option>
												<?php
													$airc = FBSVData::routeaircraft($last_location->arricao);
													if(!$airc)
														{
															echo '<option>No Aircraft Available!</option>';
														}
													else
														{
															foreach ($airc as $air)
																{
																$ai = FBSVData::getaircraftbyID($air->aircraft);
												?>
														<option value="<?php echo $ai->icao ;?>"><?php
														echo $ai->name ;?></option>
												<?php
																}
														}
												?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-lg-6"
										<div class="form-group">
												<input type="submit" name="submit" value="Search Flight" class="btn btn-flat btn-primary" />
											</div>
										</div>
								</div>
							<p>
								<input type="hidden" name="action" value="findflight"/>
							</p>
							</form>

							<h3>Pilot Transfer</h3>
							<ul>
								<li>Your Bank limit is : <font color="#66FF00"><?php echo FinanceData::FormatMoney(Auth::$userinfo->totalpay) ;?></font></li>
							</ul>
							<br />
							<form action="<?php echo url('/FBSV11/jumpseat');?>" method="get">
								<table>
									<tr>	
										<td>select airport to transfer : </td>
										<td >
												
												<select name="depicao" onchange="listSel(this,'cost')">
													<option value="">--Select--</option>
													<?php
														foreach ($airports as $airport){
															$distance = round(SchedulesData::distanceBetweenPoints($last_name->lat, $last_name->lng, $airport->lat, $airport->lng), 0);
															$permile = Config::Get('JUMPSEAT_COST');
															$cost = ($permile * $distance);
															$check = PIREPData::getLastReports(Auth::$userinfo->pilotid, 1,1);
															if($cost >= Auth::$userinfo->totalpay)
															{
																continue;
															}
															elseif($check->accepted == PIREP_ACCEPTED || !$check)
															{
																echo "<option name='{$cost}' value='{$airport->icao}'>{$airport->icao} - {$airport->name}    /Cost - <font color='#66FF00'>$ {$cost}</font></option>";
															}
																?>
															
															<hr> 
												<?php                   
														}
													?> 
												</select>
											</td>
												<?php
													if(Auth::$userinfo->totalpay == "0")
														{
													?>
															<td align="center"><input type="submit" name="submit" value="Transfer" class="btn btn-flat btn-primary" disabled="disabled"></td> 
													<?php
														}
													else
														{
													?>
															<td align="center"><input type="submit" name="submit" value="Transfer" class="btn btn-flat btn-primary" ></td>
													<?php
														}
													?>
													
									</tr>
								</table>
							<input type="hidden" name="cost">
							<input type="hidden" name="airport">
							</form>
						</div>
					</div>
				</div>
</div>



	
	 
