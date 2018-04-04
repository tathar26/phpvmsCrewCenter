<?php

class CreditsData extends CodonData {
    
    function get_credit($id)   {
        $query = "SELECT * FROM ".TABLE_PREFIX."credits WHERE id=$id";
        
        return DB::get_row($query);
    }
    
    function get_all_credits()  {
        $query = "SELECT * FROM ".TABLE_PREFIX."credits
                    ORDER BY name DESC";
        
        return DB::get_results($query);
    }
    
        function get_active_credits()  {
        $query = "SELECT * FROM ".TABLE_PREFIX."credits
                    WHERE active = '1'
                    ORDER BY name DESC";
        
        return DB::get_results($query);
    }
    
    function save_new_credit($name, $description, $image, $link, $active)    {
        $query = "INSERT INTO ".TABLE_PREFIX."credits (name, description, image, link, active)
                        VALUES('$name', '$description', '$image', '$link', '$active')";

        DB::query($query);
    }
    
    function save_edit_credit($name, $description, $image, $link, $active, $id)    {
        $query = "UPDATE ".TABLE_PREFIX."credits SET name='$name', description='$description', link='$link', image='$image', active='$active' WHERE id='$id'";

        DB::query($query);
    }
    
    function delete_credit($id)    {
        $query = "DELETE FROM ".TABLE_PREFIX."credits WHERE id='$id'";

        DB::query($query);
    }
    
}