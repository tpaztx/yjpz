<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBaseStandardIntModel {
	
	static $_TSPEC;
	public $id = null;
	public $standardCode = null;
	public $standardName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'standardCode'
			),
			3 => array(
			'var' => 'standardName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['standardCode'])){
				
				$this->standardCode = $vals['standardCode'];
			}
			
			
			if (isset($vals['standardName'])){
				
				$this->standardName = $vals['standardName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBaseStandardIntModel';
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
			
			
			
			
			if ("standardCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->standardCode);
				
			}
			
			
			
			
			if ("standardName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->standardName);
				
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
		
		
		if($this->standardCode !== null) {
			
			$xfer += $output->writeFieldBegin('standardCode');
			$xfer += $output->writeString($this->standardCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->standardName !== null) {
			
			$xfer += $output->writeFieldBegin('standardName');
			$xfer += $output->writeString($this->standardName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>