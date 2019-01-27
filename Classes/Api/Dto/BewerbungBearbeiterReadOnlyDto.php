<?php
/**
 * BewerbungBearbeiterReadOnlyDto
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
 * BewerbungBearbeiterReadOnlyDto Class Doc Comment
 *
 * @category    Class
 * @description Implementiert Methoden und Eigenschaften für die öffentlichen BewerbungsBearbeiter-Daten
 * @package     Prosoft\RecruitingApi\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BewerbungBearbeiterReadOnlyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'BewerbungBearbeiterReadOnlyDto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'benutzer'       => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'bezeichnung'    => 'string',
        'gruppe'         => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'gruppe_mandant' => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'object_uuid'    => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'benutzer'       => null,
        'bezeichnung'    => null,
        'gruppe'         => null,
        'gruppe_mandant' => null,
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
        'bezeichnung'    => 'Bezeichnung',
        'gruppe'         => 'Gruppe',
        'gruppe_mandant' => 'GruppeMandant',
        'object_uuid'    => 'ObjectUuid',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'benutzer'       => 'setBenutzer',
        'bezeichnung'    => 'setBezeichnung',
        'gruppe'         => 'setGruppe',
        'gruppe_mandant' => 'setGruppeMandant',
        'object_uuid'    => 'setObjectUuid',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'benutzer'       => 'getBenutzer',
        'bezeichnung'    => 'getBezeichnung',
        'gruppe'         => 'getGruppe',
        'gruppe_mandant' => 'getGruppeMandant',
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
        $this->container['bezeichnung'] = isset($data['bezeichnung']) ? $data['bezeichnung'] : null;
        $this->container['gruppe'] = isset($data['gruppe']) ? $data['gruppe'] : null;
        $this->container['gruppe_mandant'] = isset($data['gruppe_mandant']) ? $data['gruppe_mandant'] : null;
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
     * Gets bezeichnung
     *
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->container['bezeichnung'];
    }

    /**
     * Sets bezeichnung
     *
     * @param string $bezeichnung Holt oder setzt die Bezeichnung
     *
     * @return $this
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->container['bezeichnung'] = $bezeichnung;

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
