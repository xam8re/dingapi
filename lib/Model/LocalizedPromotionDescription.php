<?php
/**
 * LocalizedPromotionDescription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ding API
 *
 * The Ding API is a Level 0 REST web service.  We have used the <a href=\"http://swagger.io\">swagger</a> standard to describe this service. As a result, we are able to provide this interactive documentation page. For further information, you may view the <a href=\"/api/description\">additional documentation</a>; read our <a href=\"/api/faq\">FAQ</a> or contact partnersupport@ding.com
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
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
 * LocalizedPromotionDescription Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalizedPromotionDescription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocalizedPromotionDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dates' => 'string',
        'headline' => 'string',
        'terms_and_conditions_mark_down' => 'string',
        'bonus_validity' => 'string',
        'promotion_type' => 'string',
        'localization_key' => 'string',
        'language_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dates' => null,
        'headline' => null,
        'terms_and_conditions_mark_down' => null,
        'bonus_validity' => null,
        'promotion_type' => null,
        'localization_key' => null,
        'language_code' => null
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
        'dates' => 'Dates',
        'headline' => 'Headline',
        'terms_and_conditions_mark_down' => 'TermsAndConditionsMarkDown',
        'bonus_validity' => 'BonusValidity',
        'promotion_type' => 'PromotionType',
        'localization_key' => 'LocalizationKey',
        'language_code' => 'LanguageCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dates' => 'setDates',
        'headline' => 'setHeadline',
        'terms_and_conditions_mark_down' => 'setTermsAndConditionsMarkDown',
        'bonus_validity' => 'setBonusValidity',
        'promotion_type' => 'setPromotionType',
        'localization_key' => 'setLocalizationKey',
        'language_code' => 'setLanguageCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dates' => 'getDates',
        'headline' => 'getHeadline',
        'terms_and_conditions_mark_down' => 'getTermsAndConditionsMarkDown',
        'bonus_validity' => 'getBonusValidity',
        'promotion_type' => 'getPromotionType',
        'localization_key' => 'getLocalizationKey',
        'language_code' => 'getLanguageCode'
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
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['terms_and_conditions_mark_down'] = isset($data['terms_and_conditions_mark_down']) ? $data['terms_and_conditions_mark_down'] : null;
        $this->container['bonus_validity'] = isset($data['bonus_validity']) ? $data['bonus_validity'] : null;
        $this->container['promotion_type'] = isset($data['promotion_type']) ? $data['promotion_type'] : null;
        $this->container['localization_key'] = isset($data['localization_key']) ? $data['localization_key'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dates'] === null) {
            $invalidProperties[] = "'dates' can't be null";
        }
        if ($this->container['headline'] === null) {
            $invalidProperties[] = "'headline' can't be null";
        }
        if ($this->container['terms_and_conditions_mark_down'] === null) {
            $invalidProperties[] = "'terms_and_conditions_mark_down' can't be null";
        }
        if ($this->container['bonus_validity'] === null) {
            $invalidProperties[] = "'bonus_validity' can't be null";
        }
        if ($this->container['promotion_type'] === null) {
            $invalidProperties[] = "'promotion_type' can't be null";
        }
        if ($this->container['localization_key'] === null) {
            $invalidProperties[] = "'localization_key' can't be null";
        }
        if ($this->container['language_code'] === null) {
            $invalidProperties[] = "'language_code' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets dates
     *
     * @return string
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param string $dates Dates where the promotion is available within the ValidityPeriod
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string $headline Short description of the promotion
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets terms_and_conditions_mark_down
     *
     * @return string
     */
    public function getTermsAndConditionsMarkDown()
    {
        return $this->container['terms_and_conditions_mark_down'];
    }

    /**
     * Sets terms_and_conditions_mark_down
     *
     * @param string $terms_and_conditions_mark_down Terms and conditions of the promotion
     *
     * @return $this
     */
    public function setTermsAndConditionsMarkDown($terms_and_conditions_mark_down)
    {
        $this->container['terms_and_conditions_mark_down'] = $terms_and_conditions_mark_down;

        return $this;
    }

    /**
     * Gets bonus_validity
     *
     * @return string
     */
    public function getBonusValidity()
    {
        return $this->container['bonus_validity'];
    }

    /**
     * Sets bonus_validity
     *
     * @param string $bonus_validity Different from ValidityPeriodIso as it has a non Iso value
     *
     * @return $this
     */
    public function setBonusValidity($bonus_validity)
    {
        $this->container['bonus_validity'] = $bonus_validity;

        return $this;
    }

    /**
     * Gets promotion_type
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->container['promotion_type'];
    }

    /**
     * Sets promotion_type
     *
     * @param string $promotion_type Short description of the type of promotion
     *
     * @return $this
     */
    public function setPromotionType($promotion_type)
    {
        $this->container['promotion_type'] = $promotion_type;

        return $this;
    }

    /**
     * Gets localization_key
     *
     * @return string
     */
    public function getLocalizationKey()
    {
        return $this->container['localization_key'];
    }

    /**
     * Sets localization_key
     *
     * @param string $localization_key localization_key
     *
     * @return $this
     */
    public function setLocalizationKey($localization_key)
    {
        $this->container['localization_key'] = $localization_key;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code language_code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

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


