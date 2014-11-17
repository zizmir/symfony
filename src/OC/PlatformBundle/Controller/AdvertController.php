<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
    
    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
    }

   public function viewAction($id , Request $request)
   {
       return $this->render(
               'OCPlatformBundle:Advert:view.html.twig',array('id' => $id)
               );
//        $tag = $request->query->get('tag');
//        
//        return new Response("affichage de l'annonce d'id : ". $id." avec le tag : ". $tag);
//    }
//    public function indexAction()
//    {
//        $url = $this->get('router')->generate(
//                'oc_platform_view',
//                array('id'=> 5)
//                );
//        return new Response("L'URL de l'annonce d'id 5 est: ".$url);
   }
}