<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class GoodsSourceReqItem {
	
	static $_TSPEC;
	public $pager = null;
	public $vendorCode = null;
	public $po = null;
	public $stQueryTime = null;
	public $etQueryTime = null;
	public $orderNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pager'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'po'
			),
			4 => array(
			'var' => 'stQueryTime'
			),
			5 => array(
			'var' => 'etQueryTime'
			),
			50 => array(
			'var' => 'orderNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pager'])){
				
				$this->pager = $vals['pager'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['stQueryTime'])){
				
				$this->stQueryTime = $vals['stQueryTime'];
			}
			
			
			if (isset($vals['etQueryTime'])){
				
				$this->etQueryTime = $vals['etQueryTime'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsSourceReqItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pager" == $schemeField){
				
				$needSkip = false;
				
				$this->pager = new \com\vip\fcs\ap\service\Pager();
				$this->pager->read($input);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("stQueryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stQueryTime);
				
			}
			
			
			
			
			if ("etQueryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->etQueryTime);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
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
		
		if($this->pager !== null) {
			
			$xfer += $output->writeFieldBegin('pager');
			
			if (!is_object($this->pager)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pager->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('stQueryTime');
		$xfer += $output->writeI64($this->stQueryTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('etQueryTime');
		$xfer += $output->writeI64($this->etQueryTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>