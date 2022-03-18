<?php

namespace App\Controller;
use App\Entity\Post;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PostType;
use Symfony\Component\Security\Core\User\UserInterface;
use Cocur\Slugify\Slugify;

class BlogController extends Controller
{
    /**
     * @Route("/", name="blog")
     */
    public function index()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)
                                    ->findBy([],['time'=>'DESC']);
        $latests = $this->getDoctrine()
                        ->getRepository(Post::class)
                        ->getLatest();
        return $this->render('blog/index.html.twig', ['posts'=>$posts,'latests'=>$latests]);
    }
    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findOneBy(['slug'=>$slug]);
        $latests = $this->getDoctrine()
            ->getRepository(Post::class)
            ->getLatest();
        return $this->render('blog/show.html.twig', ['post'=>$post,'latests'=>$latests]);
    }
    /**
     * @Route("/posts/{username}", name="user_posts")
     */
    public function renderUserPosts(User $user)
    {
        $posts = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findBy(['user'=>$user],['time'=>'DESC']);
        return $this->render('blog/user_posts.html.twig', ['posts'=>$posts,'user'=>$user]);
    }
    /**
     * @Route ("/add",name="post_add")
     */
    public function add(Request $request, UserInterface $user)
    {
        $post=new Post();
        $slugify= new Slugify();
        $post->setUser($user);
        $form=$this->createForm(PostType::class,$post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $post->setTime(new \DateTime());
            $post->setSlug($slugify->slugify($post->getTitle()));
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();
            $this->addFlash('notice','poste crée avec succés! ');//message lors de la cretion du compte
            return $this->redirectToRoute('blog');
        }
        return $this->render('blog/add.html.twig',['form'=>$form->createView()]);
    }
}
