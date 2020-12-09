<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class AllowCancelTmsOrderResponse {
	
	static $_TSPEC;
	public $tmsResponseHeader = null;
	public $orderCancelResponseDTO = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsResponseHeader'
			),
			2 => array(
			'var' => 'orderCancelResponseDTO'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsResponseHeader'])){
				
				$this->tmsResponseHeader = $vals['tmsResponseHeader'];
			}
			
			
			if (isset($vals['orderCancelResponseDTO'])){
				
				$this->orderCancelResponseDTO = $vals['orderCancelResponseDTO'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AllowCancelTmsOrderResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsResponseHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->tmsResponseHeader = new \com\vip\top\deliveryorder\service\TmsResponseHeader();
				$this->tmsResponseHeader->read($input);
				
			}
			
			
			
			
			if ("orderCancelResponseDTO" == $schemeField){
				
				$needSkip = false;
				
				$this->orderCancelResponseDTO = new \com\vip\top\deliveryorder\bizservice\OrderCancelResponseDTO();
				$this->orderCancelResponseDTO->read($input);
				
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
		
		if($this->tmsResponseHeader !== null) {
			
			$xfer += $output->writeFieldBegin('tmsResponseHeader');
			
			if (!is_object($this->tmsResponseHeader)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsResponseHeader->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderCancelResponseDTO !== null) {
			
			$xfer += $output->writeFieldBegin('orderCancelResponseDTO');
			
			if (!is_object($this->orderCancelResponseDTO)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderCancelResponseDTO->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>