<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Exception;

/**
 * Exception caused by an issue during the construction of a payload object using a builder.
 *
 * @see    \SmartWeb\CloudEvents\Nats\Context\EventBuilderInterface
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @api
 */
class PayloadBuilderError extends \InvalidArgumentException implements ExceptionInterface
{

}
