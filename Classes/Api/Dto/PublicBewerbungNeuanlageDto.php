<?php
/**
 * PublicBewerbungNeuanlageDto
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
 * PublicBewerbungNeuanlageDto Class Doc Comment
 *
 * @category    Class
 * @description Die Daten zur Neuanage einer Bewerbung
 * @package     Prosoft\RecruitingApi\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PublicBewerbungNeuanlageDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PublicBewerbungNeuanlageDto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bewerbung'   => '\Prosoft\RecruitingApi\Api\Dto\BewerbungDto',
        'mitarbeiter' => '\Prosoft\RecruitingApi\Api\Dto\MitarbeiterDto',
        'skills'      => '\Prosoft\RecruitingApi\Api\Dto\MitarbeiterNeuanlageSkillDto[]',
        'werdegaenge' => '\Prosoft\RecruitingApi\Api\Dto\MitarbeiterWerdegangDto[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bewerbung'   => null,
        'mitarbeiter' => null,
        'skills'      => null,
        'werdegaenge' => null,
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
        'bewerbung'   => 'Bewerbung',
        'mitarbeiter' => 'Mitarbeiter',
        'skills'      => 'Skills',
        'werdegaenge' => 'Werdegaenge',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bewerbung'   => 'setBewerbung',
        'mitarbeiter' => 'setMitarbeiter',
        'skills'      => 'setSkills',
        'werdegaenge' => 'setWerdegaenge',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bewerbung'   => 'getBewerbung',
        'mitarbeiter' => 'getMitarbeiter',
        'skills'      => 'getSkills',
        'werdegaenge' => 'getWerdegaenge',
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
        $this->container['bewerbung'] = isset($data['bewerbung']) ? $data['bewerbung'] : null;
        $this->container['mitarbeiter'] = isset($data['mitarbeiter']) ? $data['mitarbeiter'] : null;
        $this->container['skills'] = isset($data['skills']) ? $data['skills'] : null;
        $this->container['werdegaenge'] = isset($data['werdegaenge']) ? $data['werdegaenge'] : null;
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
     * Gets bewerbung
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\BewerbungDto
     */
    public function getBewerbung()
    {
        return $this->container['bewerbung'];
    }

    /**
     * Sets bewerbung
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\BewerbungDto $bewerbung bewerbung
     *
     * @return $this
     */
    public function setBewerbung($bewerbung)
    {
        $this->container['bewerbung'] = $bewerbung;

        return $this;
    }

    /**
     * Gets mitarbeiter
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\MitarbeiterDto
     */
    public function getMitarbeiter()
    {
        return $this->container['mitarbeiter'];
    }

    /**
     * Sets mitarbeiter
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\MitarbeiterDto $mitarbeiter mitarbeiter
     *
     * @return $this
     */
    public function setMitarbeiter($mitarbeiter)
    {
        $this->container['mitarbeiter'] = $mitarbeiter;

        return $this;
    }

    /**
     * Gets skills
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\MitarbeiterNeuanlageSkillDto[]
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\MitarbeiterNeuanlageSkillDto[] $skills Die Skills des Mitarbeiters
     *
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

        return $this;
    }

    /**
     * Gets werdegaenge
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\MitarbeiterWerdegangDto[]
     */
    public function getWerdegaenge()
    {
        return $this->container['werdegaenge'];
    }

    /**
     * Sets werdegaenge
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\MitarbeiterWerdegangDto[] $werdegaenge Die Werdegänge des Mitarbeiters
     *
     * @return $this
     */
    public function setWerdegaenge($werdegaenge)
    {
        $this->container['werdegaenge'] = $werdegaenge;

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
