<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;
interface CategoryPublishServiceIf{
	
	
	public function addTagLog( $userId, $tagGroupSn, $tagSn, $operateTime, $operateType, $operateDesc);
	
	public function batchSaveCategoryAttributeList( $categoryAttributesList, $operator, $appId);
	
	public function batchSaveCategoryExchangedReasonList( $categoryReasonList, $operator, $appId);
	
	public function batchSaveCategoryIdMappingList( $categoryIdMappingList, $appId, $userId);
	
	public function batchSaveCategoryMigratePlanList( $categoryMigratePlanList, $appId, $userId);
	
	public function batchSaveCategoryQualification( $categoryQualificationList, $appId, $userId);
	
	public function batchSaveCategoryQuestionAnswerList(\com\vip\category\service\ReqContext $reqContext, $questionAnswerList);
	
	public function batchSaveCategorySizeTableConfigs( $categorySizeConfigsList, $operator, $appId);
	
	public function batchSaveCategoryVersionList( $categoryVersionList, $appId, $userId);
	
	public function checkHasCategoryJdMapping( $categoryId, $attrOptIdList, $appId);
	
	public function checkTagsUsed( $tagSnList, $usedType, $userCode, $appId);
	
	public function countExchangedReasonListByCritra(\com\vip\category\service\ExchangedReasonParam $exchangedReasonParam, $appId);
	
	public function deleteCategoryQualification( $categoryId, $qualificationId, $appId, $userId);
	
	public function deleteQualificationById( $qualificationId, $appId, $userId);
	
	public function getAllCategoryMigratePlan( $appId);
	
	public function getAttributeOptionId( $categoryId, $attributeId, $optionName, $brandId);
	
	public function getAttributeOptionsByPagination( $attributeId, $curPage, $pageSize, $appId);
	
	public function getAttributesByPagination( $curPage, $pageSize, $appId);
	
	public function getBindingCategoryByTagSn( $tagSn, $appId);
	
	public function getCanUsedTagsByTagType( $tagType, $usedType, $userCode, $identifier);
	
	public function getCategoriesByCritra(\com\vip\category\service\CategoriesQueryRequest $categoriesQueryRequest, $appId);
	
	public function getCategoriesByReasonId( $reasonId, $pageNo, $pageSize, $appId);
	
	public function getCategoryByName( $name, $hierarchyId, $limit, $onlyLeaf, $appId);
	
	public function getCategoryIdMappingByCriteria( $preCategoryId, $newCategoryId, $pageNo, $pageSize, $appId);
	
	public function getCategoryMigratePlanByCriteria( $categoryId, $isEnable, $pageNo, $pageSize, $appId);
	
	public function getCategoryQualificationByCriteria( $categoryId, $categoryName, $qualificationId, $curPage, $pageSize, $appId);
	
	public function getCategoryQuestionAnswerListByCriteria(\com\vip\category\service\ReqContext $reqContext,\com\vip\category\service\CommonSearchParam $commonSearchParam);
	
	public function getCategoryQuestionAnswerListByIds(\com\vip\category\service\ReqContext $reqContext, $categoryIdList);
	
	public function getCategorySizeTableConfigsList( $categoryIdSet, $appId);
	
	public function getCategorySizeTableListByPagination( $maxCategoryId, $curPage, $pageSize, $appId);
	
	public function getDeduceCategory( $hierarchyId, $publishCategoryId, $dateTime, $appId);
	
	public function getExchangedReasonListByCritra(\com\vip\category\service\ExchangedReasonParam $exchangedReasonParam, $curPage, $pageSize, $appId);
	
	public function getOperateGroupList( $operateGroupSnList, $identifier, $appId);
	
	public function getQualificationByCategoryId( $categoryId, $categoryName, $curPage, $pageSize, $appId);
	
	public function getQualificationByCriteria( $qualificationId, $qualificationName, $curPage, $pageSize, $appId);
	
	public function getTagBySnList( $tagSnList, $identifier);
	
	public function getTagGroupByGroupSn( $tagGroupSn, $appId);
	
	public function getTagGroupByName( $tagGroupName, $identifier, $curPage, $pageSize, $appId);
	
	public function getTagLogger( $tagGroupSn, $tagSn, $appId);
	
	public function getTagsByTagType( $tagType, $curPage, $pageSize, $identifier);
	
	public function getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId, $pageNum, $pageSize);
	
	public function healthCheck();
	
	public function insertCustomOption(\com\vip\category\service\CategoryStandard $categoryStandard);
	
	public function parseAttributesForJd( $categoryId, $attrOptIdList, $appId, $jdStoreId);
	
	public function saveExchangedReason(\com\vip\category\service\ExchangedSeason $exchangedSeason, $operator, $appId);
	
	public function saveQualification(\com\vip\category\service\Qualification $qualification, $appId, $userId);
	
	public function saveTag(\com\vip\category\service\Tag $tag, $appId, $userId);
	
	public function saveTagEx(\com\vip\category\service\TagEx $tagEx, $appId);
	
	public function saveTagGroup(\com\vip\category\service\TagGroup $tagGroup, $appId, $userId);
	
	public function updatedTagStatusByCriteria( $tagGroupSnList, $tagSnList, $status, $appId, $userId);
	
}

