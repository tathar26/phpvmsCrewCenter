<?php

class Credits extends CodonModule    {

    public function HTMLHead()
    {
        $this->set('sidebar', 'credits/sidebar_credits.php');
    }

    public function NavBar()
    {
        echo '<li><a href="'.SITE_URL.'/admin/index.php/Credits">Credits</a></li>';
    }

    public function index()
    {
        if($this->post->action == 'save_new_credit')
        {
            $this->save_new_credit();
        }
        elseif($this->post->action == 'save_edit_credit')
        {
            $this->save_edit_credit();
        }
        elseif($this->post->action == 'save_new_credit')
        {
            $this->save_new_crdit();
        }
        else
        {
            $this->home();
        }
    }

    public function home() {
        $this->set('credits', CreditsData::get_all_credits());
        $this->show('credits/credits_header');
        $this->show('credits/credits_index');
    }

    public function create()    {
        $this->show('credits/credits_header');
        $this->show('credits/credit_create');
    }

    protected function save_new_credit()
    {
        $credit = array();

        $credit['name'] = DB::escape($this->post->name);
        $credit['link'] = DB::escape($this->post->link);
        $credit['description'] = DB::escape($this->post->description);
        $credit['image'] = DB::escape($this->post->image);
        $credit['active'] = DB::escape($this->post->active);
                

        if($credit['name'] == '')
            {
                $this->set('error', TRUE);
                $this->set('credit', $credit);
                $this->show('credits/credits_header');
                $this->show('credits/credit_create');
                return;
            }
        
        CreditsData::save_new_credit($credit['name'],
                                    $credit['description'],
                                    $credit['image'],
                                    $credit['link'],
                                    $credit['active']);

        $this->home();
    }

    public function edit_credit($id)  {
        $this->set('credit', CreditsData::get_credit($id));
        $this->show('credits/credits_header');
        $this->show('credits/credits_edit');
    }

    protected function save_edit_credit()
    {
       $credit = array();

        $credit['name'] = DB::escape($this->post->name);
        $credit['link'] = DB::escape($this->post->link);
        $credit['description'] = DB::escape($this->post->description);
        $credit['image'] = DB::escape($this->post->image);
        $credit['active'] = DB::escape($this->post->active);
        $credit['id'] = DB::escape($this->post->id);
                

        if($credit['name'] == '')
            {
                $this->set('error', TRUE);
                $this->set('credit', $credit);
                $this->show('credits/credits_header');
                $this->show('credits/credit_create');
                return;
            }

        CreditsData::save_edit_credit($credit['name'],
                                    $credit['description'],
                                    $credit['image'],
                                    $credit['link'],
                                    $credit['active'],
                                    $credit['id']);

        $this->home();
    }

    public function delete_credit($id)    {
        CreditsData::delete_credit($id);

        $this->home();
    }
}