<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

        public function __construct() {
            
        }
        public function index() {
            
            $this->view('pages/index');

        }
        public function about() {
            $this->view('pages/about');

        }
        public function projects() {

            $this->view('pages/projects');

        }

        public function appform(){
            $this->view('Appointment/appform');
        }
    

        public function contact(){
            $this->view('Contact/contact');
        }

        
      
        

    }

?>