<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class TrackMsg {
	
	static $_TSPEC;
	public $transactionId = null;
	public $shipperCode = null;
	public $logisticNum = null;
	public $state = null;
	public $operateTime = null;
	public $desc = null;
	public $remark = null;
	public $dispRecMan = null;
	public $dispRecManPhone = null;
	public $signMan = null;
	public $subState = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transactionId'
			),
			2 => array(
			'var' => 'shipperCode'
			),
			3 => array(
			'var' => 'logisticNum'
			),
			4 => array(
			'var' => 'state'
			),
			5 => array(
			'var' => 'operateTime'
			),
			6 => array(
			'var' => 'desc'
			),
			7 => array(
			'var' => 'remark'
			),
			8 => array(
			'var' => 'dispRecMan'
			),
			9 => array(
			'var' => 'dispRecManPhone'
			),
			10 => array(
			'var' => 'signMan'
			),
			11 => array(
			'var' => 'subState'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transactionId'])){
				
				$this->transactionId = $vals['transactionId'];
			}
			
			
			if (isset($vals['shipperCode'])){
				
				$this->shipperCode = $vals['shipperCode'];
			}
			
			
			if (isset($vals['logisticNum'])){
				
				$this->logisticNum = $vals['logisticNum'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['operateTime'])){
				
				$this->operateTime = $vals['operateTime'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['dispRecMan'])){
				
				$this->dispRecMan = $vals['dispRecMan'];
			}
			
			
			if (isset($vals['dispRecManPhone'])){
				
				$this->dispRecManPhone = $vals['dispRecManPhone'];
			}
			
			
			if (isset($vals['signMan'])){
				
				$this->signMan = $vals['signMan'];
			}
			
			
			if (isset($vals['subState'])){
				
				$this->subState = $vals['subState'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TrackMsg';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transactionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionId);
				
			}
			
			
			
			
			if ("shipperCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipperCode);
				
			}
			
			
			
			
			if ("logisticNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logisticNum);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->state); 
				
			}
			
			
			
			
			if ("operateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operateTime);
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("dispRecMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dispRecMan);
				
			}
			
			
			
			
			if ("dispRecManPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dispRecManPhone);
				
			}
			
			
			
			
			if ("signMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signMan);
				
			}
			
			
			
			
			if ("subState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subState);
				
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
		
		if($this->transactionId !== null) {
			
			$xfer += $output->writeFieldBegin('transactionId');
			$xfer += $output->writeString($this->transactionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipperCode !== null) {
			
			$xfer += $output->writeFieldBegin('shipperCode');
			$xfer += $output->writeString($this->shipperCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logisticNum !== null) {
			
			$xfer += $output->writeFieldBegin('logisticNum');
			$xfer += $output->writeString($this->logisticNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeI64($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateTime !== null) {
			
			$xfer += $output->writeFieldBegin('operateTime');
			$xfer += $output->writeString($this->operateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dispRecMan !== null) {
			
			$xfer += $output->writeFieldBegin('dispRecMan');
			$xfer += $output->writeString($this->dispRecMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dispRecManPhone !== null) {
			
			$xfer += $output->writeFieldBegin('dispRecManPhone');
			$xfer += $output->writeString($this->dispRecManPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signMan !== null) {
			
			$xfer += $output->writeFieldBegin('signMan');
			$xfer += $output->writeString($this->signMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subState !== null) {
			
			$xfer += $output->writeFieldBegin('subState');
			$xfer += $output->writeString($this->subState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>