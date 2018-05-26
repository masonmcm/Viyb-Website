<?php 
    class Patient_Model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_patients($patient_id = FALSE){
            if($patient_id === FALSE){
                $query = $this->db->get('patients');
                return $query->result_array();
            }
            $query = $this->db->get_where('patients', array('patient_id' => $patient_id));
            return $query->row_array();
        }
    }