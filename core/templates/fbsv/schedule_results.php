<script src="https://skyvector.com/linkchart.js"></script>
<?php
$pilotid = Auth::$userinfo->pilotid;
$last_location = FBSVData::get_pilot_location($pilotid, 1);
$last_name = OperationsData::getAirportInfo($last_location->arricao);
?>
<div class="body">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Flight Dispatch</h2>
                </div>
                <h3>
                    Available flights from: <b><font color="#FF3300"><?php echo $last_location->arricao.' ( '.$last_name->name.')' ;?></font></b>
                </h3>
                 <?php
                    if(!$allroutes){
                    
                ?>
                <div class="box-body">
                    <div class="callout callou-info">
                        <h4>No flights from <?php echo $last_location->arricao.' ( '.$last_name->name.')' ;?>!</h4>
                    </div>
                </div>
                <?php
                } else {
                ?>
                <div class="box-body table-responsive no-padding">
                    <table class="tablesorter table table-hover">
                        <thead>
                        <th>Flight Information</th>
                        <th>Options</th>
                        </thead>
                        <tbody>
                                <?php
                                foreach ($allroutes as $route) {
                                    if ($last_location->arricao != $route->depicao) {
                                        continue;
                                    }
                                    if (Config::Get('RESTRICT_AIRCRAFT_RANKS') === true && Auth::LoggedIn()) {
                                        $s = "SELECT * FROM phpvms_aircraft WHERE name='$route->aircraft'";
                                        $ss = DB::get_row($s);
                                        if ($ss->minrank > Auth::$userinfo->ranklevel) {
                                            continue;
                                        }
                                    }
                                 ?>
                            <tr>
                                <td>
                                    <a href="<?php echo url('/schedules/details/'.$route->id);?>"><?php echo $route->code . $route->flightnum?>
                                    <?php echo '('.$route->depicao.' - '.$route->arricao.')'?>
                                    </a>
                                    <br />
                                    <strong>Departure: </strong>
                                    <?php echo $route->deptime; ?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Arrival: </strong>
                                    <?php echo $route->arrtime; ?>
                                    <br />
                                    <strong>Equipment: </strong>
                                    <?php echo $route->aircraft; ?> (
                                    <?php echo $route->registration; ?>) <strong>Distance: </strong>
                                    <?php echo $route->distance . Config::Get('UNITS'); ?>
                                    <br />
                                    <strong>Days Flown: </strong>
                                    <?php echo Util::GetDaysCompact($route->daysofweek); ?>
                                    <br />
                                    <?php echo ($route->route == '') ? '' : '<strong>Route: </strong>' . $route->route . '<br />' ?>
                                    <?php echo ($route->notes == '') ? '' : '<strong>Notes: </strong>' . html_entity_decode($route->notes) . '<br />' ?>                                    
                                </td>
                                <td nowrap>
                                    <a class="btn btn-info" href="<?php echo url('/schedules/details/'.$route->id);?>">DETAILS</a>
                                    <?php
                                    $bids = SchedulesData::getBids(Auth::$pilot->pilotid);
                                    if (count($bids) > 0) {
                                        ?>
                                        <a class="btn btn-block" disabled="disabled">Reserved</a>
                                        <a class="btn btn-warning" href="<?php echo url('/schedules/bids'); ?>">Remove Bid</a>
                                        <?php
                                    } elseif ($route->bidid != 0) {
                                        ?>
                                        <a class="btn btn-danger" disabled="disabled">Booked</a>
                                        <?php
                                    } else {
                                        ?>
                                        <a id="<?php echo $route->id; ?>" class="addbid btn btn-success" href="<?php echo url('/schedules/addbid?id=' . $route->id); ?>">Book Flight</a>
                                        <?php
                                    }
                                }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <section class="col-lg-3 connected">
                        <div class="box box-primary">
                            <div class="box-body">
                                <p>Click the button below to return to the search page.</p>
                                <a href="<?php echo url('/FBSV11'); ?>" class="btn btn-primary btn-flat">Return to Search</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>