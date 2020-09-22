<?php

namespace WordpressClient;

use Zttp\Zttp;
use Illuminate\Support\Facades\Http;

/**
 * Delete this folder and have fun
 * creating your package.
 */
class WordpressClient
{
    public function __construct($base_url)
    {
        $this->url = $base_url;
    }

    private function url($path)
    {
        return $this->url.$path;
    }

    public function posts(array $params = [])
    {
        return Http::get($this->url('/posts'), $params);
    }

    public function categories(array $params = [])
    {
        return Http::get($this->url('/categories'), $params);
    }

    public function tags(array $params = [])
    {
        return Http::get($this->url('/tags'), $params);
    }

    public function pages(array $params = [])
    {
        return Http::get($this->url('/pages'), $params);
    }

    public function taxonomies(array $params = [])
    {
        return Http::get($this->url('/taxonomies'), $params);
    }

    public function media(array $params = [])
    {
        return Http::get($this->url('/media'), $params);
    }

    public function users(array $params = [])
    {
        return Http::get($this->url('/users'), $params);
    }

    public function types(array $params = [])
    {
        return Http::get($this->url('/types'), $params);
    }

    public function custom($endpoint, array $params = [])
    {
        return Http::get($this->url('/'.$endpoint), $params);
    }

    public function statuses(array $params = [], string $status = '')
    {
        $suffix = $status ? "/{$status}" : '';
        return Http::get($this->url("/statuses{$suffix}"), $params);
    }
}
