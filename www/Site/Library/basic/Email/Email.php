<?php
/**
 * Email адрес
 *
 * @version 1.0
 */
namespace Library\basic\Email;

use Boolive\values\Rule;
use Library\basic\String\String;

class Email extends String
{
    /**
     * Установка правила на атрибуты
     */
    protected function rule()
    {
        $rule = parent::rule();
        $rule->arrays[0]['value']->email();
        return $rule;
    }
}
