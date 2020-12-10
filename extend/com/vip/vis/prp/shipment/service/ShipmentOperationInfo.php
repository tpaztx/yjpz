<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class ShipmentOperationInfo {
	
	static $_TSPEC;
	public $id = null;
	public $shipmentNo = null;
	public $operatorBy = null;
	public $opType = null;
	public $opTypeDesc = null;
	public $remark = null;
	public $createTime = null;
	public $updateTime = null;
	
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
			'var' => 'operatorBy'
			),
			4 => array(
			'var' => 'opType'
			),
			5 => array(
			'var' => 'opTypeDesc'
			),
			6 => array(
			'var' => 'remark'
			),
			7 => array(
			'var' => 'createTime'
			),
			8 => array(
			'var' => 'updateTime'
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
			
			
			if (isset($vals['operatorBy'])){
				
				$this->operatorBy = $vals['operatorBy'];
			}
			
			
			if (isset($vals['opType'])){
				
				$this->opType = $vals['opType'];
			}
			
			
			if (isset($vals['opTypeDesc'])){
				
				$this->opTypeDesc = $vals['opTypeDesc'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipmentOperationInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("shipmentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentNo);
				
			}
			
			
			
			
			if ("operatorBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorBy);
				
			}
			
			
			
			
			if ("opType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opType);
				
			}
			
			
			
			
			if ("opTypeDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opTypeDesc);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
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
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentNo !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentNo');
			$xfer += $output->writeString($this->shipmentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorBy !== null) {
			
			$xfer += $output->writeFieldBegin('operatorBy');
			$xfer += $output->writeString($this->operatorBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opType !== null) {
			
			$xfer += $output->writeFieldBegin('opType');
			$xfer += $output->writeString($this->opType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opTypeDesc !== null) {
			
			$xfer += $output->writeFieldBegin('opTypeDesc');
			$xfer += $output->writeString($this->opTypeDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>