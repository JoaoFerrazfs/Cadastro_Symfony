<?php
namespace App\Controller;

use App\Entity\Usuario;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Acme\StoreBundle\Entity\Product;





/**
 * @Route("/",name="web_usuario_")
 */
class UsuarioController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"},name="index")
     */
     public function index():Response
     {
        //  return $this->render("usuario/erro.html.twig",[
        //      'fulano'=>'Adriano'
        //  ]);
        return $this->render("usuario/form.html.twig");
     }

     /**
     * @Route("/salvar", methods={"POST"},name="salvar")
     */
    public function salvar(Request $request, ManagerRegistry $doctrine):Response
    {
        $data=$request->request->all();

        $usuario = new Usuario;

        
        

        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

       
        $doctrine = $doctrine->getManager();

        $doctrine->persist($usuario);

        $doctrine->flush();

        //if( $doctrine->contains($usuario))
        if( $usuario -> getId() ){
            return $this->render("usuario/sucesso.html.twig",[
                "fulano"=>$data['nome'],         

            ]);
        }else{
            return $this->render("usuario/erro.html.twig",[
                "fulano"=>$data['nome'],      
            ]);
        }


        
    }
}