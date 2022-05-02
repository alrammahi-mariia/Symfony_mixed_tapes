<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SongController extends AbstractController {
    
    #[Route('/api/songs/{id<\d+>}', methods:['GET'], name:'api_songs_get_one')]
    public function getSong(int $id, LoggerInterface $logger): Response {
        
        // dd($id);
        $song = [
            'id'=> $id,
            'name'=> 'Old Finnish song',
            'url'=> 'https://file-examples.com/storage/fef12739526267ac9a2b543/2017/11/file_example_MP3_700KB.mp3',
        ];
        $logger->info('Return API response for {song}',
        ['song' => $id,]
    );

       return new JsonResponse($song); 
        //   return $this->json($song);  
    }
}