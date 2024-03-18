<?php
namespace verbb\formie\fields\subfields;

use verbb\formie\fields\Dropdown;
use verbb\formie\helpers\SchemaHelper;

use Craft;

class DateAmPmDropdown extends Dropdown
{
    // Static Methods
    // =========================================================================

    public static function displayName(): string
    {
        return Craft::t('formie', 'Date - AM/PM');
    }

    public static function getFrontEndInputTemplatePath(): string
    {
        return 'fields/dropdown';
    }

    public static function getEmailTemplatePath(): string
    {
        return 'fields/dropdown';
    }
}