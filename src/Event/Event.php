<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Event;

/**
 * The payload of an event according to the CloudEvents NATS Transporting Binding specification.
 *
 * @see    https://github.com/cloudevents/spec/blob/master/nats-transport-binding.md
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
class Event implements EventInterface
{
    
    /**
     * @var string
     */
    private $eventType;
    
    /**
     * @var null|string
     */
    private $eventTypeVersion;
    
    /**
     * @var string
     */
    private $cloudEventsVersion;
    
    /**
     * @var string
     */
    private $source;
    
    /**
     * @var string
     */
    private $eventId;
    
    /**
     * @var null|string
     */
    private $eventTime;
    
    /**
     * @var null|string
     */
    private $schemaURL;
    
    /**
     * @var null|string
     */
    private $contentType;
    
    /**
     * @var array|null
     */
    private $extensions;
    
    /**
     * @var array|object|null
     */
    private $data;
    
    /**
     * Payload constructor.
     *
     * @param string      $eventType
     * @param null|string $eventTypeVersion
     * @param string      $cloudEventsVersion
     * @param string      $source
     * @param string      $eventId
     * @param null|string $eventTime
     * @param string|null $schemaURL
     * @param string|null $contentType
     * @param array|null  $extensions
     * @param array|object|null  $data
     */
    public function __construct(
        string $eventType,
        ?string $eventTypeVersion,
        string $cloudEventsVersion,
        string $source,
        string $eventId,
        ?string $eventTime,
        ?string $schemaURL,
        ?string $contentType,
        ?array $extensions,
        $data
    ) {
        $this->eventType = $eventType;
        $this->eventTypeVersion = $eventTypeVersion;
        $this->cloudEventsVersion = $cloudEventsVersion;
        $this->source = $source;
        $this->eventId = $eventId;
        $this->eventTime = $eventTime;
        $this->schemaURL = $schemaURL;
        $this->contentType = $contentType;
        $this->extensions = $extensions;
        $this->data = $data;
    }
    
    /**
     * @inheritDoc
     */
    public function getEventType()
    {
        return $this->eventType;
    }
    
    /**
     * @inheritDoc
     */
    public function getEventTypeVersion()
    {
        return $this->eventTypeVersion;
    }
    
    /**
     * @inheritDoc
     */
    public function getCloudEventsVersion()
    {
        return $this->cloudEventsVersion;
    }
    
    /**
     * @inheritDoc
     */
    public function getSource()
    {
        return $this->source;
    }
    
    /**
     * @inheritDoc
     */
    public function getEventId()
    {
        return $this->eventId;
    }
    
    /**
     * @inheritDoc
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }
    
    /**
     * @inheritDoc
     */
    public function getSchemaURL()
    {
        return $this->schemaURL;
    }
    
    /**
     * @inheritDoc
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    
    /**
     * @inheritDoc
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
    
    /**
     * @inheritDoc
     */
    public function getData()
    {
        return $this->data;
    }
}
