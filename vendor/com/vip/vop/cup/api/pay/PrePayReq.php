<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\pay;

class PrePayReq {
	
	static $_TSPEC;
	public $vip_order_sn = null;
	public $amount = null;
	public $subject = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vip_order_sn'
			),
			2 => array(
			'var' => 'amount'
			),
			3 => array(
			'var' => 'subject'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vip_order_sn'])){
				
				$this->vip_order_sn = $vals['vip_order_sn'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['subject'])){
				
				$this->subject = $vals['subject'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrePayReq';
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
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("subject" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subject);
				
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
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeString($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subject');
		$xfer += $output->writeString($this->subject);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>