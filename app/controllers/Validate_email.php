<?php 

class Validate_email {

    private $accepted_domains;
  
    public function __construct() {
      //accepted domains property
      $this->accepted_domains = array(
        'stu.fos.cmb.ac.lk', 'stu.foa.cmb.ac.lk', 'stu.ucsc.cmb.ac.lk', 'stu.fmf.cmb.ac.lk', 'stu.science.cmb.ac.lk', 'stu.stat.cmb.ac.lk', 'stu.ssp.cmb.ac.lk'
      );
    }
  
    public function validate_by_domain($email_address) {
      $domain = $this->get_domain( trim( $email_address ) );
      if ( in_array( $domain, $this->accepted_domains ) ) {
        return true;
      }
      
      return false;
    }
  
    private function get_domain($email_address) {
      if ( ! $this->is_email( $email_address ) ) {
        return false;
      }
      $email_parts = explode( '@', $email_address );
      $domain = array_pop( $email_parts );
      
      return $domain;
    }
  
    private function is_email($email_address) {
      if ( filter_var ( $email_address, FILTER_VALIDATE_EMAIL ) ) {
        return true;
      }
      
      return false;
    }
  }

?>