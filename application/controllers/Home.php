<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'WELCOME TO '. PLATFORMTITLE;
        $this->load->view('home', $data);
    }
    public function terms()
    {
        $data['title'] = ' TERMS OF '. PLATFORMTITLE;
        $data['headtitle'] = 'TERMS OF '. PLATFORMTITLE;
        $this->load->view('terms-condition', $data);
    }
    public function led()
    {
        $data['title'] = ' LED || WELCOME TO LED '. PLATFORMTITLE;
        $data['headtitle'] = 'LED '. PLATFORMTITLE;
        $this->load->view('led', $data);
    }
    public function air_conditioner()
    {
        $data['title'] = 'AIR CONDITIONER || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'AIR CONDITIONER '. PLATFORMTITLE;
        $this->load->view('air-conditioner', $data);
    }
    public function refrigerator()
    {
        $data['title'] = 'REFRIGRATOR || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'REFRIGRATOR '. PLATFORMTITLE;
        $this->load->view('refrigerator', $data);
    }
    public function washing_machine()
    {
        $data['title'] = ' WASHING MACHINE || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'WASHING MACHINE '. PLATFORMTITLE;
        $this->load->view('washing-machine', $data);
    }
    public function microwave_oven()
    {
        $data['title'] = ' MICROWAVE OVEN || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'MICROWAVE OVEN '. PLATFORMTITLE;
        $this->load->view('microwave-oven', $data);
    }
    public function services()
    {
        $data['title'] = 'Services || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'OUR SERVICES OF '. PLATFORMTITLE;
        $this->load->view('services', $data);
    }
    public function privacy_policy()
    {
        $data['title'] = 'privacy Policy || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'PRIVACY POLICY OF '. PLATFORMTITLE;
        $this->load->view('privacy-policy', $data);
    }
    public function refund_policy()
    {
        $data['title'] = 'Refund Policy || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'REFUND POLICY OF '. PLATFORMTITLE;
        $this->load->view('refund_policy', $data);
    }
    public function brand_disclaimer()
    {
        $data['title'] = 'Brand Disclaimer || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'BRAND DISCLAIMER OF '. PLATFORMTITLE;
        $this->load->view('brand_disclaimer', $data);
    }
    public function contact_us()
    {
        $data['title'] = 'privacy Policy || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'Contact Us | '. PLATFORMTITLE;
        $this->load->view('contact_us', $data);
    }
    public function about_us()
    {
        $data['title'] = 'About Us || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'About Us | '. PLATFORMTITLE;
        $this->load->view('about_us', $data);
    }
    public function thankyou()
    {
        $data['title'] = 'Thank You || WELCOME TO '. PLATFORMTITLE;
        $data['headtitle'] = 'WELCOME TO '. PLATFORMTITLE;
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $msg = '';
            $curdate = date('d-m-Y');
            $ToEmail = PLATFORMEMAIL;
            $EmailSubject = 'Homerepaircenter | Home Page Data';
            
            $msg .= "Name: " . $post["name"] . ("<br>");
            $msg .= "Mobile: " . $post["mobile"] . ("<br>");
            $msg .= "Location: " . $post["location"] . ("<br>");
            $msg .= "Pincode: " . $post["pincode"] . ("<br>");
            $msg .= "Service: " . $post["service"] . ("<br>");
            $msg .= "Product Period: " . $post["warrenty"] . ("<br>");
            $msg .= "Date: " . date('Y-m-d') . ("<br>"); 
            $send = send_smtp_email($ToEmail, $EmailSubject, $msg);
            if ($send) {
                $this->load->view('thankyou', $data);
            } else {
                redirect(base_url());
            }
        }
    }
}
