
<?php

   include(APPROOT . '/helper/helperfunctions.php');

   class Appointment extends Controller {

       public function __construct() {
           $this->APP = $this->model('APP');
       }

       public function index() {

           $APP = $this->APP->getAllappointment();
           $title = $this->APP->title();

           $data = [
               'title' => $title,
               'APP' => $APP
           ];

           $this->view('Appointment/appform', $data);

       }

       public function showappointment() {
           $APP = $this->APP->getAllappointment();
           $title = $this->APP->title();

           $data = [
               'title' => $title,
               'APP' => $APP
           ];

           $this->view('Appointment/appformdisplay', $data);
       }

   
 

  
       public function addappointment() {

        $data = [];
        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['dayof']) && !empty($_POST['timeof']) && !empty($_POST['msg'])) {
            if($this->APP->addappointment($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phone'], $_POST['dayof'], $_POST['timeof'], $_POST['msg'])) {
                $data = [
                    'title' => "Appointment add successfully"
                ];
     
                header("Location :".URLROOT."Appointment/showappointment");
                exit;
            }
        } else {
            $data = [
                'title' => "Please add Appointment"
            ];
        }
          
       }
   }
   ?>


 






        
        
      