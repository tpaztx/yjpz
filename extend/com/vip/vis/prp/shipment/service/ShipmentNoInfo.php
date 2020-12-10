<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class ShipmentNoInfo {
	
	static $_TSPEC;
	public $id = null;
	public $shipmentNo = null;
	public $statusCode = null;
	public $latestUpdateTime = null;
	public $comment = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'shipmentNo'
			),
			3 => array(
			'var' => 'statusCode'
			),
			4 => array(
			'var' => 'latestUpdateTime'
			),
			5 => array(
			'var' => 'comment'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['shipmentNo'])){
				
				$this->shipmentNo = $vals['shipmentNo'];
			}
			
			
			if (isset($vals['statusCode'])){
				
				$this->statusCode = $vals['statusCode'];
			}
			
			
			if (isset($vals['latestUpdateTime'])){
				
				$this->latestUpdateTime = $vals['latestUpdateTime'];
			}
			
			
			if (isset($vals['comment'])){
				
				$this->comment = $vals['comment'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipmentNoInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("shipmentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentNo);
				
			}
			
			
			
			
			if ("statusCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusCode);
				
			}
			
			
			
			
			if ("latestUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->latestUpdateTime);
				
			}
			
			
			
			
			if ("comment" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->comment);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeString($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentNo !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentNo');
			$xfer += $output->writeString($this->shipmentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusCode !== null) {
			
			$xfer += $output->writeFieldBegin('statusCode');
			$xfer += $output->writeString($this->statusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->latestUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('latestUpdateTime');
			$xfer += $output->writeString($this->latestUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->comment !== null) {
			
			$xfer += $output->writeFieldBegin('comment');
			$xfer += $output->writeString($this->comment);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>