<?php

namespace App\Controller;

use App\Repository\PostRepository;
use App\Repository\SellerRepository;
use Doctrine\Entity;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   /* #[Route('/', name: 'app_home')]
    public function index(SellerRepository $sellerRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'sellers' => $sellerRepository->findAll(),
        ]);
    }
    #[Route('/book/{id}/{week}', name: 'app_seller_book', defaults: ["week"=> null], methods: ['GET', 'POST'])]
    public function book(SellerRepository $sellerRepository, $id, ?int $week, EntityManagerInterface $entityManager): Response
    {
        $currentWeek = $week ?? date('w');
        $seller = $sellerRepository->findOneBy(['id'=>$id]);
        $books = $seller->getBooks();
        $bookedSlot = [];

        foreach ($books as $book){
            if($book->getWeek() == $currentWeek){
                $bookedSlot[$book->getDay()][$book->getTime()] = true;
            }
        }

    }
   */

    #[Route('/Post', name: 'app_post')]
    public function  posts(PostRepository $postRepository): Response
    {
        return $this->render('home/post.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }
}
