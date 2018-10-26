

<?php


    class APP{

    private $db; 

    public function __construct() {
        $this->db = new Database; 
    }

    public function title() {
        return "View My Appointment";
    }

    public function getAllappointment() {
        $this->db->query('SELECT * FROM tbl_appointment');
        return $this->db->resultSet();
    }

    public function getSingleappointment($id) {
        $this->db->query('SELECT * FROM tbl_appointment WHERE ID = :id');
        $this->db->bind(":id", $id);
        return $this->db->resultSet();
    }

    
    
    
        public function addappointment($fn, $ln, $email, $phone, $dayof, $timeof, $msg) {

            $this->db->query('INSERT INTO  tbl_app (FNAME, LNAME, EMAIL, PHONE, DAYOF, TIMEOF, MSG) VALUES (:fn, :ln, :email, :phone, :dayof, :timeof, :msg)');

          

            $this->db->bind(':fn', $fn);
            $this->db->bind(':ln', $ln);
            $this->db->bind(':email', $email);
            $this->db->bind(':phone', $phone);
            $this->db->bind(':dayof', $dayof);
            $this->db->bind(':timeof', $timeof);
            $this->db->bind(':msg', $msg);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }






    }
?>
