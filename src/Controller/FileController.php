<?php

namespace App\Controller;

use Throwable;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FileController extends AbstractController
{
    /**
     * @Route("/file", name="file")
     */
    public function index(Request $request): Response
    {   
        $files = $request->files->all();
        foreach ($files as $value) {
            $file = new File($value);
            try {
                $file->move($this->getParameter('images_directory'),'fichier.png');
            } catch (\Throwable $th) {
                return $this->json(['message'=>$th->getMessage()],401);
            }
           return $this->json(['message'=>'Telechargement succed'],200);
        }
        
    }
}
