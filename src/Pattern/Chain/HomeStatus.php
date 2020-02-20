<?php namespace Acme\Pattern\Chain;

//here would presumabably from a form, database resultset etc
class HomeStatus
{
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;

    /**
     * Method alarmOn
     *
     * @return mixed
     */
    public function alarmOn()
    {
        // here call query class per method. return true if error code 0000 else return false
        var_dump('alarm - called it');
        return true;
    }

    /**
     * Method locked
     *
     * @return mixed
     */
    public function locked()
    {
        // here call query class per method. return true if error code 0000 else return false
        var_dump('locked - called it');
        return true;
    }

    /**
     * Method lightsOff
     *
     * @return mixed
     */
    public function lightsOff()
    {
        // here call query class per method. return true if error code 0000 else return false
        var_dump('lights - called it');
        return true;
    }
}
