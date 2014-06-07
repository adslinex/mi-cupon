<?php

namespace Cupon\UsuarioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Cupon\CiudadBundle\Entity\Ciudad;
use Cupon\UsuarioBundle\Entity\Usuario;


class Usuarios extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    public function getOrder()
    {
        return 40;
    }
    private $container;
 
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
 
    public function load(ObjectManager $manager)
    {
        // Obtener todas las ciudades de la base de datos
        $ciudades = $manager->getRepository('CiudadBundle:Ciudad')->findAll();

        foreach ($ciudades as $ciudad) {
        for ($i = 0; $i < 10; $i++) {
            $usuario = new Usuario();

            $usuario->setNombre('Pedro'.$i);
            $usuario->setApellidos($ciudad.'guez');
            $usuario->setEmail('Pedro'.$i.$ciudad.'guez'.'@localhost');


   
 
            $passwordEnClaro = 'usuario'.$i;
            $salt = md5(time());
 
            $encoder = $this->container->get('security.encoder_factory')
                            ->getEncoder($usuario);
            $password = $encoder->encodePassword($passwordEnClaro, $salt);
 
            $usuario->setPassword($password);
            $usuario->setSalt($salt);


            $usuario->setDireccion('Calle '.$i);
            $usuario->setCiudad($ciudad);

            // El 60% de los usuarios permite email
            $usuario->setPermiteEmail((rand(1, 1000) % 10) < 6);

            $usuario->setFechaAlta(new \DateTime('now - '.rand(1, 150).' days'));
            $usuario->setFechaNacimiento(new \DateTime('now - '.rand(7000, 20000).' days'));

            $dni = substr(rand(), 0, 8);
            $usuario->setDni($dni.substr("TRWAGMYFPDXBNJZSQVHLCKE", strtr($dni, "XYZ", "012")%23, 1));

            $usuario->setNumeroTarjeta('1234567890123456');


           $manager->persist($usuario);
        }
        }
 
        $manager->flush();
    }
}
