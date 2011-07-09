<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->library('template');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }


        $data = array();
        $data['loggedUser'] = $this->ion_auth->get_user();
        $this->template->set_theme('ewidt');
        $this->template->build('dashboard/dashboard', $data);
/*
        $this->template->set_theme('ewidt');
        $this->template->build('dashboard/dashboard');*/
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */