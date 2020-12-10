<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcExt1Vo {
	
	static $_TSPEC;
	public $goodsId = null;
	public $sizeId = null;
	public $supplyPrice = null;
	public $realStock = null;
	public $goodsType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsId'
			),
			2 => array(
			'var' => 'sizeId'
			),
			3 => array(
			'var' => 'supplyPrice'
			),
			4 => array(
			'var' => 'realStock'
			),
			5 => array(
			'var' => 'goodsType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['supplyPrice'])){
				
				$this->supplyPrice = $vals['supplyPrice'];
			}
			
			
			if (isset($vals['realStock'])){
				
				$this->realStock = $vals['realStock'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcExt1Vo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsId);
				
			}
			
			
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeId);
				
			}
			
			
			
			
			if ("supplyPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplyPrice);
				
			}
			
			
			
			
			if ("realStock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->realStock); 
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsType);
				
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
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeString($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeId');
			$xfer += $output->writeString($this->sizeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplyPrice !== null) {
			
			$xfer += $output->writeFieldBegin('supplyPrice');
			$xfer += $output->writeString($this->supplyPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realStock !== null) {
			
			$xfer += $output->writeFieldBegin('realStock');
			$xfer += $output->writeI32($this->realStock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeString($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>