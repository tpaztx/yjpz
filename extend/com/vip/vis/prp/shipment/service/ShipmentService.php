<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;
interface ShipmentServiceIf{
	
	
	public function cancelShipmentStatus(\com\vip\vis\prp\shipment\service\CancelShipmentParam $request);
	
	public function getShipmentDetailList( $shipmentNo,\com\vip\vis\prp\common\service\PageParam $pageParam);
	
	public function getShipmentHead( $shipmentNo);
	
	public function getShipmentList(\com\vip\vis\prp\shipment\service\ShipmentPageRequest $request,\com\vip\vis\prp\common\service\PageParam $pageParam);
	
	public function getShipmentLog( $shipmentNo,\com\vip\vis\prp\common\service\PageParam $pageParam);
	
	public function healthCheck();
	
	public function pullShipmentListForWms(\com\vip\vis\prp\shipment\service\PullShipmentRequest $request);
	
	public function updateShipment(\com\vip\vis\prp\shipment\service\UpdateShipmentParam $request);
	
	public function updateShipmentActualReceivedQuantity(\com\vip\vis\prp\shipment\service\ActualReceivedDetailRequest $actualReceivedDetailRequest);
	
	public function updateShipmentStatus(\com\vip\vis\prp\shipment\service\ShipmentParam $shipmentParam);
	
}

