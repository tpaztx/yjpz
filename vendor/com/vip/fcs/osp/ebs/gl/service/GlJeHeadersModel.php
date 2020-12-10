<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;

class GlJeHeadersModel {
	
	static $_TSPEC;
	public $jeHeaderId = null;
	public $lastUpdateDate = null;
	public $lastUpdatedBy = null;
	public $ledgerId = null;
	public $jeCategory = null;
	public $jeSource = null;
	public $periodName = null;
	public $name = null;
	public $currencyCode = null;
	public $status = null;
	public $dateCreated = null;
	public $accrualRevFlag = null;
	public $multiBalSegFlag = null;
	public $actualFlag = null;
	public $defaultEffectiveDate = null;
	public $taxStatusCode = null;
	public $conversionFlag = null;
	public $creationDate = null;
	public $createdBy = null;
	public $lastUpdateLogin = null;
	public $encumbranceTypeId = null;
	public $budgetVersionId = null;
	public $balancedJeFlag = null;
	public $balancingSegmentValue = null;
	public $jeBatchId = null;
	public $fromRecurringHeaderId = null;
	public $uniqueDate = null;
	public $earliestPostableDate = null;
	public $postedDate = null;
	public $accrualRevEffectiveDate = null;
	public $accrualRevPeriodName = null;
	public $accrualRevStatus = null;
	public $accrualRevJeHeaderId = null;
	public $accrualRevChangeSignFlag = null;
	public $description = null;
	public $controlTotal = null;
	public $runningTotalDr = null;
	public $runningTotalCr = null;
	public $runningTotalAccountedDr = null;
	public $runningTotalAccountedCr = null;
	public $currencyConversionRate = null;
	public $currencyConversionType = null;
	public $currencyConversionDate = null;
	public $externalReference = null;
	public $parentJeHeaderId = null;
	public $reversedJeHeaderId = null;
	public $originatingBalSegValue = null;
	public $intercompanyMode = null;
	public $drBalSegValue = null;
	public $crBalSegValue = null;
	public $attribute1 = null;
	public $attribute2 = null;
	public $attribute3 = null;
	public $attribute4 = null;
	public $attribute5 = null;
	public $attribute6 = null;
	public $attribute7 = null;
	public $attribute8 = null;
	public $attribute9 = null;
	public $attribute10 = null;
	public $context = null;
	public $globalAttributeCategory = null;
	public $globalAttribute1 = null;
	public $globalAttribute2 = null;
	public $globalAttribute3 = null;
	public $globalAttribute4 = null;
	public $globalAttribute5 = null;
	public $globalAttribute6 = null;
	public $globalAttribute7 = null;
	public $globalAttribute8 = null;
	public $globalAttribute9 = null;
	public $globalAttribute10 = null;
	public $ussglTransactionCode = null;
	public $context2 = null;
	public $docSequenceId = null;
	public $docSequenceValue = null;
	public $jgzzReconContext = null;
	public $jgzzReconRef = null;
	public $referenceDate = null;
	public $localDocSequenceId = null;
	public $localDocSequenceValue = null;
	public $displayAlcJournalFlag = null;
	public $jeFromSlaFlag = null;
	public $postingAcctSeqVersionId = null;
	public $postingAcctSeqAssignId = null;
	public $postingAcctSeqValue = null;
	public $closeAcctSeqVersionId = null;
	public $closeAcctSeqAssignId = null;
	public $closeAcctSeqValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'jeHeaderId'
			),
			2 => array(
			'var' => 'lastUpdateDate'
			),
			3 => array(
			'var' => 'lastUpdatedBy'
			),
			4 => array(
			'var' => 'ledgerId'
			),
			5 => array(
			'var' => 'jeCategory'
			),
			6 => array(
			'var' => 'jeSource'
			),
			7 => array(
			'var' => 'periodName'
			),
			8 => array(
			'var' => 'name'
			),
			9 => array(
			'var' => 'currencyCode'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'dateCreated'
			),
			12 => array(
			'var' => 'accrualRevFlag'
			),
			13 => array(
			'var' => 'multiBalSegFlag'
			),
			14 => array(
			'var' => 'actualFlag'
			),
			15 => array(
			'var' => 'defaultEffectiveDate'
			),
			16 => array(
			'var' => 'taxStatusCode'
			),
			17 => array(
			'var' => 'conversionFlag'
			),
			18 => array(
			'var' => 'creationDate'
			),
			19 => array(
			'var' => 'createdBy'
			),
			20 => array(
			'var' => 'lastUpdateLogin'
			),
			21 => array(
			'var' => 'encumbranceTypeId'
			),
			22 => array(
			'var' => 'budgetVersionId'
			),
			23 => array(
			'var' => 'balancedJeFlag'
			),
			24 => array(
			'var' => 'balancingSegmentValue'
			),
			25 => array(
			'var' => 'jeBatchId'
			),
			26 => array(
			'var' => 'fromRecurringHeaderId'
			),
			27 => array(
			'var' => 'uniqueDate'
			),
			28 => array(
			'var' => 'earliestPostableDate'
			),
			29 => array(
			'var' => 'postedDate'
			),
			30 => array(
			'var' => 'accrualRevEffectiveDate'
			),
			31 => array(
			'var' => 'accrualRevPeriodName'
			),
			32 => array(
			'var' => 'accrualRevStatus'
			),
			33 => array(
			'var' => 'accrualRevJeHeaderId'
			),
			34 => array(
			'var' => 'accrualRevChangeSignFlag'
			),
			35 => array(
			'var' => 'description'
			),
			36 => array(
			'var' => 'controlTotal'
			),
			37 => array(
			'var' => 'runningTotalDr'
			),
			38 => array(
			'var' => 'runningTotalCr'
			),
			39 => array(
			'var' => 'runningTotalAccountedDr'
			),
			40 => array(
			'var' => 'runningTotalAccountedCr'
			),
			41 => array(
			'var' => 'currencyConversionRate'
			),
			42 => array(
			'var' => 'currencyConversionType'
			),
			43 => array(
			'var' => 'currencyConversionDate'
			),
			44 => array(
			'var' => 'externalReference'
			),
			45 => array(
			'var' => 'parentJeHeaderId'
			),
			46 => array(
			'var' => 'reversedJeHeaderId'
			),
			47 => array(
			'var' => 'originatingBalSegValue'
			),
			48 => array(
			'var' => 'intercompanyMode'
			),
			49 => array(
			'var' => 'drBalSegValue'
			),
			50 => array(
			'var' => 'crBalSegValue'
			),
			51 => array(
			'var' => 'attribute1'
			),
			52 => array(
			'var' => 'attribute2'
			),
			53 => array(
			'var' => 'attribute3'
			),
			54 => array(
			'var' => 'attribute4'
			),
			55 => array(
			'var' => 'attribute5'
			),
			56 => array(
			'var' => 'attribute6'
			),
			57 => array(
			'var' => 'attribute7'
			),
			58 => array(
			'var' => 'attribute8'
			),
			59 => array(
			'var' => 'attribute9'
			),
			60 => array(
			'var' => 'attribute10'
			),
			61 => array(
			'var' => 'context'
			),
			62 => array(
			'var' => 'globalAttributeCategory'
			),
			63 => array(
			'var' => 'globalAttribute1'
			),
			64 => array(
			'var' => 'globalAttribute2'
			),
			65 => array(
			'var' => 'globalAttribute3'
			),
			66 => array(
			'var' => 'globalAttribute4'
			),
			67 => array(
			'var' => 'globalAttribute5'
			),
			68 => array(
			'var' => 'globalAttribute6'
			),
			69 => array(
			'var' => 'globalAttribute7'
			),
			70 => array(
			'var' => 'globalAttribute8'
			),
			71 => array(
			'var' => 'globalAttribute9'
			),
			72 => array(
			'var' => 'globalAttribute10'
			),
			73 => array(
			'var' => 'ussglTransactionCode'
			),
			74 => array(
			'var' => 'context2'
			),
			75 => array(
			'var' => 'docSequenceId'
			),
			76 => array(
			'var' => 'docSequenceValue'
			),
			77 => array(
			'var' => 'jgzzReconContext'
			),
			78 => array(
			'var' => 'jgzzReconRef'
			),
			79 => array(
			'var' => 'referenceDate'
			),
			80 => array(
			'var' => 'localDocSequenceId'
			),
			81 => array(
			'var' => 'localDocSequenceValue'
			),
			82 => array(
			'var' => 'displayAlcJournalFlag'
			),
			83 => array(
			'var' => 'jeFromSlaFlag'
			),
			84 => array(
			'var' => 'postingAcctSeqVersionId'
			),
			85 => array(
			'var' => 'postingAcctSeqAssignId'
			),
			86 => array(
			'var' => 'postingAcctSeqValue'
			),
			87 => array(
			'var' => 'closeAcctSeqVersionId'
			),
			88 => array(
			'var' => 'closeAcctSeqAssignId'
			),
			89 => array(
			'var' => 'closeAcctSeqValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['jeHeaderId'])){
				
				$this->jeHeaderId = $vals['jeHeaderId'];
			}
			
			
			if (isset($vals['lastUpdateDate'])){
				
				$this->lastUpdateDate = $vals['lastUpdateDate'];
			}
			
			
			if (isset($vals['lastUpdatedBy'])){
				
				$this->lastUpdatedBy = $vals['lastUpdatedBy'];
			}
			
			
			if (isset($vals['ledgerId'])){
				
				$this->ledgerId = $vals['ledgerId'];
			}
			
			
			if (isset($vals['jeCategory'])){
				
				$this->jeCategory = $vals['jeCategory'];
			}
			
			
			if (isset($vals['jeSource'])){
				
				$this->jeSource = $vals['jeSource'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['dateCreated'])){
				
				$this->dateCreated = $vals['dateCreated'];
			}
			
			
			if (isset($vals['accrualRevFlag'])){
				
				$this->accrualRevFlag = $vals['accrualRevFlag'];
			}
			
			
			if (isset($vals['multiBalSegFlag'])){
				
				$this->multiBalSegFlag = $vals['multiBalSegFlag'];
			}
			
			
			if (isset($vals['actualFlag'])){
				
				$this->actualFlag = $vals['actualFlag'];
			}
			
			
			if (isset($vals['defaultEffectiveDate'])){
				
				$this->defaultEffectiveDate = $vals['defaultEffectiveDate'];
			}
			
			
			if (isset($vals['taxStatusCode'])){
				
				$this->taxStatusCode = $vals['taxStatusCode'];
			}
			
			
			if (isset($vals['conversionFlag'])){
				
				$this->conversionFlag = $vals['conversionFlag'];
			}
			
			
			if (isset($vals['creationDate'])){
				
				$this->creationDate = $vals['creationDate'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['lastUpdateLogin'])){
				
				$this->lastUpdateLogin = $vals['lastUpdateLogin'];
			}
			
			
			if (isset($vals['encumbranceTypeId'])){
				
				$this->encumbranceTypeId = $vals['encumbranceTypeId'];
			}
			
			
			if (isset($vals['budgetVersionId'])){
				
				$this->budgetVersionId = $vals['budgetVersionId'];
			}
			
			
			if (isset($vals['balancedJeFlag'])){
				
				$this->balancedJeFlag = $vals['balancedJeFlag'];
			}
			
			
			if (isset($vals['balancingSegmentValue'])){
				
				$this->balancingSegmentValue = $vals['balancingSegmentValue'];
			}
			
			
			if (isset($vals['jeBatchId'])){
				
				$this->jeBatchId = $vals['jeBatchId'];
			}
			
			
			if (isset($vals['fromRecurringHeaderId'])){
				
				$this->fromRecurringHeaderId = $vals['fromRecurringHeaderId'];
			}
			
			
			if (isset($vals['uniqueDate'])){
				
				$this->uniqueDate = $vals['uniqueDate'];
			}
			
			
			if (isset($vals['earliestPostableDate'])){
				
				$this->earliestPostableDate = $vals['earliestPostableDate'];
			}
			
			
			if (isset($vals['postedDate'])){
				
				$this->postedDate = $vals['postedDate'];
			}
			
			
			if (isset($vals['accrualRevEffectiveDate'])){
				
				$this->accrualRevEffectiveDate = $vals['accrualRevEffectiveDate'];
			}
			
			
			if (isset($vals['accrualRevPeriodName'])){
				
				$this->accrualRevPeriodName = $vals['accrualRevPeriodName'];
			}
			
			
			if (isset($vals['accrualRevStatus'])){
				
				$this->accrualRevStatus = $vals['accrualRevStatus'];
			}
			
			
			if (isset($vals['accrualRevJeHeaderId'])){
				
				$this->accrualRevJeHeaderId = $vals['accrualRevJeHeaderId'];
			}
			
			
			if (isset($vals['accrualRevChangeSignFlag'])){
				
				$this->accrualRevChangeSignFlag = $vals['accrualRevChangeSignFlag'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['controlTotal'])){
				
				$this->controlTotal = $vals['controlTotal'];
			}
			
			
			if (isset($vals['runningTotalDr'])){
				
				$this->runningTotalDr = $vals['runningTotalDr'];
			}
			
			
			if (isset($vals['runningTotalCr'])){
				
				$this->runningTotalCr = $vals['runningTotalCr'];
			}
			
			
			if (isset($vals['runningTotalAccountedDr'])){
				
				$this->runningTotalAccountedDr = $vals['runningTotalAccountedDr'];
			}
			
			
			if (isset($vals['runningTotalAccountedCr'])){
				
				$this->runningTotalAccountedCr = $vals['runningTotalAccountedCr'];
			}
			
			
			if (isset($vals['currencyConversionRate'])){
				
				$this->currencyConversionRate = $vals['currencyConversionRate'];
			}
			
			
			if (isset($vals['currencyConversionType'])){
				
				$this->currencyConversionType = $vals['currencyConversionType'];
			}
			
			
			if (isset($vals['currencyConversionDate'])){
				
				$this->currencyConversionDate = $vals['currencyConversionDate'];
			}
			
			
			if (isset($vals['externalReference'])){
				
				$this->externalReference = $vals['externalReference'];
			}
			
			
			if (isset($vals['parentJeHeaderId'])){
				
				$this->parentJeHeaderId = $vals['parentJeHeaderId'];
			}
			
			
			if (isset($vals['reversedJeHeaderId'])){
				
				$this->reversedJeHeaderId = $vals['reversedJeHeaderId'];
			}
			
			
			if (isset($vals['originatingBalSegValue'])){
				
				$this->originatingBalSegValue = $vals['originatingBalSegValue'];
			}
			
			
			if (isset($vals['intercompanyMode'])){
				
				$this->intercompanyMode = $vals['intercompanyMode'];
			}
			
			
			if (isset($vals['drBalSegValue'])){
				
				$this->drBalSegValue = $vals['drBalSegValue'];
			}
			
			
			if (isset($vals['crBalSegValue'])){
				
				$this->crBalSegValue = $vals['crBalSegValue'];
			}
			
			
			if (isset($vals['attribute1'])){
				
				$this->attribute1 = $vals['attribute1'];
			}
			
			
			if (isset($vals['attribute2'])){
				
				$this->attribute2 = $vals['attribute2'];
			}
			
			
			if (isset($vals['attribute3'])){
				
				$this->attribute3 = $vals['attribute3'];
			}
			
			
			if (isset($vals['attribute4'])){
				
				$this->attribute4 = $vals['attribute4'];
			}
			
			
			if (isset($vals['attribute5'])){
				
				$this->attribute5 = $vals['attribute5'];
			}
			
			
			if (isset($vals['attribute6'])){
				
				$this->attribute6 = $vals['attribute6'];
			}
			
			
			if (isset($vals['attribute7'])){
				
				$this->attribute7 = $vals['attribute7'];
			}
			
			
			if (isset($vals['attribute8'])){
				
				$this->attribute8 = $vals['attribute8'];
			}
			
			
			if (isset($vals['attribute9'])){
				
				$this->attribute9 = $vals['attribute9'];
			}
			
			
			if (isset($vals['attribute10'])){
				
				$this->attribute10 = $vals['attribute10'];
			}
			
			
			if (isset($vals['context'])){
				
				$this->context = $vals['context'];
			}
			
			
			if (isset($vals['globalAttributeCategory'])){
				
				$this->globalAttributeCategory = $vals['globalAttributeCategory'];
			}
			
			
			if (isset($vals['globalAttribute1'])){
				
				$this->globalAttribute1 = $vals['globalAttribute1'];
			}
			
			
			if (isset($vals['globalAttribute2'])){
				
				$this->globalAttribute2 = $vals['globalAttribute2'];
			}
			
			
			if (isset($vals['globalAttribute3'])){
				
				$this->globalAttribute3 = $vals['globalAttribute3'];
			}
			
			
			if (isset($vals['globalAttribute4'])){
				
				$this->globalAttribute4 = $vals['globalAttribute4'];
			}
			
			
			if (isset($vals['globalAttribute5'])){
				
				$this->globalAttribute5 = $vals['globalAttribute5'];
			}
			
			
			if (isset($vals['globalAttribute6'])){
				
				$this->globalAttribute6 = $vals['globalAttribute6'];
			}
			
			
			if (isset($vals['globalAttribute7'])){
				
				$this->globalAttribute7 = $vals['globalAttribute7'];
			}
			
			
			if (isset($vals['globalAttribute8'])){
				
				$this->globalAttribute8 = $vals['globalAttribute8'];
			}
			
			
			if (isset($vals['globalAttribute9'])){
				
				$this->globalAttribute9 = $vals['globalAttribute9'];
			}
			
			
			if (isset($vals['globalAttribute10'])){
				
				$this->globalAttribute10 = $vals['globalAttribute10'];
			}
			
			
			if (isset($vals['ussglTransactionCode'])){
				
				$this->ussglTransactionCode = $vals['ussglTransactionCode'];
			}
			
			
			if (isset($vals['context2'])){
				
				$this->context2 = $vals['context2'];
			}
			
			
			if (isset($vals['docSequenceId'])){
				
				$this->docSequenceId = $vals['docSequenceId'];
			}
			
			
			if (isset($vals['docSequenceValue'])){
				
				$this->docSequenceValue = $vals['docSequenceValue'];
			}
			
			
			if (isset($vals['jgzzReconContext'])){
				
				$this->jgzzReconContext = $vals['jgzzReconContext'];
			}
			
			
			if (isset($vals['jgzzReconRef'])){
				
				$this->jgzzReconRef = $vals['jgzzReconRef'];
			}
			
			
			if (isset($vals['referenceDate'])){
				
				$this->referenceDate = $vals['referenceDate'];
			}
			
			
			if (isset($vals['localDocSequenceId'])){
				
				$this->localDocSequenceId = $vals['localDocSequenceId'];
			}
			
			
			if (isset($vals['localDocSequenceValue'])){
				
				$this->localDocSequenceValue = $vals['localDocSequenceValue'];
			}
			
			
			if (isset($vals['displayAlcJournalFlag'])){
				
				$this->displayAlcJournalFlag = $vals['displayAlcJournalFlag'];
			}
			
			
			if (isset($vals['jeFromSlaFlag'])){
				
				$this->jeFromSlaFlag = $vals['jeFromSlaFlag'];
			}
			
			
			if (isset($vals['postingAcctSeqVersionId'])){
				
				$this->postingAcctSeqVersionId = $vals['postingAcctSeqVersionId'];
			}
			
			
			if (isset($vals['postingAcctSeqAssignId'])){
				
				$this->postingAcctSeqAssignId = $vals['postingAcctSeqAssignId'];
			}
			
			
			if (isset($vals['postingAcctSeqValue'])){
				
				$this->postingAcctSeqValue = $vals['postingAcctSeqValue'];
			}
			
			
			if (isset($vals['closeAcctSeqVersionId'])){
				
				$this->closeAcctSeqVersionId = $vals['closeAcctSeqVersionId'];
			}
			
			
			if (isset($vals['closeAcctSeqAssignId'])){
				
				$this->closeAcctSeqAssignId = $vals['closeAcctSeqAssignId'];
			}
			
			
			if (isset($vals['closeAcctSeqValue'])){
				
				$this->closeAcctSeqValue = $vals['closeAcctSeqValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GlJeHeadersModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("jeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->jeHeaderId); 
				
			}
			
			
			
			
			if ("lastUpdateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateDate);
				
			}
			
			
			
			
			if ("lastUpdatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedBy); 
				
			}
			
			
			
			
			if ("ledgerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ledgerId); 
				
			}
			
			
			
			
			if ("jeCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jeCategory);
				
			}
			
			
			
			
			if ("jeSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jeSource);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("dateCreated" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->dateCreated);
				
			}
			
			
			
			
			if ("accrualRevFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevFlag);
				
			}
			
			
			
			
			if ("multiBalSegFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->multiBalSegFlag);
				
			}
			
			
			
			
			if ("actualFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actualFlag);
				
			}
			
			
			
			
			if ("defaultEffectiveDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->defaultEffectiveDate);
				
			}
			
			
			
			
			if ("taxStatusCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxStatusCode);
				
			}
			
			
			
			
			if ("conversionFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->conversionFlag);
				
			}
			
			
			
			
			if ("creationDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->creationDate);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdBy); 
				
			}
			
			
			
			
			if ("lastUpdateLogin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateLogin); 
				
			}
			
			
			
			
			if ("encumbranceTypeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->encumbranceTypeId); 
				
			}
			
			
			
			
			if ("budgetVersionId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->budgetVersionId); 
				
			}
			
			
			
			
			if ("balancedJeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->balancedJeFlag);
				
			}
			
			
			
			
			if ("balancingSegmentValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->balancingSegmentValue);
				
			}
			
			
			
			
			if ("jeBatchId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->jeBatchId); 
				
			}
			
			
			
			
			if ("fromRecurringHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->fromRecurringHeaderId); 
				
			}
			
			
			
			
			if ("uniqueDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uniqueDate);
				
			}
			
			
			
			
			if ("earliestPostableDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->earliestPostableDate);
				
			}
			
			
			
			
			if ("postedDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->postedDate);
				
			}
			
			
			
			
			if ("accrualRevEffectiveDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accrualRevEffectiveDate);
				
			}
			
			
			
			
			if ("accrualRevPeriodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevPeriodName);
				
			}
			
			
			
			
			if ("accrualRevStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevStatus);
				
			}
			
			
			
			
			if ("accrualRevJeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accrualRevJeHeaderId); 
				
			}
			
			
			
			
			if ("accrualRevChangeSignFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accrualRevChangeSignFlag);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("controlTotal" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->controlTotal);
				
			}
			
			
			
			
			if ("runningTotalDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->runningTotalDr);
				
			}
			
			
			
			
			if ("runningTotalCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->runningTotalCr);
				
			}
			
			
			
			
			if ("runningTotalAccountedDr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->runningTotalAccountedDr);
				
			}
			
			
			
			
			if ("runningTotalAccountedCr" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->runningTotalAccountedCr);
				
			}
			
			
			
			
			if ("currencyConversionRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->currencyConversionRate);
				
			}
			
			
			
			
			if ("currencyConversionType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyConversionType);
				
			}
			
			
			
			
			if ("currencyConversionDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->currencyConversionDate);
				
			}
			
			
			
			
			if ("externalReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externalReference);
				
			}
			
			
			
			
			if ("parentJeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentJeHeaderId); 
				
			}
			
			
			
			
			if ("reversedJeHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reversedJeHeaderId); 
				
			}
			
			
			
			
			if ("originatingBalSegValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originatingBalSegValue);
				
			}
			
			
			
			
			if ("intercompanyMode" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->intercompanyMode);
				
			}
			
			
			
			
			if ("drBalSegValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->drBalSegValue);
				
			}
			
			
			
			
			if ("crBalSegValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->crBalSegValue);
				
			}
			
			
			
			
			if ("attribute1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute1);
				
			}
			
			
			
			
			if ("attribute2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute2);
				
			}
			
			
			
			
			if ("attribute3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute3);
				
			}
			
			
			
			
			if ("attribute4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute4);
				
			}
			
			
			
			
			if ("attribute5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute5);
				
			}
			
			
			
			
			if ("attribute6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute6);
				
			}
			
			
			
			
			if ("attribute7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute7);
				
			}
			
			
			
			
			if ("attribute8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute8);
				
			}
			
			
			
			
			if ("attribute9" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute9);
				
			}
			
			
			
			
			if ("attribute10" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute10);
				
			}
			
			
			
			
			if ("context" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->context);
				
			}
			
			
			
			
			if ("globalAttributeCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttributeCategory);
				
			}
			
			
			
			
			if ("globalAttribute1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute1);
				
			}
			
			
			
			
			if ("globalAttribute2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute2);
				
			}
			
			
			
			
			if ("globalAttribute3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute3);
				
			}
			
			
			
			
			if ("globalAttribute4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute4);
				
			}
			
			
			
			
			if ("globalAttribute5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute5);
				
			}
			
			
			
			
			if ("globalAttribute6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute6);
				
			}
			
			
			
			
			if ("globalAttribute7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute7);
				
			}
			
			
			
			
			if ("globalAttribute8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute8);
				
			}
			
			
			
			
			if ("globalAttribute9" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute9);
				
			}
			
			
			
			
			if ("globalAttribute10" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalAttribute10);
				
			}
			
			
			
			
			if ("ussglTransactionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ussglTransactionCode);
				
			}
			
			
			
			
			if ("context2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->context2);
				
			}
			
			
			
			
			if ("docSequenceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->docSequenceId); 
				
			}
			
			
			
			
			if ("docSequenceValue" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->docSequenceValue); 
				
			}
			
			
			
			
			if ("jgzzReconContext" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jgzzReconContext);
				
			}
			
			
			
			
			if ("jgzzReconRef" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jgzzReconRef);
				
			}
			
			
			
			
			if ("referenceDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->referenceDate);
				
			}
			
			
			
			
			if ("localDocSequenceId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->localDocSequenceId); 
				
			}
			
			
			
			
			if ("localDocSequenceValue" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->localDocSequenceValue); 
				
			}
			
			
			
			
			if ("displayAlcJournalFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->displayAlcJournalFlag);
				
			}
			
			
			
			
			if ("jeFromSlaFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jeFromSlaFlag);
				
			}
			
			
			
			
			if ("postingAcctSeqVersionId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->postingAcctSeqVersionId); 
				
			}
			
			
			
			
			if ("postingAcctSeqAssignId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->postingAcctSeqAssignId); 
				
			}
			
			
			
			
			if ("postingAcctSeqValue" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->postingAcctSeqValue); 
				
			}
			
			
			
			
			if ("closeAcctSeqVersionId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->closeAcctSeqVersionId); 
				
			}
			
			
			
			
			if ("closeAcctSeqAssignId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->closeAcctSeqAssignId); 
				
			}
			
			
			
			
			if ("closeAcctSeqValue" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->closeAcctSeqValue); 
				
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
		
		if($this->jeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('jeHeaderId');
			$xfer += $output->writeI64($this->jeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdateDate !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdateDate');
			$xfer += $output->writeI64($this->lastUpdateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedBy');
			$xfer += $output->writeI64($this->lastUpdatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ledgerId !== null) {
			
			$xfer += $output->writeFieldBegin('ledgerId');
			$xfer += $output->writeI64($this->ledgerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeCategory !== null) {
			
			$xfer += $output->writeFieldBegin('jeCategory');
			$xfer += $output->writeString($this->jeCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeSource !== null) {
			
			$xfer += $output->writeFieldBegin('jeSource');
			$xfer += $output->writeString($this->jeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dateCreated !== null) {
			
			$xfer += $output->writeFieldBegin('dateCreated');
			$xfer += $output->writeI64($this->dateCreated);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevFlag !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevFlag');
			$xfer += $output->writeString($this->accrualRevFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->multiBalSegFlag !== null) {
			
			$xfer += $output->writeFieldBegin('multiBalSegFlag');
			$xfer += $output->writeString($this->multiBalSegFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualFlag !== null) {
			
			$xfer += $output->writeFieldBegin('actualFlag');
			$xfer += $output->writeString($this->actualFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defaultEffectiveDate !== null) {
			
			$xfer += $output->writeFieldBegin('defaultEffectiveDate');
			$xfer += $output->writeI64($this->defaultEffectiveDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxStatusCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxStatusCode');
			$xfer += $output->writeString($this->taxStatusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->conversionFlag !== null) {
			
			$xfer += $output->writeFieldBegin('conversionFlag');
			$xfer += $output->writeString($this->conversionFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creationDate !== null) {
			
			$xfer += $output->writeFieldBegin('creationDate');
			$xfer += $output->writeI64($this->creationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeI64($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdateLogin !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdateLogin');
			$xfer += $output->writeI64($this->lastUpdateLogin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->encumbranceTypeId !== null) {
			
			$xfer += $output->writeFieldBegin('encumbranceTypeId');
			$xfer += $output->writeI64($this->encumbranceTypeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->budgetVersionId !== null) {
			
			$xfer += $output->writeFieldBegin('budgetVersionId');
			$xfer += $output->writeI64($this->budgetVersionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->balancedJeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('balancedJeFlag');
			$xfer += $output->writeString($this->balancedJeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->balancingSegmentValue !== null) {
			
			$xfer += $output->writeFieldBegin('balancingSegmentValue');
			$xfer += $output->writeString($this->balancingSegmentValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeBatchId !== null) {
			
			$xfer += $output->writeFieldBegin('jeBatchId');
			$xfer += $output->writeI64($this->jeBatchId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fromRecurringHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('fromRecurringHeaderId');
			$xfer += $output->writeI64($this->fromRecurringHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uniqueDate !== null) {
			
			$xfer += $output->writeFieldBegin('uniqueDate');
			$xfer += $output->writeString($this->uniqueDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->earliestPostableDate !== null) {
			
			$xfer += $output->writeFieldBegin('earliestPostableDate');
			$xfer += $output->writeI64($this->earliestPostableDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postedDate !== null) {
			
			$xfer += $output->writeFieldBegin('postedDate');
			$xfer += $output->writeI64($this->postedDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevEffectiveDate !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevEffectiveDate');
			$xfer += $output->writeI64($this->accrualRevEffectiveDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevPeriodName !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevPeriodName');
			$xfer += $output->writeString($this->accrualRevPeriodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevStatus !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevStatus');
			$xfer += $output->writeString($this->accrualRevStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevJeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevJeHeaderId');
			$xfer += $output->writeI64($this->accrualRevJeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accrualRevChangeSignFlag !== null) {
			
			$xfer += $output->writeFieldBegin('accrualRevChangeSignFlag');
			$xfer += $output->writeString($this->accrualRevChangeSignFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->controlTotal !== null) {
			
			$xfer += $output->writeFieldBegin('controlTotal');
			$xfer += $output->writeDouble($this->controlTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->runningTotalDr !== null) {
			
			$xfer += $output->writeFieldBegin('runningTotalDr');
			$xfer += $output->writeDouble($this->runningTotalDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->runningTotalCr !== null) {
			
			$xfer += $output->writeFieldBegin('runningTotalCr');
			$xfer += $output->writeDouble($this->runningTotalCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->runningTotalAccountedDr !== null) {
			
			$xfer += $output->writeFieldBegin('runningTotalAccountedDr');
			$xfer += $output->writeDouble($this->runningTotalAccountedDr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->runningTotalAccountedCr !== null) {
			
			$xfer += $output->writeFieldBegin('runningTotalAccountedCr');
			$xfer += $output->writeDouble($this->runningTotalAccountedCr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyConversionRate !== null) {
			
			$xfer += $output->writeFieldBegin('currencyConversionRate');
			$xfer += $output->writeDouble($this->currencyConversionRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyConversionType !== null) {
			
			$xfer += $output->writeFieldBegin('currencyConversionType');
			$xfer += $output->writeString($this->currencyConversionType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyConversionDate !== null) {
			
			$xfer += $output->writeFieldBegin('currencyConversionDate');
			$xfer += $output->writeI64($this->currencyConversionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->externalReference !== null) {
			
			$xfer += $output->writeFieldBegin('externalReference');
			$xfer += $output->writeString($this->externalReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentJeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('parentJeHeaderId');
			$xfer += $output->writeI64($this->parentJeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reversedJeHeaderId !== null) {
			
			$xfer += $output->writeFieldBegin('reversedJeHeaderId');
			$xfer += $output->writeI64($this->reversedJeHeaderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originatingBalSegValue !== null) {
			
			$xfer += $output->writeFieldBegin('originatingBalSegValue');
			$xfer += $output->writeString($this->originatingBalSegValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->intercompanyMode !== null) {
			
			$xfer += $output->writeFieldBegin('intercompanyMode');
			$xfer += $output->writeDouble($this->intercompanyMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->drBalSegValue !== null) {
			
			$xfer += $output->writeFieldBegin('drBalSegValue');
			$xfer += $output->writeString($this->drBalSegValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->crBalSegValue !== null) {
			
			$xfer += $output->writeFieldBegin('crBalSegValue');
			$xfer += $output->writeString($this->crBalSegValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute1 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute1');
			$xfer += $output->writeString($this->attribute1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute2 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute2');
			$xfer += $output->writeString($this->attribute2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute3 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute3');
			$xfer += $output->writeString($this->attribute3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute4 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute4');
			$xfer += $output->writeString($this->attribute4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute5 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute5');
			$xfer += $output->writeString($this->attribute5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute6 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute6');
			$xfer += $output->writeString($this->attribute6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute7 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute7');
			$xfer += $output->writeString($this->attribute7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute8 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute8');
			$xfer += $output->writeString($this->attribute8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute9 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute9');
			$xfer += $output->writeString($this->attribute9);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute10 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute10');
			$xfer += $output->writeString($this->attribute10);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->context !== null) {
			
			$xfer += $output->writeFieldBegin('context');
			$xfer += $output->writeString($this->context);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttributeCategory !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttributeCategory');
			$xfer += $output->writeString($this->globalAttributeCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute1 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute1');
			$xfer += $output->writeString($this->globalAttribute1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute2 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute2');
			$xfer += $output->writeString($this->globalAttribute2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute3 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute3');
			$xfer += $output->writeString($this->globalAttribute3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute4 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute4');
			$xfer += $output->writeString($this->globalAttribute4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute5 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute5');
			$xfer += $output->writeString($this->globalAttribute5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute6 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute6');
			$xfer += $output->writeString($this->globalAttribute6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute7 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute7');
			$xfer += $output->writeString($this->globalAttribute7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute8 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute8');
			$xfer += $output->writeString($this->globalAttribute8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute9 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute9');
			$xfer += $output->writeString($this->globalAttribute9);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalAttribute10 !== null) {
			
			$xfer += $output->writeFieldBegin('globalAttribute10');
			$xfer += $output->writeString($this->globalAttribute10);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ussglTransactionCode !== null) {
			
			$xfer += $output->writeFieldBegin('ussglTransactionCode');
			$xfer += $output->writeString($this->ussglTransactionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->context2 !== null) {
			
			$xfer += $output->writeFieldBegin('context2');
			$xfer += $output->writeString($this->context2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->docSequenceId !== null) {
			
			$xfer += $output->writeFieldBegin('docSequenceId');
			$xfer += $output->writeI64($this->docSequenceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->docSequenceValue !== null) {
			
			$xfer += $output->writeFieldBegin('docSequenceValue');
			$xfer += $output->writeI64($this->docSequenceValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jgzzReconContext !== null) {
			
			$xfer += $output->writeFieldBegin('jgzzReconContext');
			$xfer += $output->writeString($this->jgzzReconContext);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jgzzReconRef !== null) {
			
			$xfer += $output->writeFieldBegin('jgzzReconRef');
			$xfer += $output->writeString($this->jgzzReconRef);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceDate !== null) {
			
			$xfer += $output->writeFieldBegin('referenceDate');
			$xfer += $output->writeI64($this->referenceDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->localDocSequenceId !== null) {
			
			$xfer += $output->writeFieldBegin('localDocSequenceId');
			$xfer += $output->writeI64($this->localDocSequenceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->localDocSequenceValue !== null) {
			
			$xfer += $output->writeFieldBegin('localDocSequenceValue');
			$xfer += $output->writeI64($this->localDocSequenceValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->displayAlcJournalFlag !== null) {
			
			$xfer += $output->writeFieldBegin('displayAlcJournalFlag');
			$xfer += $output->writeString($this->displayAlcJournalFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jeFromSlaFlag !== null) {
			
			$xfer += $output->writeFieldBegin('jeFromSlaFlag');
			$xfer += $output->writeString($this->jeFromSlaFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postingAcctSeqVersionId !== null) {
			
			$xfer += $output->writeFieldBegin('postingAcctSeqVersionId');
			$xfer += $output->writeI64($this->postingAcctSeqVersionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postingAcctSeqAssignId !== null) {
			
			$xfer += $output->writeFieldBegin('postingAcctSeqAssignId');
			$xfer += $output->writeI64($this->postingAcctSeqAssignId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postingAcctSeqValue !== null) {
			
			$xfer += $output->writeFieldBegin('postingAcctSeqValue');
			$xfer += $output->writeI64($this->postingAcctSeqValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeAcctSeqVersionId !== null) {
			
			$xfer += $output->writeFieldBegin('closeAcctSeqVersionId');
			$xfer += $output->writeI64($this->closeAcctSeqVersionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeAcctSeqAssignId !== null) {
			
			$xfer += $output->writeFieldBegin('closeAcctSeqAssignId');
			$xfer += $output->writeI64($this->closeAcctSeqAssignId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeAcctSeqValue !== null) {
			
			$xfer += $output->writeFieldBegin('closeAcctSeqValue');
			$xfer += $output->writeI64($this->closeAcctSeqValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>