<?php
/**
 * MitarbeiterSkillReadOnlyDto
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
 * MitarbeiterSkillReadOnlyDto Class Doc Comment
 *
 * @category    Class
 * @description Implementiert Methoden und Eigenschaften für die öffentlichen MitarbeiterSkill-Daten
 * @package     Prosoft\RecruitingApi\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MitarbeiterSkillReadOnlyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'MitarbeiterSkillReadOnlyDto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'art'         => 'int',
        'auspraegung' => 'int',
        'skill'       => '\Prosoft\RecruitingApi\Api\Dto\KatSkillLookupDto',
        'object_uuid' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'art'         => 'int32',
        'auspraegung' => 'int32',
        'skill'       => null,
        'object_uuid' => 'uuid',
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
        'art'         => 'Art',
        'auspraegung' => 'Auspraegung',
        'skill'       => 'Skill',
        'object_uuid' => 'ObjectUuid',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'art'         => 'setArt',
        'auspraegung' => 'setAuspraegung',
        'skill'       => 'setSkill',
        'object_uuid' => 'setObjectUuid',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'art'         => 'getArt',
        'auspraegung' => 'getAuspraegung',
        'skill'       => 'getSkill',
        'object_uuid' => 'getObjectUuid',
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

    const ART_1 = 1;
    const ART_2 = 2;
    const AUSPRAEGUNG_0 = 0;
    const AUSPRAEGUNG_1 = 1;
    const AUSPRAEGUNG_2 = 2;
    const AUSPRAEGUNG_3 = 3;
    const AUSPRAEGUNG_4 = 4;
    const AUSPRAEGUNG_5 = 5;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getArtAllowableValues()
    {
        return [
            self::ART_1,
            self::ART_2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuspraegungAllowableValues()
    {
        return [
            self::AUSPRAEGUNG_0,
            self::AUSPRAEGUNG_1,
            self::AUSPRAEGUNG_2,
            self::AUSPRAEGUNG_3,
            self::AUSPRAEGUNG_4,
            self::AUSPRAEGUNG_5,
        ];
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
        $this->container['art'] = isset($data['art']) ? $data['art'] : null;
        $this->container['auspraegung'] = isset($data['auspraegung']) ? $data['auspraegung'] : null;
        $this->container['skill'] = isset($data['skill']) ? $data['skill'] : null;
        $this->container['object_uuid'] = isset($data['object_uuid']) ? $data['object_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getArtAllowableValues();
        if (!in_array($this->container['art'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'art', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAuspraegungAllowableValues();
        if (!in_array($this->container['auspraegung'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auspraegung', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
        $allowedValues = $this->getArtAllowableValues();
        if (!in_array($this->container['art'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getAuspraegungAllowableValues();
        if (!in_array($this->container['auspraegung'], $allowedValues)) {
            return false;
        }
        return true;
    }

    /**
     * Gets art
     *
     * @return int
     */
    public function getArt()
    {
        return $this->container['art'];
    }

    /**
     * Sets art
     *
     * @param int $art Holt oder setzt die Skillart.
     *
     * @return $this
     */
    public function setArt($art)
    {
        $allowedValues = $this->getArtAllowableValues();
        if (!is_null($art) && !in_array($art, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'art', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['art'] = $art;

        return $this;
    }

    /**
     * Gets auspraegung
     *
     * @return int
     */
    public function getAuspraegung()
    {
        return $this->container['auspraegung'];
    }

    /**
     * Sets auspraegung
     *
     * @param int $auspraegung Holt oder setzt die Ausprägung.
     *
     * @return $this
     */
    public function setAuspraegung($auspraegung)
    {
        $allowedValues = $this->getAuspraegungAllowableValues();
        if (!is_null($auspraegung) && !in_array($auspraegung, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auspraegung', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auspraegung'] = $auspraegung;

        return $this;
    }

    /**
     * Gets skill
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\KatSkillLookupDto
     */
    public function getSkill()
    {
        return $this->container['skill'];
    }

    /**
     * Sets skill
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\KatSkillLookupDto $skill skill
     *
     * @return $this
     */
    public function setSkill($skill)
    {
        $this->container['skill'] = $skill;

        return $this;
    }

    /**
     * Gets object_uuid
     *
     * @return string
     */
    public function getObjectUuid()
    {
        return $this->container['object_uuid'];
    }

    /**
     * Sets object_uuid
     *
     * @param string $object_uuid Die Object-Uuid
     *
     * @return $this
     */
    public function setObjectUuid($object_uuid)
    {
        $this->container['object_uuid'] = $object_uuid;

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