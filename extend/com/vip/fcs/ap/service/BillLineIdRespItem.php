<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class BillLineIdRespItem {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $count = null;
	public $reqItem = null;
	public $lineIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'count'
			),
			50 => array(
			'var' => 'reqItem'
			),
			51 => array(
			'var' => 'lineIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['reqItem'])){
				
				$this->reqItem = $vals['reqItem'];
			}
			
			
			if (isset($vals['lineIds'])){
				
				$this->lineIds = $vals['lineIds'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillLineIdRespItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->count); 
				
			}
			
			
			
			
			if ("reqItem" == $schemeField){
				
				$needSkip = false;
				
				$this->reqItem = new \com\vip\fcs\ap\service\BillLineIdReqItem();
				$this->reqItem->read($input);
				
			}
			
			
			
			
			if ("lineIds" == $schemeField){
				
				$needSkip = false;
				
				$this->lineIds = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->lineIds[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeI32($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI64($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reqItem !== null) {
			
			$xfer += $output->writeFieldBegin('reqItem');
			
			if (!is_object($this->reqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineIds !== null) {
			
			$xfer += $output->writeFieldBegin('lineIds');
			
			if (!is_array($this->lineIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->lineIds as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>