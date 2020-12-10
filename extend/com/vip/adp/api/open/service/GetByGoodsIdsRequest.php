<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class GetByGoodsIdsRequest {
	
	static $_TSPEC;
	public $goodsIds = null;
	public $queryDetail = null;
	public $queryStock = null;
	public $queryReputation = null;
	public $queryStoreServiceCapability = null;
	public $queryPMSAct = null;
	public $queryPrepay = null;
	public $chanTag = null;
	public $extendBySpu = null;
	public $requestId = null;
	public $queryExclusiveCoupon = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsIds'
			),
			2 => array(
			'var' => 'queryDetail'
			),
			5 => array(
			'var' => 'queryStock'
			),
			3 => array(
			'var' => 'queryReputation'
			),
			4 => array(
			'var' => 'queryStoreServiceCapability'
			),
			6 => array(
			'var' => 'queryPMSAct'
			),
			7 => array(
			'var' => 'queryPrepay'
			),
			8 => array(
			'var' => 'chanTag'
			),
			9 => array(
			'var' => 'extendBySpu'
			),
			10 => array(
			'var' => 'requestId'
			),
			12 => array(
			'var' => 'queryExclusiveCoupon'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsIds'])){
				
				$this->goodsIds = $vals['goodsIds'];
			}
			
			
			if (isset($vals['queryDetail'])){
				
				$this->queryDetail = $vals['queryDetail'];
			}
			
			
			if (isset($vals['queryStock'])){
				
				$this->queryStock = $vals['queryStock'];
			}
			
			
			if (isset($vals['queryReputation'])){
				
				$this->queryReputation = $vals['queryReputation'];
			}
			
			
			if (isset($vals['queryStoreServiceCapability'])){
				
				$this->queryStoreServiceCapability = $vals['queryStoreServiceCapability'];
			}
			
			
			if (isset($vals['queryPMSAct'])){
				
				$this->queryPMSAct = $vals['queryPMSAct'];
			}
			
			
			if (isset($vals['queryPrepay'])){
				
				$this->queryPrepay = $vals['queryPrepay'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
			}
			
			
			if (isset($vals['extendBySpu'])){
				
				$this->extendBySpu = $vals['extendBySpu'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['queryExclusiveCoupon'])){
				
				$this->queryExclusiveCoupon = $vals['queryExclusiveCoupon'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetByGoodsIdsRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsIds" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsIds = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->goodsIds[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("queryDetail" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryDetail);
				
			}
			
			
			
			
			if ("queryStock" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryStock);
				
			}
			
			
			
			
			if ("queryReputation" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryReputation);
				
			}
			
			
			
			
			if ("queryStoreServiceCapability" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryStoreServiceCapability);
				
			}
			
			
			
			
			if ("queryPMSAct" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryPMSAct);
				
			}
			
			
			
			
			if ("queryPrepay" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryPrepay);
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
			}
			
			
			
			
			if ("extendBySpu" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->extendBySpu);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("queryExclusiveCoupon" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->queryExclusiveCoupon);
				
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
		
		if($this->goodsIds !== null) {
			
			$xfer += $output->writeFieldBegin('goodsIds');
			
			if (!is_array($this->goodsIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodsIds as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryDetail !== null) {
			
			$xfer += $output->writeFieldBegin('queryDetail');
			$xfer += $output->writeBool($this->queryDetail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryStock !== null) {
			
			$xfer += $output->writeFieldBegin('queryStock');
			$xfer += $output->writeBool($this->queryStock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryReputation !== null) {
			
			$xfer += $output->writeFieldBegin('queryReputation');
			$xfer += $output->writeBool($this->queryReputation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryStoreServiceCapability !== null) {
			
			$xfer += $output->writeFieldBegin('queryStoreServiceCapability');
			$xfer += $output->writeBool($this->queryStoreServiceCapability);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryPMSAct !== null) {
			
			$xfer += $output->writeFieldBegin('queryPMSAct');
			$xfer += $output->writeBool($this->queryPMSAct);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryPrepay !== null) {
			
			$xfer += $output->writeFieldBegin('queryPrepay');
			$xfer += $output->writeBool($this->queryPrepay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendBySpu !== null) {
			
			$xfer += $output->writeFieldBegin('extendBySpu');
			$xfer += $output->writeBool($this->extendBySpu);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestId');
		$xfer += $output->writeString($this->requestId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->queryExclusiveCoupon !== null) {
			
			$xfer += $output->writeFieldBegin('queryExclusiveCoupon');
			$xfer += $output->writeBool($this->queryExclusiveCoupon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>