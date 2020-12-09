<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class QuestionAnswerReturn {
	
	static $_TSPEC;
	public $totalRows = null;
	public $categoryQuestionAnswerList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'totalRows'
			),
			2 => array(
			'var' => 'categoryQuestionAnswerList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['totalRows'])){
				
				$this->totalRows = $vals['totalRows'];
			}
			
			
			if (isset($vals['categoryQuestionAnswerList'])){
				
				$this->categoryQuestionAnswerList = $vals['categoryQuestionAnswerList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QuestionAnswerReturn';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("totalRows" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalRows); 
				
			}
			
			
			
			
			if ("categoryQuestionAnswerList" == $schemeField){
				
				$needSkip = false;
				
				$this->categoryQuestionAnswerList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\category\service\CategoryQuestionAnswer();
						$elem1->read($input);
						
						$this->categoryQuestionAnswerList[$_size1++] = $elem1;
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
		
		if($this->totalRows !== null) {
			
			$xfer += $output->writeFieldBegin('totalRows');
			$xfer += $output->writeI64($this->totalRows);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryQuestionAnswerList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryQuestionAnswerList');
			
			if (!is_array($this->categoryQuestionAnswerList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryQuestionAnswerList as $iter0){
				
				
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