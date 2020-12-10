<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class ShipmentHeadInfo {
	
	static $_TSPEC;
	public $shipmentNo = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $channelCode = null;
	public $channelName = null;
	public $warehouseCode = null;
	public $warehouseName = null;
	public $shipmentTypeCode = null;
	public $shipmentTypeName = null;
	public $status = null;
	public $statusName = null;
	public $appointmentTime = null;
	public $totalQuantity = null;
	public $totalCaseQuantity = null;
	public $totalActualReceivedQuantity = null;
	public $createTime = null;
	public $beginReceiveTime = null;
	public $finishReceiveTime = null;
	public $driverName = null;
	public $contactPhone = null;
	public $licensePlate = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipmentNo'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'vendorName'
			),
			4 => array(
			'var' => 'channelCode'
			),
			5 => array(
			'var' => 'channelName'
			),
			6 => array(
			'var' => 'warehouseCode'
			),
			7 => array(
			'var' => 'warehouseName'
			),
			8 => array(
			'var' => 'shipmentTypeCode'
			),
			9 => array(
			'var' => 'shipmentTypeName'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'statusName'
			),
			12 => array(
			'var' => 'appointmentTime'
			),
			13 => array(
			'var' => 'totalQuantity'
			),
			14 => array(
			'var' => 'totalCaseQuantity'
			),
			15 => array(
			'var' => 'totalActualReceivedQuantity'
			),
			16 => array(
			'var' => 'createTime'
			),
			17 => array(
			'var' => 'beginReceiveTime'
			),
			18 => array(
			'var' => 'finishReceiveTime'
			),
			19 => array(
			'var' => 'driverName'
			),
			20 => array(
			'var' => 'contactPhone'
			),
			21 => array(
			'var' => 'licensePlate'
			),
			22 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipmentNo'])){
				
				$this->shipmentNo = $vals['shipmentNo'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['channelCode'])){
				
				$this->channelCode = $vals['channelCode'];
			}
			
			
			if (isset($vals['channelName'])){
				
				$this->channelName = $vals['channelName'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
			if (isset($vals['shipmentTypeCode'])){
				
				$this->shipmentTypeCode = $vals['shipmentTypeCode'];
			}
			
			
			if (isset($vals['shipmentTypeName'])){
				
				$this->shipmentTypeName = $vals['shipmentTypeName'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['statusName'])){
				
				$this->statusName = $vals['statusName'];
			}
			
			
			if (isset($vals['appointmentTime'])){
				
				$this->appointmentTime = $vals['appointmentTime'];
			}
			
			
			if (isset($vals['totalQuantity'])){
				
				$this->totalQuantity = $vals['totalQuantity'];
			}
			
			
			if (isset($vals['totalCaseQuantity'])){
				
				$this->totalCaseQuantity = $vals['totalCaseQuantity'];
			}
			
			
			if (isset($vals['totalActualReceivedQuantity'])){
				
				$this->totalActualReceivedQuantity = $vals['totalActualReceivedQuantity'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['beginReceiveTime'])){
				
				$this->beginReceiveTime = $vals['beginReceiveTime'];
			}
			
			
			if (isset($vals['finishReceiveTime'])){
				
				$this->finishReceiveTime = $vals['finishReceiveTime'];
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
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipmentHeadInfo';
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
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("channelCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelCode);
				
			}
			
			
			
			
			if ("channelName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelName);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
			}
			
			
			
			
			if ("shipmentTypeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentTypeCode);
				
			}
			
			
			
			
			if ("shipmentTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentTypeName);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("statusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusName);
				
			}
			
			
			
			
			if ("appointmentTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->appointmentTime);
				
			}
			
			
			
			
			if ("totalQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalQuantity); 
				
			}
			
			
			
			
			if ("totalCaseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCaseQuantity); 
				
			}
			
			
			
			
			if ("totalActualReceivedQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalActualReceivedQuantity); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("beginReceiveTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginReceiveTime);
				
			}
			
			
			
			
			if ("finishReceiveTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->finishReceiveTime);
				
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
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->shipmentNo !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentNo');
			$xfer += $output->writeString($this->shipmentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelCode !== null) {
			
			$xfer += $output->writeFieldBegin('channelCode');
			$xfer += $output->writeString($this->channelCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelName !== null) {
			
			$xfer += $output->writeFieldBegin('channelName');
			$xfer += $output->writeString($this->channelName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentTypeCode !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentTypeCode');
			$xfer += $output->writeString($this->shipmentTypeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentTypeName');
			$xfer += $output->writeString($this->shipmentTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusName !== null) {
			
			$xfer += $output->writeFieldBegin('statusName');
			$xfer += $output->writeString($this->statusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentTime');
			$xfer += $output->writeI64($this->appointmentTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('totalQuantity');
			$xfer += $output->writeI32($this->totalQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalCaseQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('totalCaseQuantity');
			$xfer += $output->writeI32($this->totalCaseQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalActualReceivedQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('totalActualReceivedQuantity');
			$xfer += $output->writeI32($this->totalActualReceivedQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginReceiveTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginReceiveTime');
			$xfer += $output->writeI64($this->beginReceiveTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finishReceiveTime !== null) {
			
			$xfer += $output->writeFieldBegin('finishReceiveTime');
			$xfer += $output->writeI64($this->finishReceiveTime);
			
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
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>