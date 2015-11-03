<?php
/**
 * Created by PhpStorm.
 * User: kayladaniels
 * Date: 11/2/15
 * Time: 10:52 PM
 */

namespace Kayladnls\Choredo;


class Chore
{
    const FREQUENCY_WEEKLY = 1;
    const FREQUENCY_DAILY = 7;

    private $id;

    private $name;

    private $frequency;

    private $allowance;

    public function __construct($name, $frequency, $allowance)
    {
        if (! in_array($frequency, $this->getAcceptableFrequency())){
            throw new \Exception("bad frequency, yo");
        }

        if ( ! is_numeric($allowance)){
            throw new \Exception ("allowance has to be a number, bro");
        }

        $this->name = $name;
        $this->frequency = $frequency;
        $this->allowance = $allowance;
    }

    public function getAcceptableFrequency()
    {
        return [
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY
        ];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @return mixed
     */
    public function getAllowance()
    {
        return $this->allowance;
    }
}