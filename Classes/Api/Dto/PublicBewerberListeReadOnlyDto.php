<?php
/**
 * PublicBewerberListeReadOnlyDto
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
 * PublicBewerberListeReadOnlyDto Class Doc Comment
 *
 * @category    Class
 * @description Die Daten eines Mitarbeiters in der Bewerberliste
 * @package     Prosoft\RecruitingApi\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PublicBewerberListeReadOnlyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PublicBewerberListeReadOnlyDto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'anrede'      => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'email'       => 'string',
        'mobil'       => 'string',
        'nachname'    => 'string',
        'telefon'     => 'string',
        'titel'       => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'vorname'     => 'string',
        'object_uuid' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'anrede'      => null,
        'email'       => null,
        'mobil'       => null,
        'nachname'    => null,
        'telefon'     => null,
        'titel'       => null,
        'vorname'     => null,
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
        'anrede'      => 'Anrede',
        'email'       => 'Email',
        'mobil'       => 'Mobil',
        'nachname'    => 'Nachname',
        'telefon'     => 'Telefon',
        'titel'       => 'Titel',
        'vorname'     => 'Vorname',
        'object_uuid' => 'ObjectUuid',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anrede'      => 'setAnrede',
        'email'       => 'setEmail',
        'mobil'       => 'setMobil',
        'nachname'    => 'setNachname',
        'telefon'     => 'setTelefon',
        'titel'       => 'setTitel',
        'vorname'     => 'setVorname',
        'object_uuid' => 'setObjectUuid',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anrede'      => 'getAnrede',
        'email'       => 'getEmail',
        'mobil'       => 'getMobil',
        'nachname'    => 'getNachname',
        'telefon'     => 'getTelefon',
        'titel'       => 'getTitel',
        'vorname'     => 'getVorname',
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
        $this->container['anrede'] = isset($data['anrede']) ? $data['anrede'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['mobil'] = isset($data['mobil']) ? $data['mobil'] : null;
        $this->container['nachname'] = isset($data['nachname']) ? $data['nachname'] : null;
        $this->container['telefon'] = isset($data['telefon']) ? $data['telefon'] : null;
        $this->container['titel'] = isset($data['titel']) ? $data['titel'] : null;
        $this->container['vorname'] = isset($data['vorname']) ? $data['vorname'] : null;
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
     * Gets anrede
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getAnrede()
    {
        return $this->container['anrede'];
    }

    /**
     * Sets anrede
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $anrede anrede
     *
     * @return $this
     */
    public function setAnrede($anrede)
    {
        $this->container['anrede'] = $anrede;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Holt oder setzt die E-Mail-Adresse.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets mobil
     *
     * @return string
     */
    public function getMobil()
    {
        return $this->container['mobil'];
    }

    /**
     * Sets mobil
     *
     * @param string $mobil Holt oder setzt die Mobilfunknummer.
     *
     * @return $this
     */
    public function setMobil($mobil)
    {
        $this->container['mobil'] = $mobil;

        return $this;
    }

    /**
     * Gets nachname
     *
     * @return string
     */
    public function getNachname()
    {
        return $this->container['nachname'];
    }

    /**
     * Sets nachname
     *
     * @param string $nachname Holt oder setzt den Nachnamen.
     *
     * @return $this
     */
    public function setNachname($nachname)
    {
        $this->container['nachname'] = $nachname;

        return $this;
    }

    /**
     * Gets telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->container['telefon'];
    }

    /**
     * Sets telefon
     *
     * @param string $telefon Holt oder setzt die Telefonnummer.
     *
     * @return $this
     */
    public function setTelefon($telefon)
    {
        $this->container['telefon'] = $telefon;

        return $this;
    }

    /**
     * Gets titel
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getTitel()
    {
        return $this->container['titel'];
    }

    /**
     * Sets titel
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $titel titel
     *
     * @return $this
     */
    public function setTitel($titel)
    {
        $this->container['titel'] = $titel;

        return $this;
    }

    /**
     * Gets vorname
     *
     * @return string
     */
    public function getVorname()
    {
        return $this->container['vorname'];
    }

    /**
     * Sets vorname
     *
     * @param string $vorname Holt oder setzt den Vornamen.
     *
     * @return $this
     */
    public function setVorname($vorname)
    {
        $this->container['vorname'] = $vorname;

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
