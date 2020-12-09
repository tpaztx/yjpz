<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;
interface PoServiceIf{
	
	
	public function getPoDeliveryType( $vendor_id, $cooperation_nos, $po_nos, $co_mode, $po_start_time, $po_end_time, $page, $limit);
	
	public function getPoDetailInfoByPo(\com\vip\venus\po\service\PoModel $poModel,\com\vip\venus\po\service\PageModel $pageModel);
	
	public function getPoDetailInfoByPoSkus( $paramModelList);
	
	public function getPoDetailsByPoSKU( $poNum, $itemNum);
	
	public function getPoDetailsByPoSKUs( $poNum, $itemNum);
	
	public function getPoInfoByPo(\com\vip\venus\po\service\PoModel $poModel);
	
	public function getPoInfoByPos(\com\vip\venus\po\service\PoModel $poModel, $resultOptions);
	
	public function getPoListByPos(\com\vip\venus\po\service\PoModel $poModel);
	
	public function getPoListByPurchase(\com\vip\venus\po\service\PoPurchaseModel $poPurchaseModel,\com\vip\venus\po\service\PageModel $pageModel);
	
	public function getPoListByType(\com\vip\venus\po\service\PoListModel $poListModel);
	
	public function getPoStatByPurchase(\com\vip\venus\po\service\StatQuery $statQuery);
	
	public function getPoUpdateByType(\com\vip\venus\po\service\PoUpdateModel $poUpdateModel);
	
	public function getSKUArrayPrice(\com\vip\venus\po\service\PoPriceModel $poPriceModel);
	
	public function getSKUPrice(\com\vip\venus\po\service\PriceModel $priceModel);
	
	public function healthCheck();
	
}

