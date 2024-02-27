<?php

namespace Phuon\Ontap\Controllers\Client;

use Phuon\Ontap\Commons\Controller;
use Phuon\Ontap\Models\Post;


class PostController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post;
    }
    public function show($id)
    {
        $post = $this->post->getByID($id);
        $posttop6trending = $this->post->getTop6Trending();
        $postTop1 = $this->post->getFirstLatest();
        // debug($postTop1);

        return $this->renderViewClient(
            'post-show',
            [
                'post' =>  $post,
                'posttop6trending' => $posttop6trending,
                'postTop1' => $postTop1

            ]
        );
    }
}