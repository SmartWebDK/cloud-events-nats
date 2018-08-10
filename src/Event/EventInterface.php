<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Event;

/**
 * Definition of an event according to the CloudEvents NATS Transporting Binding specification.
 *
 * @link    https://github.com/cloudevents/spec/blob/v0.1/spec.md#context-attributes
 * @link    https://github.com/cloudevents/spec/blob/master/nats-transport-binding.md#2-use-of-cloudevents-attributes
 *
 * @author  Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
interface EventInterface
{
    
    /**
     * Type of occurrence which has happened. Often this property is used for
     * routing, observability, policy enforcement, etc.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#eventtype
     *
     * @return string
     */
    public function getEventType() : string;
    
    /**
     * The version of the eventType. This enables the interpretation of data by
     * eventual consumers, requires the consumer to be knowledgeable about the producer.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#eventtypeversion
     *
     * @return null|string
     */
    public function getEventTypeVersion() : ?string;
    
    /**
     * The version of the CloudEvents specification which the event uses.
     * This enables the interpretation of the context.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#cloudeventsversion
     *
     * @return string
     */
    public function getCloudEventsVersion() : string;
    
    /**
     * This describes the event producer.
     * Often this will include information such as the type of the event source, the
     * organization publishing the event, and some unique identifiers. The exact syntax
     * and semantics behind the data encoded in the URI is event producer defined.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#source
     *
     * @return string
     */
    public function getSource() : string;
    
    /**
     * ID of the event.
     * The semantics of this string are explicitly undefined to ease the
     * implementation of producers. Enables deduplication.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#eventid
     *
     * @return string
     */
    public function getEventId() : string;
    
    /**
     * Timestamp of when the event happened.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#eventtime
     *
     * @return null|string
     */
    public function getEventTime() : ?string;
    
    /**
     * A link to the schema that the data attribute adheres to.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#schemaurl
     *
     * @return null|string
     */
    public function getSchemaURL() : ?string;
    
    /**
     * Describe the data encoding format.
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#contenttype
     *
     * @return null|string
     */
    public function getContentType() : ?string;
    
    /**
     * This is for additional metadata and this does not have a mandated structure.
     * This enables a place for custom fields a producer or middleware might
     * want to include and provides a place to test metadata before adding them
     * to the CloudEvents specification. See the Extensions document for a list
     * of possible properties.
     *
     * @link
     * @link https://github.com/cloudevents/spec/blob/v0.1/extensions.md Extensions
     *
     * @return array|null
     */
    public function getExtensions() : ?array;
    
    /**
     * The event payload.
     * The payload depends on the eventType, schemaURL and eventTypeVersion,
     * the payload is encoded into a media format which is specified by the
     * contentType attribute (e.g. application/json).
     *
     * @link https://github.com/cloudevents/spec/blob/v0.1/spec.md#data-1
     *
     * @return array|null
     */
    public function getData() : ?array;
}
