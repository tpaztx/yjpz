<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryQuestionAnswerModel {
	
	static $_TSPEC;
	public $categoryId = null;
	public $operationType = null;
	public $questionAnswerList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'operationType'
			),
			3 => array(
			'var' => 'questionAnswerList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['operationType'])){
				
				$this->operationType = $vals['operationType'];
			}
			
			
			if (isset($vals['questionAnswerList'])){
				
				$this->questionAnswerList = $vals['questionAnswerList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryQuestionAnswerModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->categoryId); 
				
			}
			
			
			
			
			if ("operationType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\OperationType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->operationType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("questionAnswerList" == $schemeField){
				
				$needSkip = false;
				
				$this->questionAnswerList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\QuestionAnswer();
						$elem0->read($input);
						
						$this->questionAnswerList[$_size0++] = $elem0;
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
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI32($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operationType !== null) {
			
			$xfer += $output->writeFieldBegin('operationType');
			
			$em = new \com\vip\category\service\OperationType; 
			$output->writeString($em::$__names[$this->operationType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->questionAnswerList !== null) {
			
			$xfer += $output->writeFieldBegin('questionAnswerList');
			
			if (!is_array($this->questionAnswerList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->questionAnswerList as $iter0){
				
				
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