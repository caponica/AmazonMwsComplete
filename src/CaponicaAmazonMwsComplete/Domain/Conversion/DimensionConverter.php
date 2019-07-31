<?php

namespace CaponicaAmazonMwsComplete\Domain\Conversion;

class DimensionConverter
{
    const CM_PER_INCH   = 2.54;
    const GRAMS_PER_LB  = 453.6;
    const CBM_PER_CUFT  = 0.02832;
    const CUIN_PER_CUFT  = 1728;    // Cubic inches per Cubic foot (12^3)

    const NAME_CM       = 'centimeters';
    const NAME_INCH     = 'inches';
    const NAME_GRAMS    = 'grams';
    const NAME_POUNDS   = 'pounds';

    public static function convertInchesToCm($inches) {
        return $inches * self::CM_PER_INCH;
    }
    public static function convertCmToInches($cm) {
        return $cm / self::CM_PER_INCH;
    }

    public static function convertPoundsToGrams($pounds) {
        return $pounds * self::GRAMS_PER_LB;
    }
    public static function convertGramsToPounds($grams) {
        return $grams / self::GRAMS_PER_LB;
    }

    public static function convertToCm($value, $units) {
        if (self::NAME_CM == $units) {
            return $value;
        }
        if (self::NAME_INCH == $units) {
            return self::convertInchesToCm($value);
        }
        throw new \Exception("Unknown length units ($units) in DimensionConverter");
    }
    public static function convertToInches($value, $units) {
        if (self::NAME_INCH == $units) {
            return $value;
        }
        if (self::NAME_CM == $units) {
            return self::convertCmToInches($value);
        }
        throw new \Exception("Unknown length units ($units) in DimensionConverter");
    }

    public static function convertToGrams($value, $units) {
        if (self::NAME_GRAMS == $units) {
            return $value;
        }
        if (self::NAME_POUNDS == $units) {
            return self::convertPoundsToGrams($value);
        }
        throw new \Exception("Unknown weight units ($units) in DimensionConverter");
    }
    public static function convertToPounds($value, $units) {
        if (self::NAME_POUNDS == $units) {
            return $value;
        }
        if (self::NAME_GRAMS == $units) {
            return self::convertGramsToPounds($value);
        }
        throw new \Exception("Unknown weight units ($units) in DimensionConverter");
   }
}