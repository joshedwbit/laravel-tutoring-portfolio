<?php


namespace app\Traits;

trait TopicsTrait
{
    /**
    * Returns array of possible question topics
    *
    * @return array
    */
   public static function getTopics(): array
   {
       return [
           'Decimals',
           'Fractions',
           'Ratios',
           'Percentages',
           'Trigonometry'
       ];
   }

   /**
    * Returns comma separated string of possible topics
    *
    * @return string
    */
   public static function getTopicsString(): String
   {
        return implode(',', self::getTopics());
   }
}