<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApmInstance请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 * @method string getName() 获取业务系统名
 * @method void setName(string $Name) 设置业务系统名
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getDescription() 获取业务系统详情
 * @method void setDescription(string $Description) 设置业务系统详情
 * @method integer getTraceDuration() 获取Trace数据保存时长
 * @method void setTraceDuration(integer $TraceDuration) 设置Trace数据保存时长
 * @method boolean getOpenBilling() 获取是否开启计费
 * @method void setOpenBilling(boolean $OpenBilling) 设置是否开启计费
 * @method integer getSpanDailyCounters() 获取业务系统上报额度
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置业务系统上报额度
 * @method integer getErrRateThreshold() 获取错误率阈值
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置错误率阈值
 * @method integer getSampleRate() 获取采样率
 * @method void setSampleRate(integer $SampleRate) 设置采样率
 * @method integer getErrorSample() 获取是否开启错误采样 0 关 1 开
 * @method void setErrorSample(integer $ErrorSample) 设置是否开启错误采样 0 关 1 开
 * @method integer getSlowRequestSavedThreshold() 获取慢请求阈值
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) 设置慢请求阈值
 * @method integer getIsRelatedLog() 获取是否开启日志功能 0 关 1 开
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置是否开启日志功能 0 关 1 开
 * @method string getLogRegion() 获取日志地域
 * @method void setLogRegion(string $LogRegion) 设置日志地域
 * @method string getLogTopicID() 获取CLS日志主题ID | ES 索引名
 * @method void setLogTopicID(string $LogTopicID) 设置CLS日志主题ID | ES 索引名
 * @method string getLogSet() 获取CLS日志集 | ES集群ID
 * @method void setLogSet(string $LogSet) 设置CLS日志集 | ES集群ID
 * @method string getLogSource() 获取CLS | ES
 * @method void setLogSource(string $LogSource) 设置CLS | ES
 * @method array getCustomShowTags() 获取用户自定义展示标签列表
 * @method void setCustomShowTags(array $CustomShowTags) 设置用户自定义展示标签列表
 * @method integer getPayMode() 获取修改计费模式
1为预付费
0为按量付费
 * @method void setPayMode(integer $PayMode) 设置修改计费模式
1为预付费
0为按量付费
 * @method integer getResponseDurationWarningThreshold() 获取响应时间满意阈值
 * @method void setResponseDurationWarningThreshold(integer $ResponseDurationWarningThreshold) 设置响应时间满意阈值
 * @method integer getFree() 获取（0=付费版；1=tsf受限免费版；2=免费版）
 * @method void setFree(integer $Free) 设置（0=付费版；1=tsf受限免费版；2=免费版）
 * @method integer getIsRelatedDashboard() 获取是否关联dashboard： 0 关 1 开
 * @method void setIsRelatedDashboard(integer $IsRelatedDashboard) 设置是否关联dashboard： 0 关 1 开
 * @method string getDashboardTopicID() 获取dashboard ID
 * @method void setDashboardTopicID(string $DashboardTopicID) 设置dashboard ID
 * @method integer getIsSqlInjectionAnalysis() 获取是否开启SQL注入检测
 * @method void setIsSqlInjectionAnalysis(integer $IsSqlInjectionAnalysis) 设置是否开启SQL注入检测
 * @method integer getIsInstrumentationVulnerabilityScan() 获取是否开启组件漏洞检测
 * @method void setIsInstrumentationVulnerabilityScan(integer $IsInstrumentationVulnerabilityScan) 设置是否开启组件漏洞检测
 */
class ModifyApmInstanceRequest extends AbstractModel
{
    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @var string 业务系统名
     */
    public $Name;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 业务系统详情
     */
    public $Description;

    /**
     * @var integer Trace数据保存时长
     */
    public $TraceDuration;

    /**
     * @var boolean 是否开启计费
     */
    public $OpenBilling;

    /**
     * @var integer 业务系统上报额度
     */
    public $SpanDailyCounters;

    /**
     * @var integer 错误率阈值
     */
    public $ErrRateThreshold;

    /**
     * @var integer 采样率
     */
    public $SampleRate;

    /**
     * @var integer 是否开启错误采样 0 关 1 开
     */
    public $ErrorSample;

    /**
     * @var integer 慢请求阈值
     */
    public $SlowRequestSavedThreshold;

    /**
     * @var integer 是否开启日志功能 0 关 1 开
     */
    public $IsRelatedLog;

