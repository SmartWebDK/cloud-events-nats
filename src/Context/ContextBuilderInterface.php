<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Context;

use SmartWeb\CloudEvents\Nats\Context\Data\PayloadDataInterface;
use SmartWeb\CloudEvents\Nats\Exception\PayloadBuilderError;

/**
 * Defines a class capable of building payload objects.
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
interface ContextBuilderInterface
{
    
    /**
     * Create an instance of this builder.
     *
     * @return ContextBuilderInterface
     */
    public static function create() : self;
    
    /**
     * Set the event type of the payload to be created.
     *
     * @param string $type
     *
     * @return ContextBuilderInterface
     */
    public function setEventType(string $type) : self;
    
    /**
     * Set the event type version of the payload to be created.
     *
     * @param string $version
     *
     * @return ContextBuilderInterface
     */
    public function setEventTypeVersion(string $version) : self;
    
    /**
     * Set the CloudEvents specification version of the payload to be created.
     *
     * @param string $version
     *
     * @return ContextBuilderInterface
     */
    public function setCloudEventsVersion(string $version) : self;
    
    /**
     * Set the event source of the payload to be created.
     *
     * @param string $source
     *
     * @return ContextBuilderInterface
     */
    public function setSource(string $source) : self;
    
    /**
     * Set the event ID of the payload to be created.
     *
     * @param string $id
     *
     * @return ContextBuilderInterface
     */
    public function setEventId(string $id) : self;
    
    /**
     * Set the event time of the payload to be created.
     *
     * @param \DateTimeInterface $time
     *
     * @return ContextBuilderInterface
     */
    public function setEventTime(\DateTimeInterface $time) : self;
    
    /**
     * Set the URL for the schema of the payload to be created.
     *
     * @param string $schemaURL
     *
     * @return ContextBuilderInterface
     */
    public function setSchemaURL(string $schemaURL) : self;
    
    /**
     * Set the content type of the payload to be created.
     *
     * @param string $contentType
     *
     * @return ContextBuilderInterface
     */
    public function setContentType(string $contentType) : self;
    
    /**
     * Set the extensions of the payload to be created.
     *
     * @param array $extensions
     *
     * @return ContextBuilderInterface
     */
    public function setExtensions(array $extensions) : self;
    
    /**
     * Set the data of the payload to be created.
     *
     * @param PayloadDataInterface $data
     *
     * @return ContextBuilderInterface
     */
    public function setData(PayloadDataInterface $data) : self;
    
    /**
     * Construct a payload using the configured values of this builder.
     *
     * @return ContextInterface
     *
     * @throws PayloadBuilderError
     */
    public function build() : ContextInterface;
}
