<?php
namespace Acme\Pattern\Adapter;

class ElectronicReaderAdapter implements BookInterface
{
    /**
     * Property $reader Reader
     */
    private $reader;

    /**
     * Method initialize
     *
     * @param ElectronicReaderInterface $reader Reader
     */
    public function __construct(ElectronicReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    /**
     * Method open
     *
     * @return void
     */
    public function open()
    {
        return $this->reader->turnOn();
    }

    /**
     * Method turnPage
     *
     * @return void
     */
    public function turnPage()
    {
        return $this->reader->pressNextButton();
    }
}
