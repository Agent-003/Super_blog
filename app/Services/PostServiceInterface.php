<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface PostServiceInterface
{
    /**
     * get posts by category
     *
     * @param int $categoryId
     * @return Collection
     */
    public function getPostsByCategory(int $categoryId): ?Collection;

    public function getPosts(int $page, int $perPage=10): LengthAwarePaginator;

    public function getCategories(): ?Collection;

    /**
     * Get post by id
     *
     * @param int $post
     * @return Post
     */
    public function getPostById(int $post): Post;

    /**
     * Create category
     *
     * @param array $attributes
     * @return int
     */
    public function createCategory(array $attributes): int;

    /**
     * Create post.
     *
     * @param array $attributes
     * @return int
     */
    public function createPost(array $attributes): int;

    /**
     * Publishing method
     *
     * @param Post $post
     * @param Category $category
     */
    public function publish(Post $post): void;

    /**
     * Unpublishing method
     *
     * @param Post $post
     * @param Category $category
     */
    public function unPublish(Post $post): void;


    /**
     * Remove post.
     *
     * @param Post $post
     */
    public function removePost(Post $post): void;

    /**
     * Remove category.
     *
     * @param Post $post
     */
    public function removeCategory(Post $post): void;
}