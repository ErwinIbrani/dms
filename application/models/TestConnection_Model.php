<?php


class TestConnection_Model extends CI_Model
{
   public function get_dms()
   {
      return $this->db->get('groups');
   } 

   public function get_tbm()
   {
       $dbTBM = $this->load->database('tbm', TRUE);
       return $dbTBM->get('tm_assignment_vendor');
   }

   public function get_wbsGen()
   {
       $dbWBS = $this->load->database('wbsgen', TRUE);
       return $dbWBS->get('tm_user');
   }

   public function get_sitac2()
   {
       $dbSitac2 = $this->load->database('sitac2', TRUE);
       return $dbSitac2->get('config');
   }

   public function get_legal()
   {
       $dbSitac2 = $this->load->database('legal', TRUE);
       return $dbSitac2->get('config');
   }

}