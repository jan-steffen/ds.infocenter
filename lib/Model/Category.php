<?php
/**
 * Category
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infocenter-TEST
 *
 * Infocenter-TEST
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Category Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Category implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_winter' => 'bool',
'parent' => '\Swagger\Client\Model\AdministrativeAreaAddressLabels',
'icons' => '\Swagger\Client\Model\CategoryIcons[]',
'type' => 'string',
'id' => 'string',
'identifier' => 'string',
'datasource' => 'string',
'data_governance' => '\Swagger\Client\Model\AdministrativeAreaAddressImageDataGovernance',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_winter' => null,
'parent' => null,
'icons' => null,
'type' => null,
'id' => null,
'identifier' => null,
'datasource' => null,
'data_governance' => null,
'name' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_winter' => 'isWinter',
'parent' => 'parent',
'icons' => 'icons',
'type' => 'type',
'id' => '@id',
'identifier' => 'identifier',
'datasource' => 'datasource',
'data_governance' => 'dataGovernance',
'name' => 'name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_winter' => 'setIsWinter',
'parent' => 'setParent',
'icons' => 'setIcons',
'type' => 'setType',
'id' => 'setId',
'identifier' => 'setIdentifier',
'datasource' => 'setDatasource',
'data_governance' => 'setDataGovernance',
'name' => 'setName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_winter' => 'getIsWinter',
'parent' => 'getParent',
'icons' => 'getIcons',
'type' => 'getType',
'id' => 'getId',
'identifier' => 'getIdentifier',
'datasource' => 'getDatasource',
'data_governance' => 'getDataGovernance',
'name' => 'getName'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_winter'] = isset($data['is_winter']) ? $data['is_winter'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['icons'] = isset($data['icons']) ? $data['icons'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['datasource'] = isset($data['datasource']) ? $data['datasource'] : null;
        $this->container['data_governance'] = isset($data['data_governance']) ? $data['data_governance'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets is_winter
     *
     * @return bool
     */
    public function getIsWinter()
    {
        return $this->container['is_winter'];
    }

    /**
     * Sets is_winter
     *
     * @param bool $is_winter is_winter
     *
     * @return $this
     */
    public function setIsWinter($is_winter)
    {
        $this->container['is_winter'] = $is_winter;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Swagger\Client\Model\AdministrativeAreaAddressLabels
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Swagger\Client\Model\AdministrativeAreaAddressLabels $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets icons
     *
     * @return \Swagger\Client\Model\CategoryIcons[]
     */
    public function getIcons()
    {
        return $this->container['icons'];
    }

    /**
     * Sets icons
     *
     * @param \Swagger\Client\Model\CategoryIcons[] $icons icons
     *
     * @return $this
     */
    public function setIcons($icons)
    {
        $this->container['icons'] = $icons;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets datasource
     *
     * @return string
     */
    public function getDatasource()
    {
        return $this->container['datasource'];
    }

    /**
     * Sets datasource
     *
     * @param string $datasource datasource
     *
     * @return $this
     */
    public function setDatasource($datasource)
    {
        $this->container['datasource'] = $datasource;

        return $this;
    }

    /**
     * Gets data_governance
     *
     * @return \Swagger\Client\Model\AdministrativeAreaAddressImageDataGovernance
     */
    public function getDataGovernance()
    {
        return $this->container['data_governance'];
    }

    /**
     * Sets data_governance
     *
     * @param \Swagger\Client\Model\AdministrativeAreaAddressImageDataGovernance $data_governance data_governance
     *
     * @return $this
     */
    public function setDataGovernance($data_governance)
    {
        $this->container['data_governance'] = $data_governance;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
