<?php 

	class Database{

		protected $con;
		function __construct(){
			$this->con = new mysqli("localhost","root","","batch04");
		}
	}