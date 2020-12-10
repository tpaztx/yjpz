<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class ShipmentPageRequest {
	
	static $_TSPEC;
	public $shipmentNos = null;
	public $channelCode = null;
	public $warehouseCodes = null;
	public $startTimeStr = null;
	public $endTimeStr = null;
	public $status = null;
	public $shipmentTypeName = null;
	public $contactPhone = null;
	public $appointmentStartTimeStr = null;
	public $appointmentEndTimeStr = null;
	public $appointmentStartTime = null;
	public $appointmentEndTime = null;
	public $startTime = null;
	public $endTime = null;
	public $vendorCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipmentNos'
			),
			2 => array(
			'var' => 'channelCode'
			),
			3 => array(
			'var' => 'warehouseCodes'
			),
			4 => array(
			'var' => 'startTimeStr'
			),
			5 => array(
			'var' => 'endTimeStr'
			),
			6 => array(
			'var' => 'status'
			),
			7 => array(
			'var' => 'shipmentTypeName'
			),
			8 => array(
			'var' => 'contactPhone'
			),
			9 => array(
			'var' => 'appointmentStartTimeStr'
			),
			10 => array(
			'var' => 'appointmentEndTimeStr'
			),
			11 => array(
			'var' => 'appointmentStartTime'
			),
			12 => array(
			'var' => 'appointmentEndTime'
			),
			13 => array(
			'var' => 'startTime'
			),
			14 => array(
			'var' => 'endTime'
			),
			15 => array(
			'var' => 'vendorCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipmentNos'])){
				
				$this->shipmentNos = $vals['shipmentNos'];
			}
			
			
			if (isset($vals['channelCode'])){
				
				$this->channelCode = $vals['channelCode'];
			}
			
			
			if (isset($vals['warehouseCodes'])){
				
				$this->warehouseCodes = $vals['warehouseCodes'];
			}
			
			
			if (isset($vals['startTimeStr'])){
				
				$this->startTimeStr = $vals['startTimeStr'];
			}
			
			
			if (isset($vals['endTimeStr'])){
				
				$this->endTimeStr = $vals['endTimeStr'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['shipmentTypeName'])){
				
				$this->shipmentTypeName = $vals['shipmentTypeName'];
			}
			
			
			if (isset($vals['contactPhone'])){
				
				$this->contactPhone = $vals['contactPhone'];
			}
			
			
			if (isset($vals['appointmentStartTimeStr'])){
				
				$this->appointmentStartTimeStr = $vals['appointmentStartTimeStr'];
			}
			
			
			if (isset($vals['appointmentEndTimeStr'])){
				
				$this->appointmentEndTimeStr = $vals['appointmentEndTimeStr'];
			}
			
			
			if (isset($vals['appointmentStartTime'])){
				
				$this->appointmentStartTime = $vals['appointmentStartTime'];
			}
			
			
			if (isset($vals['appointmentEndTime'])){
				
				$this->appointmentEndTime = $vals['appointmentEndTime'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipmentPageRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shipmentNos" == $schemeField){
				
				$needSkip = false;
				
				$this->shipmentNos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->shipmentNos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("channelCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelCode);
				
			}
			
			
			
			
			if ("warehouseCodes" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouseCodes = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->warehouseCodes[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("startTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->startTimeStr);
				
			}
			
			
			
			
			if ("endTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endTimeStr);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				
				$this->status = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->status[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("shipmentTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentTypeName);
				
			}
			
			
			
			
			if ("contactPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactPhone);
				
			}
			
			
			
			
			if ("appointmentStartTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appointmentStartTimeStr);
				
			}
			
			
			
			
			if ("appointmentEndTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appointmentEndTimeStr);
				
			}
			
			
			
			
			if ("appointmentStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->appointmentStartTime);
				
			}
			
			
			
			
			if ("appointmentEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->appointmentEndTime);
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
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
		
		if($this->shipmentNos !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentNos');
			
			if (!is_array($this->shipmentNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->shipmentNos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelCode !== null) {
			
			$xfer += $output->writeFieldBegin('channelCode');
			$xfer += $output->writeString($this->channelCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCodes !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCodes');
			
			if (!is_array($this->warehouseCodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouseCodes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('startTimeStr');
			$xfer += $output->writeString($this->startTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('endTimeStr');
			$xfer += $output->writeString($this->endTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			if (!is_array($this->status)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->status as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentTypeName');
			$xfer += $output->writeString($this->shipmentTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactPhone !== null) {
			
			$xfer += $output->writeFieldBegin('contactPhone');
			$xfer += $output->writeString($this->contactPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentStartTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentStartTimeStr');
			$xfer += $output->writeString($this->appointmentStartTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentEndTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentEndTimeStr');
			$xfer += $output->writeString($this->appointmentEndTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentStartTime');
			$xfer += $output->writeI64($this->appointmentStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentEndTime');
			$xfer += $output->writeI64($this->appointmentEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>