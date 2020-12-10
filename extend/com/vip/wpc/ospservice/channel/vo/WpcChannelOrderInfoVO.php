<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelOrderInfoVO {
	
	static $_TSPEC;
	public $orderSn = null;
	public $statusName = null;
	public $transportNo = null;
	public $transportName = null;
	public $goods = null;
	public $statusCode = null;
	public $refundStatus = null;
	public $ShippingFee = null;
	public $RealPayTotal = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'statusName'
			),
			3 => array(
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'transportName'
			),
			5 => array(
			'var' => 'goods'
			),
			6 => array(
			'var' => 'statusCode'
			),
			7 => array(
			'var' => 'refundStatus'
			),
			8 => array(
			'var' => 'ShippingFee'
			),
			9 => array(
			'var' => 'RealPayTotal'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['statusName'])){
				
				$this->statusName = $vals['statusName'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['transportName'])){
				
				$this->transportName = $vals['transportName'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['statusCode'])){
				
				$this->statusCode = $vals['statusCode'];
			}
			
			
			if (isset($vals['refundStatus'])){
				
				$this->refundStatus = $vals['refundStatus'];
			}
			
			
			if (isset($vals['ShippingFee'])){
				
				$this->ShippingFee = $vals['ShippingFee'];
			}
			
			
			if (isset($vals['RealPayTotal'])){
				
				$this->RealPayTotal = $vals['RealPayTotal'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelOrderInfoVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("statusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusName);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("transportName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportName);
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelOrderGoodsVO();
						$elem1->read($input);
						
						$this->goods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("statusCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->statusCode); 
				
			}
			
			
			
			
			if ("refundStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundStatus); 
				
			}
			
			
			
			
			if ("ShippingFee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ShippingFee);
				
			}
			
			
			
			
			if ("RealPayTotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->RealPayTotal);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusName !== null) {
			
			$xfer += $output->writeFieldBegin('statusName');
			$xfer += $output->writeString($this->statusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportName !== null) {
			
			$xfer += $output->writeFieldBegin('transportName');
			$xfer += $output->writeString($this->transportName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusCode !== null) {
			
			$xfer += $output->writeFieldBegin('statusCode');
			$xfer += $output->writeI32($this->statusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundStatus !== null) {
			
			$xfer += $output->writeFieldBegin('refundStatus');
			$xfer += $output->writeI32($this->refundStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ShippingFee !== null) {
			
			$xfer += $output->writeFieldBegin('ShippingFee');
			$xfer += $output->writeString($this->ShippingFee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->RealPayTotal !== null) {
			
			$xfer += $output->writeFieldBegin('RealPayTotal');
			$xfer += $output->writeString($this->RealPayTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>