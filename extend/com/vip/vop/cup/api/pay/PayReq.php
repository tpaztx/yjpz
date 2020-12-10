<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\pay;

class PayReq {
	
	static $_TSPEC;
	public $vip_order_sn = null;
	public $scene = null;
	public $auth_Code = null;
	public $amount = null;
	public $time_expire = null;
	public $subject = null;
	public $device = null;
	public $pre_pay_id = null;
	public $ext = null;
	public $user_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vip_order_sn'
			),
			2 => array(
			'var' => 'scene'
			),
			3 => array(
			'var' => 'auth_Code'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'time_expire'
			),
			6 => array(
			'var' => 'subject'
			),
			7 => array(
			'var' => 'device'
			),
			8 => array(
			'var' => 'pre_pay_id'
			),
			9 => array(
			'var' => 'ext'
			),
			10 => array(
			'var' => 'user_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vip_order_sn'])){
				
				$this->vip_order_sn = $vals['vip_order_sn'];
			}
			
			
			if (isset($vals['scene'])){
				
				$this->scene = $vals['scene'];
			}
			
			
			if (isset($vals['auth_Code'])){
				
				$this->auth_Code = $vals['auth_Code'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['time_expire'])){
				
				$this->time_expire = $vals['time_expire'];
			}
			
			
			if (isset($vals['subject'])){
				
				$this->subject = $vals['subject'];
			}
			
			
			if (isset($vals['device'])){
				
				$this->device = $vals['device'];
			}
			
			
			if (isset($vals['pre_pay_id'])){
				
				$this->pre_pay_id = $vals['pre_pay_id'];
			}
			
			
			if (isset($vals['ext'])){
				
				$this->ext = $vals['ext'];
			}
			
			
			if (isset($vals['user_code'])){
				
				$this->user_code = $vals['user_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PayReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vip_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_order_sn);
				
			}
			
			
			
			
			if ("scene" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scene);
				
			}
			
			
			
			
			if ("auth_Code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auth_Code);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("time_expire" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->time_expire);
				
			}
			
			
			
			
			if ("subject" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subject);
				
			}
			
			
			
			
			if ("device" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->device);
				
			}
			
			
			
			
			if ("pre_pay_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_pay_id);
				
			}
			
			
			
			
			if ("ext" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext);
				
			}
			
			
			
			
			if ("user_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_code);
				
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
		
		$xfer += $output->writeFieldBegin('vip_order_sn');
		$xfer += $output->writeString($this->vip_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('scene');
		$xfer += $output->writeString($this->scene);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('auth_Code');
		$xfer += $output->writeString($this->auth_Code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeString($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('time_expire');
		$xfer += $output->writeString($this->time_expire);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subject');
		$xfer += $output->writeString($this->subject);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('device');
		$xfer += $output->writeString($this->device);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pre_pay_id');
		$xfer += $output->writeString($this->pre_pay_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->ext !== null) {
			
			$xfer += $output->writeFieldBegin('ext');
			$xfer += $output->writeString($this->ext);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_code !== null) {
			
			$xfer += $output->writeFieldBegin('user_code');
			$xfer += $output->writeString($this->user_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>