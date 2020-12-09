<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryQuestionAnswer {
	
	static $_TSPEC;
	public $categoryId = null;
	public $questionAnswerList = null;
	public $createTime = null;
	public $updateTime = null;
	public $createBy = null;
	public $updateBy = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'questionAnswerList'
			),
			3 => array(
			'var' => 'createTime'
			),
			4 => array(
			'var' => 'updateTime'
			),
			5 => array(
			'var' => 'createBy'
			),
			6 => array(
			'var' => 'updateBy'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['questionAnswerList'])){
				
				$this->questionAnswerList = $vals['questionAnswerList'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['updateBy'])){
				
				$this->updateBy = $vals['updateBy'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryQuestionAnswer';
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
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("updateBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateBy);
				
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
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateBy !== null) {
			
			$xfer += $output->writeFieldBegin('updateBy');
			$xfer += $output->writeString($this->updateBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>