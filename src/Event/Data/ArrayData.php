<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Nats\Event\Data;

/**
 * Implementation of payload data using an underlying array.
 *
 * @author Nicolai Agersbæk <na@smartweb.dk>
 *
 * @internal
 */
class ArrayData implements EventDataInterface
{
    
    /**
     * @var array
     */
    private $data;
    
    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    /**
     * @see \JsonSerializable::jsonSerialize()
     *
     * @return array
     */
    public function jsonSerialize() : array
    {
        return $this->data;
    }
}