class _ShipmentServiceClient extends \Osp\Base\OspStub implements \com\vip\vis\prp\shipment\service\ShipmentServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vis.prp.shipment.service.ShipmentService", "1.0.0");
	}
	
	
	public function cancelShipmentStatus(\com\vip\vis\prp\shipment\service\CancelShipmentParam $request){
		
		$this->send_cancelShipmentStatus( $request);
		return $this->recv_cancelShipmentStatus();
	}
	
	public function send_cancelShipmentStatus(\com\vip\vis\prp\shipment\service\CancelShipmentParam $request){
		
		$this->initInvocation("cancelShipmentStatus");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_cancelShipmentStatus_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_cancelShipmentStatus(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_cancelShipmentStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getShipmentDetailList( $shipmentNo,\com\vip\vis\prp\common\service\PageParam $pageParam){
		
		$this->send_getShipmentDetailList( $shipmentNo, $pageParam);
		return $this->recv_getShipmentDetailList();
	}
	
	public function send_getShipmentDetailList( $shipmentNo,\com\vip\vis\prp\common\service\PageParam $pageParam){
		
		$this->initInvocation("getShipmentDetailList");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentDetailList_args();
		
		$args->shipmentNo = $shipmentNo;
		
		$args->pageParam = $pageParam;
		
		$this->send_base($args);
	}
	
	public function recv_getShipmentDetailList(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentDetailList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getShipmentHead( $shipmentNo){
		
		$this->send_getShipmentHead( $shipmentNo);
		return $this->recv_getShipmentHead();
	}
	
	public function send_getShipmentHead( $shipmentNo){
		
		$this->initInvocation("getShipmentHead");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentHead_args();
		
		$args->shipmentNo = $shipmentNo;
		
		$this->send_base($args);
	}
	
	public function recv_getShipmentHead(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentHead_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getShipmentList(\com\vip\vis\prp\shipment\service\ShipmentPageRequest $request,\com\vip\vis\prp\common\service\PageParam $pageParam){
		
		$this->send_getShipmentList( $request, $pageParam);
		return $this->recv_getShipmentList();
	}
	
	public function send_getShipmentList(\com\vip\vis\prp\shipment\service\ShipmentPageRequest $request,\com\vip\vis\prp\common\service\PageParam $pageParam){
		
		$this->initInvocation("getShipmentList");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentList_args();
		
		$args->request = $request;
		
		$args->pageParam = $pageParam;
		
		$this->send_base($args);
	}
	
	public function recv_getShipmentList(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getShipmentLog( $shipmentNo,\com\vip\vis\prp\common\service\PageParam $pageParam){
		
		$this->send_getShipmentLog( $shipmentNo, $pageParam);
		return $this->recv_getShipmentLog();
	}
	
	public function send_getShipmentLog( $shipmentNo,\com\vip\vis\prp\common\service\PageParam $pageParam){
		
		$this->initInvocation("getShipmentLog");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentLog_args();
		
		$args->shipmentNo = $shipmentNo;
		
		$args->pageParam = $pageParam;
		
		$this->send_base($args);
	}
	
	public function recv_getShipmentLog(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_getShipmentLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pullShipmentListForWms(\com\vip\vis\prp\shipment\service\PullShipmentRequest $request){
		
		$this->send_pullShipmentListForWms( $request);
		return $this->recv_pullShipmentListForWms();
	}
	
	public function send_pullShipmentListForWms(\com\vip\vis\prp\shipment\service\PullShipmentRequest $request){
		
		$this->initInvocation("pullShipmentListForWms");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_pullShipmentListForWms_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_pullShipmentListForWms(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_pullShipmentListForWms_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateShipment(\com\vip\vis\prp\shipment\service\UpdateShipmentParam $request){
		
		$this->send_updateShipment( $request);
		return $this->recv_updateShipment();
	}
	
	public function send_updateShipment(\com\vip\vis\prp\shipment\service\UpdateShipmentParam $request){
		
		$this->initInvocation("updateShipment");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_updateShipment_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_updateShipment(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_updateShipment_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateShipmentActualReceivedQuantity(\com\vip\vis\prp\shipment\service\ActualReceivedDetailRequest $actualReceivedDetailRequest){
		
		$this->send_updateShipmentActualReceivedQuantity( $actualReceivedDetailRequest);
		return $this->recv_updateShipmentActualReceivedQuantity();
	}
	
	public function send_updateShipmentActualReceivedQuantity(\com\vip\vis\prp\shipment\service\ActualReceivedDetailRequest $actualReceivedDetailRequest){
		
		$this->initInvocation("updateShipmentActualReceivedQuantity");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_updateShipmentActualReceivedQuantity_args();
		
		$args->actualReceivedDetailRequest = $actualReceivedDetailRequest;
		
		$this->send_base($args);
	}
	
	public function recv_updateShipmentActualReceivedQuantity(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_updateShipmentActualReceivedQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateShipmentStatus(\com\vip\vis\prp\shipment\service\ShipmentParam $shipmentParam){
		
		$this->send_updateShipmentStatus( $shipmentParam);
		return $this->recv_updateShipmentStatus();
	}
	
	public function send_updateShipmentStatus(\com\vip\vis\prp\shipment\service\ShipmentParam $shipmentParam){
		
		$this->initInvocation("updateShipmentStatus");
		$args = new \com\vip\vis\prp\shipment\service\ShipmentService_updateShipmentStatus_args();
		
		$args->shipmentParam = $shipmentParam;
		
		$this->send_base($args);
	}
	
	public function recv_updateShipmentStatus(){
		
		$result = new \com\vip\vis\prp\shipment\service\ShipmentService_updateShipmentStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ShipmentService_cancelShipmentStatus_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\vis\prp\shipment\service\CancelShipmentParam();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentDetailList_args {
	
	static $_TSPEC;
	public $shipmentNo = null;
	public $pageParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipmentNo'
			),
			2 => array(
			'var' => 'pageParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipmentNo'])){
				
				$this->shipmentNo = $vals['shipmentNo'];
			}
			
			
			if (isset($vals['pageParam'])){
				
				$this->pageParam = $vals['pageParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->shipmentNo);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pageParam = new \com\vip\vis\prp\common\service\PageParam();
			$this->pageParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('shipmentNo');
		$xfer += $output->writeString($this->shipmentNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageParam');
		
		if (!is_object($this->pageParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pageParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentHead_args {
	
	static $_TSPEC;
	public $shipmentNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipmentNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipmentNo'])){
				
				$this->shipmentNo = $vals['shipmentNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->shipmentNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('shipmentNo');
		$xfer += $output->writeString($this->shipmentNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentList_args {
	
	static $_TSPEC;
	public $request = null;
	public $pageParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			2 => array(
			'var' => 'pageParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
			if (isset($vals['pageParam'])){
				
				$this->pageParam = $vals['pageParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\vis\prp\shipment\service\ShipmentPageRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pageParam = new \com\vip\vis\prp\common\service\PageParam();
			$this->pageParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageParam');
		
		if (!is_object($this->pageParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pageParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentLog_args {
	
	static $_TSPEC;
	public $shipmentNo = null;
	public $pageParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipmentNo'
			),
			2 => array(
			'var' => 'pageParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipmentNo'])){
				
				$this->shipmentNo = $vals['shipmentNo'];
			}
			
			
			if (isset($vals['pageParam'])){
				
				$this->pageParam = $vals['pageParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->shipmentNo);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pageParam = new \com\vip\vis\prp\common\service\PageParam();
			$this->pageParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('shipmentNo');
		$xfer += $output->writeString($this->shipmentNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageParam');
		
		if (!is_object($this->pageParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pageParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_pullShipmentListForWms_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\vis\prp\shipment\service\PullShipmentRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_updateShipment_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\vis\prp\shipment\service\UpdateShipmentParam();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_updateShipmentActualReceivedQuantity_args {
	
	static $_TSPEC;
	public $actualReceivedDetailRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actualReceivedDetailRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actualReceivedDetailRequest'])){
				
				$this->actualReceivedDetailRequest = $vals['actualReceivedDetailRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->actualReceivedDetailRequest = new \com\vip\vis\prp\shipment\service\ActualReceivedDetailRequest();
			$this->actualReceivedDetailRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('actualReceivedDetailRequest');
		
		if (!is_object($this->actualReceivedDetailRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->actualReceivedDetailRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_updateShipmentStatus_args {
	
	static $_TSPEC;
	public $shipmentParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipmentParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipmentParam'])){
				
				$this->shipmentParam = $vals['shipmentParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->shipmentParam = new \com\vip\vis\prp\shipment\service\ShipmentParam();
			$this->shipmentParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('shipmentParam');
		
		if (!is_object($this->shipmentParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->shipmentParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_cancelShipmentStatus_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ShipmentResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentDetailList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ShipmentDetailPageResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentHead_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ShipmentHeadInfo();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ShipmentPageResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_getShipmentLog_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ShipmentLogResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_pullShipmentListForWms_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\PullShipmentResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_updateShipment_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ShipmentResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_updateShipmentActualReceivedQuantity_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ActualReceivedDetailResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShipmentService_updateShipmentStatus_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\vis\prp\shipment\service\ShipmentResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>