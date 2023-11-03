<?php

namespace App\Controller;

use App\Repository\CompaniesRepository;
use App\Repository\ContactsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(CompaniesRepository $companiesRepository, ContactsRepository $contactsRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'contacts' => $contactsRepository->count([]),
            'companies' => $companiesRepository->count([])
        ]);
    }

    #[Route('/search', name: 'app_search')]
    public function search(Request $request, CompaniesRepository $companiesRepository, ContactsRepository $contactsRepository): Response
    {
        $type = $request->query->get('filter');
        $query = $request->query->get('search');
        $query = '%' . $query . '%';
        $result = [];
        if($type == "contacts"){
            $result = $contactsRepository->recherche($query);
        }else {
            $result = $companiesRepository->recherche($query);
        }
        return $this->render('main/result.html.twig', [
            'controller_name' => 'MainController',
            'results' => $result,
            'type' => $type,
            'query' => $query
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/removal', name: 'app_removal')]
    public function removal(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
