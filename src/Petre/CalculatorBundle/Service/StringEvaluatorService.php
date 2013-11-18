<?php
/**
 * Created by JetBrains PhpStorm.
 * User: petre
 * Date: 11/18/13
 * Time: 7:20 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Petre\CalculatorBundle\Service;


class StringEvaluatorService {

    /**
     * Compute the mathematical operations stored in a string.
     * @param string $string The string that will be performing our operations
     * @return int The result of the operation
     */
    public function compute($string) {
        return 0;
    }

    /**
     * Checks weather the string that is provided is a valid string of operations.
     * @param string $string The string that needs to be interpreted.
     * @return bool Whether the string is valid for processing, or not.
     */
    public function isValid($string) {
        return false;
    }
}