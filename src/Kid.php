<?php
/**
 * Created by PhpStorm.
 * User: kayladaniels
 * Date: 11/2/15
 * Time: 10:44 PM
 */

namespace Kayladnls\Choredo;


class Kid
{
    private $id;

    private $name;

    private $birthdate;

    private $balance;

    private $chores = [];

    public function __construct($name, $birthdate)
    {
        $this->name = $name;
        $this->birthdate = $birthdate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    public function addChore(Chore $chore)
    {
        $this->chores[] = $chore;
    }

    public function getChores()
    {
        return $this->chores;
    }

}