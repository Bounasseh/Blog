<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Post;
use App\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CommentsController extends Controller
{
    /**
     * @Route("/comment/add", name="comment_add")
     */
    public function add(Request $request)
    {
        $post_id = $request->request->get('post_id');
        $user = $this->getUser();
        $post = $this->getDoctrine()->getRepository(Post::class)->find($post_id);

        $comment = new Comment();
        $comment->setBody($request->request->get('_body'));
        $comment->setUser($user);
        $comment->setPost($post);
        $comment->setCreated(new \DateTime());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($comment);
        $entityManager->flush();

        $post_slug = $post->getSlug();

        return $this->redirectToRoute('blog_show', ['slug' => $post_slug,]);
    }
}