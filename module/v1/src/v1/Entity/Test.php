<?php

namespace v1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test Entity
 *
 * @ORM\Table(name="test")
 * @ORM\Entity
 */
class Test
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *
     * @var string(255)
     * @ORM\Column(name="test", type="string", nullable=false)
     */
    private $test;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set test
     *
     * @return Test
     */
    public function setTest($test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     * @return string(255)
     */
    public function getTest()
    {
        return $this->test;
    }
    
    // object => array
    public function getJsonData(){
        $var = get_object_vars($this);
        foreach($var as &$value){
           if(is_object($value) && method_exists($value,'getJsonData')){
              $value = $value->getJsonData();
           }
        }
        return $var;
     }

}
