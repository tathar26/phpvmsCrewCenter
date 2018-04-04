<?php
class FBSVData extends CodonData
{
    public function findschedules($arricao, $depicao, $airline, $aircraft)   
	{
        $query = "SELECT phpvms_schedules.*, phpvms_aircraft.name AS aircraft, phpvms_aircraft.registration
               FROM phpvms_schedules, phpvms_aircraft
                WHERE phpvms_schedules.depicao LIKE '$depicao'
                AND phpvms_schedules.arricao LIKE '$arricao'
                AND phpvms_schedules.code LIKE '$airline'
                AND phpvms_schedules.aircraft LIKE '$aircraft'
                AND phpvms_aircraft.id LIKE '$aircraft'";

        return DB::get_results($query);
    }

      
     public static function findschedule($arricao, $depicao, $airline)   
	 {
        $query = "SELECT phpvms_schedules.*, phpvms_aircraft.name AS aircraft, phpvms_aircraft.registration
                FROM phpvms_schedules, phpvms_aircraft
                WHERE phpvms_schedules.depicao LIKE '$depicao'
                AND phpvms_schedules.arricao LIKE '$arricao'
                AND phpvms_schedules.code LIKE '$airline'
                AND phpvms_aircraft.id LIKE phpvms_schedules.aircraft";

        return DB::get_results($query);
    }
 
    public static function findaircrafttypes() 
	{
        $query = "SELECT DISTINCT icao FROM phpvms_aircraft";

        return DB::get_results($query);
    }

    public static function findaircraft($aircraft) 
	{
        $query = "SELECT id FROM phpvms_aircraft WHERE icao='$aircraft'";

        return DB::get_results($query);
    }

    public static function findcountries() 
	{
        $query = "SELECT DISTINCT country FROM phpvms_airports";

        return DB::get_results($query);
    }
	
	public static function update_pilot_location($icao)
    {
        $pilot = Auth::$userinfo->pilotid;

        $query = "SELECT * FROM flightbookingsystem WHERE pilot_id='$pilot'";

        $check = DB::get_row($query);

        if(!$check)
        {
            $query1 = "INSERT INTO flightbookingsystem (pilot_id, arricao, jumpseats, last_update)
                    VALUES ('$pilot', '$icao', '1', NOW())";
        }
        else
        {
            $jumpseats = $check->jumpseats + 1;
            $query1 = "UPDATE flightbookingsystem SET arricao='$icao', jumpseats='$jumpseats', last_update=NOW() WHERE pilot_id='$pilot'";
        }

        DB::query($query1);
    }
	
	public static function purchase_ticket($pilot_id, $total)
    {
        $query = 'UPDATE '.TABLE_PREFIX.'pilots
					SET totalpay='.$total.'
					WHERE pilotid='.$pilot_id;
        DB::query($query);
    }
	
	public static function get_pilot_location($pilot)
    {
        $query = "SELECT * FROM flightbookingsystem WHERE pilot_id='$pilot'";

        $real_location = DB::get_row($query);

        $pirep_location = PIREPData::getLastReports(Auth::$userinfo->pilotid, 1, '');

        if($real_location->last_update > $pirep_location->submitdate)
        {
            return $real_location;
        }
        else
        {
            return $pirep_location;
        }
    }
	
	public static function routeaircraft($icao)
	{
		$sql = "SELECT DISTINCT aircraft FROM phpvms_schedules WHERE depicao = '$icao'";
		
		return DB::get_results($sql);
	}
	
	public static function getAircraftByID($id)
	{
		$sql = "SELECT * FROM phpvms_aircraft WHERE id ='$id'";
		return DB::get_row($sql);
	}
	
	public static function arrivalairport($icao)
	{
		$sql = "SELECT DISTINCT arricao FROM phpvms_schedules WHERE depicao = '$icao'";
		
		return DB::get_results($sql);
	}

}