class _CategoryPublishServiceClient extends \Osp\Base\OspStub implements \com\vip\category\service\CategoryPublishServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.category.service.CategoryPublishService", "1.0.0");
	}
	
	
	public function addTagLog( $userId, $tagGroupSn, $tagSn, $operateTime, $operateType, $operateDesc){
		
		$this->send_addTagLog( $userId, $tagGroupSn, $tagSn, $operateTime, $operateType, $operateDesc);
		return $this->recv_addTagLog();
	}
	
	public function send_addTagLog( $userId, $tagGroupSn, $tagSn, $operateTime, $operateType, $operateDesc){
		
		$this->initInvocation("addTagLog");
		$args = new \com\vip\category\service\CategoryPublishService_addTagLog_args();
		
		$args->userId = $userId;
		
		$args->tagGroupSn = $tagGroupSn;
		
		$args->tagSn = $tagSn;
		
		$args->operateTime = $operateTime;
		
		$args->operateType = $operateType;
		
		$args->operateDesc = $operateDesc;
		
		$this->send_base($args);
	}
	
	public function recv_addTagLog(){
		
		$result = new \com\vip\category\service\CategoryPublishService_addTagLog_result();
		$this->receive_base($result);
		
	}
	
	
	public function batchSaveCategoryAttributeList( $categoryAttributesList, $operator, $appId){
		
		$this->send_batchSaveCategoryAttributeList( $categoryAttributesList, $operator, $appId);
		return $this->recv_batchSaveCategoryAttributeList();
	}
	
	public function send_batchSaveCategoryAttributeList( $categoryAttributesList, $operator, $appId){
		
		$this->initInvocation("batchSaveCategoryAttributeList");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryAttributeList_args();
		
		$args->categoryAttributesList = $categoryAttributesList;
		
		$args->operator = $operator;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategoryAttributeList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryAttributeList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchSaveCategoryExchangedReasonList( $categoryReasonList, $operator, $appId){
		
		$this->send_batchSaveCategoryExchangedReasonList( $categoryReasonList, $operator, $appId);
		return $this->recv_batchSaveCategoryExchangedReasonList();
	}
	
	public function send_batchSaveCategoryExchangedReasonList( $categoryReasonList, $operator, $appId){
		
		$this->initInvocation("batchSaveCategoryExchangedReasonList");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryExchangedReasonList_args();
		
		$args->categoryReasonList = $categoryReasonList;
		
		$args->operator = $operator;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategoryExchangedReasonList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryExchangedReasonList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchSaveCategoryIdMappingList( $categoryIdMappingList, $appId, $userId){
		
		$this->send_batchSaveCategoryIdMappingList( $categoryIdMappingList, $appId, $userId);
		return $this->recv_batchSaveCategoryIdMappingList();
	}
	
	public function send_batchSaveCategoryIdMappingList( $categoryIdMappingList, $appId, $userId){
		
		$this->initInvocation("batchSaveCategoryIdMappingList");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryIdMappingList_args();
		
		$args->categoryIdMappingList = $categoryIdMappingList;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategoryIdMappingList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryIdMappingList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchSaveCategoryMigratePlanList( $categoryMigratePlanList, $appId, $userId){
		
		$this->send_batchSaveCategoryMigratePlanList( $categoryMigratePlanList, $appId, $userId);
		return $this->recv_batchSaveCategoryMigratePlanList();
	}
	
	public function send_batchSaveCategoryMigratePlanList( $categoryMigratePlanList, $appId, $userId){
		
		$this->initInvocation("batchSaveCategoryMigratePlanList");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryMigratePlanList_args();
		
		$args->categoryMigratePlanList = $categoryMigratePlanList;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategoryMigratePlanList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryMigratePlanList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchSaveCategoryQualification( $categoryQualificationList, $appId, $userId){
		
		$this->send_batchSaveCategoryQualification( $categoryQualificationList, $appId, $userId);
		return $this->recv_batchSaveCategoryQualification();
	}
	
	public function send_batchSaveCategoryQualification( $categoryQualificationList, $appId, $userId){
		
		$this->initInvocation("batchSaveCategoryQualification");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryQualification_args();
		
		$args->categoryQualificationList = $categoryQualificationList;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategoryQualification(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryQualification_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchSaveCategoryQuestionAnswerList(\com\vip\category\service\ReqContext $reqContext, $questionAnswerList){
		
		$this->send_batchSaveCategoryQuestionAnswerList( $reqContext, $questionAnswerList);
		return $this->recv_batchSaveCategoryQuestionAnswerList();
	}
	
	public function send_batchSaveCategoryQuestionAnswerList(\com\vip\category\service\ReqContext $reqContext, $questionAnswerList){
		
		$this->initInvocation("batchSaveCategoryQuestionAnswerList");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryQuestionAnswerList_args();
		
		$args->reqContext = $reqContext;
		
		$args->questionAnswerList = $questionAnswerList;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategoryQuestionAnswerList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryQuestionAnswerList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchSaveCategorySizeTableConfigs( $categorySizeConfigsList, $operator, $appId){
		
		$this->send_batchSaveCategorySizeTableConfigs( $categorySizeConfigsList, $operator, $appId);
		return $this->recv_batchSaveCategorySizeTableConfigs();
	}
	
	public function send_batchSaveCategorySizeTableConfigs( $categorySizeConfigsList, $operator, $appId){
		
		$this->initInvocation("batchSaveCategorySizeTableConfigs");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategorySizeTableConfigs_args();
		
		$args->categorySizeConfigsList = $categorySizeConfigsList;
		
		$args->operator = $operator;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategorySizeTableConfigs(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategorySizeTableConfigs_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchSaveCategoryVersionList( $categoryVersionList, $appId, $userId){
		
		$this->send_batchSaveCategoryVersionList( $categoryVersionList, $appId, $userId);
		return $this->recv_batchSaveCategoryVersionList();
	}
	
	public function send_batchSaveCategoryVersionList( $categoryVersionList, $appId, $userId){
		
		$this->initInvocation("batchSaveCategoryVersionList");
		$args = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryVersionList_args();
		
		$args->categoryVersionList = $categoryVersionList;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_batchSaveCategoryVersionList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_batchSaveCategoryVersionList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkHasCategoryJdMapping( $categoryId, $attrOptIdList, $appId){
		
		$this->send_checkHasCategoryJdMapping( $categoryId, $attrOptIdList, $appId);
		return $this->recv_checkHasCategoryJdMapping();
	}
	
	public function send_checkHasCategoryJdMapping( $categoryId, $attrOptIdList, $appId){
		
		$this->initInvocation("checkHasCategoryJdMapping");
		$args = new \com\vip\category\service\CategoryPublishService_checkHasCategoryJdMapping_args();
		
		$args->categoryId = $categoryId;
		
		$args->attrOptIdList = $attrOptIdList;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_checkHasCategoryJdMapping(){
		
		$result = new \com\vip\category\service\CategoryPublishService_checkHasCategoryJdMapping_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkTagsUsed( $tagSnList, $usedType, $userCode, $appId){
		
		$this->send_checkTagsUsed( $tagSnList, $usedType, $userCode, $appId);
		return $this->recv_checkTagsUsed();
	}
	
	public function send_checkTagsUsed( $tagSnList, $usedType, $userCode, $appId){
		
		$this->initInvocation("checkTagsUsed");
		$args = new \com\vip\category\service\CategoryPublishService_checkTagsUsed_args();
		
		$args->tagSnList = $tagSnList;
		
		$args->usedType = $usedType;
		
		$args->userCode = $userCode;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_checkTagsUsed(){
		
		$result = new \com\vip\category\service\CategoryPublishService_checkTagsUsed_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function countExchangedReasonListByCritra(\com\vip\category\service\ExchangedReasonParam $exchangedReasonParam, $appId){
		
		$this->send_countExchangedReasonListByCritra( $exchangedReasonParam, $appId);
		return $this->recv_countExchangedReasonListByCritra();
	}
	
	public function send_countExchangedReasonListByCritra(\com\vip\category\service\ExchangedReasonParam $exchangedReasonParam, $appId){
		
		$this->initInvocation("countExchangedReasonListByCritra");
		$args = new \com\vip\category\service\CategoryPublishService_countExchangedReasonListByCritra_args();
		
		$args->exchangedReasonParam = $exchangedReasonParam;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_countExchangedReasonListByCritra(){
		
		$result = new \com\vip\category\service\CategoryPublishService_countExchangedReasonListByCritra_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteCategoryQualification( $categoryId, $qualificationId, $appId, $userId){
		
		$this->send_deleteCategoryQualification( $categoryId, $qualificationId, $appId, $userId);
		return $this->recv_deleteCategoryQualification();
	}
	
	public function send_deleteCategoryQualification( $categoryId, $qualificationId, $appId, $userId){
		
		$this->initInvocation("deleteCategoryQualification");
		$args = new \com\vip\category\service\CategoryPublishService_deleteCategoryQualification_args();
		
		$args->categoryId = $categoryId;
		
		$args->qualificationId = $qualificationId;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_deleteCategoryQualification(){
		
		$result = new \com\vip\category\service\CategoryPublishService_deleteCategoryQualification_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteQualificationById( $qualificationId, $appId, $userId){
		
		$this->send_deleteQualificationById( $qualificationId, $appId, $userId);
		return $this->recv_deleteQualificationById();
	}
	
	public function send_deleteQualificationById( $qualificationId, $appId, $userId){
		
		$this->initInvocation("deleteQualificationById");
		$args = new \com\vip\category\service\CategoryPublishService_deleteQualificationById_args();
		
		$args->qualificationId = $qualificationId;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_deleteQualificationById(){
		
		$result = new \com\vip\category\service\CategoryPublishService_deleteQualificationById_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAllCategoryMigratePlan( $appId){
		
		$this->send_getAllCategoryMigratePlan( $appId);
		return $this->recv_getAllCategoryMigratePlan();
	}
	
	public function send_getAllCategoryMigratePlan( $appId){
		
		$this->initInvocation("getAllCategoryMigratePlan");
		$args = new \com\vip\category\service\CategoryPublishService_getAllCategoryMigratePlan_args();
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getAllCategoryMigratePlan(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getAllCategoryMigratePlan_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAttributeOptionId( $categoryId, $attributeId, $optionName, $brandId){
		
		$this->send_getAttributeOptionId( $categoryId, $attributeId, $optionName, $brandId);
		return $this->recv_getAttributeOptionId();
	}
	
	public function send_getAttributeOptionId( $categoryId, $attributeId, $optionName, $brandId){
		
		$this->initInvocation("getAttributeOptionId");
		$args = new \com\vip\category\service\CategoryPublishService_getAttributeOptionId_args();
		
		$args->categoryId = $categoryId;
		
		$args->attributeId = $attributeId;
		
		$args->optionName = $optionName;
		
		$args->brandId = $brandId;
		
		$this->send_base($args);
	}
	
	public function recv_getAttributeOptionId(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getAttributeOptionId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAttributeOptionsByPagination( $attributeId, $curPage, $pageSize, $appId){
		
		$this->send_getAttributeOptionsByPagination( $attributeId, $curPage, $pageSize, $appId);
		return $this->recv_getAttributeOptionsByPagination();
	}
	
	public function send_getAttributeOptionsByPagination( $attributeId, $curPage, $pageSize, $appId){
		
		$this->initInvocation("getAttributeOptionsByPagination");
		$args = new \com\vip\category\service\CategoryPublishService_getAttributeOptionsByPagination_args();
		
		$args->attributeId = $attributeId;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getAttributeOptionsByPagination(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getAttributeOptionsByPagination_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAttributesByPagination( $curPage, $pageSize, $appId){
		
		$this->send_getAttributesByPagination( $curPage, $pageSize, $appId);
		return $this->recv_getAttributesByPagination();
	}
	
	public function send_getAttributesByPagination( $curPage, $pageSize, $appId){
		
		$this->initInvocation("getAttributesByPagination");
		$args = new \com\vip\category\service\CategoryPublishService_getAttributesByPagination_args();
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getAttributesByPagination(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getAttributesByPagination_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBindingCategoryByTagSn( $tagSn, $appId){
		
		$this->send_getBindingCategoryByTagSn( $tagSn, $appId);
		return $this->recv_getBindingCategoryByTagSn();
	}
	
	public function send_getBindingCategoryByTagSn( $tagSn, $appId){
		
		$this->initInvocation("getBindingCategoryByTagSn");
		$args = new \com\vip\category\service\CategoryPublishService_getBindingCategoryByTagSn_args();
		
		$args->tagSn = $tagSn;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getBindingCategoryByTagSn(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getBindingCategoryByTagSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCanUsedTagsByTagType( $tagType, $usedType, $userCode, $identifier){
		
		$this->send_getCanUsedTagsByTagType( $tagType, $usedType, $userCode, $identifier);
		return $this->recv_getCanUsedTagsByTagType();
	}
	
	public function send_getCanUsedTagsByTagType( $tagType, $usedType, $userCode, $identifier){
		
		$this->initInvocation("getCanUsedTagsByTagType");
		$args = new \com\vip\category\service\CategoryPublishService_getCanUsedTagsByTagType_args();
		
		$args->tagType = $tagType;
		
		$args->usedType = $usedType;
		
		$args->userCode = $userCode;
		
		$args->identifier = $identifier;
		
		$this->send_base($args);
	}
	
	public function recv_getCanUsedTagsByTagType(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCanUsedTagsByTagType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoriesByCritra(\com\vip\category\service\CategoriesQueryRequest $categoriesQueryRequest, $appId){
		
		$this->send_getCategoriesByCritra( $categoriesQueryRequest, $appId);
		return $this->recv_getCategoriesByCritra();
	}
	
	public function send_getCategoriesByCritra(\com\vip\category\service\CategoriesQueryRequest $categoriesQueryRequest, $appId){
		
		$this->initInvocation("getCategoriesByCritra");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoriesByCritra_args();
		
		$args->categoriesQueryRequest = $categoriesQueryRequest;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoriesByCritra(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoriesByCritra_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoriesByReasonId( $reasonId, $pageNo, $pageSize, $appId){
		
		$this->send_getCategoriesByReasonId( $reasonId, $pageNo, $pageSize, $appId);
		return $this->recv_getCategoriesByReasonId();
	}
	
	public function send_getCategoriesByReasonId( $reasonId, $pageNo, $pageSize, $appId){
		
		$this->initInvocation("getCategoriesByReasonId");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoriesByReasonId_args();
		
		$args->reasonId = $reasonId;
		
		$args->pageNo = $pageNo;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoriesByReasonId(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoriesByReasonId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryByName( $name, $hierarchyId, $limit, $onlyLeaf, $appId){
		
		$this->send_getCategoryByName( $name, $hierarchyId, $limit, $onlyLeaf, $appId);
		return $this->recv_getCategoryByName();
	}
	
	public function send_getCategoryByName( $name, $hierarchyId, $limit, $onlyLeaf, $appId){
		
		$this->initInvocation("getCategoryByName");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoryByName_args();
		
		$args->name = $name;
		
		$args->hierarchyId = $hierarchyId;
		
		$args->limit = $limit;
		
		$args->onlyLeaf = $onlyLeaf;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryByName(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoryByName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryIdMappingByCriteria( $preCategoryId, $newCategoryId, $pageNo, $pageSize, $appId){
		
		$this->send_getCategoryIdMappingByCriteria( $preCategoryId, $newCategoryId, $pageNo, $pageSize, $appId);
		return $this->recv_getCategoryIdMappingByCriteria();
	}
	
	public function send_getCategoryIdMappingByCriteria( $preCategoryId, $newCategoryId, $pageNo, $pageSize, $appId){
		
		$this->initInvocation("getCategoryIdMappingByCriteria");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoryIdMappingByCriteria_args();
		
		$args->preCategoryId = $preCategoryId;
		
		$args->newCategoryId = $newCategoryId;
		
		$args->pageNo = $pageNo;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryIdMappingByCriteria(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoryIdMappingByCriteria_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryMigratePlanByCriteria( $categoryId, $isEnable, $pageNo, $pageSize, $appId){
		
		$this->send_getCategoryMigratePlanByCriteria( $categoryId, $isEnable, $pageNo, $pageSize, $appId);
		return $this->recv_getCategoryMigratePlanByCriteria();
	}
	
	public function send_getCategoryMigratePlanByCriteria( $categoryId, $isEnable, $pageNo, $pageSize, $appId){
		
		$this->initInvocation("getCategoryMigratePlanByCriteria");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoryMigratePlanByCriteria_args();
		
		$args->categoryId = $categoryId;
		
		$args->isEnable = $isEnable;
		
		$args->pageNo = $pageNo;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryMigratePlanByCriteria(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoryMigratePlanByCriteria_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryQualificationByCriteria( $categoryId, $categoryName, $qualificationId, $curPage, $pageSize, $appId){
		
		$this->send_getCategoryQualificationByCriteria( $categoryId, $categoryName, $qualificationId, $curPage, $pageSize, $appId);
		return $this->recv_getCategoryQualificationByCriteria();
	}
	
	public function send_getCategoryQualificationByCriteria( $categoryId, $categoryName, $qualificationId, $curPage, $pageSize, $appId){
		
		$this->initInvocation("getCategoryQualificationByCriteria");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoryQualificationByCriteria_args();
		
		$args->categoryId = $categoryId;
		
		$args->categoryName = $categoryName;
		
		$args->qualificationId = $qualificationId;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryQualificationByCriteria(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoryQualificationByCriteria_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryQuestionAnswerListByCriteria(\com\vip\category\service\ReqContext $reqContext,\com\vip\category\service\CommonSearchParam $commonSearchParam){
		
		$this->send_getCategoryQuestionAnswerListByCriteria( $reqContext, $commonSearchParam);
		return $this->recv_getCategoryQuestionAnswerListByCriteria();
	}
	
	public function send_getCategoryQuestionAnswerListByCriteria(\com\vip\category\service\ReqContext $reqContext,\com\vip\category\service\CommonSearchParam $commonSearchParam){
		
		$this->initInvocation("getCategoryQuestionAnswerListByCriteria");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoryQuestionAnswerListByCriteria_args();
		
		$args->reqContext = $reqContext;
		
		$args->commonSearchParam = $commonSearchParam;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryQuestionAnswerListByCriteria(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoryQuestionAnswerListByCriteria_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryQuestionAnswerListByIds(\com\vip\category\service\ReqContext $reqContext, $categoryIdList){
		
		$this->send_getCategoryQuestionAnswerListByIds( $reqContext, $categoryIdList);
		return $this->recv_getCategoryQuestionAnswerListByIds();
	}
	
	public function send_getCategoryQuestionAnswerListByIds(\com\vip\category\service\ReqContext $reqContext, $categoryIdList){
		
		$this->initInvocation("getCategoryQuestionAnswerListByIds");
		$args = new \com\vip\category\service\CategoryPublishService_getCategoryQuestionAnswerListByIds_args();
		
		$args->reqContext = $reqContext;
		
		$args->categoryIdList = $categoryIdList;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryQuestionAnswerListByIds(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategoryQuestionAnswerListByIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategorySizeTableConfigsList( $categoryIdSet, $appId){
		
		$this->send_getCategorySizeTableConfigsList( $categoryIdSet, $appId);
		return $this->recv_getCategorySizeTableConfigsList();
	}
	
	public function send_getCategorySizeTableConfigsList( $categoryIdSet, $appId){
		
		$this->initInvocation("getCategorySizeTableConfigsList");
		$args = new \com\vip\category\service\CategoryPublishService_getCategorySizeTableConfigsList_args();
		
		$args->categoryIdSet = $categoryIdSet;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategorySizeTableConfigsList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategorySizeTableConfigsList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategorySizeTableListByPagination( $maxCategoryId, $curPage, $pageSize, $appId){
		
		$this->send_getCategorySizeTableListByPagination( $maxCategoryId, $curPage, $pageSize, $appId);
		return $this->recv_getCategorySizeTableListByPagination();
	}
	
	public function send_getCategorySizeTableListByPagination( $maxCategoryId, $curPage, $pageSize, $appId){
		
		$this->initInvocation("getCategorySizeTableListByPagination");
		$args = new \com\vip\category\service\CategoryPublishService_getCategorySizeTableListByPagination_args();
		
		$args->maxCategoryId = $maxCategoryId;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategorySizeTableListByPagination(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getCategorySizeTableListByPagination_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getDeduceCategory( $hierarchyId, $publishCategoryId, $dateTime, $appId){
		
		$this->send_getDeduceCategory( $hierarchyId, $publishCategoryId, $dateTime, $appId);
		return $this->recv_getDeduceCategory();
	}
	
	public function send_getDeduceCategory( $hierarchyId, $publishCategoryId, $dateTime, $appId){
		
		$this->initInvocation("getDeduceCategory");
		$args = new \com\vip\category\service\CategoryPublishService_getDeduceCategory_args();
		
		$args->hierarchyId = $hierarchyId;
		
		$args->publishCategoryId = $publishCategoryId;
		
		$args->dateTime = $dateTime;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getDeduceCategory(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getDeduceCategory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExchangedReasonListByCritra(\com\vip\category\service\ExchangedReasonParam $exchangedReasonParam, $curPage, $pageSize, $appId){
		
		$this->send_getExchangedReasonListByCritra( $exchangedReasonParam, $curPage, $pageSize, $appId);
		return $this->recv_getExchangedReasonListByCritra();
	}
	
	public function send_getExchangedReasonListByCritra(\com\vip\category\service\ExchangedReasonParam $exchangedReasonParam, $curPage, $pageSize, $appId){
		
		$this->initInvocation("getExchangedReasonListByCritra");
		$args = new \com\vip\category\service\CategoryPublishService_getExchangedReasonListByCritra_args();
		
		$args->exchangedReasonParam = $exchangedReasonParam;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getExchangedReasonListByCritra(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getExchangedReasonListByCritra_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOperateGroupList( $operateGroupSnList, $identifier, $appId){
		
		$this->send_getOperateGroupList( $operateGroupSnList, $identifier, $appId);
		return $this->recv_getOperateGroupList();
	}
	
	public function send_getOperateGroupList( $operateGroupSnList, $identifier, $appId){
		
		$this->initInvocation("getOperateGroupList");
		$args = new \com\vip\category\service\CategoryPublishService_getOperateGroupList_args();
		
		$args->operateGroupSnList = $operateGroupSnList;
		
		$args->identifier = $identifier;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getOperateGroupList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getOperateGroupList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getQualificationByCategoryId( $categoryId, $categoryName, $curPage, $pageSize, $appId){
		
		$this->send_getQualificationByCategoryId( $categoryId, $categoryName, $curPage, $pageSize, $appId);
		return $this->recv_getQualificationByCategoryId();
	}
	
	public function send_getQualificationByCategoryId( $categoryId, $categoryName, $curPage, $pageSize, $appId){
		
		$this->initInvocation("getQualificationByCategoryId");
		$args = new \com\vip\category\service\CategoryPublishService_getQualificationByCategoryId_args();
		
		$args->categoryId = $categoryId;
		
		$args->categoryName = $categoryName;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getQualificationByCategoryId(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getQualificationByCategoryId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getQualificationByCriteria( $qualificationId, $qualificationName, $curPage, $pageSize, $appId){
		
		$this->send_getQualificationByCriteria( $qualificationId, $qualificationName, $curPage, $pageSize, $appId);
		return $this->recv_getQualificationByCriteria();
	}
	
	public function send_getQualificationByCriteria( $qualificationId, $qualificationName, $curPage, $pageSize, $appId){
		
		$this->initInvocation("getQualificationByCriteria");
		$args = new \com\vip\category\service\CategoryPublishService_getQualificationByCriteria_args();
		
		$args->qualificationId = $qualificationId;
		
		$args->qualificationName = $qualificationName;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getQualificationByCriteria(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getQualificationByCriteria_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagBySnList( $tagSnList, $identifier){
		
		$this->send_getTagBySnList( $tagSnList, $identifier);
		return $this->recv_getTagBySnList();
	}
	
	public function send_getTagBySnList( $tagSnList, $identifier){
		
		$this->initInvocation("getTagBySnList");
		$args = new \com\vip\category\service\CategoryPublishService_getTagBySnList_args();
		
		$args->tagSnList = $tagSnList;
		
		$args->identifier = $identifier;
		
		$this->send_base($args);
	}
	
	public function recv_getTagBySnList(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getTagBySnList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagGroupByGroupSn( $tagGroupSn, $appId){
		
		$this->send_getTagGroupByGroupSn( $tagGroupSn, $appId);
		return $this->recv_getTagGroupByGroupSn();
	}
	
	public function send_getTagGroupByGroupSn( $tagGroupSn, $appId){
		
		$this->initInvocation("getTagGroupByGroupSn");
		$args = new \com\vip\category\service\CategoryPublishService_getTagGroupByGroupSn_args();
		
		$args->tagGroupSn = $tagGroupSn;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getTagGroupByGroupSn(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getTagGroupByGroupSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagGroupByName( $tagGroupName, $identifier, $curPage, $pageSize, $appId){
		
		$this->send_getTagGroupByName( $tagGroupName, $identifier, $curPage, $pageSize, $appId);
		return $this->recv_getTagGroupByName();
	}
	
	public function send_getTagGroupByName( $tagGroupName, $identifier, $curPage, $pageSize, $appId){
		
		$this->initInvocation("getTagGroupByName");
		$args = new \com\vip\category\service\CategoryPublishService_getTagGroupByName_args();
		
		$args->tagGroupName = $tagGroupName;
		
		$args->identifier = $identifier;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getTagGroupByName(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getTagGroupByName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagLogger( $tagGroupSn, $tagSn, $appId){
		
		$this->send_getTagLogger( $tagGroupSn, $tagSn, $appId);
		return $this->recv_getTagLogger();
	}
	
	public function send_getTagLogger( $tagGroupSn, $tagSn, $appId){
		
		$this->initInvocation("getTagLogger");
		$args = new \com\vip\category\service\CategoryPublishService_getTagLogger_args();
		
		$args->tagGroupSn = $tagGroupSn;
		
		$args->tagSn = $tagSn;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getTagLogger(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getTagLogger_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagsByTagType( $tagType, $curPage, $pageSize, $identifier){
		
		$this->send_getTagsByTagType( $tagType, $curPage, $pageSize, $identifier);
		return $this->recv_getTagsByTagType();
	}
	
	public function send_getTagsByTagType( $tagType, $curPage, $pageSize, $identifier){
		
		$this->initInvocation("getTagsByTagType");
		$args = new \com\vip\category\service\CategoryPublishService_getTagsByTagType_args();
		
		$args->tagType = $tagType;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->identifier = $identifier;
		
		$this->send_base($args);
	}
	
	public function recv_getTagsByTagType(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getTagsByTagType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId, $pageNum, $pageSize){
		
		$this->send_getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId, $pageNum, $pageSize);
		return $this->recv_getUpdatedPublishCategories();
	}
	
	public function send_getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId, $pageNum, $pageSize){
		
		$this->initInvocation("getUpdatedPublishCategories");
		$args = new \com\vip\category\service\CategoryPublishService_getUpdatedPublishCategories_args();
		
		$args->sinceUpdateTime = $sinceUpdateTime;
		
		$args->hierarchyId = $hierarchyId;
		
		$args->pageNum = $pageNum;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getUpdatedPublishCategories(){
		
		$result = new \com\vip\category\service\CategoryPublishService_getUpdatedPublishCategories_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\category\service\CategoryPublishService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\category\service\CategoryPublishService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function insertCustomOption(\com\vip\category\service\CategoryStandard $categoryStandard){
		
		$this->send_insertCustomOption( $categoryStandard);
		return $this->recv_insertCustomOption();
	}
	
	public function send_insertCustomOption(\com\vip\category\service\CategoryStandard $categoryStandard){
		
		$this->initInvocation("insertCustomOption");
		$args = new \com\vip\category\service\CategoryPublishService_insertCustomOption_args();
		
		$args->categoryStandard = $categoryStandard;
		
		$this->send_base($args);
	}
	
	public function recv_insertCustomOption(){
		
		$result = new \com\vip\category\service\CategoryPublishService_insertCustomOption_result();
		$this->receive_base($result);
		
	}
	
	
	public function parseAttributesForJd( $categoryId, $attrOptIdList, $appId, $jdStoreId){
		
		$this->send_parseAttributesForJd( $categoryId, $attrOptIdList, $appId, $jdStoreId);
		return $this->recv_parseAttributesForJd();
	}
	
	public function send_parseAttributesForJd( $categoryId, $attrOptIdList, $appId, $jdStoreId){
		
		$this->initInvocation("parseAttributesForJd");
		$args = new \com\vip\category\service\CategoryPublishService_parseAttributesForJd_args();
		
		$args->categoryId = $categoryId;
		
		$args->attrOptIdList = $attrOptIdList;
		
		$args->appId = $appId;
		
		$args->jdStoreId = $jdStoreId;
		
		$this->send_base($args);
	}
	
	public function recv_parseAttributesForJd(){
		
		$result = new \com\vip\category\service\CategoryPublishService_parseAttributesForJd_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveExchangedReason(\com\vip\category\service\ExchangedSeason $exchangedSeason, $operator, $appId){
		
		$this->send_saveExchangedReason( $exchangedSeason, $operator, $appId);
		return $this->recv_saveExchangedReason();
	}
	
	public function send_saveExchangedReason(\com\vip\category\service\ExchangedSeason $exchangedSeason, $operator, $appId){
		
		$this->initInvocation("saveExchangedReason");
		$args = new \com\vip\category\service\CategoryPublishService_saveExchangedReason_args();
		
		$args->exchangedSeason = $exchangedSeason;
		
		$args->operator = $operator;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_saveExchangedReason(){
		
		$result = new \com\vip\category\service\CategoryPublishService_saveExchangedReason_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveQualification(\com\vip\category\service\Qualification $qualification, $appId, $userId){
		
		$this->send_saveQualification( $qualification, $appId, $userId);
		return $this->recv_saveQualification();
	}
	
	public function send_saveQualification(\com\vip\category\service\Qualification $qualification, $appId, $userId){
		
		$this->initInvocation("saveQualification");
		$args = new \com\vip\category\service\CategoryPublishService_saveQualification_args();
		
		$args->qualification = $qualification;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_saveQualification(){
		
		$result = new \com\vip\category\service\CategoryPublishService_saveQualification_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveTag(\com\vip\category\service\Tag $tag, $appId, $userId){
		
		$this->send_saveTag( $tag, $appId, $userId);
		return $this->recv_saveTag();
	}
	
	public function send_saveTag(\com\vip\category\service\Tag $tag, $appId, $userId){
		
		$this->initInvocation("saveTag");
		$args = new \com\vip\category\service\CategoryPublishService_saveTag_args();
		
		$args->tag = $tag;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_saveTag(){
		
		$result = new \com\vip\category\service\CategoryPublishService_saveTag_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveTagEx(\com\vip\category\service\TagEx $tagEx, $appId){
		
		$this->send_saveTagEx( $tagEx, $appId);
		return $this->recv_saveTagEx();
	}
	
	public function send_saveTagEx(\com\vip\category\service\TagEx $tagEx, $appId){
		
		$this->initInvocation("saveTagEx");
		$args = new \com\vip\category\service\CategoryPublishService_saveTagEx_args();
		
		$args->tagEx = $tagEx;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_saveTagEx(){
		
		$result = new \com\vip\category\service\CategoryPublishService_saveTagEx_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveTagGroup(\com\vip\category\service\TagGroup $tagGroup, $appId, $userId){
		
		$this->send_saveTagGroup( $tagGroup, $appId, $userId);
		return $this->recv_saveTagGroup();
	}
	
	public function send_saveTagGroup(\com\vip\category\service\TagGroup $tagGroup, $appId, $userId){
		
		$this->initInvocation("saveTagGroup");
		$args = new \com\vip\category\service\CategoryPublishService_saveTagGroup_args();
		
		$args->tagGroup = $tagGroup;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_saveTagGroup(){
		
		$result = new \com\vip\category\service\CategoryPublishService_saveTagGroup_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updatedTagStatusByCriteria( $tagGroupSnList, $tagSnList, $status, $appId, $userId){
		
		$this->send_updatedTagStatusByCriteria( $tagGroupSnList, $tagSnList, $status, $appId, $userId);
		return $this->recv_updatedTagStatusByCriteria();
	}
	
	public function send_updatedTagStatusByCriteria( $tagGroupSnList, $tagSnList, $status, $appId, $userId){
		
		$this->initInvocation("updatedTagStatusByCriteria");
		$args = new \com\vip\category\service\CategoryPublishService_updatedTagStatusByCriteria_args();
		
		$args->tagGroupSnList = $tagGroupSnList;
		
		$args->tagSnList = $tagSnList;
		
		$args->status = $status;
		
		$args->appId = $appId;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_updatedTagStatusByCriteria(){
		
		$result = new \com\vip\category\service\CategoryPublishService_updatedTagStatusByCriteria_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class CategoryPublishService_addTagLog_args {
	
	static $_TSPEC;
	public $userId = null;
	public $tagGroupSn = null;
	public $tagSn = null;
	public $operateTime = null;
	public $operateType = null;
	public $operateDesc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'tagGroupSn'
			),
			3 => array(
			'var' => 'tagSn'
			),
			4 => array(
			'var' => 'operateTime'
			),
			5 => array(
			'var' => 'operateType'
			),
			6 => array(
			'var' => 'operateDesc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['tagGroupSn'])){
				
				$this->tagGroupSn = $vals['tagGroupSn'];
			}
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
			if (isset($vals['operateTime'])){
				
				$this->operateTime = $vals['operateTime'];
			}
			
			
			if (isset($vals['operateType'])){
				
				$this->operateType = $vals['operateType'];
			}
			
			
			if (isset($vals['operateDesc'])){
				
				$this->operateDesc = $vals['operateDesc'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->tagGroupSn); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->tagSn); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->operateTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->operateType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operateDesc);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagGroupSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupSn');
			$xfer += $output->writeI32($this->tagGroupSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagSn');
			$xfer += $output->writeI32($this->tagSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateTime !== null) {
			
			$xfer += $output->writeFieldBegin('operateTime');
			$xfer += $output->writeI64($this->operateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateType !== null) {
			
			$xfer += $output->writeFieldBegin('operateType');
			$xfer += $output->writeI32($this->operateType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateDesc !== null) {
			
			$xfer += $output->writeFieldBegin('operateDesc');
			$xfer += $output->writeString($this->operateDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryAttributeList_args {
	
	static $_TSPEC;
	public $categoryAttributesList = null;
	public $operator = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryAttributesList'
			),
			2 => array(
			'var' => 'operator'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryAttributesList'])){
				
				$this->categoryAttributesList = $vals['categoryAttributesList'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryAttributesList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryAttributes();
					$elem0->read($input);
					
					$this->categoryAttributesList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryAttributesList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryAttributesList');
			
			if (!is_array($this->categoryAttributesList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryAttributesList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryExchangedReasonList_args {
	
	static $_TSPEC;
	public $categoryReasonList = null;
	public $operator = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryReasonList'
			),
			2 => array(
			'var' => 'operator'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryReasonList'])){
				
				$this->categoryReasonList = $vals['categoryReasonList'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryReasonList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryExchangedReason();
					$elem0->read($input);
					
					$this->categoryReasonList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryReasonList');
		
		if (!is_array($this->categoryReasonList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->categoryReasonList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operator');
		$xfer += $output->writeString($this->operator);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryIdMappingList_args {
	
	static $_TSPEC;
	public $categoryIdMappingList = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryIdMappingList'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryIdMappingList'])){
				
				$this->categoryIdMappingList = $vals['categoryIdMappingList'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryIdMappingList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryIdMapping();
					$elem0->read($input);
					
					$this->categoryIdMappingList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryIdMappingList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIdMappingList');
			
			if (!is_array($this->categoryIdMappingList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryIdMappingList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryMigratePlanList_args {
	
	static $_TSPEC;
	public $categoryMigratePlanList = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryMigratePlanList'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryMigratePlanList'])){
				
				$this->categoryMigratePlanList = $vals['categoryMigratePlanList'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryMigratePlanList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryMigratePlan();
					$elem0->read($input);
					
					$this->categoryMigratePlanList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryMigratePlanList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryMigratePlanList');
			
			if (!is_array($this->categoryMigratePlanList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryMigratePlanList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryQualification_args {
	
	static $_TSPEC;
	public $categoryQualificationList = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryQualificationList'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryQualificationList'])){
				
				$this->categoryQualificationList = $vals['categoryQualificationList'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryQualificationList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryQualification();
					$elem0->read($input);
					
					$this->categoryQualificationList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryQualificationList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryQualificationList');
			
			if (!is_array($this->categoryQualificationList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryQualificationList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryQuestionAnswerList_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $questionAnswerList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'questionAnswerList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['questionAnswerList'])){
				
				$this->questionAnswerList = $vals['questionAnswerList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\category\service\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->questionAnswerList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryQuestionAnswerModel();
					$elem0->read($input);
					
					$this->questionAnswerList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
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




class CategoryPublishService_batchSaveCategorySizeTableConfigs_args {
	
	static $_TSPEC;
	public $categorySizeConfigsList = null;
	public $operator = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categorySizeConfigsList'
			),
			2 => array(
			'var' => 'operator'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categorySizeConfigsList'])){
				
				$this->categorySizeConfigsList = $vals['categorySizeConfigsList'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categorySizeConfigsList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategorySizetableConfigs();
					$elem1->read($input);
					
					$this->categorySizeConfigsList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categorySizeConfigsList !== null) {
			
			$xfer += $output->writeFieldBegin('categorySizeConfigsList');
			
			if (!is_array($this->categorySizeConfigsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categorySizeConfigsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryVersionList_args {
	
	static $_TSPEC;
	public $categoryVersionList = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryVersionList'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryVersionList'])){
				
				$this->categoryVersionList = $vals['categoryVersionList'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryVersionList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryVersion();
					$elem0->read($input);
					
					$this->categoryVersionList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryVersionList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryVersionList');
			
			if (!is_array($this->categoryVersionList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryVersionList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_checkHasCategoryJdMapping_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $attrOptIdList = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'attrOptIdList'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['attrOptIdList'])){
				
				$this->attrOptIdList = $vals['attrOptIdList'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->attrOptIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\AttrOptId();
					$elem0->read($input);
					
					$this->attrOptIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->attrOptIdList !== null) {
			
			$xfer += $output->writeFieldBegin('attrOptIdList');
			
			if (!is_array($this->attrOptIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attrOptIdList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_checkTagsUsed_args {
	
	static $_TSPEC;
	public $tagSnList = null;
	public $usedType = null;
	public $userCode = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagSnList'
			),
			2 => array(
			'var' => 'usedType'
			),
			3 => array(
			'var' => 'userCode'
			),
			4 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagSnList'])){
				
				$this->tagSnList = $vals['tagSnList'];
			}
			
			
			if (isset($vals['usedType'])){
				
				$this->usedType = $vals['usedType'];
			}
			
			
			if (isset($vals['userCode'])){
				
				$this->userCode = $vals['userCode'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tagSnList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->tagSnList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\category\service\UsedType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->usedType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tagSnList !== null) {
			
			$xfer += $output->writeFieldBegin('tagSnList');
			
			if (!is_array($this->tagSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagSnList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usedType !== null) {
			
			$xfer += $output->writeFieldBegin('usedType');
			
			$em = new \com\vip\category\service\UsedType; 
			$output->writeString($em::$__names[$this->usedType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userCode !== null) {
			
			$xfer += $output->writeFieldBegin('userCode');
			$xfer += $output->writeString($this->userCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_countExchangedReasonListByCritra_args {
	
	static $_TSPEC;
	public $exchangedReasonParam = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'exchangedReasonParam'
			),
			2 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['exchangedReasonParam'])){
				
				$this->exchangedReasonParam = $vals['exchangedReasonParam'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->exchangedReasonParam = new \com\vip\category\service\ExchangedReasonParam();
			$this->exchangedReasonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('exchangedReasonParam');
		
		if (!is_object($this->exchangedReasonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->exchangedReasonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_deleteCategoryQualification_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $qualificationId = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'qualificationId'
			),
			3 => array(
			'var' => 'appId'
			),
			4 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['qualificationId'])){
				
				$this->qualificationId = $vals['qualificationId'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->qualificationId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qualificationId');
		$xfer += $output->writeI64($this->qualificationId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_deleteQualificationById_args {
	
	static $_TSPEC;
	public $qualificationId = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'qualificationId'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['qualificationId'])){
				
				$this->qualificationId = $vals['qualificationId'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->qualificationId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('qualificationId');
		$xfer += $output->writeI64($this->qualificationId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAllCategoryMigratePlan_args {
	
	static $_TSPEC;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAttributeOptionId_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $attributeId = null;
	public $optionName = null;
	public $brandId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'attributeId'
			),
			3 => array(
			'var' => 'optionName'
			),
			4 => array(
			'var' => 'brandId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['optionName'])){
				
				$this->optionName = $vals['optionName'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->attributeId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->optionName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brandId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('attributeId');
		$xfer += $output->writeI32($this->attributeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('optionName');
		$xfer += $output->writeString($this->optionName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAttributeOptionsByPagination_args {
	
	static $_TSPEC;
	public $attributeId = null;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeId'
			),
			2 => array(
			'var' => 'curPage'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->attributeId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->attributeId !== null) {
			
			$xfer += $output->writeFieldBegin('attributeId');
			$xfer += $output->writeI32($this->attributeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAttributesByPagination_args {
	
	static $_TSPEC;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'curPage'
			),
			2 => array(
			'var' => 'pageSize'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getBindingCategoryByTagSn_args {
	
	static $_TSPEC;
	public $tagSn = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagSn'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->tagSn); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tagSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagSn');
			$xfer += $output->writeI32($this->tagSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCanUsedTagsByTagType_args {
	
	static $_TSPEC;
	public $tagType = null;
	public $usedType = null;
	public $userCode = null;
	public $identifier = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagType'
			),
			2 => array(
			'var' => 'usedType'
			),
			3 => array(
			'var' => 'userCode'
			),
			4 => array(
			'var' => 'identifier'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['usedType'])){
				
				$this->usedType = $vals['usedType'];
			}
			
			
			if (isset($vals['userCode'])){
				
				$this->userCode = $vals['userCode'];
			}
			
			
			if (isset($vals['identifier'])){
				
				$this->identifier = $vals['identifier'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\category\service\TagType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->tagType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\category\service\UsedType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->usedType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->identifier); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tagType');
		
		$em = new \com\vip\category\service\TagType; 
		$output->writeString($em::$__names[$this->tagType]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->usedType !== null) {
			
			$xfer += $output->writeFieldBegin('usedType');
			
			$em = new \com\vip\category\service\UsedType; 
			$output->writeString($em::$__names[$this->usedType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userCode !== null) {
			
			$xfer += $output->writeFieldBegin('userCode');
			$xfer += $output->writeString($this->userCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->identifier !== null) {
			
			$xfer += $output->writeFieldBegin('identifier');
			$xfer += $output->writeByte($this->identifier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoriesByCritra_args {
	
	static $_TSPEC;
	public $categoriesQueryRequest = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoriesQueryRequest'
			),
			2 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoriesQueryRequest'])){
				
				$this->categoriesQueryRequest = $vals['categoriesQueryRequest'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoriesQueryRequest = new \com\vip\category\service\CategoriesQueryRequest();
			$this->categoriesQueryRequest->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoriesQueryRequest');
		
		if (!is_object($this->categoriesQueryRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->categoriesQueryRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoriesByReasonId_args {
	
	static $_TSPEC;
	public $reasonId = null;
	public $pageNo = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reasonId'
			),
			2 => array(
			'var' => 'pageNo'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
			}
			
			
			if (isset($vals['pageNo'])){
				
				$this->pageNo = $vals['pageNo'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->reasonId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageNo); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reasonId !== null) {
			
			$xfer += $output->writeFieldBegin('reasonId');
			$xfer += $output->writeI64($this->reasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageNo');
		$xfer += $output->writeI32($this->pageNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryByName_args {
	
	static $_TSPEC;
	public $name = null;
	public $hierarchyId = null;
	public $limit = null;
	public $onlyLeaf = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'name'
			),
			2 => array(
			'var' => 'hierarchyId'
			),
			3 => array(
			'var' => 'limit'
			),
			4 => array(
			'var' => 'onlyLeaf'
			),
			5 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['onlyLeaf'])){
				
				$this->onlyLeaf = $vals['onlyLeaf'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->onlyLeaf);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hierarchyId !== null) {
			
			$xfer += $output->writeFieldBegin('hierarchyId');
			$xfer += $output->writeI32($this->hierarchyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('onlyLeaf');
		$xfer += $output->writeBool($this->onlyLeaf);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryIdMappingByCriteria_args {
	
	static $_TSPEC;
	public $preCategoryId = null;
	public $newCategoryId = null;
	public $pageNo = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'preCategoryId'
			),
			2 => array(
			'var' => 'newCategoryId'
			),
			3 => array(
			'var' => 'pageNo'
			),
			4 => array(
			'var' => 'pageSize'
			),
			5 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['preCategoryId'])){
				
				$this->preCategoryId = $vals['preCategoryId'];
			}
			
			
			if (isset($vals['newCategoryId'])){
				
				$this->newCategoryId = $vals['newCategoryId'];
			}
			
			
			if (isset($vals['pageNo'])){
				
				$this->pageNo = $vals['pageNo'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->preCategoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->newCategoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageNo); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->preCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('preCategoryId');
			$xfer += $output->writeI32($this->preCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('newCategoryId');
			$xfer += $output->writeI32($this->newCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageNo !== null) {
			
			$xfer += $output->writeFieldBegin('pageNo');
			$xfer += $output->writeI32($this->pageNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryMigratePlanByCriteria_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $isEnable = null;
	public $pageNo = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'isEnable'
			),
			3 => array(
			'var' => 'pageNo'
			),
			4 => array(
			'var' => 'pageSize'
			),
			5 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['isEnable'])){
				
				$this->isEnable = $vals['isEnable'];
			}
			
			
			if (isset($vals['pageNo'])){
				
				$this->pageNo = $vals['pageNo'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->isEnable); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageNo); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI32($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isEnable !== null) {
			
			$xfer += $output->writeFieldBegin('isEnable');
			$xfer += $output->writeI32($this->isEnable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageNo !== null) {
			
			$xfer += $output->writeFieldBegin('pageNo');
			$xfer += $output->writeI32($this->pageNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryQualificationByCriteria_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $categoryName = null;
	public $qualificationId = null;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'categoryName'
			),
			3 => array(
			'var' => 'qualificationId'
			),
			4 => array(
			'var' => 'curPage'
			),
			5 => array(
			'var' => 'pageSize'
			),
			6 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['qualificationId'])){
				
				$this->qualificationId = $vals['qualificationId'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->categoryName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->qualificationId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI32($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryName !== null) {
			
			$xfer += $output->writeFieldBegin('categoryName');
			$xfer += $output->writeString($this->categoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qualificationId !== null) {
			
			$xfer += $output->writeFieldBegin('qualificationId');
			$xfer += $output->writeI64($this->qualificationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryQuestionAnswerListByCriteria_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $commonSearchParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'commonSearchParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['commonSearchParam'])){
				
				$this->commonSearchParam = $vals['commonSearchParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\category\service\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->commonSearchParam = new \com\vip\category\service\CommonSearchParam();
			$this->commonSearchParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->commonSearchParam !== null) {
			
			$xfer += $output->writeFieldBegin('commonSearchParam');
			
			if (!is_object($this->commonSearchParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->commonSearchParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryQuestionAnswerListByIds_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $categoryIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'categoryIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['categoryIdList'])){
				
				$this->categoryIdList = $vals['categoryIdList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\category\service\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->categoryIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->categoryIdList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIdList');
			
			if (!is_array($this->categoryIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryIdList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategorySizeTableConfigsList_args {
	
	static $_TSPEC;
	public $categoryIdSet = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryIdSet'
			),
			2 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryIdSet'])){
				
				$this->categoryIdSet = $vals['categoryIdSet'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryIdSet = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->categoryIdSet[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryIdSet !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIdSet');
			
			if (!is_array($this->categoryIdSet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->categoryIdSet as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategorySizeTableListByPagination_args {
	
	static $_TSPEC;
	public $maxCategoryId = null;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'maxCategoryId'
			),
			2 => array(
			'var' => 'curPage'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['maxCategoryId'])){
				
				$this->maxCategoryId = $vals['maxCategoryId'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->maxCategoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('maxCategoryId');
		$xfer += $output->writeI32($this->maxCategoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getDeduceCategory_args {
	
	static $_TSPEC;
	public $hierarchyId = null;
	public $publishCategoryId = null;
	public $dateTime = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			2 => array(
			'var' => 'publishCategoryId'
			),
			3 => array(
			'var' => 'dateTime'
			),
			4 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['publishCategoryId'])){
				
				$this->publishCategoryId = $vals['publishCategoryId'];
			}
			
			
			if (isset($vals['dateTime'])){
				
				$this->dateTime = $vals['dateTime'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->publishCategoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->dateTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('publishCategoryId');
		$xfer += $output->writeI32($this->publishCategoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dateTime');
		$xfer += $output->writeI64($this->dateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getExchangedReasonListByCritra_args {
	
	static $_TSPEC;
	public $exchangedReasonParam = null;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'exchangedReasonParam'
			),
			2 => array(
			'var' => 'curPage'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['exchangedReasonParam'])){
				
				$this->exchangedReasonParam = $vals['exchangedReasonParam'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->exchangedReasonParam = new \com\vip\category\service\ExchangedReasonParam();
			$this->exchangedReasonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('exchangedReasonParam');
		
		if (!is_object($this->exchangedReasonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->exchangedReasonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getOperateGroupList_args {
	
	static $_TSPEC;
	public $operateGroupSnList = null;
	public $identifier = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operateGroupSnList'
			),
			2 => array(
			'var' => 'identifier'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operateGroupSnList'])){
				
				$this->operateGroupSnList = $vals['operateGroupSnList'];
			}
			
			
			if (isset($vals['identifier'])){
				
				$this->identifier = $vals['identifier'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->operateGroupSnList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->operateGroupSnList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->identifier); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->operateGroupSnList !== null) {
			
			$xfer += $output->writeFieldBegin('operateGroupSnList');
			
			if (!is_array($this->operateGroupSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->operateGroupSnList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->identifier !== null) {
			
			$xfer += $output->writeFieldBegin('identifier');
			$xfer += $output->writeByte($this->identifier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getQualificationByCategoryId_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $categoryName = null;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'categoryName'
			),
			3 => array(
			'var' => 'curPage'
			),
			4 => array(
			'var' => 'pageSize'
			),
			5 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->categoryName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI32($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryName !== null) {
			
			$xfer += $output->writeFieldBegin('categoryName');
			$xfer += $output->writeString($this->categoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getQualificationByCriteria_args {
	
	static $_TSPEC;
	public $qualificationId = null;
	public $qualificationName = null;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'qualificationId'
			),
			2 => array(
			'var' => 'qualificationName'
			),
			3 => array(
			'var' => 'curPage'
			),
			4 => array(
			'var' => 'pageSize'
			),
			5 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['qualificationId'])){
				
				$this->qualificationId = $vals['qualificationId'];
			}
			
			
			if (isset($vals['qualificationName'])){
				
				$this->qualificationName = $vals['qualificationName'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->qualificationId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->qualificationName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->qualificationId !== null) {
			
			$xfer += $output->writeFieldBegin('qualificationId');
			$xfer += $output->writeI64($this->qualificationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qualificationName !== null) {
			
			$xfer += $output->writeFieldBegin('qualificationName');
			$xfer += $output->writeString($this->qualificationName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getTagBySnList_args {
	
	static $_TSPEC;
	public $tagSnList = null;
	public $identifier = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagSnList'
			),
			2 => array(
			'var' => 'identifier'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagSnList'])){
				
				$this->tagSnList = $vals['tagSnList'];
			}
			
			
			if (isset($vals['identifier'])){
				
				$this->identifier = $vals['identifier'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tagSnList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->tagSnList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->identifier); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tagSnList');
		
		if (!is_array($this->tagSnList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->tagSnList as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->identifier !== null) {
			
			$xfer += $output->writeFieldBegin('identifier');
			$xfer += $output->writeByte($this->identifier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getTagGroupByGroupSn_args {
	
	static $_TSPEC;
	public $tagGroupSn = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupSn'
			),
			2 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupSn'])){
				
				$this->tagGroupSn = $vals['tagGroupSn'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->tagGroupSn); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tagGroupSn');
		$xfer += $output->writeI32($this->tagGroupSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getTagGroupByName_args {
	
	static $_TSPEC;
	public $tagGroupName = null;
	public $identifier = null;
	public $curPage = null;
	public $pageSize = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupName'
			),
			2 => array(
			'var' => 'identifier'
			),
			3 => array(
			'var' => 'curPage'
			),
			4 => array(
			'var' => 'pageSize'
			),
			5 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupName'])){
				
				$this->tagGroupName = $vals['tagGroupName'];
			}
			
			
			if (isset($vals['identifier'])){
				
				$this->identifier = $vals['identifier'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->tagGroupName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->identifier); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tagGroupName !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupName');
			$xfer += $output->writeString($this->tagGroupName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->identifier !== null) {
			
			$xfer += $output->writeFieldBegin('identifier');
			$xfer += $output->writeByte($this->identifier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getTagLogger_args {
	
	static $_TSPEC;
	public $tagGroupSn = null;
	public $tagSn = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupSn'
			),
			2 => array(
			'var' => 'tagSn'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupSn'])){
				
				$this->tagGroupSn = $vals['tagGroupSn'];
			}
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->tagGroupSn); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->tagSn); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tagGroupSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupSn');
			$xfer += $output->writeI32($this->tagGroupSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagSn');
			$xfer += $output->writeI32($this->tagSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getTagsByTagType_args {
	
	static $_TSPEC;
	public $tagType = null;
	public $curPage = null;
	public $pageSize = null;
	public $identifier = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagType'
			),
			2 => array(
			'var' => 'curPage'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'identifier'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['identifier'])){
				
				$this->identifier = $vals['identifier'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\category\service\TagType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->tagType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->identifier); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tagType');
		
		$em = new \com\vip\category\service\TagType; 
		$output->writeString($em::$__names[$this->tagType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->identifier !== null) {
			
			$xfer += $output->writeFieldBegin('identifier');
			$xfer += $output->writeByte($this->identifier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getUpdatedPublishCategories_args {
	
	static $_TSPEC;
	public $sinceUpdateTime = null;
	public $hierarchyId = null;
	public $pageNum = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sinceUpdateTime'
			),
			2 => array(
			'var' => 'hierarchyId'
			),
			3 => array(
			'var' => 'pageNum'
			),
			4 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sinceUpdateTime'])){
				
				$this->sinceUpdateTime = $vals['sinceUpdateTime'];
			}
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['pageNum'])){
				
				$this->pageNum = $vals['pageNum'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->sinceUpdateTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageNum); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sinceUpdateTime');
		$xfer += $output->writeI64($this->sinceUpdateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pageNum !== null) {
			
			$xfer += $output->writeFieldBegin('pageNum');
			$xfer += $output->writeI32($this->pageNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_insertCustomOption_args {
	
	static $_TSPEC;
	public $categoryStandard = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryStandard'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryStandard'])){
				
				$this->categoryStandard = $vals['categoryStandard'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryStandard = new \com\vip\category\service\CategoryStandard();
			$this->categoryStandard->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryStandard !== null) {
			
			$xfer += $output->writeFieldBegin('categoryStandard');
			
			if (!is_object($this->categoryStandard)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->categoryStandard->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_parseAttributesForJd_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $attrOptIdList = null;
	public $appId = null;
	public $jdStoreId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'attrOptIdList'
			),
			3 => array(
			'var' => 'appId'
			),
			4 => array(
			'var' => 'jdStoreId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['attrOptIdList'])){
				
				$this->attrOptIdList = $vals['attrOptIdList'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['jdStoreId'])){
				
				$this->jdStoreId = $vals['jdStoreId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->attrOptIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\AttrOptId();
					$elem0->read($input);
					
					$this->attrOptIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->jdStoreId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->attrOptIdList !== null) {
			
			$xfer += $output->writeFieldBegin('attrOptIdList');
			
			if (!is_array($this->attrOptIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attrOptIdList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->jdStoreId !== null) {
			
			$xfer += $output->writeFieldBegin('jdStoreId');
			$xfer += $output->writeI64($this->jdStoreId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveExchangedReason_args {
	
	static $_TSPEC;
	public $exchangedSeason = null;
	public $operator = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'exchangedSeason'
			),
			2 => array(
			'var' => 'operator'
			),
			3 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['exchangedSeason'])){
				
				$this->exchangedSeason = $vals['exchangedSeason'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->exchangedSeason = new \com\vip\category\service\ExchangedSeason();
			$this->exchangedSeason->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->operator);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('exchangedSeason');
		
		if (!is_object($this->exchangedSeason)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->exchangedSeason->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operator');
		$xfer += $output->writeString($this->operator);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveQualification_args {
	
	static $_TSPEC;
	public $qualification = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'qualification'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['qualification'])){
				
				$this->qualification = $vals['qualification'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->qualification = new \com\vip\category\service\Qualification();
			$this->qualification->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->qualification !== null) {
			
			$xfer += $output->writeFieldBegin('qualification');
			
			if (!is_object($this->qualification)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->qualification->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveTag_args {
	
	static $_TSPEC;
	public $tag = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tag'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tag'])){
				
				$this->tag = $vals['tag'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tag = new \com\vip\category\service\Tag();
			$this->tag->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tag !== null) {
			
			$xfer += $output->writeFieldBegin('tag');
			
			if (!is_object($this->tag)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tag->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveTagEx_args {
	
	static $_TSPEC;
	public $tagEx = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagEx'
			),
			2 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagEx'])){
				
				$this->tagEx = $vals['tagEx'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tagEx = new \com\vip\category\service\TagEx();
			$this->tagEx->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tagEx !== null) {
			
			$xfer += $output->writeFieldBegin('tagEx');
			
			if (!is_object($this->tagEx)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tagEx->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveTagGroup_args {
	
	static $_TSPEC;
	public $tagGroup = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroup'
			),
			2 => array(
			'var' => 'appId'
			),
			3 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroup'])){
				
				$this->tagGroup = $vals['tagGroup'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tagGroup = new \com\vip\category\service\TagGroup();
			$this->tagGroup->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tagGroup !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroup');
			
			if (!is_object($this->tagGroup)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tagGroup->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_updatedTagStatusByCriteria_args {
	
	static $_TSPEC;
	public $tagGroupSnList = null;
	public $tagSnList = null;
	public $status = null;
	public $appId = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupSnList'
			),
			2 => array(
			'var' => 'tagSnList'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'appId'
			),
			5 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupSnList'])){
				
				$this->tagGroupSnList = $vals['tagGroupSnList'];
			}
			
			
			if (isset($vals['tagSnList'])){
				
				$this->tagSnList = $vals['tagSnList'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tagGroupSnList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->tagGroupSnList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$this->tagSnList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->tagSnList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\category\service\Status::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->status = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tagGroupSnList !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupSnList');
			
			if (!is_array($this->tagGroupSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagGroupSnList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagSnList !== null) {
			
			$xfer += $output->writeFieldBegin('tagSnList');
			
			if (!is_array($this->tagSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagSnList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('status');
		
		$em = new \com\vip\category\service\Status; 
		$output->writeString($em::$__names[$this->status]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appId');
		$xfer += $output->writeString($this->appId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_addTagLog_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategoryAttributeList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\CategoryAttributes();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_batchSaveCategoryExchangedReasonList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategoryExchangedReason();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_batchSaveCategoryIdMappingList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategoryIdMapping();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_batchSaveCategoryMigratePlanList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategoryMigratePlan();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_batchSaveCategoryQualification_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategoryQualificationResult();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_batchSaveCategoryQuestionAnswerList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key1 = 0;
					$input->readI32($key1); 
					
					$val1 = null;
					
					$val1 = new \com\vip\category\service\ErrorCodeMessage();
					$val1->read($input);
					
					$this->success[$key1] = $val1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_batchSaveCategorySizeTableConfigs_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategorySizetableConfigs();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_batchSaveCategoryVersionList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategoryVersion();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_checkHasCategoryJdMapping_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_checkTagsUsed_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\TagCanUsed();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_countExchangedReasonListByCritra_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI64($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_deleteCategoryQualification_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_deleteQualificationById_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAllCategoryMigratePlan_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAttributeOptionId_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI32($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAttributeOptionsByPagination_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\AttributeOptionsReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getAttributesByPagination_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\AttributesReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getBindingCategoryByTagSn_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\TagCategoryBinding();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getCanUsedTagsByTagType_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\TagInfo();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getCategoriesByCritra_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\CategoriesQueryResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoriesByReasonId_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\CategoriesQueryResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryByName_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\Category();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getCategoryIdMappingByCriteria_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\CategoryIdMappingResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryMigratePlanByCriteria_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\CategoryMigratePlanResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryQualificationByCriteria_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\CategoryQualificationReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryQuestionAnswerListByCriteria_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\QuestionAnswerReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategoryQuestionAnswerListByIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = 0;
					$input->readI32($key0); 
					
					$val0 = null;
					
					$val0 = new \com\vip\category\service\CategoryQuestionAnswer();
					$val0->read($input);
					
					$this->success[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getCategorySizeTableConfigsList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategorySizetableConfigs();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getCategorySizeTableListByPagination_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\CategorySizetableConfigs();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getDeduceCategory_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\Category();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getExchangedReasonListByCritra_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\ExchangedSeason();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getOperateGroupList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\OperateGroup();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getQualificationByCategoryId_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\QualificationsReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getQualificationByCriteria_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\QualificationsReturn();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getTagBySnList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\TagInfo();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getTagGroupByGroupSn_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\TagGroup();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_getTagGroupByName_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\TagGroup();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getTagLogger_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\TagLogger();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getTagsByTagType_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\category\service\TagInfo();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class CategoryPublishService_getUpdatedPublishCategories_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\CategoryUpdates();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_insertCustomOption_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_parseAttributesForJd_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\CategoryAttrOptIds();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveExchangedReason_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\ExchangedSeason();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveQualification_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\Qualification();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveTag_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\TagResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveTagEx_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\TagResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_saveTagGroup_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\category\service\TagGroupResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryPublishService_updatedTagStatusByCriteria_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\category\service\TagUpdatedResult();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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