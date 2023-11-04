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
        if(empty($query)){
            $query = "";
        }
        $page = $request->query->get('page');
        $category = $request->query->get('category');
        $province = $request->query->get('provinces');
        $query = '%' . $query . '%';
        $result = [];
        

        //compute offset
        if(is_null($page)){
            $page = 1;
        }
        $offset = ($page - 1) * 50;

        if($type == "contacts"){
            $result = $contactsRepository->recherche($query, $offset);
        }else {
            if(!is_null($category)){
                $count = $companiesRepository->rechercheParCategorie($category, $province, $offset, true);
                $result = $companiesRepository->rechercheParCategorie($category, $province, $offset);
            }else {
                $count = $companiesRepository->recherche($query, $province, $offset, true);
                $result = $companiesRepository->recherche($query, $province, $offset);
            }
        }
        $count = $count[0];
        $max_pages  = intval($count['count'] / 50) + 1;
        return $this->render('main/result.html.twig', [
            'controller_name' => 'MainController',
            'results' => $result,
            'count' => $count,
            'provinces' => $province,
            'page'=> $page,
            'next_page' => $page < $max_pages ? ($page +1) : -1,
            'prev_page'=> $page == 0 ? 0 : ($page - 1),
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
