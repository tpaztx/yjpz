<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class TrackPushMsg {
	
	static $_TSPEC;
	public $shipperCode = null;
	public $logisticNum = null;
	public $state = null;
	public $message = null;
	public $data = null;
	public $custNo = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipperCode'
			),
			2 => array(
			'var' => 'logisticNum'
			),
			3 => array(
			'var' => 'state'
			),
			4 => array(
			'var' => 'message'
			),
			5 => array(
			'var' => 'data'
			),
			6 => array(
			'var' => 'custNo'
			),
			7 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipperCode'])){
				
				$this->shipperCode = $vals['shipperCode'];
			}
			
			
			if (isset($vals['logisticNum'])){
				
				$this->logisticNum = $vals['logisticNum'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
			if (isset($vals['data'])){
				
				$this->data = $vals['data'];
			}
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TrackPushMsg';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shipperCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipperCode);
				
			}
			
			
			
			
			if ("logisticNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logisticNum);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->state); 
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
			}
			
			
			
			
			if ("data" == $schemeField){
				
				$needSkip = false;
				
				$this->data = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\order\ofc\api\request\TrackMsg();
						$elem0->read($input);
						
						$this->data[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("custNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
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
		
		if($this->shipperCode !== null) {
			
			$xfer += $output->writeFieldBegin('shipperCode');
			$xfer += $output->writeString($this->shipperCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logisticNum !== null) {
			
			$xfer += $output->writeFieldBegin('logisticNum');
			$xfer += $output->writeString($this->logisticNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeI64($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data !== null) {
			
			$xfer += $output->writeFieldBegin('data');
			
			if (!is_array($this->data)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->data as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeString($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>