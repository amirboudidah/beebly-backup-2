<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\Livre1Type;
use App\Repository\LivreRepository;
use App\Form\SearchType;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;
use mysql_xdevapi\Collection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;



#[Route('/catalogue')]
class CatalogueController extends AbstractController
{
    protected EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
//    #[Route('/', name: 'app_catalogue_index', methods: ['GET'])]
//    public function index(LivreRepository $livreRepository): Response
//    {
//        $searchForm = $this->createForm(SearchType::class);
//        $livre = null;
//        return $this->render('catalogue/index.html.twig', [
//            'livres' => $livreRepository->findAll(),
//            'searchForm' => $searchForm->createView(),
//            'livre' => $livre,
//        ]);
//    }


    #[Route('/{id}', name: 'app_catalogue_show', methods: ['GET'])]
    public function show(Livre $livre): Response
    {
        return $this->render('catalogue/show.html.twig', [
            'livre' => $livre,
        ]);
    }



    /**
     * @Route("/add-to-favorites/{id}", name="add_to_favorites")
     */
    public function addToFavorites(Request $request, Livre $livre, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $user->addLivre($livre);

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_livre_show', ['id' => $livre->getId()]);
    }
//
//    /**
//     * @Route("/catalogue/recherche", name="app_catalogue_recherche")
//     * @throws NonUniqueResultException
//     */
//
//    public function recherche(Request $request, LivreRepository $livreRepository)
//    {
//        $livre = null;
//        $searchForm = $this->createForm(SearchType::class);
//        $searchForm->handleRequest($request);
//
//        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
//            $title = $searchForm->get('title')->getData();
//            $livre = $livreRepository->findOneByTitle($title);
//        }
//
//        return $this->render('catalogue/recherche.html.twig', [
//            'searchForm' => $searchForm->createView(),
//            'livre' => $livre,
//        ]);
//
//
//    }

    #[Route('/serach', name: 'reqSearch_search', methods: ['GET', 'POST'])]
    public function search(Request $request,LivreRepository $repo): JsonResponse
    {
        $searchQuery = $request->query->get('q');

        if ($searchQuery) {
            $livre = $repo->search($searchQuery) ;
        } else {
            $livre = $repo->findAll();
        }

        $userArray = [];

        foreach ($livre as $liv) {
            $userArray[] = [
                'id'=>$liv->getId(),
                'titre' => $liv->getTitre(),
                'categorie' => $liv->getCategorie(),
                'description' => $liv->getDescriptionEtatLivre(),
                'prix' => $liv->getPrix(),


            ];
        }


        return new JsonResponse($userArray);
    }

    #[Route('/', name: 'app_catalogue_index', methods: ['GET', 'POST'])]
    public function livSearch(Request $request, EntityManagerInterface $entityManager,LivreRepository $repo): Response
    {

        $searchQuery = $request->query->get('q');

        if ($searchQuery) {
            $liv = $repo->search($searchQuery);
        }
        else {
            $liv = $entityManager->getRepository(Livre::class)->findAll();
        }


//
//        $pagination =$paginator->paginate(
//            $userRepository->paginationQuery(),
//            $request->query->get('page',1),8
//
//        );


        return $this->render('catalogue/index.html.twig', [
            'livres' => $liv,
            'searchQuery' => $searchQuery,
        ]);
    }




























}
