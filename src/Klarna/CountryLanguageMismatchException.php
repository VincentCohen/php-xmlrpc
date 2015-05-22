<?php
/**
 * Klarna Exceptions
 *
 * PHP Version 5.3
 *
 * @category  Payment
 * @package   KlarnaAPI
 * @author    MS Dev <ms.modules@klarna.com>
 * @copyright 2012 Klarna AB (http://klarna.com)
 * @license   http://opensource.org/licenses/BSD-2-Clause BSD-2
 * @link      https://developers.klarna.com/
 */

/**
 * Exception for Country and Currency mismatch
 *
 * @category  Payment
 * @package   KlarnaAPI
 * @author    MS Dev <ms.modules@klarna.com>
 * @copyright 2012 Klarna AB (http://klarna.com)
 * @license   http://opensource.org/licenses/BSD-2-Clause BSD-2
 * @link      https://developers.klarna.com/
 */
class Klarna_CountryLanguageMismatchException extends KlarnaException
{
    /**
     * Constructor
     *
     * @param mixed $country  country
     * @param mixed $language language
     */
    public function __construct($country, $language)
    {
        $countryCode = KlarnaCountry::getCode($country);
        parent::__construct(
            "Mismatching country/language for '{$countryCode}'! ".
            "[country: $country language: $language]",
            50024
        );
    }
}
