<?php
namespace Acme\Pattern\Strategy;

class LogToWhateverWebservice implements Logger
{
    /**
     * Method log
     *
     * @param string $data Data TEst
     *
     * @return void
     */
    public function log($data)
    {
        var_dump('Log the data to a Sass site.');
    }
}
