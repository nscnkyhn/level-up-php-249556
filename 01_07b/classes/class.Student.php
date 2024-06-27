<?php 
	require_once( 'class.Person.php' );
	
	class Student extends Person {
		private $gpa;
		private $graduation_year;
		
		function __construct($name, $dob, $graduation_year = null, $gpa = 0.00) {
			parent::__construct($name, $dob);
			$this->gpa = $gpa;
			if (is_null($graduation_year)) $this->graduation_year = date("Y") + 4;
			else $this->graduation_year = $graduation_year;
		}
		
		public function get_graduation_year() {
			return $this->graduation_year;
		}
		
		public function get_gpa() {
			return $this->gpa;
		}
		
		public function set_gpa( $gpa ) {
			$this->gpa = $gpa;
		}
	}
