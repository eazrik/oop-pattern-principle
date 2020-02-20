<?php namespace Acme\Pattern\Chain;

abstract class HomeChecker
{
    protected $successor;

    /**
     * Abstract Method check
     *
     * @param HomeStatus $home Home
     *
     * @return mixed
     */
    abstract public function check(HomeStatus $home);

    /**
     * Method check
     *
     * @param HomeChecker $successor Successor
     *
     * @return mixed
     */
    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    /**
     * Method check
     *
     * @param HomeStatus $home Home
     *
     * @return mixed
     */
    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}
