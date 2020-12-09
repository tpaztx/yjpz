<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfOutletsOrderInfoVO {
	
	static $_TSPEC;
	public $infOutletsOrdersVO = null;
	public $infOutletsOrderGoodsVOList = null;
	public $infOutletsOrderPayVOList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infOutletsOrdersVO'
			),
			2 => array(
			'var' => 'infOutletsOrderGoodsVOList'
			),
			3 => array(
			'var' => 'infOutletsOrderPayVOList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infOutletsOrdersVO'])){
				
				$this->infOutletsOrdersVO = $vals['infOutletsOrdersVO'];
			}
			
			
			if (isset($vals['infOutletsOrderGoodsVOList'])){
				
				$this->infOutletsOrderGoodsVOList = $vals['infOutletsOrderGoodsVOList'];
			}
			
			
			if (isset($vals['infOutletsOrderPayVOList'])){
				
				$this->infOutletsOrderPayVOList = $vals['infOutletsOrderPayVOList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfOutletsOrderInfoVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infOutletsOrdersVO" == $schemeField){
				
				$needSkip = false;
				
				$this->infOutletsOrdersVO = new \com\vip\xstore\order\common\pojo\vo\InfOutletsOrdersVO();
				$this->infOutletsOrdersVO->read($input);
				
			}
			
			
			
			
			if ("infOutletsOrderGoodsVOList" == $schemeField){
				
				$needSkip = false;
				
				$this->infOutletsOrderGoodsVOList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\xstore\order\common\pojo\vo\InfOutletsOrderGoodsVO();
						$elem1->read($input);
						
						$this->infOutletsOrderGoodsVOList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("infOutletsOrderPayVOList" == $schemeField){
				
				$needSkip = false;
				
				$this->infOutletsOrderPayVOList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\xstore\order\common\pojo\vo\InfOutletsOrderPayVO();
						$elem2->read($input);
						
						$this->infOutletsOrderPayVOList[$_size2++] = $elem2;
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
		
		if($this->infOutletsOrdersVO !== null) {
			
			$xfer += $output->writeFieldBegin('infOutletsOrdersVO');
			
			if (!is_object($this->infOutletsOrdersVO)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infOutletsOrdersVO->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infOutletsOrderGoodsVOList !== null) {
			
			$xfer += $output->writeFieldBegin('infOutletsOrderGoodsVOList');
			
			if (!is_array($this->infOutletsOrderGoodsVOList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->infOutletsOrderGoodsVOList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infOutletsOrderPayVOList !== null) {
			
			$xfer += $output->writeFieldBegin('infOutletsOrderPayVOList');
			
			if (!is_array($this->infOutletsOrderPayVOList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->infOutletsOrderPayVOList as $iter0){
				
				
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