<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Context;

/**
 * Definition of fields for a CloudEvents event.
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
final class EventFields
{
    
    /**
     * Key used for storing 'eventType' payload data.
     */
    public const EVENT_TYPE = 'eventType';
    
    /**
     * Key used for storing 'eventTypeVersion' payload data.
     */
    public const EVENT_TYPE_VERSION = 'eventTypeVersion';
    
    /**
     * Key used for storing 'cloudEventsVersion' payload data.
     */
    public const CLOUD_EVENTS_VERSION = 'cloudEventsVersion';
    
    /**
     * Key used for storing 'source' payload data.
     */
    public const SOURCE = 'source';
    
    /**
     * Key used for storing 'eventId' payload data.
     */
    public const EVENT_ID = 'eventId';
    
    /**
     * Key used for storing 'eventTime' payload data.
     */
    public const EVENT_TIME = 'eventTime';
    
    /**
     * Key used for storing 'schemaURL' payload data.
     */
    public const SCHEMA_URL = 'schemaURL';
    
    /**
     * Key used for storing 'contentType' payload data.
     */
    public const CONTENT_TYPE = 'contentType';
    
    /**
     * Key used for storing 'extensions' payload data.
     */
    public const EXTENSIONS = 'extensions';
    
    /**
     * Key used for storing 'data' payload data.
     */
    public const DATA = 'data';
    
    /**
     * @var string[]
     */
    private static $supportedFields = [
        EventFields::EVENT_TYPE,
        EventFields::EVENT_TYPE_VERSION,
        EventFields::CLOUD_EVENTS_VERSION,
        EventFields::SOURCE,
        EventFields::EVENT_ID,
        EventFields::EVENT_TIME,
        EventFields::SCHEMA_URL,
        EventFields::CONTENT_TYPE,
        EventFields::EXTENSIONS,
        EventFields::DATA,
    ];
    
    /**
     * @var string[]
     */
    private static $requiredFields = [
        EventFields::EVENT_TYPE,
        EventFields::CLOUD_EVENTS_VERSION,
        EventFields::SOURCE,
        EventFields::EVENT_ID,
    ];
    
    private function __construct()
    {
    }
    
    /**
     * Complete list of all supported payload fields.
     *
     * @return string[]
     */
    public static function getSupportedFields() : array
    {
        return self::$supportedFields;
    }
    
    /**
     * List of all _required_ payload fields.
     *
     * @return string[]
     */
    public static function getRequiredFields() : array
    {
        return self::$requiredFields;
    }
}
