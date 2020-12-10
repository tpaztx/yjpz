<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class BriefCategoryAttribute {
	
	static $_TSPEC;
	public $attributeId = null;
	public $name = null;
	public $sort = null;
	public $screeningstatus = null;
	public $dependenceStatus = null;
	public $leakageStatus = null;
	public $briefOptsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeId'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'sort'
			),
			4 => array(
			'var' => 'screeningstatus'
			),
			5 => array(
			'var' => 'dependenceStatus'
			),
			6 => array(
			'var' => 'leakageStatus'
			),
			7 => array(
			'var' => 'briefOptsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['screeningstatus'])){
				
				$this->screeningstatus = $vals['screeningstatus'];
			}
			
			
			if (isset($vals['dependenceStatus'])){
				
				$this->dependenceStatus = $vals['dependenceStatus'];
			}
			
			
			if (isset($vals['leakageStatus'])){
				
				$this->leakageStatus = $vals['leakageStatus'];
			}
			
			
			if (isset($vals['briefOptsList'])){
				
				$this->briefOptsList = $vals['briefOptsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BriefCategoryAttribute';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attributeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attributeId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("screeningstatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->screeningstatus); 
				
			}
			
			
			
			
			if ("dependenceStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->dependenceStatus); 
				
			}
			
			
			
			
			if ("leakageStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->leakageStatus); 
				
			}
			
			
			
			
			if ("briefOptsList" == $schemeField){
				
				$needSkip = false;
				
				$this->briefOptsList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\osp\category\api\comm\BriefCategoryOption();
						$elem0->read($input);
						
						$this->briefOptsList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('attributeId');
		$xfer += $output->writeI32($this->attributeId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sort');
		$xfer += $output->writeI32($this->sort);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->screeningstatus !== null) {
			
			$xfer += $output->writeFieldBegin('screeningstatus');
			$xfer += $output->writeByte($this->screeningstatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dependenceStatus !== null) {
			
			$xfer += $output->writeFieldBegin('dependenceStatus');
			$xfer += $output->writeByte($this->dependenceStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leakageStatus !== null) {
			
			$xfer += $output->writeFieldBegin('leakageStatus');
			$xfer += $output->writeByte($this->leakageStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->briefOptsList !== null) {
			
			$xfer += $output->writeFieldBegin('briefOptsList');
			
			if (!is_array($this->briefOptsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->briefOptsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>