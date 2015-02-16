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
 * Class Role
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="role")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class Role extends \Akuma\Bundle\UserBundle\Entity\Role
{

} 