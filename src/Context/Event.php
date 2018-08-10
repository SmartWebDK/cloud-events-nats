<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Context;

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
     * @var array|null
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
     * @param array|null  $data
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
        ?array $data
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
    public function getEventType() : string
    {
        return $this->eventType;
    }
    
    /**
     * @inheritDoc
     */
    public function getEventTypeVersion() : ?string
    {
        return $this->eventTypeVersion;
    }
    
    /**
     * @inheritDoc
     */
    public function getCloudEventsVersion() : string
    {
        return $this->cloudEventsVersion;
    }
    
    /**
     * @inheritDoc
     */
    public function getSource() : string
    {
        return $this->source;
    }
    
    /**
     * @inheritDoc
     */
    public function getEventId() : string
    {
        return $this->eventId;
    }
    
    /**
     * @inheritDoc
     */
    public function getEventTime() : ?string
    {
        return $this->eventTime;
    }
    
    /**
     * @inheritDoc
     */
    public function getSchemaURL() : ?string
    {
        return $this->schemaURL;
    }
    
    /**
     * @inheritDoc
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    
    /**
     * @inheritDoc
     */
    public function getExtensions() : ?array
    {
        return $this->extensions;
    }
    
    /**
     * @inheritDoc
     */
    public function getData() : ?array
    {
        return $this->data;
    }
}
