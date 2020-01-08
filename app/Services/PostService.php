<?php


namespace App\Services;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class PostService implements PostServiceInterface
{
    public function getPostsByCategory(int $categoryId): ?Collection
    {

        /**          */
        $categoryPosts = Category::find($categoryId)->with('posts')->first();
        if (!$categoryPosts) {
            return null;
        }
        return $categoryPosts->posts;
    }

    public function getPosts(int $page, int $perPage = 10): LengthAwarePaginator
    {
        /** @var Model $posts */
        $posts = Post::paginate($perPage);
        return $posts;
    }

    public function getCategories(): ?Collection
    {
        return Category::all();
    }

    public function getPostById(int $post): Post
    {
        return Post::find($post);
    }

    public function createCategory(array $attributes): int
    {
        $category= new Category();
        $category->name=$attributes['name'];
        $category->is_active=true;
        $category->save();
    }

    public function createPost(array $attributes): int
    {
        $user=Auth::user();

        $post= new Post();
        $post->title=$attributes['title'];
        $post->preview=$attributes['preview'];
        $post->content=$attributes['content'];
        $post->is_published=false;
        $post->poster=$attributes['poster'];

        $category=Category::findOrFail($attributes['category_id']);

        $post->user()->associate($user);
        $post->category()->associate($category);
        $post->save();

        return $post->id;
    }

    public function publish(Post $post): void
    {
        $post->is_published=true;
//        $post->category()->associate($category);
        $post->save();
    }

    public function unPublish(Post $post): void
    {
        $post->is_published=false;
//        $post->category()->di($category);
        $post->save();
    }

    public function removePost(Post $post): void
    {
        // TODO: Implement removePost() method.
    }

    public function removeCategory(Post $post): void
    {
        // TODO: Implement removeCategory() method.
    }

}