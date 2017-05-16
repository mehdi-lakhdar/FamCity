<?php

/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 08/05/2017
 * Time: 19:15
 */

namespace UserBundle\Entity ;
use FOS\UserBundle\Model\User as BaseUser ;
use Doctrine\ORM\Mapping as ORM ;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy ="AUTO")
     */
    protected $id ;

}