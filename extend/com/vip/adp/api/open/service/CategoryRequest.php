<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class CategoryRequest {
	
	static $_TSPEC;
	public $parentId = null;
	public $grade = null;
	public $requestId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'parentId'
			),
			2 => array(
			'var' => 'grade'
			),
			3 => array(
			'var' => 'requestId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['parentId'])){
				
				$this->parentId = $vals['parentId'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("parentId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentId); 
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->grade); 
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
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
		
		$xfer += $output->writeFieldBegin('parentId');
		$xfer += $output->writeI64($this->parentId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('grade');
		$xfer += $output->writeI32($this->grade);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>