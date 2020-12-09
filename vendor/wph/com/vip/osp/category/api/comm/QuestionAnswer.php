<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class QuestionAnswer {
	
	static $_TSPEC;
	public $question = null;
	public $answer = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'question'
			),
			2 => array(
			'var' => 'answer'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['question'])){
				
				$this->question = $vals['question'];
			}
			
			
			if (isset($vals['answer'])){
				
				$this->answer = $vals['answer'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QuestionAnswer';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("question" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->question);
				
			}
			
			
			
			
			if ("answer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->answer);
				
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
		
		if($this->question !== null) {
			
			$xfer += $output->writeFieldBegin('question');
			$xfer += $output->writeString($this->question);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->answer !== null) {
			
			$xfer += $output->writeFieldBegin('answer');
			$xfer += $output->writeString($this->answer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>