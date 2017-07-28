<?php

/**
 * Description of inheritanceSample
 *
 * @author jgamgo
 */
//class inheritanceSample {
 /***
* Inheritance Basics
* Constructors and Inheritance
* Class Male (Subclass/Child Class)
*/
 
class Male extends Human {
 
    /**
    * Class Properties
    */
 
    public $chromosome;
 
    /**
    * Class Methods
    */
 
    /**
    * Child Class Constructor
    */
 
    public function __construct( $firstName = "First Name", $lastName = "Last Name", $chromosome = "XY" ) {
 
        parent :: __construct( $firstName, $lastName );
        $this->chromosome = $chromosome;
 
    }
 
    /**
    * Get Chromosome
    */
 
    public function getChromose() {
        return "Chromosome: " . $this->chromosome . "
";
    }
 
    /**
    * Get Gender
    */
 
    public function getGender() {
        $temp = "Gender: Male" . "
";
        $this->gender = $temp;
        return $this->gender;
    }
 
    /**
    * Get Skeleton
    */
 
    public function getSkeleton() {
 
        $temp = "Mass: Skeletons are larger and heavier" . "
";
        $temp .= "Limbs: The humerus, ulna and radius, which are the major bones that comprise most of the arm, are thicker and longer." . "
";
        $temp .= "Skull: Jawbone or mandible is typically angular and square-shaped at the chin area." . "
";
        $temp .= "Pelvis: The coccyx or tailbone, which is the last bone of the spinal column, is less movable." . "
";
 
        $this->skeleton = $temp;
        return $this->skeleton;
    }
 
}
//}
