<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Event;

use SmartWeb\CloudEvents\Nats\Exception\PayloadBuilderError;

/**
 * Defines a class capable of building CloudEvent events.
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
interface EventBuilderInterface
{
    
    /**
     * Create an instance of this builder.
     *
     * @return EventBuilderInterface
     */
    public static function create() : self;
    
    /**
     * Set the event type of the payload to be created.
     *
     * @param string $type
     *
     * @return EventBuilderInterface
     */
    public function setEventType(string $type) : self;
    
    /**
     * Set the event type version of the payload to be created.
     *
     * @param string $version
     *
     * @return EventBuilderInterface
     */
    public function setEventTypeVersion(string $version) : self;
    
    /**
     * Set the CloudEvents specification version of the payload to be created.
     *
     * @param string $version
     *
     * @return EventBuilderInterface
     */
    public function setCloudEventsVersion(string $version) : self;
    
    /**
     * Set the event source of the payload to be created.
     *
     * @param string $source
     *
     * @return EventBuilderInterface
     */
    public function setSource(string $source) : self;
    
    /**
     * Set the event ID of the payload to be created.
     *
     * @param string $id
     *
     * @return EventBuilderInterface
     */
    public function setEventId(string $id) : self;
    
    /**
     * Set the event time of the payload to be created.
     *
     * @param string $time
     *
     * @return EventBuilderInterface
     */
    public function setEventTime(string $time) : self;
    
    /**
     * Set the URL for the schema of the payload to be created.
     *
     * @param string $schemaURL
     *
     * @return EventBuilderInterface
     */
    public function setSchemaURL(string $schemaURL) : self;
    
    /**
     * Set the content type of the payload to be created.
     *
     * @param string $contentType
     *
     * @return EventBuilderInterface
     */
    public function setContentType(string $contentType) : self;
    
    /**
     * Set the extensions of the payload to be created.
     *
     * @param array $extensions
     *
     * @return EventBuilderInterface
     */
    public function setExtensions(array $extensions) : self;
    
    /**
     * Set the data of the payload to be created.
     *
     * @param array $data
     *
     * @return EventBuilderInterface
     */
    public function setData(array $data) : self;
    
    /**
     * Construct a payload using the configured values of this builder.
     *
     * @return EventInterface
     *
     * @throws PayloadBuilderError
     */
    public function build() : EventInterface;
}
