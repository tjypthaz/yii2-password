<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2013
 * @package yii2-password
 * @version 1.0.0
 */

namespace kartik\password;

return [
    StrengthValidator::SIMPLE => [
        'min' => 6,
        'upper' => 0,
        'lower' => 1,
        'digit' => 1,
        'special' => 0,
        'hasUser' => false,
        'hasEmail' => false
    ],
    StrengthValidator::NORMAL => [
        'min' => 8,
        'upper' => 1,
        'lower' => 1,
        'digit' => 1,
        'special' => 0,
        'hasUser' => true,
        'hasEmail' => true
    ],
    StrengthValidator::FAIR => [
        'min' => 10,
        'upper' => 1,
        'lower' => 1,
        'digit' => 1,
        'special' => 1,
        'hasUser' => true,
        'hasEmail' => true
    ],
    StrengthValidator::MEDIUM => [
        'min' => 10,
        'upper' => 1,
        'lower' => 1,
        'digit' => 2,
        'special' => 1,
        'hasUser' => true,
        'hasEmail' => true
    ],
    StrengthValidator::STRONG => [
        'min' => 12,
        'upper' => 2,
        'lower' => 2,
        'digit' => 2,
        'special' => 2,
        'hasUser' => true,
        'hasEmail' => true
    ],
];
?>
