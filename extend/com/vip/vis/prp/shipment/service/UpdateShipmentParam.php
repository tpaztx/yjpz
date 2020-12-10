<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class UpdateShipmentParam {
	
	static $_TSPEC;
	public $shipmentNo = null;
	public $remark = null;
	public $driverName = null;
	public $contactPhone = null;
	public $licensePlate = null;
	public $appointmentTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipmentNo'
			),
			2 => array(
			'var' => 'remark'
			),
			3 => array(
			'var' => 'driverName'
			),
			4 => array(
			'var' => 'contactPhone'
			),
			5 => array(
			'var' => 'licensePlate'
			),
			6 => array(
			'var' => 'appointmentTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipmentNo'])){
				
				$this->shipmentNo = $vals['shipmentNo'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['driverName'])){
				
				$this->driverName = $vals['driverName'];
			}
			
			
			if (isset($vals['contactPhone'])){
				
				$this->contactPhone = $vals['contactPhone'];
			}
			
			
			if (isset($vals['licensePlate'])){
				
				$this->licensePlate = $vals['licensePlate'];
			}
			
			
			if (isset($vals['appointmentTime'])){
				
				$this->appointmentTime = $vals['appointmentTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateShipmentParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shipmentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentNo);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("driverName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->driverName);
				
			}
			
			
			
			
			if ("contactPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactPhone);
				
			}
			
			
			
			
			if ("licensePlate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->licensePlate);
				
			}
			
			
			
			
			if ("appointmentTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appointmentTime);
				
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
		
		$xfer += $output->writeFieldBegin('shipmentNo');
		$xfer += $output->writeString($this->shipmentNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->driverName !== null) {
			
			$xfer += $output->writeFieldBegin('driverName');
			$xfer += $output->writeString($this->driverName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactPhone !== null) {
			
			$xfer += $output->writeFieldBegin('contactPhone');
			$xfer += $output->writeString($this->contactPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->licensePlate !== null) {
			
			$xfer += $output->writeFieldBegin('licensePlate');
			$xfer += $output->writeString($this->licensePlate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentTime');
			$xfer += $output->writeString($this->appointmentTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>