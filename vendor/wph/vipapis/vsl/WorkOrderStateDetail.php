<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrderStateDetail {
	
	static $_TSPEC;
	public $punish = null;
	public $expedited = null;
	public $no_contacted = null;
	public $press = null;
	public $reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'punish'
			),
			2 => array(
			'var' => 'expedited'
			),
			3 => array(
			'var' => 'no_contacted'
			),
			4 => array(
			'var' => 'press'
			),
			5 => array(
			'var' => 'reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['punish'])){
				
				$this->punish = $vals['punish'];
			}
			
			
			if (isset($vals['expedited'])){
				
				$this->expedited = $vals['expedited'];
			}
			
			
			if (isset($vals['no_contacted'])){
				
				$this->no_contacted = $vals['no_contacted'];
			}
			
			
			if (isset($vals['press'])){
				
				$this->press = $vals['press'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderStateDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("punish" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->punish);
				
			}
			
			
			
			
			if ("expedited" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->expedited);
				
			}
			
			
			
			
			if ("no_contacted" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->no_contacted);
				
			}
			
			
			
			
			if ("press" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->press); 
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
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
		
		if($this->punish !== null) {
			
			$xfer += $output->writeFieldBegin('punish');
			$xfer += $output->writeBool($this->punish);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expedited !== null) {
			
			$xfer += $output->writeFieldBegin('expedited');
			$xfer += $output->writeBool($this->expedited);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->no_contacted !== null) {
			
			$xfer += $output->writeFieldBegin('no_contacted');
			$xfer += $output->writeBool($this->no_contacted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->press !== null) {
			
			$xfer += $output->writeFieldBegin('press');
			$xfer += $output->writeI32($this->press);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>