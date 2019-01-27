<?php
/**
 * AufgabeZuweisungReadOnlyDto
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
 * AufgabeZuweisungReadOnlyDto Class Doc Comment
 *
 * @category    Class
 * @description Implementiert Methoden und Eigenschaften für die öffentlichen AufgabeZuweisung-Daten
 * @package     Prosoft\RecruitingApi\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AufgabeZuweisungReadOnlyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AufgabeZuweisungReadOnlyDto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'benutzer'       => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'gruppe'         => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'gruppe_mandant' => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'korrelation'    => 'int',
        'object_uuid'    => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'benutzer'       => null,
        'gruppe'         => null,
        'gruppe_mandant' => null,
        'korrelation'    => 'int32',
        'object_uuid'    => 'uuid',
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
        'benutzer'       => 'Benutzer',
        'gruppe'         => 'Gruppe',
        'gruppe_mandant' => 'GruppeMandant',
        'korrelation'    => 'Korrelation',
        'object_uuid'    => 'ObjectUuid',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benutzer'       => 'setBenutzer',
        'gruppe'         => 'setGruppe',
        'gruppe_mandant' => 'setGruppeMandant',
        'korrelation'    => 'setKorrelation',
        'object_uuid'    => 'setObjectUuid',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benutzer'       => 'getBenutzer',
        'gruppe'         => 'getGruppe',
        'gruppe_mandant' => 'getGruppeMandant',
        'korrelation'    => 'getKorrelation',
        'object_uuid'    => 'getObjectUuid',
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

    const KORRELATION_1 = 1;
    const KORRELATION_2 = 2;
    const KORRELATION_3 = 3;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKorrelationAllowableValues()
    {
        return [
            self::KORRELATION_1,
            self::KORRELATION_2,
            self::KORRELATION_3,
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
        $this->container['benutzer'] = isset($data['benutzer']) ? $data['benutzer'] : null;
        $this->container['gruppe'] = isset($data['gruppe']) ? $data['gruppe'] : null;
        $this->container['gruppe_mandant'] = isset($data['gruppe_mandant']) ? $data['gruppe_mandant'] : null;
        $this->container['korrelation'] = isset($data['korrelation']) ? $data['korrelation'] : null;
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

        $allowedValues = $this->getKorrelationAllowableValues();
        if (!in_array($this->container['korrelation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'korrelation', must be one of '%s'",
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
        $allowedValues = $this->getKorrelationAllowableValues();
        if (!in_array($this->container['korrelation'], $allowedValues)) {
            return false;
        }
        return true;
    }

    /**
     * Gets benutzer
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getBenutzer()
    {
        return $this->container['benutzer'];
    }

    /**
     * Sets benutzer
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $benutzer benutzer
     *
     * @return $this
     */
    public function setBenutzer($benutzer)
    {
        $this->container['benutzer'] = $benutzer;

        return $this;
    }

    /**
     * Gets gruppe
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getGruppe()
    {
        return $this->container['gruppe'];
    }

    /**
     * Sets gruppe
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $gruppe gruppe
     *
     * @return $this
     */
    public function setGruppe($gruppe)
    {
        $this->container['gruppe'] = $gruppe;

        return $this;
    }

    /**
     * Gets gruppe_mandant
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getGruppeMandant()
    {
        return $this->container['gruppe_mandant'];
    }

    /**
     * Sets gruppe_mandant
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $gruppe_mandant gruppe_mandant
     *
     * @return $this
     */
    public function setGruppeMandant($gruppe_mandant)
    {
        $this->container['gruppe_mandant'] = $gruppe_mandant;

        return $this;
    }

    /**
     * Gets korrelation
     *
     * @return int
     */
    public function getKorrelation()
    {
        return $this->container['korrelation'];
    }

    /**
     * Sets korrelation
     *
     * @param int $korrelation Holt oder setzt die Art der Zuweisung
     *
     * @return $this
     */
    public function setKorrelation($korrelation)
    {
        $allowedValues = $this->getKorrelationAllowableValues();
        if (!is_null($korrelation) && !in_array($korrelation, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'korrelation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['korrelation'] = $korrelation;

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
