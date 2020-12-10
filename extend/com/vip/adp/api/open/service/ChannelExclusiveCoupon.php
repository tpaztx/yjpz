<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class ChannelExclusiveCoupon {
	
	static $_TSPEC;
	public $couponNo = null;
	public $couponName = null;
	public $fav = null;
	public $buy = null;
	public $activateBeginTime = null;
	public $activateEndTime = null;
	public $useBeginTime = null;
	public $useEndTime = null;
	public $totalAmount = null;
	public $activedAmount = null;
	public $receiveUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponNo'
			),
			2 => array(
			'var' => 'couponName'
			),
			3 => array(
			'var' => 'fav'
			),
			4 => array(
			'var' => 'buy'
			),
			5 => array(
			'var' => 'activateBeginTime'
			),
			6 => array(
			'var' => 'activateEndTime'
			),
			7 => array(
			'var' => 'useBeginTime'
			),
			8 => array(
			'var' => 'useEndTime'
			),
			9 => array(
			'var' => 'totalAmount'
			),
			10 => array(
			'var' => 'activedAmount'
			),
			11 => array(
			'var' => 'receiveUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['couponName'])){
				
				$this->couponName = $vals['couponName'];
			}
			
			
			if (isset($vals['fav'])){
				
				$this->fav = $vals['fav'];
			}
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['activateBeginTime'])){
				
				$this->activateBeginTime = $vals['activateBeginTime'];
			}
			
			
			if (isset($vals['activateEndTime'])){
				
				$this->activateEndTime = $vals['activateEndTime'];
			}
			
			
			if (isset($vals['useBeginTime'])){
				
				$this->useBeginTime = $vals['useBeginTime'];
			}
			
			
			if (isset($vals['useEndTime'])){
				
				$this->useEndTime = $vals['useEndTime'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['activedAmount'])){
				
				$this->activedAmount = $vals['activedAmount'];
			}
			
			
			if (isset($vals['receiveUrl'])){
				
				$this->receiveUrl = $vals['receiveUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelExclusiveCoupon';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponNo);
				
			}
			
			
			
			
			if ("couponName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponName);
				
			}
			
			
			
			
			if ("fav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fav);
				
			}
			
			
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buy);
				
			}
			
			
			
			
			if ("activateBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateBeginTime); 
				
			}
			
			
			
			
			if ("activateEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateEndTime); 
				
			}
			
			
			
			
			if ("useBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useBeginTime); 
				
			}
			
			
			
			
			if ("useEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useEndTime); 
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalAmount); 
				
			}
			
			
			
			
			if ("activedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activedAmount); 
				
			}
			
			
			
			
			if ("receiveUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiveUrl);
				
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
		
		if($this->couponNo !== null) {
			
			$xfer += $output->writeFieldBegin('couponNo');
			$xfer += $output->writeString($this->couponNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponName !== null) {
			
			$xfer += $output->writeFieldBegin('couponName');
			$xfer += $output->writeString($this->couponName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav !== null) {
			
			$xfer += $output->writeFieldBegin('fav');
			$xfer += $output->writeString($this->fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buy !== null) {
			
			$xfer += $output->writeFieldBegin('buy');
			$xfer += $output->writeString($this->buy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateBeginTime');
			$xfer += $output->writeI64($this->activateBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activateEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('activateEndTime');
			$xfer += $output->writeI64($this->activateEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('useBeginTime');
			$xfer += $output->writeI64($this->useBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('useEndTime');
			$xfer += $output->writeI64($this->useEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmount');
			$xfer += $output->writeI64($this->totalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('activedAmount');
			$xfer += $output->writeI64($this->activedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveUrl !== null) {
			
			$xfer += $output->writeFieldBegin('receiveUrl');
			$xfer += $output->writeString($this->receiveUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>