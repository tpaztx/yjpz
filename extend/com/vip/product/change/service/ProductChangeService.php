<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\product\change\service;
interface ProductChangeServiceIf{
	
	
	public function batchGetLatestVendorSkuByBarcodeAndVendorId( $apiKey, $barcodeAndVendorIdList, $isHt);
	
	public function getWaitSyncBarcodeList( $apiKey, $lastMaxSerialId, $actionType, $serialType, $updateType, $ipAddress, $pageSize);
	
	public function healthCheck();
	
}

class _ProductChangeServiceClient extends \Osp\Base\OspStub implements \com\vip\product\change\service\ProductChangeServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.product.change.service.ProductChangeService", "1.0.0");
	}
	
	
	public function batchGetLatestVendorSkuByBarcodeAndVendorId( $apiKey, $barcodeAndVendorIdList, $isHt){
		
		$this->send_batchGetLatestVendorSkuByBarcodeAndVendorId( $apiKey, $barcodeAndVendorIdList, $isHt);
		return $this->recv_batchGetLatestVendorSkuByBarcodeAndVendorId();
	}
	
	public function send_batchGetLatestVendorSkuByBarcodeAndVendorId( $apiKey, $barcodeAndVendorIdList, $isHt){
		
		$this->initInvocation("batchGetLatestVendorSkuByBarcodeAndVendorId");
		$args = new \com\vip\product\change\service\ProductChangeService_batchGetLatestVendorSkuByBarcodeAndVendorId_args();
		
		$args->apiKey = $apiKey;
		
		$args->barcodeAndVendorIdList = $barcodeAndVendorIdList;
		
		$args->isHt = $isHt;
		
		$this->send_base($args);
	}
	
	public function recv_batchGetLatestVendorSkuByBarcodeAndVendorId(){
		
		$result = new \com\vip\product\change\service\ProductChangeService_batchGetLatestVendorSkuByBarcodeAndVendorId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWaitSyncBarcodeList( $apiKey, $lastMaxSerialId, $actionType, $serialType, $updateType, $ipAddress, $pageSize){
		
		$this->send_getWaitSyncBarcodeList( $apiKey, $lastMaxSerialId, $actionType, $serialType, $updateType, $ipAddress, $pageSize);
		return $this->recv_getWaitSyncBarcodeList();
	}
	
	public function send_getWaitSyncBarcodeList( $apiKey, $lastMaxSerialId, $actionType, $serialType, $updateType, $ipAddress, $pageSize){
		
		$this->initInvocation("getWaitSyncBarcodeList");
		$args = new \com\vip\product\change\service\ProductChangeService_getWaitSyncBarcodeList_args();
		
		$args->apiKey = $apiKey;
		
		$args->lastMaxSerialId = $lastMaxSerialId;
		
		$args->actionType = $actionType;
		
		$args->serialType = $serialType;
		
		$args->updateType = $updateType;
		
		$args->ipAddress = $ipAddress;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getWaitSyncBarcodeList(){
		
		$result = new \com\vip\product\change\service\ProductChangeService_getWaitSyncBarcodeList_result();
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
		$args = new \com\vip\product\change\service\ProductChangeService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\product\change\service\ProductChangeService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProductChangeService_batchGetLatestVendorSkuByBarcodeAndVendorId_args {
	
	static $_TSPEC;
	public $apiKey = null;
	public $barcodeAndVendorIdList = null;
	public $isHt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apiKey'
			),
			2 => array(
			'var' => 'barcodeAndVendorIdList'
			),
			3 => array(
			'var' => 'isHt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apiKey'])){
				
				$this->apiKey = $vals['apiKey'];
			}
			
			
			if (isset($vals['barcodeAndVendorIdList'])){
				
				$this->barcodeAndVendorIdList = $vals['barcodeAndVendorIdList'];
			}
			
			
			if (isset($vals['isHt'])){
				
				$this->isHt = $vals['isHt'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->apiKey);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->barcodeAndVendorIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\product\editable\query\service\BarcodeAndVendorId();
					$elem0->read($input);
					
					$this->barcodeAndVendorIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isHt);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('apiKey');
		$xfer += $output->writeString($this->apiKey);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->barcodeAndVendorIdList !== null) {
			
			$xfer += $output->writeFieldBegin('barcodeAndVendorIdList');
			
			if (!is_array($this->barcodeAndVendorIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->barcodeAndVendorIdList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHt !== null) {
			
			$xfer += $output->writeFieldBegin('isHt');
			$xfer += $output->writeBool($this->isHt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductChangeService_getWaitSyncBarcodeList_args {
	
	static $_TSPEC;
	public $apiKey = null;
	public $lastMaxSerialId = null;
	public $actionType = null;
	public $serialType = null;
	public $updateType = null;
	public $ipAddress = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apiKey'
			),
			2 => array(
			'var' => 'lastMaxSerialId'
			),
			3 => array(
			'var' => 'actionType'
			),
			4 => array(
			'var' => 'serialType'
			),
			5 => array(
			'var' => 'updateType'
			),
			6 => array(
			'var' => 'ipAddress'
			),
			7 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apiKey'])){
				
				$this->apiKey = $vals['apiKey'];
			}
			
			
			if (isset($vals['lastMaxSerialId'])){
				
				$this->lastMaxSerialId = $vals['lastMaxSerialId'];
			}
			
			
			if (isset($vals['actionType'])){
				
				$this->actionType = $vals['actionType'];
			}
			
			
			if (isset($vals['serialType'])){
				
				$this->serialType = $vals['serialType'];
			}
			
			
			if (isset($vals['updateType'])){
				
				$this->updateType = $vals['updateType'];
			}
			
			
			if (isset($vals['ipAddress'])){
				
				$this->ipAddress = $vals['ipAddress'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->apiKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->lastMaxSerialId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\product\model\OperationMode::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->actionType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\product\change\service\SerialType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->serialType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\product\change\service\UpdateType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->updateType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ipAddress);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('apiKey');
		$xfer += $output->writeString($this->apiKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('lastMaxSerialId');
		$xfer += $output->writeI64($this->lastMaxSerialId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->actionType !== null) {
			
			$xfer += $output->writeFieldBegin('actionType');
			
			$em = new \com\vip\product\model\OperationMode; 
			$output->writeString($em::$__names[$this->actionType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('serialType');
		
		$em = new \com\vip\product\change\service\SerialType; 
		$output->writeString($em::$__names[$this->serialType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('updateType');
		
		$em = new \com\vip\product\change\service\UpdateType; 
		$output->writeString($em::$__names[$this->updateType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ipAddress');
		$xfer += $output->writeString($this->ipAddress);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductChangeService_healthCheck_args {
	
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




class ProductChangeService_batchGetLatestVendorSkuByBarcodeAndVendorId_result {
	
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
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\product\change\service\ProductAndSkuChangeInfo();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class ProductChangeService_getWaitSyncBarcodeList_result {
	
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
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\product\change\service\BarcodeChangeInfo();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class ProductChangeService_healthCheck_result {
	
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




?>