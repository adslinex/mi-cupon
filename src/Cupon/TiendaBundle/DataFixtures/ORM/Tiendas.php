<?php
// src/Cupon/TiendaBundle/DataFixtures/ORM/Tiendas.php
namespace Cupon\TiendaBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cupon\TiendaBundle\Entity\Tienda;
 
class Tiendas extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 20;
    }

    public function load(ObjectManager $manager)
    {
        // Obtener todas las ciudades de la base de datos
        $ciudades = $manager->getRepository('CiudadBundle:Ciudad')->findAll();

        foreach ($ciudades as $ciudad) {
        for ($i = 0; $i < 10; $i++) {
            $entidad = new Tienda();
 
            $entidad->setNombre('Tienda '.$i);
            $entidad->setLogin('login'.$i.$i);
            $entidad->setpassword('pswd'.$i.$i);
            $entidad->setSalt('salt'.$i);
            $entidad->setDescripcion('descripcion'.$i.$i);
            $entidad->setDireccion('direccion'.$i.$i);
            $entidad->setCiudad($ciudad);           
            
 
            $manager->persist($entidad);
        }
        }
 
        $manager->flush();
    }
}
