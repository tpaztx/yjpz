<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryQualificationResult {
	
	static $_TSPEC;
	public $categoryQualification = null;
	public $errorCode = null;
	public $msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryQualification'
			),
			2 => array(
			'var' => 'errorCode'
			),
			3 => array(
			'var' => 'msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryQualification'])){
				
				$this->categoryQualification = $vals['categoryQualification'];
			}
			
			
			if (isset($vals['errorCode'])){
				
				$this->errorCode = $vals['errorCode'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryQualificationResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categoryQualification" == $schemeField){
				
				$needSkip = false;
				
				$this->categoryQualification = new \com\vip\category\service\CategoryQualification();
				$this->categoryQualification->read($input);
				
			}
			
			
			
			
			if ("errorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorCode);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
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
		
		if($this->categoryQualification !== null) {
			
			$xfer += $output->writeFieldBegin('categoryQualification');
			
			if (!is_object($this->categoryQualification)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->categoryQualification->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCode !== null) {
			
			$xfer += $output->writeFieldBegin('errorCode');
			$xfer += $output->writeString($this->errorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>