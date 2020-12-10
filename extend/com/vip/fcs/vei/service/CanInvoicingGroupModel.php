<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class CanInvoicingGroupModel {
	
	static $_TSPEC;
	public $groupName = null;
	public $goodsInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'groupName'
			),
			5 => array(
			'var' => 'goodsInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['groupName'])){
				
				$this->groupName = $vals['groupName'];
			}
			
			
			if (isset($vals['goodsInfoList'])){
				
				$this->goodsInfoList = $vals['goodsInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CanInvoicingGroupModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("groupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->groupName);
				
			}
			
			
			
			
			if ("goodsInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->goodsInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\vei\service\GoodsInfoModel();
						$elem0->read($input);
						
						$this->goodsInfoList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('groupName');
		$xfer += $output->writeString($this->groupName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goodsInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('goodsInfoList');
			
			if (!is_array($this->goodsInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodsInfoList as $iter0){
				
				
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

?>