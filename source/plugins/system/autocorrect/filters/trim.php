<?php
/**
 * Joomla! plugin to autocorrect content
 *
 * @author Yireo (info@yireo.com)
 * @copyright Copyright 2015
 * @license GNU Public License
 * @link http://www.yireo.com
 * @contributor Jisse Reitsma, Yireo (main code)
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

// Import dependancies
include_once __DIR__.'/interface.php';

/**
 * Filtering class for trimming text
 */
class plgSystemAutocorrectFilterTrim implements plgSystemAutoCorrectFilterInterface
{
    public function filter($string)
    {
        $string = trim($string);

        for ($i = 0; $i < 3; $i++)
        {
            $string = preg_replace('/\<p\>\&nbsp\;\<\/p\>$/', '', $string);
            $string = preg_replace('/\<p\>\<\/p\>$/', '', $string);
            $string = preg_replace('/\<br\/\>$/', '', $string);
        }

        return $string;
    }
}
