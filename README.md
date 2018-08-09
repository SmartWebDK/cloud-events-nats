# NATS Transport Binding for CloudEvents
This is a simple PHP implementation of the NATS Transport Binding for CloudEvents [specification](https://github.com/cloudevents/spec/blob/master/nats-transport-binding.md).

### Event payload
The `PayloadInterface` defines the specification for event payloads in this PHP implementation.
While some of the types for the payload interface differ from that of the [JSON specification](https://github.com/cloudevents/spec/blob/v0.1/json-format.md), this is done in order to facilitate easier use in PHP.
