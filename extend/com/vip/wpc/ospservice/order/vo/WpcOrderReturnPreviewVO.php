<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcOrderReturnPreviewVO {
	
	static $_TSPEC;
	public $returnMoney = null;
	public $payAmount = null;
	public $returnFee = null;
	public $returnFeeMsg = null;
	public $returnAddressInfo = null;
	public $returnVirtualMoney = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2001 => array(
			'var' => 'returnMoney'
			),
			2002 => array(
			'var' => 'payAmount'
			),
			2003 => array(
			'var' => 'returnFee'
			),
			2004 => array(
			'var' => 'returnFeeMsg'
			),
			2005 => array(
			'var' => 'returnAddressInfo'
			),
			2006 => array(
			'var' => 'returnVirtualMoney'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnMoney'])){
				
				$this->returnMoney = $vals['returnMoney'];
			}
			
			
			if (isset($vals['payAmount'])){
				
				$this->payAmount = $vals['payAmount'];
			}
			
			
			if (isset($vals['returnFee'])){
				
				$this->returnFee = $vals['returnFee'];
			}
			
			
			if (isset($vals['returnFeeMsg'])){
				
				$this->returnFeeMsg = $vals['returnFeeMsg'];
			}
			
			
			if (isset($vals['returnAddressInfo'])){
				
				$this->returnAddressInfo = $vals['returnAddressInfo'];
			}
			
			
			if (isset($vals['returnVirtualMoney'])){
				
				$this->returnVirtualMoney = $vals['returnVirtualMoney'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderReturnPreviewVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnMoney);
				
			}
			
			
			
			
			if ("payAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payAmount);
				
			}
			
			
			
			
			if ("returnFee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnFee);
				
			}
			
			
			
			
			if ("returnFeeMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnFeeMsg);
				
			}
			
			
			
			
			if ("returnAddressInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->returnAddressInfo = new \com\vip\wpc\ospservice\order\vo\WpcOrderReturnPreviewReturnAddressInfoVO();
				$this->returnAddressInfo->read($input);
				
			}
			
			
			
			
			if ("returnVirtualMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnVirtualMoney);
				
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
		
		if($this->returnMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnMoney');
			$xfer += $output->writeString($this->returnMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payAmount');
			$xfer += $output->writeString($this->payAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnFee !== null) {
			
			$xfer += $output->writeFieldBegin('returnFee');
			$xfer += $output->writeString($this->returnFee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnFeeMsg !== null) {
			
			$xfer += $output->writeFieldBegin('returnFeeMsg');
			$xfer += $output->writeString($this->returnFeeMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAddressInfo !== null) {
			
			$xfer += $output->writeFieldBegin('returnAddressInfo');
			
			if (!is_object($this->returnAddressInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->returnAddressInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnVirtualMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnVirtualMoney');
			$xfer += $output->writeString($this->returnVirtualMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>