<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActionStat File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ItemActionStat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ItemActionStat extends Entity
{
    /**
    * Gets the actionCount
    *
    * @return int The actionCount
    */
    public function getActionCount()
    {
        if (array_key_exists("actionCount", $this->_propDict)) {
            return $this->_propDict["actionCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionCount
    *
    * @param int $val The value of the actionCount
    *
    * @return ItemActionStat
    */
    public function setActionCount($val)
    {
        $this->_propDict["actionCount"] = $val;
        return $this;
    }
    /**
    * Gets the actorCount
    *
    * @return int The actorCount
    */
    public function getActorCount()
    {
        if (array_key_exists("actorCount", $this->_propDict)) {
            return $this->_propDict["actorCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actorCount
    *
    * @param int $val The value of the actorCount
    *
    * @return ItemActionStat
    */
    public function setActorCount($val)
    {
        $this->_propDict["actorCount"] = $val;
        return $this;
    }
}