class _PoServiceClient extends \Osp\Base\OspStub implements \com\vip\venus\po\service\PoServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.venus.po.service.PoService", "1.0.0");
	}
	
	
	public function getPoDeliveryType( $vendor_id, $cooperation_nos, $po_nos, $co_mode, $po_start_time, $po_end_time, $page, $limit){
		
		$this->send_getPoDeliveryType( $vendor_id, $cooperation_nos, $po_nos, $co_mode, $po_start_time, $po_end_time, $page, $limit);
		return $this->recv_getPoDeliveryType();
	}
	
	public function send_getPoDeliveryType( $vendor_id, $cooperation_nos, $po_nos, $co_mode, $po_start_time, $po_end_time, $page, $limit){
		
		$this->initInvocation("getPoDeliveryType");
		$args = new \com\vip\venus\po\service\PoService_getPoDeliveryType_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->cooperation_nos = $cooperation_nos;
		
		$args->po_nos = $po_nos;
		
		$args->co_mode = $co_mode;
		
		$args->po_start_time = $po_start_time;
		
		$args->po_end_time = $po_end_time;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getPoDeliveryType(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoDeliveryType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoDetailInfoByPo(\com\vip\venus\po\service\PoModel $poModel,\com\vip\venus\po\service\PageModel $pageModel){
		
		$this->send_getPoDetailInfoByPo( $poModel, $pageModel);
		return $this->recv_getPoDetailInfoByPo();
	}
	
	public function send_getPoDetailInfoByPo(\com\vip\venus\po\service\PoModel $poModel,\com\vip\venus\po\service\PageModel $pageModel){
		
		$this->initInvocation("getPoDetailInfoByPo");
		$args = new \com\vip\venus\po\service\PoService_getPoDetailInfoByPo_args();
		
		$args->poModel = $poModel;
		
		$args->pageModel = $pageModel;
		
		$this->send_base($args);
	}
	
	public function recv_getPoDetailInfoByPo(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoDetailInfoByPo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoDetailInfoByPoSkus( $paramModelList){
		
		$this->send_getPoDetailInfoByPoSkus( $paramModelList);
		return $this->recv_getPoDetailInfoByPoSkus();
	}
	
	public function send_getPoDetailInfoByPoSkus( $paramModelList){
		
		$this->initInvocation("getPoDetailInfoByPoSkus");
		$args = new \com\vip\venus\po\service\PoService_getPoDetailInfoByPoSkus_args();
		
		$args->paramModelList = $paramModelList;
		
		$this->send_base($args);
	}
	
	public function recv_getPoDetailInfoByPoSkus(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoDetailInfoByPoSkus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoDetailsByPoSKU( $poNum, $itemNum){
		
		$this->send_getPoDetailsByPoSKU( $poNum, $itemNum);
		return $this->recv_getPoDetailsByPoSKU();
	}
	
	public function send_getPoDetailsByPoSKU( $poNum, $itemNum){
		
		$this->initInvocation("getPoDetailsByPoSKU");
		$args = new \com\vip\venus\po\service\PoService_getPoDetailsByPoSKU_args();
		
		$args->poNum = $poNum;
		
		$args->itemNum = $itemNum;
		
		$this->send_base($args);
	}
	
	public function recv_getPoDetailsByPoSKU(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoDetailsByPoSKU_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoDetailsByPoSKUs( $poNum, $itemNum){
		
		$this->send_getPoDetailsByPoSKUs( $poNum, $itemNum);
		return $this->recv_getPoDetailsByPoSKUs();
	}
	
	public function send_getPoDetailsByPoSKUs( $poNum, $itemNum){
		
		$this->initInvocation("getPoDetailsByPoSKUs");
		$args = new \com\vip\venus\po\service\PoService_getPoDetailsByPoSKUs_args();
		
		$args->poNum = $poNum;
		
		$args->itemNum = $itemNum;
		
		$this->send_base($args);
	}
	
	public function recv_getPoDetailsByPoSKUs(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoDetailsByPoSKUs_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoInfoByPo(\com\vip\venus\po\service\PoModel $poModel){
		
		$this->send_getPoInfoByPo( $poModel);
		return $this->recv_getPoInfoByPo();
	}
	
	public function send_getPoInfoByPo(\com\vip\venus\po\service\PoModel $poModel){
		
		$this->initInvocation("getPoInfoByPo");
		$args = new \com\vip\venus\po\service\PoService_getPoInfoByPo_args();
		
		$args->poModel = $poModel;
		
		$this->send_base($args);
	}
	
	public function recv_getPoInfoByPo(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoInfoByPo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoInfoByPos(\com\vip\venus\po\service\PoModel $poModel, $resultOptions){
		
		$this->send_getPoInfoByPos( $poModel, $resultOptions);
		return $this->recv_getPoInfoByPos();
	}
	
	public function send_getPoInfoByPos(\com\vip\venus\po\service\PoModel $poModel, $resultOptions){
		
		$this->initInvocation("getPoInfoByPos");
		$args = new \com\vip\venus\po\service\PoService_getPoInfoByPos_args();
		
		$args->poModel = $poModel;
		
		$args->resultOptions = $resultOptions;
		
		$this->send_base($args);
	}
	
	public function recv_getPoInfoByPos(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoInfoByPos_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoListByPos(\com\vip\venus\po\service\PoModel $poModel){
		
		$this->send_getPoListByPos( $poModel);
		return $this->recv_getPoListByPos();
	}
	
	public function send_getPoListByPos(\com\vip\venus\po\service\PoModel $poModel){
		
		$this->initInvocation("getPoListByPos");
		$args = new \com\vip\venus\po\service\PoService_getPoListByPos_args();
		
		$args->poModel = $poModel;
		
		$this->send_base($args);
	}
	
	public function recv_getPoListByPos(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoListByPos_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoListByPurchase(\com\vip\venus\po\service\PoPurchaseModel $poPurchaseModel,\com\vip\venus\po\service\PageModel $pageModel){
		
		$this->send_getPoListByPurchase( $poPurchaseModel, $pageModel);
		return $this->recv_getPoListByPurchase();
	}
	
	public function send_getPoListByPurchase(\com\vip\venus\po\service\PoPurchaseModel $poPurchaseModel,\com\vip\venus\po\service\PageModel $pageModel){
		
		$this->initInvocation("getPoListByPurchase");
		$args = new \com\vip\venus\po\service\PoService_getPoListByPurchase_args();
		
		$args->poPurchaseModel = $poPurchaseModel;
		
		$args->pageModel = $pageModel;
		
		$this->send_base($args);
	}
	
	public function recv_getPoListByPurchase(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoListByPurchase_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoListByType(\com\vip\venus\po\service\PoListModel $poListModel){
		
		$this->send_getPoListByType( $poListModel);
		return $this->recv_getPoListByType();
	}
	
	public function send_getPoListByType(\com\vip\venus\po\service\PoListModel $poListModel){
		
		$this->initInvocation("getPoListByType");
		$args = new \com\vip\venus\po\service\PoService_getPoListByType_args();
		
		$args->poListModel = $poListModel;
		
		$this->send_base($args);
	}
	
	public function recv_getPoListByType(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoListByType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoStatByPurchase(\com\vip\venus\po\service\StatQuery $statQuery){
		
		$this->send_getPoStatByPurchase( $statQuery);
		return $this->recv_getPoStatByPurchase();
	}
	
	public function send_getPoStatByPurchase(\com\vip\venus\po\service\StatQuery $statQuery){
		
		$this->initInvocation("getPoStatByPurchase");
		$args = new \com\vip\venus\po\service\PoService_getPoStatByPurchase_args();
		
		$args->statQuery = $statQuery;
		
		$this->send_base($args);
	}
	
	public function recv_getPoStatByPurchase(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoStatByPurchase_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoUpdateByType(\com\vip\venus\po\service\PoUpdateModel $poUpdateModel){
		
		$this->send_getPoUpdateByType( $poUpdateModel);
		return $this->recv_getPoUpdateByType();
	}
	
	public function send_getPoUpdateByType(\com\vip\venus\po\service\PoUpdateModel $poUpdateModel){
		
		$this->initInvocation("getPoUpdateByType");
		$args = new \com\vip\venus\po\service\PoService_getPoUpdateByType_args();
		
		$args->poUpdateModel = $poUpdateModel;
		
		$this->send_base($args);
	}
	
	public function recv_getPoUpdateByType(){
		
		$result = new \com\vip\venus\po\service\PoService_getPoUpdateByType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSKUArrayPrice(\com\vip\venus\po\service\PoPriceModel $poPriceModel){
		
		$this->send_getSKUArrayPrice( $poPriceModel);
		return $this->recv_getSKUArrayPrice();
	}
	
	public function send_getSKUArrayPrice(\com\vip\venus\po\service\PoPriceModel $poPriceModel){
		
		$this->initInvocation("getSKUArrayPrice");
		$args = new \com\vip\venus\po\service\PoService_getSKUArrayPrice_args();
		
		$args->poPriceModel = $poPriceModel;
		
		$this->send_base($args);
	}
	
	public function recv_getSKUArrayPrice(){
		
		$result = new \com\vip\venus\po\service\PoService_getSKUArrayPrice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSKUPrice(\com\vip\venus\po\service\PriceModel $priceModel){
		
		$this->send_getSKUPrice( $priceModel);
		return $this->recv_getSKUPrice();
	}
	
	public function send_getSKUPrice(\com\vip\venus\po\service\PriceModel $priceModel){
		
		$this->initInvocation("getSKUPrice");
		$args = new \com\vip\venus\po\service\PoService_getSKUPrice_args();
		
		$args->priceModel = $priceModel;
		
		$this->send_base($args);
	}
	
	public function recv_getSKUPrice(){
		
		$result = new \com\vip\venus\po\service\PoService_getSKUPrice_result();
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
		$args = new \com\vip\venus\po\service\PoService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\venus\po\service\PoService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class PoService_getPoDeliveryType_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $cooperation_nos = null;
	public $po_nos = null;
	public $co_mode = null;
	public $po_start_time = null;
	public $po_end_time = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'cooperation_nos'
			),
			3 => array(
			'var' => 'po_nos'
			),
			4 => array(
			'var' => 'co_mode'
			),
			5 => array(
			'var' => 'po_start_time'
			),
			6 => array(
			'var' => 'po_end_time'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_nos'])){
				
				$this->cooperation_nos = $vals['cooperation_nos'];
			}
			
			
			if (isset($vals['po_nos'])){
				
				$this->po_nos = $vals['po_nos'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['po_start_time'])){
				
				$this->po_start_time = $vals['po_start_time'];
			}
			
			
			if (isset($vals['po_end_time'])){
				
				$this->po_end_time = $vals['po_end_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->cooperation_nos = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->cooperation_nos[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$this->po_nos = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->po_nos[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$this->co_mode = array();
			$_size2 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem2 = null;
					$input->readString($elem2);
					
					$this->co_mode[$_size2++] = $elem2;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_start_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_end_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cooperation_nos !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_nos');
			
			if (!is_array($this->cooperation_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cooperation_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_nos !== null) {
			
			$xfer += $output->writeFieldBegin('po_nos');
			
			if (!is_array($this->po_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->po_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			
			if (!is_array($this->co_mode)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->co_mode as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('po_start_time');
			$xfer += $output->writeString($this->po_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('po_end_time');
			$xfer += $output->writeString($this->po_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoDetailInfoByPo_args {
	
	static $_TSPEC;
	public $poModel = null;
	public $pageModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poModel'
			),
			2 => array(
			'var' => 'pageModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poModel'])){
				
				$this->poModel = $vals['poModel'];
			}
			
			
			if (isset($vals['pageModel'])){
				
				$this->pageModel = $vals['pageModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poModel = new \com\vip\venus\po\service\PoModel();
			$this->poModel->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pageModel = new \com\vip\venus\po\service\PageModel();
			$this->pageModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->poModel !== null) {
			
			$xfer += $output->writeFieldBegin('poModel');
			
			if (!is_object($this->poModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageModel !== null) {
			
			$xfer += $output->writeFieldBegin('pageModel');
			
			if (!is_object($this->pageModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoDetailInfoByPoSkus_args {
	
	static $_TSPEC;
	public $paramModelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'paramModelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['paramModelList'])){
				
				$this->paramModelList = $vals['paramModelList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->paramModelList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\venus\po\service\PoParamModel();
					$elem0->read($input);
					
					$this->paramModelList[$_size0++] = $elem0;
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
		
		if($this->paramModelList !== null) {
			
			$xfer += $output->writeFieldBegin('paramModelList');
			
			if (!is_array($this->paramModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->paramModelList as $iter0){
				
				
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




class PoService_getPoDetailsByPoSKU_args {
	
	static $_TSPEC;
	public $poNum = null;
	public $itemNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poNum'
			),
			2 => array(
			'var' => 'itemNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poNum'])){
				
				$this->poNum = $vals['poNum'];
			}
			
			
			if (isset($vals['itemNum'])){
				
				$this->itemNum = $vals['itemNum'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->poNum);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->itemNum);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('poNum');
		$xfer += $output->writeString($this->poNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('itemNum');
		$xfer += $output->writeString($this->itemNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoDetailsByPoSKUs_args {
	
	static $_TSPEC;
	public $poNum = null;
	public $itemNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poNum'
			),
			2 => array(
			'var' => 'itemNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poNum'])){
				
				$this->poNum = $vals['poNum'];
			}
			
			
			if (isset($vals['itemNum'])){
				
				$this->itemNum = $vals['itemNum'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->poNum);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->itemNum = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->itemNum[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('poNum');
		$xfer += $output->writeString($this->poNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('itemNum');
		
		if (!is_array($this->itemNum)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->itemNum as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoInfoByPo_args {
	
	static $_TSPEC;
	public $poModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poModel'])){
				
				$this->poModel = $vals['poModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poModel = new \com\vip\venus\po\service\PoModel();
			$this->poModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->poModel !== null) {
			
			$xfer += $output->writeFieldBegin('poModel');
			
			if (!is_object($this->poModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoInfoByPos_args {
	
	static $_TSPEC;
	public $poModel = null;
	public $resultOptions = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poModel'
			),
			2 => array(
			'var' => 'resultOptions'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poModel'])){
				
				$this->poModel = $vals['poModel'];
			}
			
			
			if (isset($vals['resultOptions'])){
				
				$this->resultOptions = $vals['resultOptions'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poModel = new \com\vip\venus\po\service\PoModel();
			$this->poModel->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->resultOptions = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$names = \com\vip\venus\po\service\ResultOption::$__names;
					$name = null;
					$input->readString($name);
					foreach ($names as $k => $v){
						
						if($name == $v){
							
							$elem0 = $k;
							break;
						}
						
					}
					
					
					$this->resultOptions[$_size0++] = $elem0;
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
		
		if($this->poModel !== null) {
			
			$xfer += $output->writeFieldBegin('poModel');
			
			if (!is_object($this->poModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultOptions !== null) {
			
			$xfer += $output->writeFieldBegin('resultOptions');
			
			if (!is_array($this->resultOptions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->resultOptions as $iter0){
				
				
				$em = new \com\vip\venus\po\service\ResultOption; 
				$output->writeString($em::$__names[$iter0]);  
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoListByPos_args {
	
	static $_TSPEC;
	public $poModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poModel'])){
				
				$this->poModel = $vals['poModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poModel = new \com\vip\venus\po\service\PoModel();
			$this->poModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->poModel !== null) {
			
			$xfer += $output->writeFieldBegin('poModel');
			
			if (!is_object($this->poModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoListByPurchase_args {
	
	static $_TSPEC;
	public $poPurchaseModel = null;
	public $pageModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poPurchaseModel'
			),
			2 => array(
			'var' => 'pageModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poPurchaseModel'])){
				
				$this->poPurchaseModel = $vals['poPurchaseModel'];
			}
			
			
			if (isset($vals['pageModel'])){
				
				$this->pageModel = $vals['pageModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poPurchaseModel = new \com\vip\venus\po\service\PoPurchaseModel();
			$this->poPurchaseModel->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pageModel = new \com\vip\venus\po\service\PageModel();
			$this->pageModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->poPurchaseModel !== null) {
			
			$xfer += $output->writeFieldBegin('poPurchaseModel');
			
			if (!is_object($this->poPurchaseModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poPurchaseModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageModel !== null) {
			
			$xfer += $output->writeFieldBegin('pageModel');
			
			if (!is_object($this->pageModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoListByType_args {
	
	static $_TSPEC;
	public $poListModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poListModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poListModel'])){
				
				$this->poListModel = $vals['poListModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poListModel = new \com\vip\venus\po\service\PoListModel();
			$this->poListModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->poListModel !== null) {
			
			$xfer += $output->writeFieldBegin('poListModel');
			
			if (!is_object($this->poListModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poListModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoStatByPurchase_args {
	
	static $_TSPEC;
	public $statQuery = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'statQuery'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['statQuery'])){
				
				$this->statQuery = $vals['statQuery'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->statQuery = new \com\vip\venus\po\service\StatQuery();
			$this->statQuery->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->statQuery !== null) {
			
			$xfer += $output->writeFieldBegin('statQuery');
			
			if (!is_object($this->statQuery)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->statQuery->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getPoUpdateByType_args {
	
	static $_TSPEC;
	public $poUpdateModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poUpdateModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poUpdateModel'])){
				
				$this->poUpdateModel = $vals['poUpdateModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poUpdateModel = new \com\vip\venus\po\service\PoUpdateModel();
			$this->poUpdateModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->poUpdateModel !== null) {
			
			$xfer += $output->writeFieldBegin('poUpdateModel');
			
			if (!is_object($this->poUpdateModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poUpdateModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getSKUArrayPrice_args {
	
	static $_TSPEC;
	public $poPriceModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poPriceModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poPriceModel'])){
				
				$this->poPriceModel = $vals['poPriceModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->poPriceModel = new \com\vip\venus\po\service\PoPriceModel();
			$this->poPriceModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->poPriceModel !== null) {
			
			$xfer += $output->writeFieldBegin('poPriceModel');
			
			if (!is_object($this->poPriceModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poPriceModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_getSKUPrice_args {
	
	static $_TSPEC;
	public $priceModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'priceModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['priceModel'])){
				
				$this->priceModel = $vals['priceModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->priceModel = new \com\vip\venus\po\service\PriceModel();
			$this->priceModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->priceModel !== null) {
			
			$xfer += $output->writeFieldBegin('priceModel');
			
			if (!is_object($this->priceModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->priceModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PoService_healthCheck_args {
	
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




class PoService_getPoDeliveryType_result {
	
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
			
			
			$this->success = new \com\vip\venus\po\service\GetDeliveryTypeResponse();
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




class PoService_getPoDetailInfoByPo_result {
	
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
			
			
			$this->success = new \com\vip\venus\po\service\PoDetailData();
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




class PoService_getPoDetailInfoByPoSkus_result {
	
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
					
					$elem0 = new \com\vip\venus\po\service\PoDetailInfoSimpleModel();
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




class PoService_getPoDetailsByPoSKU_result {
	
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
			
			
			$this->success = new \com\vip\venus\po\service\PoResultModel();
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




class PoService_getPoDetailsByPoSKUs_result {
	
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
					
					$elem0 = new \com\vip\venus\po\service\PoResultModel();
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




class PoService_getPoInfoByPo_result {
	
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
					
					$elem1 = new \com\vip\venus\po\service\PoInfo();
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




class PoService_getPoInfoByPos_result {
	
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
					
					$elem1 = new \com\vip\venus\po\service\PoInfos();
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




class PoService_getPoListByPos_result {
	
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
					
					$elem1 = new \com\vip\venus\po\service\PoInfo();
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




class PoService_getPoListByPurchase_result {
	
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
			
			
			$this->success = new \com\vip\venus\po\service\PoListResp();
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




class PoService_getPoListByType_result {
	
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
					
					$elem0 = new \com\vip\venus\po\service\PoListData();
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




class PoService_getPoStatByPurchase_result {
	
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
			
			
			$this->success = new \com\vip\venus\po\service\StatResp();
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




class PoService_getPoUpdateByType_result {
	
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
					
					$elem0 = new \com\vip\venus\po\service\PoUpdateData();
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




class PoService_getSKUArrayPrice_result {
	
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
					
					$elem1 = new \com\vip\venus\po\service\PriceInfoNoTaxModel();
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




class PoService_getSKUPrice_result {
	
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
			
			
			$this->success = new \com\vip\venus\po\service\PriceInfoModel();
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




class PoService_healthCheck_result {
	
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