<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Entity\Item;
use App\Repository\ItemRepository;
use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;


class PanierController extends AbstractController
{

    #[Route('/panier', name: 'app_panier')]
    public function index(SessionInterface $session, LivreRepository $livreRepository): Response
    {
        $panier = $session->get('panier', []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity){
            $panierWithData[]= [
                'livre' => $livreRepository->find($id),
                'quantity' => $quantity
            ];

        }

        $total =0;
        foreach ($panierWithData as $item){
            $totalItem = $item['livre']->getPrix() * $item['quantity'];
            $total += $totalItem;


        }
        return $this->render('panier/index.html.twig', [
            'items' => $panierWithData,
            'total' => $total
        ]);
    }

     #[Route('/panier/add/{id}', name: 'panier_add')]
    public function add($id, SessionInterface $session){

        $panier =$session->get('panier',[]);
        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;;
        }
        $session->set('panier',$panier);
       return $this->redirectToRoute("app_panier");

     }

    #[Route('/panier/remove/{id}', name: 'panier_remove')]
    public function remove($id, SessionInterface $session){
        $panier = $session->get('panier',[]);

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set('panier',$panier);
        return $this->redirectToRoute("app_panier");
     }

    /**
     * @Route("/panier/pdf", name="panier_pdf", methods={"GET", "POST"})
     */
    public function pdf(ItemRepository $itemRepository,SessionInterface $session, LivreRepository $livreRepository)
    {





        //



        $panier = $session->get('panier', []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity){
            $panierWithData[]= [
                'livre' => $livreRepository->find($id),
                'quantity' => $quantity
            ];

        }

        $total =0;
        foreach ($panierWithData as $item){
            $totalItem = $item['livre']->getPrix() * $item['quantity'];
            $total += $totalItem;


        }


        //
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('panier/index2.html.twig', [
            'items' => $panierWithData,
            'total' => $total
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
  //      $dompdf->setPaper('A3', 'portrait');
        $dompdf->render();

        $pdf = $dompdf->output();

// Envoyer le fichier PDF en réponse à la requête HTTP
        return new Response(
            $pdf,
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="document.pdf"',
            ]
        );
    }

    /**
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout(Request $request)
    {
        \Stripe\Stripe::setApiKey('your stripe key');

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Total Commande',
                    ],
                    'unit_amount' => $this->getTotal($request->getSession()->get('panier', []))*100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        return new JsonResponse([ 'id' => $session->id ]);
    }
    /**
     * @Route("/success", name="success")
     */
    public function success( \Swift_Mailer $mailer)
    {

        $message = (new \Swift_Message('New'))

            ->setFrom('zemni.norchene@gmail.com')

            ->setTo('zemni.norchene@gmail.com')

            ->setSubject('Votre commande a été enregistrée !')


            ->setBody(
                $this->renderView(
                    'Emails/Commande.html.twig'),

                'text/html'
            );


        $mailer->send($message);
        $this->addFlash('message', 'le message a bien ete envoye');
        return $this->render('article/Success.html.twig');
    }
    private function getTotal($panier)
    {
        // Calculer le total du panier
        // ...
    }
    /**
     * @Route("/error", name="error")
     */
    public function error()
    {
        return $this->render('article/Error.html.twig');
    }




}