    /**
     * @var string 日志地域
     */
    public $LogRegion;

    /**
     * @var string CLS日志主题ID | ES 索引名
     */
    public $LogTopicID;

    /**
     * @var string CLS日志集 | ES集群ID
     */
    public $LogSet;

    /**
     * @var string CLS | ES
     */
    public $LogSource;

    /**
     * @var array 用户自定义展示标签列表
     */
    public $CustomShowTags;

    /**
     * @var integer 修改计费模式
1为预付费
0为按量付费
     */
    public $PayMode;

    /**
     * @var integer 响应时间满意阈值
     */
    public $ResponseDurationWarningThreshold;

    /**
     * @var integer （0=付费版；1=tsf受限免费版；2=免费版）
     */
    public $Free;

    /**
     * @var integer 是否关联dashboard： 0 关 1 开
     */
    public $IsRelatedDashboard;

    /**
     * @var string dashboard ID
     */
    public $DashboardTopicID;

    /**
     * @var integer 是否开启SQL注入检测
     */
    public $IsSqlInjectionAnalysis;

    /**
     * @var integer 是否开启组件漏洞检测
     */
    public $IsInstrumentationVulnerabilityScan;

    /**
     * @param string $InstanceId 业务系统ID
     * @param string $Name 业务系统名
     * @param array $Tags 标签列表
     * @param string $Description 业务系统详情
     * @param integer $TraceDuration Trace数据保存时长
     * @param boolean $OpenBilling 是否开启计费
     * @param integer $SpanDailyCounters 业务系统上报额度
     * @param integer $ErrRateThreshold 错误率阈值
     * @param integer $SampleRate 采样率
     * @param integer $ErrorSample 是否开启错误采样 0 关 1 开
     * @param integer $SlowRequestSavedThreshold 慢请求阈值
     * @param integer $IsRelatedLog 是否开启日志功能 0 关 1 开
     * @param string $LogRegion 日志地域
     * @param string $LogTopicID CLS日志主题ID | ES 索引名
     * @param string $LogSet CLS日志集 | ES集群ID
     * @param string $LogSource CLS | ES
     * @param array $CustomShowTags 用户自定义展示标签列表
     * @param integer $PayMode 修改计费模式
1为预付费
0为按量付费
     * @param integer $ResponseDurationWarningThreshold 响应时间满意阈值
     * @param integer $Free （0=付费版；1=tsf受限免费版；2=免费版）
     * @param integer $IsRelatedDashboard 是否关联dashboard： 0 关 1 开
     * @param string $DashboardTopicID dashboard ID
     * @param integer $IsSqlInjectionAnalysis 是否开启SQL注入检测
     * @param integer $IsInstrumentationVulnerabilityScan 是否开启组件漏洞检测
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("OpenBilling",$param) and $param["OpenBilling"] !== null) {
            $this->OpenBilling = $param["OpenBilling"];
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ErrorSample",$param) and $param["ErrorSample"] !== null) {
            $this->ErrorSample = $param["ErrorSample"];
        }

        if (array_key_exists("SlowRequestSavedThreshold",$param) and $param["SlowRequestSavedThreshold"] !== null) {
            $this->SlowRequestSavedThreshold = $param["SlowRequestSavedThreshold"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("CustomShowTags",$param) and $param["CustomShowTags"] !== null) {
            $this->CustomShowTags = $param["CustomShowTags"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResponseDurationWarningThreshold",$param) and $param["ResponseDurationWarningThreshold"] !== null) {
            $this->ResponseDurationWarningThreshold = $param["ResponseDurationWarningThreshold"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }

        if (array_key_exists("IsRelatedDashboard",$param) and $param["IsRelatedDashboard"] !== null) {
            $this->IsRelatedDashboard = $param["IsRelatedDashboard"];
        }

        if (array_key_exists("DashboardTopicID",$param) and $param["DashboardTopicID"] !== null) {
            $this->DashboardTopicID = $param["DashboardTopicID"];
        }

        if (array_key_exists("IsSqlInjectionAnalysis",$param) and $param["IsSqlInjectionAnalysis"] !== null) {
            $this->IsSqlInjectionAnalysis = $param["IsSqlInjectionAnalysis"];
        }

        if (array_key_exists("IsInstrumentationVulnerabilityScan",$param) and $param["IsInstrumentationVulnerabilityScan"] !== null) {
            $this->IsInstrumentationVulnerabilityScan = $param["IsInstrumentationVulnerabilityScan"];
        }
    }
}
