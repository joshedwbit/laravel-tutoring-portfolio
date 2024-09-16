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
        'Algebra - rearranging',
        'Algebra - solving',
        'Algebraic fractions',
        'Area',
        'Bounds',
        'Box plots',
        'Circle theorems',
        'Circles',
        'Completing the square',
        'Compound growth and decay',
        'Composite functions',
        'Conditional probability',
        'Congruence',
        'Coordinates',
        'Corresponding and alternate angles',
        'Cumulative frequency',
        'Decimals',
        'Direct and inverse proportion',
        'Distance time/Velocity time',
        'Estimating',
        'Expanding brackets',
        'Factorising',
        'Fractions/Mixed fractions',
        'Frequency tables',
        'Graphs',
        'Histograms',
        'Indice laws',
        'Inequalities',
        'Iterative methods',
        'LCM/HCF',
        'Loci constructions and bearing',
        'Mean median mode',
        'Percentages',
        'Prime factors',
        'Probability',
        'Proof',
        'Pythagoras',
        'Quadratics',
        'Ratios',
        'Recurring decimals',
        'Rounding',
        'Sampling',
        'Scattergraphs',
        'Sequences',
        'Similar shapes',
        'Simultaneous equations',
        'Sine and cosine rules',
        'Speed density pressure',
        'Standard form',
        'Straight line graphs',
        'Surds',
        'Transformations of graphs',
        'Transformations of shapes',
        'Tree diagrams',
        'Trigonometry',
        'Unit conversions',
        'Vectors',
        'Venn diagrams',
        '3D shapes',
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