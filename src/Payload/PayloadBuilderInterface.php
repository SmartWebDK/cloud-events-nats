<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Payload;

use SmartWeb\CloudEvents\Nats\Exception\PayloadBuilderError;
use SmartWeb\CloudEvents\Nats\Payload\Data\PayloadDataInterface;

/**
 * Defines a class capable of building payload objects.
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
interface PayloadBuilderInterface
{
    
    /**
     * Create an instance of this builder.
     *
     * @return PayloadBuilderInterface
     */
    public static function create() : self;
    
    /**
     * Set the event type of the payload to be created.
     *
     * @param string $type
     *
     * @return PayloadBuilderInterface
     */
    public function setEventType(string $type) : self;
    
    /**
     * Set the event type version of the payload to be created.
     *
     * @param string $version
     *
     * @return PayloadBuilderInterface
     */
    public function setEventTypeVersion(string $version) : self;
    
    /**
     * Set the CloudEvents specification version of the payload to be created.
     *
     * @param string $version
     *
     * @return PayloadBuilderInterface
     */
    public function setCloudEventsVersion(string $version) : self;
    
    /**
     * Set the event source of the payload to be created.
     *
     * @param string $source
     *
     * @return PayloadBuilderInterface
     */
    public function setSource(string $source) : self;
    
    /**
     * Set the event ID of the payload to be created.
     *
     * @param string $id
     *
     * @return PayloadBuilderInterface
     */
    public function setEventId(string $id) : self;
    
    /**
     * Set the event time of the payload to be created.
     *
     * @param \DateTimeInterface $time
     *
     * @return PayloadBuilderInterface
     */
    public function setEventTime(\DateTimeInterface $time) : self;
    
    /**
     * Set the URL for the schema of the payload to be created.
     *
     * @param string $schemaURL
     *
     * @return PayloadBuilderInterface
     */
    public function setSchemaURL(string $schemaURL) : self;
    
    /**
     * Set the content type of the payload to be created.
     *
     * @param string $contentType
     *
     * @return PayloadBuilderInterface
     */
    public function setContentType(string $contentType) : self;
    
    /**
     * Set the extensions of the payload to be created.
     *
     * @param array $extensions
     *
     * @return PayloadBuilderInterface
     */
    public function setExtensions(array $extensions) : self;
    
    /**
     * Set the data of the payload to be created.
     *
     * @param PayloadDataInterface $data
     *
     * @return PayloadBuilderInterface
     */
    public function setData(PayloadDataInterface $data) : self;
    
    /**
     * Construct a payload using the configured values of this builder.
     *
     * @return PayloadInterface
     *
     * @throws PayloadBuilderError
     */
    public function build() : PayloadInterface;
}
