<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementUserRightsLocalUserOrGroup File
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
* DeviceManagementUserRightsLocalUserOrGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementUserRightsLocalUserOrGroup extends Entity
{
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return DeviceManagementUserRightsLocalUserOrGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The value of the description
    *
    * @return DeviceManagementUserRightsLocalUserOrGroup
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the securityIdentifier
    *
    * @return string The securityIdentifier
    */
    public function getSecurityIdentifier()
    {
        if (array_key_exists("securityIdentifier", $this->_propDict)) {
            return $this->_propDict["securityIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the securityIdentifier
    *
    * @param string $val The value of the securityIdentifier
    *
    * @return DeviceManagementUserRightsLocalUserOrGroup
    */
    public function setSecurityIdentifier($val)
    {
        $this->_propDict["securityIdentifier"] = $val;
        return $this;
    }
}