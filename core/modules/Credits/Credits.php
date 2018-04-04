<?php

class credits extends CodonModule   {
    
    function index()    {
        $this->title = 'Partners';
        $this->set('credits', CreditsData::get_active_credits());
        $this->show('credits/index');
    }
    
}