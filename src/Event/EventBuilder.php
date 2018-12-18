<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Event;

use SmartWeb\CloudEvents\Nats\Exception\PayloadBuilderError;

/**
 * Builder for creating CloudEvent events.
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
class EventBuilder implements EventBuilderInterface
{
    
    // FIXME: Missing tests!
    
    /**
     * @var array
     */
    private $builderArgs = [
        EventFields::EVENT_TYPE           => null,
        EventFields::EVENT_TYPE_VERSION   => null,
        EventFields::CLOUD_EVENTS_VERSION => null,
        EventFields::SOURCE               => null,
        EventFields::EVENT_ID             => null,
        EventFields::EVENT_TIME           => null,
        EventFields::SCHEMA_URL           => null,
        EventFields::CONTENT_TYPE         => null,
        EventFields::EXTENSIONS           => null,
        EventFields::DATA                 => null,
    ];
    
    /**
     * @inheritDoc
     */
    public static function create() : EventBuilderInterface
    {
        return new self();
    }
    
    /**
     * @inheritDoc
     */
    public function build() : EventInterface
    {
        $this->validateBuilderArgs();
        
        return new Event(...\array_values($this->builderArgs));
    }
    
    private function validateBuilderArgs() : void
    {
        $missingFields = $this->getMissingFields();
        
        if ($missingFields !== []) {
            $missingFieldsString = \implode("', '", $missingFields);
            throw new PayloadBuilderError("Missing required fields: '{$missingFieldsString}'");
        }
    }
    
    /**
     * @return string[]
     */
    private function getMissingFields() : array
    {
        return \array_diff(EventFields::getRequiredFields(), $this->getProvidedArgs());
    }
    
    /**
     * @return string[]
     */
    private function getProvidedArgs() : array
    {
        return \array_keys(\array_filter($this->builderArgs));
    }
    
    /**
     * @inheritDoc
     */
    public function setEventType(string $type) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::EVENT_TYPE] = $type;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setEventTypeVersion(string $version) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::EVENT_TYPE_VERSION] = $version;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setCloudEventsVersion(string $version) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::CLOUD_EVENTS_VERSION] = $version;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setSource(string $source) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::SOURCE] = $source;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setEventId(string $id) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::EVENT_ID] = $id;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setEventTime(string $time) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::EVENT_TIME] = $time;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setSchemaURL(string $schemaURL) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::SCHEMA_URL] = $schemaURL;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setContentType(string $contentType) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::CONTENT_TYPE] = $contentType;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setExtensions(array $extensions) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::EXTENSIONS] = $extensions;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setData($data) : EventBuilderInterface
    {
        $this->builderArgs[EventFields::DATA] = $data;
        
        return $this;
    }
}
