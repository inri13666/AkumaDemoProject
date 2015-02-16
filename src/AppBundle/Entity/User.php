<?php
/**
 * User  : Nikita.Makarov
 * Date  : 2/16/15
 * Time  : 5:51 AM
 * E-Mail: nikita.makarov@effective-soft.com
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class Account
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="users")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class User extends \Akuma\Bundle\UserBundle\Entity\User
{

} 