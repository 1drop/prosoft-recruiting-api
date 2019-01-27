<?php
/**
 * MitarbeiterWerdegangDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Prosoft\RecruitingApi\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * prosoftrecruiting API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.3
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
namespace Prosoft\RecruitingApi\Api\Dto;

use ArrayAccess;
use Prosoft\RecruitingApi\Api\ObjectSerializer;

/**
 * MitarbeiterWerdegangDto Class Doc Comment
 *
 * @category    Class
 * @description Die Daten des Werdegangs eines Mitarbeiters
 * @package     Prosoft\RecruitingApi\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MitarbeiterWerdegangDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'MitarbeiterWerdegangDto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'abschluss'     => '\Prosoft\RecruitingApi\Api\Dto\KatAbschlussLookupDto',
        'bei'           => 'string',
        'bis'           => '\DateTime',
        'details'       => 'string',
        'parent_entity' => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'qualifikation' => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'titel'         => 'string',
        'typ'           => '\Prosoft\RecruitingApi\Api\Dto\KatWerdegangTypLookupDto',
        'von'           => '\DateTime',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'abschluss'     => null,
        'bei'           => null,
        'bis'           => 'date-time',
        'details'       => null,
        'parent_entity' => null,
        'qualifikation' => null,
        'titel'         => null,
        'typ'           => null,
        'von'           => 'date-time',
    ];

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
        'abschluss'     => 'Abschluss',
        'bei'           => 'Bei',
        'bis'           => 'Bis',
        'details'       => 'Details',
        'parent_entity' => 'ParentEntity',
        'qualifikation' => 'Qualifikation',
        'titel'         => 'Titel',
        'typ'           => 'Typ',
        'von'           => 'Von',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abschluss'     => 'setAbschluss',
        'bei'           => 'setBei',
        'bis'           => 'setBis',
        'details'       => 'setDetails',
        'parent_entity' => 'setParentEntity',
        'qualifikation' => 'setQualifikation',
        'titel'         => 'setTitel',
        'typ'           => 'setTyp',
        'von'           => 'setVon',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abschluss'     => 'getAbschluss',
        'bei'           => 'getBei',
        'bis'           => 'getBis',
        'details'       => 'getDetails',
        'parent_entity' => 'getParentEntity',
        'qualifikation' => 'getQualifikation',
        'titel'         => 'getTitel',
        'typ'           => 'getTyp',
        'von'           => 'getVon',
    ];

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
        $this->container['abschluss'] = isset($data['abschluss']) ? $data['abschluss'] : null;
        $this->container['bei'] = isset($data['bei']) ? $data['bei'] : null;
        $this->container['bis'] = isset($data['bis']) ? $data['bis'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['parent_entity'] = isset($data['parent_entity']) ? $data['parent_entity'] : null;
        $this->container['qualifikation'] = isset($data['qualifikation']) ? $data['qualifikation'] : null;
        $this->container['titel'] = isset($data['titel']) ? $data['titel'] : null;
        $this->container['typ'] = isset($data['typ']) ? $data['typ'] : null;
        $this->container['von'] = isset($data['von']) ? $data['von'] : null;
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
        return true;
    }

    /**
     * Gets abschluss
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\KatAbschlussLookupDto
     */
    public function getAbschluss()
    {
        return $this->container['abschluss'];
    }

    /**
     * Sets abschluss
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\KatAbschlussLookupDto $abschluss abschluss
     *
     * @return $this
     */
    public function setAbschluss($abschluss)
    {
        $this->container['abschluss'] = $abschluss;

        return $this;
    }

    /**
     * Gets bei
     *
     * @return string
     */
    public function getBei()
    {
        return $this->container['bei'];
    }

    /**
     * Sets bei
     *
     * @param string $bei Die Einrichtung des Werdegangs
     *
     * @return $this
     */
    public function setBei($bei)
    {
        $this->container['bei'] = $bei;

        return $this;
    }

    /**
     * Gets bis
     *
     * @return \DateTime
     */
    public function getBis()
    {
        return $this->container['bis'];
    }

    /**
     * Sets bis
     *
     * @param \DateTime $bis Der Endzeitpunkt des Werdegangs
     *
     * @return $this
     */
    public function setBis($bis)
    {
        $this->container['bis'] = $bis;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details Die Details zum Werdegang
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets parent_entity
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getParentEntity()
    {
        return $this->container['parent_entity'];
    }

    /**
     * Sets parent_entity
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $parent_entity parent_entity
     *
     * @return $this
     */
    public function setParentEntity($parent_entity)
    {
        $this->container['parent_entity'] = $parent_entity;

        return $this;
    }

    /**
     * Gets qualifikation
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getQualifikation()
    {
        return $this->container['qualifikation'];
    }

    /**
     * Sets qualifikation
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $qualifikation qualifikation
     *
     * @return $this
     */
    public function setQualifikation($qualifikation)
    {
        $this->container['qualifikation'] = $qualifikation;

        return $this;
    }

    /**
     * Gets titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->container['titel'];
    }

    /**
     * Sets titel
     *
     * @param string $titel Der Titel des Werdegangs
     *
     * @return $this
     */
    public function setTitel($titel)
    {
        $this->container['titel'] = $titel;

        return $this;
    }

    /**
     * Gets typ
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\KatWerdegangTypLookupDto
     */
    public function getTyp()
    {
        return $this->container['typ'];
    }

    /**
     * Sets typ
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\KatWerdegangTypLookupDto $typ typ
     *
     * @return $this
     */
    public function setTyp($typ)
    {
        $this->container['typ'] = $typ;

        return $this;
    }

    /**
     * Gets von
     *
     * @return \DateTime
     */
    public function getVon()
    {
        return $this->container['von'];
    }

    /**
     * Sets von
     *
     * @param \DateTime $von Der Startzeitpunkt des Werdegangs
     *
     * @return $this
     */
    public function setVon($von)
    {
        $this->container['von'] = $von;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
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