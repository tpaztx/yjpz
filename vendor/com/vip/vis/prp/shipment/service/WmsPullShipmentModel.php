<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class WmsPullShipmentModel {
	
	static $_TSPEC;
	public $id = null;
	public $vendorId = null;
	public $vendorName = null;
	public $vendorCode = null;
	public $shipmentNo = null;
	public $shipmentType = null;
	public $shipmentTypeCode = null;
	public $appointmentTime = null;
	public $status = null;
	public $statusName = null;
	public $totalQuantity = null;
	public $totalCaseQuantity = null;
	public $totalActualReceivedQuantity = null;
	public $receiveBeginTime = null;
	public $createTime = null;
	public $syncUpdateTime = null;
	public $driverName = null;
	public $contactPhone = null;
	public $licensePlate = null;
	public $comments = null;
	public $shipmentDetailList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'vendorName'
			),
			4 => array(
			'var' => 'vendorCode'
			),
			5 => array(
			'var' => 'shipmentNo'
			),
			6 => array(
			'var' => 'shipmentType'
			),
			7 => array(
			'var' => 'shipmentTypeCode'
			),
			8 => array(
			'var' => 'appointmentTime'
			),
			9 => array(
			'var' => 'status'
			),
			10 => array(
			'var' => 'statusName'
			),
			11 => array(
			'var' => 'totalQuantity'
			),
			12 => array(
			'var' => 'totalCaseQuantity'
			),
			13 => array(
			'var' => 'totalActualReceivedQuantity'
			),
			14 => array(
			'var' => 'receiveBeginTime'
			),
			15 => array(
			'var' => 'createTime'
			),
			16 => array(
			'var' => 'syncUpdateTime'
			),
			17 => array(
			'var' => 'driverName'
			),
			18 => array(
			'var' => 'contactPhone'
			),
			19 => array(
			'var' => 'licensePlate'
			),
			20 => array(
			'var' => 'comments'
			),
			21 => array(
			'var' => 'shipmentDetailList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['shipmentNo'])){
				
				$this->shipmentNo = $vals['shipmentNo'];
			}
			
			
			if (isset($vals['shipmentType'])){
				
				$this->shipmentType = $vals['shipmentType'];
			}
			
			
			if (isset($vals['shipmentTypeCode'])){
				
				$this->shipmentTypeCode = $vals['shipmentTypeCode'];
			}
			
			
			if (isset($vals['appointmentTime'])){
				
				$this->appointmentTime = $vals['appointmentTime'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['statusName'])){
				
				$this->statusName = $vals['statusName'];
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
			
			
			if (isset($vals['receiveBeginTime'])){
				
				$this->receiveBeginTime = $vals['receiveBeginTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['syncUpdateTime'])){
				
				$this->syncUpdateTime = $vals['syncUpdateTime'];
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
			
			
			if (isset($vals['comments'])){
				
				$this->comments = $vals['comments'];
			}
			
			
			if (isset($vals['shipmentDetailList'])){
				
				$this->shipmentDetailList = $vals['shipmentDetailList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WmsPullShipmentModel';
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
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorId);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("shipmentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentNo);
				
			}
			
			
			
			
			if ("shipmentType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentType);
				
			}
			
			
			
			
			if ("shipmentTypeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentTypeCode);
				
			}
			
			
			
			
			if ("appointmentTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appointmentTime);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("statusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusName);
				
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
			
			
			
			
			if ("receiveBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiveBeginTime);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("syncUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->syncUpdateTime); 
				
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
			
			
			
			
			if ("comments" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->comments);
				
			}
			
			
			
			
			if ("shipmentDetailList" == $schemeField){
				
				$needSkip = false;
				
				$this->shipmentDetailList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\prp\shipment\service\WmsPullShipmentDetail();
						$elem0->read($input);
						
						$this->shipmentDetailList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeString($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentNo !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentNo');
			$xfer += $output->writeString($this->shipmentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentType !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentType');
			$xfer += $output->writeString($this->shipmentType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentTypeCode !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentTypeCode');
			$xfer += $output->writeString($this->shipmentTypeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentTime');
			$xfer += $output->writeString($this->appointmentTime);
			
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
		
		
		if($this->receiveBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('receiveBeginTime');
			$xfer += $output->writeString($this->receiveBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->syncUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('syncUpdateTime');
			$xfer += $output->writeI64($this->syncUpdateTime);
			
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
		
		
		if($this->comments !== null) {
			
			$xfer += $output->writeFieldBegin('comments');
			$xfer += $output->writeString($this->comments);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentDetailList !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentDetailList');
			
			if (!is_array($this->shipmentDetailList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->shipmentDetailList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>