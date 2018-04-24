<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method PerformanceMonitorSet getMaster() 获取主节点性能监控数据
 * @method void setMaster(PerformanceMonitorSet $Master) 设置主节点性能监控数据
 * @method PerformanceMonitorSet getSlave1() 获取备机1性能监控数据
 * @method void setSlave1(PerformanceMonitorSet $Slave1) 设置备机1性能监控数据
 * @method PerformanceMonitorSet getSlave2() 获取备机2性能监控数据，如果实例是一主一从，则没有该字段
 * @method void setSlave2(PerformanceMonitorSet $Slave2) 设置备机2性能监控数据，如果实例是一主一从，则没有该字段
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeDBPerformanceDetails返回参数结构体
 */
class DescribeDBPerformanceDetailsResponse extends AbstractModel
{
    /**
     * @var PerformanceMonitorSet 主节点性能监控数据
     */
    public $Master;

    /**
     * @var PerformanceMonitorSet 备机1性能监控数据
     */
    public $Slave1;

    /**
     * @var PerformanceMonitorSet 备机2性能监控数据，如果实例是一主一从，则没有该字段
     */
    public $Slave2;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param PerformanceMonitorSet $Master 主节点性能监控数据
     * @param PerformanceMonitorSet $Slave1 备机1性能监控数据
     * @param PerformanceMonitorSet $Slave2 备机2性能监控数据，如果实例是一主一从，则没有该字段
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Master",$param) and $param["Master"] !== null) {
            $this->Master = new PerformanceMonitorSet();
            $this->Master->deserialize($param["Master"]);
        }

        if (array_key_exists("Slave1",$param) and $param["Slave1"] !== null) {
            $this->Slave1 = new PerformanceMonitorSet();
            $this->Slave1->deserialize($param["Slave1"]);
        }

        if (array_key_exists("Slave2",$param) and $param["Slave2"] !== null) {
            $this->Slave2 = new PerformanceMonitorSet();
            $this->Slave2->deserialize($param["Slave2"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}