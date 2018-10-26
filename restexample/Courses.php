<?php

Class COURSES {
	
	private $courses = array(
		1 => 'JavaScript',  
		2 => 'Java',  
		3 => 'PHP',  			
		4 => 'Html',  			
		5 => 'jQuery',  
		6 => 'C'
			
	);
		
	
	public function getAllCourses(){
		return $this->courses;
	}
	
	public function getCourses($id){
		
		$courses = array($id => ($this->courses[$id]) ? $this->courses[$id] : $this->courses[1]);
		return $courses;
	}	
}
?>