<?php

class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer', $data);
        }
    
public function view($slug = NULL)
{
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer', $data);
}
    public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('news/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('templates/header', $data);
        $this->load->view('news/success');
        $this->load->view('templates/footer', $data);
    }
}
    
            public function ApiView()
        {                
                $this->load->model('Api_model');
                $data['title'] = '#Caturday';
                $data['getFunc'] = $this->Api_model->xmlApi("Caturday");

                $this->load->view('templates/header', $data);
                $this->load->view('news/ApiView', $data);
                $this->load->view('templates/footer', $data);
        }
    
                public function ApiViewTwo()
        {                
                $this->load->model('Api_model');
                $data['title'] = '#Doggie';
                $data['getFunc'] = $this->Api_model->xmlApi("Doggie");

                $this->load->view('templates/header', $data);
                $this->load->view('news/ApiView', $data);
                $this->load->view('templates/footer', $data);
        }
    
                   public function ApiViewThree()
        {                
                $this->load->model('Api_model');
                $data['title'] = '#Squid';
                $data['getFunc'] = $this->Api_model->xmlApi("Squid");

                $this->load->view('templates/header', $data);
                $this->load->view('news/ApiView', $data);
                $this->load->view('templates/footer', $data);
        }
    
                   public function Start()
        {                
                $data['title'] = '#FLICKR';

                $this->load->view('templates/header', $data);
                $this->load->view('news/Start.php', $data);
                $this->load->view('templates/footer', $data);
        }
                       public function result()
        {                
                $data['title'] = 'Flickr search result';

                $this->load->view('templates/header', $data);
                $this->load->view('news/result.php', $data);
                $this->load->view('templates/footer', $data);
        }
}
   
