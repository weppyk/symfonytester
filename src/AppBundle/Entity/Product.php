<?php
//src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="product"
 */

class Product
{
    /**
     * @ORM\Column(type="integer"
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", Length=100)
     */
    protected $name;
    
    /**
     *
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    
    /**
     *
     * @ORM\Column(type="text")
     */
    protected $description;
}
