<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class UserRecommendRequest {
	
	static $_TSPEC;
	public $page = null;
	public $pageSize = null;
	public $requestId = null;
	public $inStock = null;
	public $goodsSaleStats = null;
	public $offlineStore = null;
	public $commonParams = null;
	public $chanTag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page'
			),
			2 => array(
			'var' => 'pageSize'
			),
			3 => array(
			'var' => 'requestId'
			),
			4 => array(
			'var' => 'inStock'
			),
			5 => array(
			'var' => 'goodsSaleStats'
			),
			6 => array(
			'var' => 'offlineStore'
			),
			7 => array(
			'var' => 'commonParams'
			),
			8 => array(
			'var' => 'chanTag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['inStock'])){
				
				$this->inStock = $vals['inStock'];
			}
			
			
			if (isset($vals['goodsSaleStats'])){
				
				$this->goodsSaleStats = $vals['goodsSaleStats'];
			}
			
			
			if (isset($vals['offlineStore'])){
				
				$this->offlineStore = $vals['offlineStore'];
			}
			
			
			if (isset($vals['commonParams'])){
				
				$this->commonParams = $vals['commonParams'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserRecommendRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("inStock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inStock); 
				
			}
			
			
			
			
			if ("goodsSaleStats" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsSaleStats); 
				
			}
			
			
			
			
			if ("offlineStore" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->offlineStore); 
				
			}
			
			
			
			
			if ("commonParams" == $schemeField){
				
				$needSkip = false;
				
				$this->commonParams = new \com\vip\adp\api\open\service\CommonParams();
				$this->commonParams->read($input);
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
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
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inStock !== null) {
			
			$xfer += $output->writeFieldBegin('inStock');
			$xfer += $output->writeI32($this->inStock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsSaleStats !== null) {
			
			$xfer += $output->writeFieldBegin('goodsSaleStats');
			$xfer += $output->writeI32($this->goodsSaleStats);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offlineStore !== null) {
			
			$xfer += $output->writeFieldBegin('offlineStore');
			$xfer += $output->writeI32($this->offlineStore);
			
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
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>