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
 * DescribeMetricRecords请求参数结构体
 *
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method array getMetrics() 获取指标列表
 * @method void setMetrics(array $Metrics) 设置指标列表
 * @method array getGroupBy() 获取聚合维度
 * @method void setGroupBy(array $GroupBy) 设置聚合维度
 * @method OrderBy getOrderBy() 获取排序
 * @method void setOrderBy(OrderBy $OrderBy) 设置排序
 * @method string getInstanceId() 获取业务系统ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统ID
 * @method integer getLimit() 获取每页大小
 * @method void setLimit(integer $Limit) 设置每页大小
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method integer getOffset() 获取分页起始点
 * @method void setOffset(integer $Offset) 设置分页起始点
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method string getBusinessName() 获取业务名称（默认值：taw）
 * @method void setBusinessName(string $BusinessName) 设置业务名称（默认值：taw）
 * @method integer getPageIndex() 获取页码
 * @method void setPageIndex(integer $PageIndex) 设置页码
 * @method integer getPageSize() 获取页长
 * @method void setPageSize(integer $PageSize) 设置页长
 * @method array getOrFilters() 获取Or过滤条件
 * @method void setOrFilters(array $OrFilters) 设置Or过滤条件
 * @method string getType() 获取数据来源
 * @method void setType(string $Type) 设置数据来源
 */
class DescribeMetricRecordsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var array 指标列表
     */
    public $Metrics;

    /**
     * @var array 聚合维度
     */
    public $GroupBy;

    /**
     * @var OrderBy 排序
     */
    public $OrderBy;

    /**
     * @var string 业务系统ID
     */
    public $InstanceId;

    /**
     * @var integer 每页大小
     */
    public $Limit;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var integer 分页起始点
     */
    public $Offset;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var string 业务名称（默认值：taw）
     */
    public $BusinessName;

    /**
     * @var integer 页码
     */
    public $PageIndex;

    /**
     * @var integer 页长
     */
    public $PageSize;

    /**
     * @var array Or过滤条件
     */
    public $OrFilters;

    /**
     * @var string 数据来源
     */
    public $Type;

    /**
     * @param array $Filters 过滤条件
     * @param array $Metrics 指标列表
     * @param array $GroupBy 聚合维度
     * @param OrderBy $OrderBy 排序
     * @param string $InstanceId 业务系统ID
     * @param integer $Limit 每页大小
     * @param integer $StartTime 开始时间
     * @param integer $Offset 分页起始点
     * @param integer $EndTime 结束时间
     * @param string $BusinessName 业务名称（默认值：taw）
     * @param integer $PageIndex 页码
     * @param integer $PageSize 页长
     * @param array $OrFilters Or过滤条件
     * @param string $Type 数据来源
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new QueryMetricItem();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrFilters",$param) and $param["OrFilters"] !== null) {
            $this->OrFilters = [];
            foreach ($param["OrFilters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->OrFilters, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
