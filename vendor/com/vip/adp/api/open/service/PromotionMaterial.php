<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class PromotionMaterial {
	
	static $_TSPEC;
	public $materialId = null;
	public $itemId = null;
	public $itemType = null;
	public $promotionText = null;
	public $promotionImages = null;
	public $basicInfo = null;
	public $createTime = null;
	public $promoteStartTime = null;
	public $promoteEndTime = null;
	public $module = null;
	public $moduleName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialId'
			),
			2 => array(
			'var' => 'itemId'
			),
			3 => array(
			'var' => 'itemType'
			),
			4 => array(
			'var' => 'promotionText'
			),
			5 => array(
			'var' => 'promotionImages'
			),
			6 => array(
			'var' => 'basicInfo'
			),
			7 => array(
			'var' => 'createTime'
			),
			8 => array(
			'var' => 'promoteStartTime'
			),
			9 => array(
			'var' => 'promoteEndTime'
			),
			10 => array(
			'var' => 'module'
			),
			11 => array(
			'var' => 'moduleName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialId'])){
				
				$this->materialId = $vals['materialId'];
			}
			
			
			if (isset($vals['itemId'])){
				
				$this->itemId = $vals['itemId'];
			}
			
			
			if (isset($vals['itemType'])){
				
				$this->itemType = $vals['itemType'];
			}
			
			
			if (isset($vals['promotionText'])){
				
				$this->promotionText = $vals['promotionText'];
			}
			
			
			if (isset($vals['promotionImages'])){
				
				$this->promotionImages = $vals['promotionImages'];
			}
			
			
			if (isset($vals['basicInfo'])){
				
				$this->basicInfo = $vals['basicInfo'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['promoteStartTime'])){
				
				$this->promoteStartTime = $vals['promoteStartTime'];
			}
			
			
			if (isset($vals['promoteEndTime'])){
				
				$this->promoteEndTime = $vals['promoteEndTime'];
			}
			
			
			if (isset($vals['module'])){
				
				$this->module = $vals['module'];
			}
			
			
			if (isset($vals['moduleName'])){
				
				$this->moduleName = $vals['moduleName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PromotionMaterial';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("materialId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->materialId); 
				
			}
			
			
			
			
			if ("itemId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemId);
				
			}
			
			
			
			
			if ("itemType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemType);
				
			}
			
			
			
			
			if ("promotionText" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotionText);
				
			}
			
			
			
			
			if ("promotionImages" == $schemeField){
				
				$needSkip = false;
				
				$this->promotionImages = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->promotionImages[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("basicInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->basicInfo = new \com\vip\adp\api\open\service\TargetBasicInfo();
				$this->basicInfo->read($input);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("promoteStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->promoteStartTime); 
				
			}
			
			
			
			
			if ("promoteEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->promoteEndTime); 
				
			}
			
			
			
			
			if ("module" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->module); 
				
			}
			
			
			
			
			if ("moduleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->moduleName);
				
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
		
		if($this->materialId !== null) {
			
			$xfer += $output->writeFieldBegin('materialId');
			$xfer += $output->writeI64($this->materialId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemId !== null) {
			
			$xfer += $output->writeFieldBegin('itemId');
			$xfer += $output->writeString($this->itemId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemType !== null) {
			
			$xfer += $output->writeFieldBegin('itemType');
			$xfer += $output->writeString($this->itemType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotionText !== null) {
			
			$xfer += $output->writeFieldBegin('promotionText');
			$xfer += $output->writeString($this->promotionText);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotionImages !== null) {
			
			$xfer += $output->writeFieldBegin('promotionImages');
			
			if (!is_array($this->promotionImages)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->promotionImages as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->basicInfo !== null) {
			
			$xfer += $output->writeFieldBegin('basicInfo');
			
			if (!is_object($this->basicInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->basicInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promoteStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('promoteStartTime');
			$xfer += $output->writeI64($this->promoteStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promoteEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('promoteEndTime');
			$xfer += $output->writeI64($this->promoteEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->module !== null) {
			
			$xfer += $output->writeFieldBegin('module');
			$xfer += $output->writeI64($this->module);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->moduleName !== null) {
			
			$xfer += $output->writeFieldBegin('moduleName');
			$xfer += $output->writeString($this->moduleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>