<?php
namespace Company\DatabaseBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EmployeeRepository extends EntityRepository
{

    /**
    * Esta forma de construir en el innerjoin ya enlaza por los campos foreign keys
    * Me devuelve todos los cromos del tipo x y titulares o no
    *
    * @param string $email del usuario, int $tipo del cromo, int $titular si un cromo es titular o no 
    * @return colleccion de objetos cromo
    */
    /*public function findTeamSquadCards($email, $tipo =0, $titular=0, $plantilla_id)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('
            SELECT pj
            FROM DatabaseBundle:Cromo c INNER JOIN DatabaseBundle:PlantillaJugador pj WITH c.id = pj.cromo_id INNER JOIN DatabaseBundle:Plantilla p WITH p.id = pj.plantilla_id
            WHERE p.id=:id and c.tipo=:tipo and pj.titular=:titular
            ');

        $consulta->setParameter('id', $plantilla_id);
        $consulta->setParameter('tipo', $tipo);
        $consulta->setParameter('titular', $titular);

        return $consulta->getResult();
    }*/
}