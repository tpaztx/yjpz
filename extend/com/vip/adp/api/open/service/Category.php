<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class Category {
	
	static $_TSPEC;
	public $id = null;
	public $name = null;
	public $grade = null;
	public $parentId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'grade'
			),
			4 => array(
			'var' => 'parentId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['parentId'])){
				
				$this->parentId = $vals['parentId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Category';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->grade); 
				
			}
			
			
			
			
			if ("parentId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentId); 
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grade !== null) {
			
			$xfer += $output->writeFieldBegin('grade');
			$xfer += $output->writeI32($this->grade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentId !== null) {
			
			$xfer += $output->writeFieldBegin('parentId');
			$xfer += $output->writeI64($this->parentId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>