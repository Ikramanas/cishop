<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {
    public function __construct()
{
    parent::__construct();
    $is_login   = $this->session->userdata('is_login');
    $id         = $this->session->userdata('id');

    if (! $is_login) {
        
        redirect(base_url(''),'refresh');
        return;
    }
}



    public function index()
    {
        $data['title']      = 'Profil Pengguna';
        $data['content']    = $this->profile->where('id', $this->id)->first();
        $data['page']       = 'pages/profile/index';

        return $this->view($data);
    }


    
}

/* End of file Profile.php */


?>