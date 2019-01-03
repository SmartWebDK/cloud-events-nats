# PHP CloudEvents for NATS
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FSmartWebDK%2Fcloud-events-nats.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2FSmartWebDK%2Fcloud-events-nats?ref=badge_shield)

This is a simple PHP implementation of the NATS Transport Binding for CloudEvents [specification](https://github.com/cloudevents/spec/blob/master/nats-transport-binding.md).

### Event definition
The `EventInterface` defines the specification for events compatible with the NATS Transport Binding for CloudEvents [specification](https://github.com/cloudevents/spec/blob/master/nats-transport-binding.md) in this PHP implementation.

#### `data` attribute
Implementation of the `data` attribute (accessed using the `EventInterface::getData()` method) differs from that of the [JSON specification](https://github.com/cloudevents/spec/blob/v0.1/json-format.md). When translated to PHP literally -- according to [RFC7159](https://tools.ietf.org/html/rfc7159#section-3) specification -- this would imply a composite type of `null|array|bool|float|int|string`. However, in order to make use of this implementation easier, the `data` context attribute has been defined having the type `null|array`.
Importantly, while this is not a literal translation of the JSON specification, it _is_ a valid subset of said specification, and thus -- in accordance with the [Event formats](https://github.com/cloudevents/spec/blob/master/nats-transport-binding.md#14-event-formats) section of the NATS Transport Binding for CloudEvents specification -- constitutes a valid implementation.


## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FSmartWebDK%2Fcloud-events-nats.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2FSmartWebDK%2Fcloud-events-nats?ref=badge_large)