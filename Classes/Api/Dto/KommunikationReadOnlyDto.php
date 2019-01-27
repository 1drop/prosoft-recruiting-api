<?php
/**
 * KommunikationReadOnlyDto
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
 * KommunikationReadOnlyDto Class Doc Comment
 *
 * @category    Class
 * @description Implementiert Methoden und Eigenschaften für die öffentlichen Kommunikationen-Daten
 * @package     Prosoft\RecruitingApi\Api
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class KommunikationReadOnlyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'KommunikationReadOnlyDto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'adressat'              => 'string',
        'aktion'                => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'aufgabe'               => '\Prosoft\RecruitingApi\Api\Dto\AufgabeReadOnlyDto',
        'bcc_adressat'          => 'string',
        'beschreibung'          => 'string',
        'bezeichnung'           => 'string',
        'cc_adressat'           => 'string',
        'ersteller'             => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'erstellt'              => '\DateTime',
        'external_message_uuid' => 'string',
        'kategorie'             => 'int',
        'mandant_uuid'          => 'string',
        'mitarbeiter'           => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'mobil_empfaenger'      => 'string',
        'richtung'              => 'int',
        'status'                => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'stelle'                => '\Prosoft\RecruitingApi\Api\Dto\LookupDto',
        'typ'                   => '\Prosoft\RecruitingApi\Api\Dto\SystemNameLookupDto',
        'versandstatus'         => 'int',
        'object_uuid'           => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'adressat'              => null,
        'aktion'                => null,
        'aufgabe'               => null,
        'bcc_adressat'          => null,
        'beschreibung'          => null,
        'bezeichnung'           => null,
        'cc_adressat'           => null,
        'ersteller'             => null,
        'erstellt'              => 'date-time',
        'external_message_uuid' => 'uuid',
        'kategorie'             => 'int32',
        'mandant_uuid'          => 'uuid',
        'mitarbeiter'           => null,
        'mobil_empfaenger'      => null,
        'richtung'              => 'int32',
        'status'                => null,
        'stelle'                => null,
        'typ'                   => null,
        'versandstatus'         => 'int32',
        'object_uuid'           => 'uuid',
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
        'adressat'              => 'Adressat',
        'aktion'                => 'Aktion',
        'aufgabe'               => 'Aufgabe',
        'bcc_adressat'          => 'BccAdressat',
        'beschreibung'          => 'Beschreibung',
        'bezeichnung'           => 'Bezeichnung',
        'cc_adressat'           => 'CcAdressat',
        'ersteller'             => 'Ersteller',
        'erstellt'              => 'Erstellt',
        'external_message_uuid' => 'ExternalMessageUuid',
        'kategorie'             => 'Kategorie',
        'mandant_uuid'          => 'MandantUuid',
        'mitarbeiter'           => 'Mitarbeiter',
        'mobil_empfaenger'      => 'MobilEmpfaenger',
        'richtung'              => 'Richtung',
        'status'                => 'Status',
        'stelle'                => 'Stelle',
        'typ'                   => 'Typ',
        'versandstatus'         => 'Versandstatus',
        'object_uuid'           => 'ObjectUuid',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adressat'              => 'setAdressat',
        'aktion'                => 'setAktion',
        'aufgabe'               => 'setAufgabe',
        'bcc_adressat'          => 'setBccAdressat',
        'beschreibung'          => 'setBeschreibung',
        'bezeichnung'           => 'setBezeichnung',
        'cc_adressat'           => 'setCcAdressat',
        'ersteller'             => 'setErsteller',
        'erstellt'              => 'setErstellt',
        'external_message_uuid' => 'setExternalMessageUuid',
        'kategorie'             => 'setKategorie',
        'mandant_uuid'          => 'setMandantUuid',
        'mitarbeiter'           => 'setMitarbeiter',
        'mobil_empfaenger'      => 'setMobilEmpfaenger',
        'richtung'              => 'setRichtung',
        'status'                => 'setStatus',
        'stelle'                => 'setStelle',
        'typ'                   => 'setTyp',
        'versandstatus'         => 'setVersandstatus',
        'object_uuid'           => 'setObjectUuid',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adressat'              => 'getAdressat',
        'aktion'                => 'getAktion',
        'aufgabe'               => 'getAufgabe',
        'bcc_adressat'          => 'getBccAdressat',
        'beschreibung'          => 'getBeschreibung',
        'bezeichnung'           => 'getBezeichnung',
        'cc_adressat'           => 'getCcAdressat',
        'ersteller'             => 'getErsteller',
        'erstellt'              => 'getErstellt',
        'external_message_uuid' => 'getExternalMessageUuid',
        'kategorie'             => 'getKategorie',
        'mandant_uuid'          => 'getMandantUuid',
        'mitarbeiter'           => 'getMitarbeiter',
        'mobil_empfaenger'      => 'getMobilEmpfaenger',
        'richtung'              => 'getRichtung',
        'status'                => 'getStatus',
        'stelle'                => 'getStelle',
        'typ'                   => 'getTyp',
        'versandstatus'         => 'getVersandstatus',
        'object_uuid'           => 'getObjectUuid',
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

    const KATEGORIE_2 = 2;
    const KATEGORIE_3 = 3;
    const KATEGORIE_4 = 4;
    const KATEGORIE_5 = 5;
    const KATEGORIE_6 = 6;
    const KATEGORIE_7 = 7;
    const RICHTUNG_1 = 1;
    const RICHTUNG_2 = 2;
    const VERSANDSTATUS_0 = 0;
    const VERSANDSTATUS_1 = 1;
    const VERSANDSTATUS_2 = 2;
    const VERSANDSTATUS_3 = 3;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKategorieAllowableValues()
    {
        return [
            self::KATEGORIE_2,
            self::KATEGORIE_3,
            self::KATEGORIE_4,
            self::KATEGORIE_5,
            self::KATEGORIE_6,
            self::KATEGORIE_7,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRichtungAllowableValues()
    {
        return [
            self::RICHTUNG_1,
            self::RICHTUNG_2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersandstatusAllowableValues()
    {
        return [
            self::VERSANDSTATUS_0,
            self::VERSANDSTATUS_1,
            self::VERSANDSTATUS_2,
            self::VERSANDSTATUS_3,
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
        $this->container['adressat'] = isset($data['adressat']) ? $data['adressat'] : null;
        $this->container['aktion'] = isset($data['aktion']) ? $data['aktion'] : null;
        $this->container['aufgabe'] = isset($data['aufgabe']) ? $data['aufgabe'] : null;
        $this->container['bcc_adressat'] = isset($data['bcc_adressat']) ? $data['bcc_adressat'] : null;
        $this->container['beschreibung'] = isset($data['beschreibung']) ? $data['beschreibung'] : null;
        $this->container['bezeichnung'] = isset($data['bezeichnung']) ? $data['bezeichnung'] : null;
        $this->container['cc_adressat'] = isset($data['cc_adressat']) ? $data['cc_adressat'] : null;
        $this->container['ersteller'] = isset($data['ersteller']) ? $data['ersteller'] : null;
        $this->container['erstellt'] = isset($data['erstellt']) ? $data['erstellt'] : null;
        $this->container['external_message_uuid'] = isset($data['external_message_uuid']) ? $data['external_message_uuid'] : null;
        $this->container['kategorie'] = isset($data['kategorie']) ? $data['kategorie'] : null;
        $this->container['mandant_uuid'] = isset($data['mandant_uuid']) ? $data['mandant_uuid'] : null;
        $this->container['mitarbeiter'] = isset($data['mitarbeiter']) ? $data['mitarbeiter'] : null;
        $this->container['mobil_empfaenger'] = isset($data['mobil_empfaenger']) ? $data['mobil_empfaenger'] : null;
        $this->container['richtung'] = isset($data['richtung']) ? $data['richtung'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stelle'] = isset($data['stelle']) ? $data['stelle'] : null;
        $this->container['typ'] = isset($data['typ']) ? $data['typ'] : null;
        $this->container['versandstatus'] = isset($data['versandstatus']) ? $data['versandstatus'] : null;
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

        $allowedValues = $this->getKategorieAllowableValues();
        if (!in_array($this->container['kategorie'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kategorie', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRichtungAllowableValues();
        if (!in_array($this->container['richtung'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'richtung', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVersandstatusAllowableValues();
        if (!in_array($this->container['versandstatus'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'versandstatus', must be one of '%s'",
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
        $allowedValues = $this->getKategorieAllowableValues();
        if (!in_array($this->container['kategorie'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRichtungAllowableValues();
        if (!in_array($this->container['richtung'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getVersandstatusAllowableValues();
        if (!in_array($this->container['versandstatus'], $allowedValues)) {
            return false;
        }
        return true;
    }

    /**
     * Gets adressat
     *
     * @return string
     */
    public function getAdressat()
    {
        return $this->container['adressat'];
    }

    /**
     * Sets adressat
     *
     * @param string $adressat Holt oder setzt den Adressaten.
     *
     * @return $this
     */
    public function setAdressat($adressat)
    {
        $this->container['adressat'] = $adressat;

        return $this;
    }

    /**
     * Gets aktion
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getAktion()
    {
        return $this->container['aktion'];
    }

    /**
     * Sets aktion
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $aktion aktion
     *
     * @return $this
     */
    public function setAktion($aktion)
    {
        $this->container['aktion'] = $aktion;

        return $this;
    }

    /**
     * Gets aufgabe
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\AufgabeReadOnlyDto
     */
    public function getAufgabe()
    {
        return $this->container['aufgabe'];
    }

    /**
     * Sets aufgabe
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\AufgabeReadOnlyDto $aufgabe aufgabe
     *
     * @return $this
     */
    public function setAufgabe($aufgabe)
    {
        $this->container['aufgabe'] = $aufgabe;

        return $this;
    }

    /**
     * Gets bcc_adressat
     *
     * @return string
     */
    public function getBccAdressat()
    {
        return $this->container['bcc_adressat'];
    }

    /**
     * Sets bcc_adressat
     *
     * @param string $bcc_adressat Holt oder setzt den BCC-Adressaten.
     *
     * @return $this
     */
    public function setBccAdressat($bcc_adressat)
    {
        $this->container['bcc_adressat'] = $bcc_adressat;

        return $this;
    }

    /**
     * Gets beschreibung
     *
     * @return string
     */
    public function getBeschreibung()
    {
        return $this->container['beschreibung'];
    }

    /**
     * Sets beschreibung
     *
     * @param string $beschreibung Holt oder setzt die Beschreibung (HTML).
     *
     * @return $this
     */
    public function setBeschreibung($beschreibung)
    {
        $this->container['beschreibung'] = $beschreibung;

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
     * @param string $bezeichnung Holt oder setzt die Bezeichnung (plain).
     *
     * @return $this
     */
    public function setBezeichnung($bezeichnung)
    {
        $this->container['bezeichnung'] = $bezeichnung;

        return $this;
    }

    /**
     * Gets cc_adressat
     *
     * @return string
     */
    public function getCcAdressat()
    {
        return $this->container['cc_adressat'];
    }

    /**
     * Sets cc_adressat
     *
     * @param string $cc_adressat Holt oder setzt den CC-Adressaten.
     *
     * @return $this
     */
    public function setCcAdressat($cc_adressat)
    {
        $this->container['cc_adressat'] = $cc_adressat;

        return $this;
    }

    /**
     * Gets ersteller
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getErsteller()
    {
        return $this->container['ersteller'];
    }

    /**
     * Sets ersteller
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $ersteller ersteller
     *
     * @return $this
     */
    public function setErsteller($ersteller)
    {
        $this->container['ersteller'] = $ersteller;

        return $this;
    }

    /**
     * Gets erstellt
     *
     * @return \DateTime
     */
    public function getErstellt()
    {
        return $this->container['erstellt'];
    }

    /**
     * Sets erstellt
     *
     * @param \DateTime $erstellt Holt oder setzt das Erstelldatum.
     *
     * @return $this
     */
    public function setErstellt($erstellt)
    {
        $this->container['erstellt'] = $erstellt;

        return $this;
    }

    /**
     * Gets external_message_uuid
     *
     * @return string
     */
    public function getExternalMessageUuid()
    {
        return $this->container['external_message_uuid'];
    }

    /**
     * Sets external_message_uuid
     *
     * @param string $external_message_uuid Holt oder setzt die Uuid zum identifizieren der Kommunikation außerhalb des
     *                                      Tenant.Web
     *
     * @return $this
     */
    public function setExternalMessageUuid($external_message_uuid)
    {
        $this->container['external_message_uuid'] = $external_message_uuid;

        return $this;
    }

    /**
     * Gets kategorie
     *
     * @return int
     */
    public function getKategorie()
    {
        return $this->container['kategorie'];
    }

    /**
     * Sets kategorie
     *
     * @param int $kategorie Holt oder setzt die Kategorie.
     *
     * @return $this
     */
    public function setKategorie($kategorie)
    {
        $allowedValues = $this->getKategorieAllowableValues();
        if (!is_null($kategorie) && !in_array($kategorie, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kategorie', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kategorie'] = $kategorie;

        return $this;
    }

    /**
     * Gets mandant_uuid
     *
     * @return string
     */
    public function getMandantUuid()
    {
        return $this->container['mandant_uuid'];
    }

    /**
     * Sets mandant_uuid
     *
     * @param string $mandant_uuid Holt oder setzt die UUID des Mandanten. (Wird zum Senden einer SMS benötigt)
     *
     * @return $this
     */
    public function setMandantUuid($mandant_uuid)
    {
        $this->container['mandant_uuid'] = $mandant_uuid;

        return $this;
    }

    /**
     * Gets mitarbeiter
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getMitarbeiter()
    {
        return $this->container['mitarbeiter'];
    }

    /**
     * Sets mitarbeiter
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $mitarbeiter mitarbeiter
     *
     * @return $this
     */
    public function setMitarbeiter($mitarbeiter)
    {
        $this->container['mitarbeiter'] = $mitarbeiter;

        return $this;
    }

    /**
     * Gets mobil_empfaenger
     *
     * @return string
     */
    public function getMobilEmpfaenger()
    {
        return $this->container['mobil_empfaenger'];
    }

    /**
     * Sets mobil_empfaenger
     *
     * @param string $mobil_empfaenger Holt oder setzt die Mobilfunknummer des Empfängers
     *
     * @return $this
     */
    public function setMobilEmpfaenger($mobil_empfaenger)
    {
        $this->container['mobil_empfaenger'] = $mobil_empfaenger;

        return $this;
    }

    /**
     * Gets richtung
     *
     * @return int
     */
    public function getRichtung()
    {
        return $this->container['richtung'];
    }

    /**
     * Sets richtung
     *
     * @param int $richtung Holt oder setzt die Richtung.
     *
     * @return $this
     */
    public function setRichtung($richtung)
    {
        $allowedValues = $this->getRichtungAllowableValues();
        if (!is_null($richtung) && !in_array($richtung, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'richtung', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['richtung'] = $richtung;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets stelle
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\LookupDto
     */
    public function getStelle()
    {
        return $this->container['stelle'];
    }

    /**
     * Sets stelle
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\LookupDto $stelle stelle
     *
     * @return $this
     */
    public function setStelle($stelle)
    {
        $this->container['stelle'] = $stelle;

        return $this;
    }

    /**
     * Gets typ
     *
     * @return \Prosoft\RecruitingApi\Api\Dto\SystemNameLookupDto
     */
    public function getTyp()
    {
        return $this->container['typ'];
    }

    /**
     * Sets typ
     *
     * @param \Prosoft\RecruitingApi\Api\Dto\SystemNameLookupDto $typ typ
     *
     * @return $this
     */
    public function setTyp($typ)
    {
        $this->container['typ'] = $typ;

        return $this;
    }

    /**
     * Gets versandstatus
     *
     * @return int
     */
    public function getVersandstatus()
    {
        return $this->container['versandstatus'];
    }

    /**
     * Sets versandstatus
     *
     * @param int $versandstatus Holt oder setzt den Versandstatus
     *
     * @return $this
     */
    public function setVersandstatus($versandstatus)
    {
        $allowedValues = $this->getVersandstatusAllowableValues();
        if (!is_null($versandstatus) && !in_array($versandstatus, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'versandstatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['versandstatus'] = $versandstatus;

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