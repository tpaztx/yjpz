<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBaseSimpleUomIntModel {
	
	static $_TSPEC;
	public $id = null;
	public $uomName = null;
	public $uomType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'uomName'
			),
			3 => array(
			'var' => 'uomType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['uomName'])){
				
				$this->uomName = $vals['uomName'];
			}
			
			
			if (isset($vals['uomType'])){
				
				$this->uomType = $vals['uomType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBaseSimpleUomIntModel';
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
			
			
			
			
			if ("uomName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uomName);
				
			}
			
			
			
			
			if ("uomType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uomType);
				
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
		
		
		if($this->uomName !== null) {
			
			$xfer += $output->writeFieldBegin('uomName');
			$xfer += $output->writeString($this->uomName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uomType !== null) {
			
			$xfer += $output->writeFieldBegin('uomType');
			$xfer += $output->writeString($this->uomType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>