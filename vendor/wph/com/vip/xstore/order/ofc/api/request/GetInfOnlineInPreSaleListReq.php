<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class GetInfOnlineInPreSaleListReq {
	
	static $_TSPEC;
	public $modNum = null;
	public $errorCountRange = null;
	public $procStatus = null;
	public $modCount = null;
	public $limit = null;
	public $orderSnSet = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'modNum'
			),
			2 => array(
			'var' => 'errorCountRange'
			),
			3 => array(
			'var' => 'procStatus'
			),
			4 => array(
			'var' => 'modCount'
			),
			5 => array(
			'var' => 'limit'
			),
			6 => array(
			'var' => 'orderSnSet'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['modNum'])){
				
				$this->modNum = $vals['modNum'];
			}
			
			
			if (isset($vals['errorCountRange'])){
				
				$this->errorCountRange = $vals['errorCountRange'];
			}
			
			
			if (isset($vals['procStatus'])){
				
				$this->procStatus = $vals['procStatus'];
			}
			
			
			if (isset($vals['modCount'])){
				
				$this->modCount = $vals['modCount'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['orderSnSet'])){
				
				$this->orderSnSet = $vals['orderSnSet'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetInfOnlineInPreSaleListReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("modNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->modNum); 
				
			}
			
			
			
			
			if ("errorCountRange" == $schemeField){
				
				$needSkip = false;
				
				$this->errorCountRange = new \com\vip\xstore\order\common\pojo\vo\RangeParam();
				$this->errorCountRange->read($input);
				
			}
			
			
			
			
			if ("procStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procStatus); 
				
			}
			
			
			
			
			if ("modCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->modCount); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("orderSnSet" == $schemeField){
				
				$needSkip = false;
				
				$this->orderSnSet = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->orderSnSet[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		if($this->modNum !== null) {
			
			$xfer += $output->writeFieldBegin('modNum');
			$xfer += $output->writeI32($this->modNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCountRange !== null) {
			
			$xfer += $output->writeFieldBegin('errorCountRange');
			
			if (!is_object($this->errorCountRange)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->errorCountRange->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procStatus !== null) {
			
			$xfer += $output->writeFieldBegin('procStatus');
			$xfer += $output->writeI32($this->procStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modCount !== null) {
			
			$xfer += $output->writeFieldBegin('modCount');
			$xfer += $output->writeI32($this->modCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSnSet !== null) {
			
			$xfer += $output->writeFieldBegin('orderSnSet');
			
			if (!is_array($this->orderSnSet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->orderSnSet as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>