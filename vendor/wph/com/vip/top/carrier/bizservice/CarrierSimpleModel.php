<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class CarrierSimpleModel {
	
	static $_TSPEC;
	public $custNo = null;
	public $code = null;
	public $name = null;
	public $fullname = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNo'
			),
			2 => array(
			'var' => 'code'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'fullname'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['fullname'])){
				
				$this->fullname = $vals['fullname'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierSimpleModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("custNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->custNo); 
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("fullname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullname);
				
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
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeI64($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullname !== null) {
			
			$xfer += $output->writeFieldBegin('fullname');
			$xfer += $output->writeString($this->fullname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>