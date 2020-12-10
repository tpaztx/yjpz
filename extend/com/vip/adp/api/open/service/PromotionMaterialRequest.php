<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class PromotionMaterialRequest {
	
	static $_TSPEC;
	public $module = null;
	public $materialId = null;
	public $itemId = null;
	public $itemType = null;
	public $updateTiemStart = null;
	public $updateTimeEnd = null;
	public $page = null;
	public $pageSize = null;
	public $commonParams = null;
	public $requestId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'module'
			),
			2 => array(
			'var' => 'materialId'
			),
			3 => array(
			'var' => 'itemId'
			),
			4 => array(
			'var' => 'itemType'
			),
			5 => array(
			'var' => 'updateTiemStart'
			),
			6 => array(
			'var' => 'updateTimeEnd'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'pageSize'
			),
			9 => array(
			'var' => 'commonParams'
			),
			10 => array(
			'var' => 'requestId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['module'])){
				
				$this->module = $vals['module'];
			}
			
			
			if (isset($vals['materialId'])){
				
				$this->materialId = $vals['materialId'];
			}
			
			
			if (isset($vals['itemId'])){
				
				$this->itemId = $vals['itemId'];
			}
			
			
			if (isset($vals['itemType'])){
				
				$this->itemType = $vals['itemType'];
			}
			
			
			if (isset($vals['updateTiemStart'])){
				
				$this->updateTiemStart = $vals['updateTiemStart'];
			}
			
			
			if (isset($vals['updateTimeEnd'])){
				
				$this->updateTimeEnd = $vals['updateTimeEnd'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['commonParams'])){
				
				$this->commonParams = $vals['commonParams'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PromotionMaterialRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("module" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->module); 
				
			}
			
			
			
			
			if ("materialId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->materialId);
				
			}
			
			
			
			
			if ("itemId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemId);
				
			}
			
			
			
			
			if ("itemType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemType);
				
			}
			
			
			
			
			if ("updateTiemStart" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTiemStart); 
				
			}
			
			
			
			
			if ("updateTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTimeEnd); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("commonParams" == $schemeField){
				
				$needSkip = false;
				
				$this->commonParams = new \com\vip\adp\api\open\service\CommonParams();
				$this->commonParams->read($input);
				
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
		
		if($this->module !== null) {
			
			$xfer += $output->writeFieldBegin('module');
			$xfer += $output->writeI64($this->module);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->materialId !== null) {
			
			$xfer += $output->writeFieldBegin('materialId');
			$xfer += $output->writeString($this->materialId);
			
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
		
		
		if($this->updateTiemStart !== null) {
			
			$xfer += $output->writeFieldBegin('updateTiemStart');
			$xfer += $output->writeI64($this->updateTiemStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('updateTimeEnd');
			$xfer += $output->writeI64($this->updateTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commonParams !== null) {
			
			$xfer += $output->writeFieldBegin('commonParams');
			
			if (!is_object($this->commonParams)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->commonParams->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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