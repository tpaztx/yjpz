<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class InpackReturnReq {
	
	static $_TSPEC;
	public $orderSn = null;
	public $afterSaleApplyId = null;
	public $inpackTime = null;
	public $transportNo = null;
	public $carrierCode = null;
	public $carrierName = null;
	public $inpackType = null;
	public $payType = null;
	public $carriage = null;
	public $returnGoods = null;
	public $returnsWay = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'afterSaleApplyId'
			),
			3 => array(
			'var' => 'inpackTime'
			),
			4 => array(
			'var' => 'transportNo'
			),
			5 => array(
			'var' => 'carrierCode'
			),
			6 => array(
			'var' => 'carrierName'
			),
			7 => array(
			'var' => 'inpackType'
			),
			8 => array(
			'var' => 'payType'
			),
			9 => array(
			'var' => 'carriage'
			),
			10 => array(
			'var' => 'returnGoods'
			),
			11 => array(
			'var' => 'returnsWay'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['afterSaleApplyId'])){
				
				$this->afterSaleApplyId = $vals['afterSaleApplyId'];
			}
			
			
			if (isset($vals['inpackTime'])){
				
				$this->inpackTime = $vals['inpackTime'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['carrierName'])){
				
				$this->carrierName = $vals['carrierName'];
			}
			
			
			if (isset($vals['inpackType'])){
				
				$this->inpackType = $vals['inpackType'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['returnGoods'])){
				
				$this->returnGoods = $vals['returnGoods'];
			}
			
			
			if (isset($vals['returnsWay'])){
				
				$this->returnsWay = $vals['returnsWay'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InpackReturnReq';
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
			
			
			
			
			if ("afterSaleApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->afterSaleApplyId); 
				
			}
			
			
			
			
			if ("inpackTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->inpackTime); 
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("carrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierName);
				
			}
			
			
			
			
			if ("inpackType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inpackType); 
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->payType); 
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("returnGoods" == $schemeField){
				
				$needSkip = false;
				
				$this->returnGoods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\xstore\order\ofc\api\request\InpackReturnGoods();
						$elem1->read($input);
						
						$this->returnGoods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("returnsWay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnsWay); 
				
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
		
		
		if($this->afterSaleApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleApplyId');
			$xfer += $output->writeI64($this->afterSaleApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inpackTime !== null) {
			
			$xfer += $output->writeFieldBegin('inpackTime');
			$xfer += $output->writeI64($this->inpackTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierName');
			$xfer += $output->writeString($this->carrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inpackType !== null) {
			
			$xfer += $output->writeFieldBegin('inpackType');
			$xfer += $output->writeI32($this->inpackType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeI32($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoods !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoods');
			
			if (!is_array($this->returnGoods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->returnGoods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnsWay !== null) {
			
			$xfer += $output->writeFieldBegin('returnsWay');
			$xfer += $output->writeI32($this->returnsWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>