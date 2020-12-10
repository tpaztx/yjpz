<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;
interface ShanshanOutletServiceIf{
	
	
	public function decryptCouponCode(\vipapis\shanshan\outlet\DecryptCouponCodeRequest $req);
	
	public function getMallStores(\vipapis\shanshan\outlet\MallStoreQueryReq $storeQueryReq);
	
	public function getOnlineOrders(\vipapis\shanshan\outlet\OnlineOrderQueryReq $orderQueryReq);
	
	public function getStoreCoupons(\vipapis\shanshan\outlet\CouponQueryReq $couponQueryReq);
	
	public function healthCheck();
	
	public function reportOfflineOrders(\vipapis\shanshan\outlet\ReportOfflineOrderReq $reportOfflineOrderReq);
	
	public function uploadProduct(\vipapis\shanshan\outlet\UploadProductRequest $req);
	
	public function uploadRendOrder(\vipapis\shanshan\outlet\UploadRendOrderRequest $req);
	
	public function verifyElectronicCoupon(\vipapis\shanshan\outlet\VerifyECouponReq $verifyECouponReq);
	
}

class _ShanshanOutletServiceClient extends \Osp\Base\OspStub implements \vipapis\shanshan\outlet\ShanshanOutletServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.shanshan.outlet.ShanshanOutletService", "1.0.0");
	}
	
	
	public function decryptCouponCode(\vipapis\shanshan\outlet\DecryptCouponCodeRequest $req){
		
		$this->send_decryptCouponCode( $req);
		return $this->recv_decryptCouponCode();
	}
	
	public function send_decryptCouponCode(\vipapis\shanshan\outlet\DecryptCouponCodeRequest $req){
		
		$this->initInvocation("decryptCouponCode");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_decryptCouponCode_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_decryptCouponCode(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_decryptCouponCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMallStores(\vipapis\shanshan\outlet\MallStoreQueryReq $storeQueryReq){
		
		$this->send_getMallStores( $storeQueryReq);
		return $this->recv_getMallStores();
	}
	
	public function send_getMallStores(\vipapis\shanshan\outlet\MallStoreQueryReq $storeQueryReq){
		
		$this->initInvocation("getMallStores");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_getMallStores_args();
		
		$args->storeQueryReq = $storeQueryReq;
		
		$this->send_base($args);
	}
	
	public function recv_getMallStores(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_getMallStores_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOnlineOrders(\vipapis\shanshan\outlet\OnlineOrderQueryReq $orderQueryReq){
		
		$this->send_getOnlineOrders( $orderQueryReq);
		return $this->recv_getOnlineOrders();
	}
	
	public function send_getOnlineOrders(\vipapis\shanshan\outlet\OnlineOrderQueryReq $orderQueryReq){
		
		$this->initInvocation("getOnlineOrders");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_getOnlineOrders_args();
		
		$args->orderQueryReq = $orderQueryReq;
		
		$this->send_base($args);
	}
	
	public function recv_getOnlineOrders(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_getOnlineOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getStoreCoupons(\vipapis\shanshan\outlet\CouponQueryReq $couponQueryReq){
		
		$this->send_getStoreCoupons( $couponQueryReq);
		return $this->recv_getStoreCoupons();
	}
	
	public function send_getStoreCoupons(\vipapis\shanshan\outlet\CouponQueryReq $couponQueryReq){
		
		$this->initInvocation("getStoreCoupons");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_getStoreCoupons_args();
		
		$args->couponQueryReq = $couponQueryReq;
		
		$this->send_base($args);
	}
	
	public function recv_getStoreCoupons(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_getStoreCoupons_result();
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
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function reportOfflineOrders(\vipapis\shanshan\outlet\ReportOfflineOrderReq $reportOfflineOrderReq){
		
		$this->send_reportOfflineOrders( $reportOfflineOrderReq);
		return $this->recv_reportOfflineOrders();
	}
	
	public function send_reportOfflineOrders(\vipapis\shanshan\outlet\ReportOfflineOrderReq $reportOfflineOrderReq){
		
		$this->initInvocation("reportOfflineOrders");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_reportOfflineOrders_args();
		
		$args->reportOfflineOrderReq = $reportOfflineOrderReq;
		
		$this->send_base($args);
	}
	
	public function recv_reportOfflineOrders(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_reportOfflineOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadProduct(\vipapis\shanshan\outlet\UploadProductRequest $req){
		
		$this->send_uploadProduct( $req);
		return $this->recv_uploadProduct();
	}
	
	public function send_uploadProduct(\vipapis\shanshan\outlet\UploadProductRequest $req){
		
		$this->initInvocation("uploadProduct");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_uploadProduct_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_uploadProduct(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_uploadProduct_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadRendOrder(\vipapis\shanshan\outlet\UploadRendOrderRequest $req){
		
		$this->send_uploadRendOrder( $req);
		return $this->recv_uploadRendOrder();
	}
	
	public function send_uploadRendOrder(\vipapis\shanshan\outlet\UploadRendOrderRequest $req){
		
		$this->initInvocation("uploadRendOrder");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_uploadRendOrder_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_uploadRendOrder(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_uploadRendOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function verifyElectronicCoupon(\vipapis\shanshan\outlet\VerifyECouponReq $verifyECouponReq){
		
		$this->send_verifyElectronicCoupon( $verifyECouponReq);
		return $this->recv_verifyElectronicCoupon();
	}
	
	public function send_verifyElectronicCoupon(\vipapis\shanshan\outlet\VerifyECouponReq $verifyECouponReq){
		
		$this->initInvocation("verifyElectronicCoupon");
		$args = new \vipapis\shanshan\outlet\ShanshanOutletService_verifyElectronicCoupon_args();
		
		$args->verifyECouponReq = $verifyECouponReq;
		
		$this->send_base($args);
	}
	
	public function recv_verifyElectronicCoupon(){
		
		$result = new \vipapis\shanshan\outlet\ShanshanOutletService_verifyElectronicCoupon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ShanshanOutletService_decryptCouponCode_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \vipapis\shanshan\outlet\DecryptCouponCodeRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_getMallStores_args {
	
	static $_TSPEC;
	public $storeQueryReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeQueryReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storeQueryReq'])){
				
				$this->storeQueryReq = $vals['storeQueryReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->storeQueryReq = new \vipapis\shanshan\outlet\MallStoreQueryReq();
			$this->storeQueryReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('storeQueryReq');
		
		if (!is_object($this->storeQueryReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->storeQueryReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_getOnlineOrders_args {
	
	static $_TSPEC;
	public $orderQueryReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderQueryReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderQueryReq'])){
				
				$this->orderQueryReq = $vals['orderQueryReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orderQueryReq = new \vipapis\shanshan\outlet\OnlineOrderQueryReq();
			$this->orderQueryReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderQueryReq');
		
		if (!is_object($this->orderQueryReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->orderQueryReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_getStoreCoupons_args {
	
	static $_TSPEC;
	public $couponQueryReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponQueryReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponQueryReq'])){
				
				$this->couponQueryReq = $vals['couponQueryReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->couponQueryReq = new \vipapis\shanshan\outlet\CouponQueryReq();
			$this->couponQueryReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponQueryReq');
		
		if (!is_object($this->couponQueryReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->couponQueryReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_healthCheck_args {
	
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




class ShanshanOutletService_reportOfflineOrders_args {
	
	static $_TSPEC;
	public $reportOfflineOrderReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reportOfflineOrderReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reportOfflineOrderReq'])){
				
				$this->reportOfflineOrderReq = $vals['reportOfflineOrderReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reportOfflineOrderReq = new \vipapis\shanshan\outlet\ReportOfflineOrderReq();
			$this->reportOfflineOrderReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reportOfflineOrderReq');
		
		if (!is_object($this->reportOfflineOrderReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reportOfflineOrderReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_uploadProduct_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \vipapis\shanshan\outlet\UploadProductRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_uploadRendOrder_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \vipapis\shanshan\outlet\UploadRendOrderRequest();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_verifyElectronicCoupon_args {
	
	static $_TSPEC;
	public $verifyECouponReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'verifyECouponReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['verifyECouponReq'])){
				
				$this->verifyECouponReq = $vals['verifyECouponReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->verifyECouponReq = new \vipapis\shanshan\outlet\VerifyECouponReq();
			$this->verifyECouponReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('verifyECouponReq');
		
		if (!is_object($this->verifyECouponReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->verifyECouponReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ShanshanOutletService_decryptCouponCode_result {
	
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
			
			
			$this->success = new \vipapis\shanshan\outlet\DecryptCouponCodeResponse();
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




class ShanshanOutletService_getMallStores_result {
	
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
			
			
			$this->success = new \vipapis\shanshan\outlet\MallStoreQueryResp();
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




class ShanshanOutletService_getOnlineOrders_result {
	
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
			
			
			$this->success = new \vipapis\shanshan\outlet\OnlineOrderQueryResp();
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




class ShanshanOutletService_getStoreCoupons_result {
	
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
					
					$elem0 = new \vipapis\shanshan\outlet\StoreCoupon();
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




class ShanshanOutletService_healthCheck_result {
	
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




class ShanshanOutletService_reportOfflineOrders_result {
	
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
			
			
			$this->success = new \vipapis\shanshan\outlet\ReportOfflineOrderResp();
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




class ShanshanOutletService_uploadProduct_result {
	
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
			
			
			$this->success = new \vipapis\shanshan\outlet\UploadProductResponse();
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




class ShanshanOutletService_uploadRendOrder_result {
	
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
			
			
			$this->success = new \vipapis\shanshan\outlet\UploadRendOrderResponse();
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




class ShanshanOutletService_verifyElectronicCoupon_result {
	
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
			
			
			$this->success = new \vipapis\shanshan\outlet\VerifyECouponResp();
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