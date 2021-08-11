<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function buy_facebook_followers()
    {
        return view('users.buy-facebook-followers');
    }

    public function buy_facebook_likes()
    {
        return view('users.buy-facebook-likes');
    }

    public function buy_facebook_share()
    {
        return view('users.buy-facebook-share');
    }

    public function buy_facebook_post_likes()
    {
        return view('users.buy-facebook-post-likes');
    }

    public function buy_instagram_followers()
    {
        return view('users.buy-instagram-followers');
    }

    public function buy_instagram_likes()
    {
        return view('users.buy-instagram-likes');
    }

    public function buy_tiktok_followers()
    {
        return view('users.buy-tiktok-followers');
    }

    public function buy_tiktok_likes()
    {
        return view('users.buy-tiktok-likes');
    }

    public function buy_tiktok_views()
    {
        return view('users.buy-tiktok-views');
    }

    public function buy_youtube_likes()
    {
        return view('users.buy-youtube-likes');
    }

    public function buy_youtube_subscribe()
    {
        return view('users.buy-youtube-subscribe');
    }

    public function buy_youtube_views()
    {
        return view('users.buy-youtube-views');
    }

    public function facebook_followers_order()
    {
        return view('users.facebook-followers-order');
    }

    public function facebook_likes_order()
    {
        return view('users.facebook-likes-order');
    }

    public function facebook_post_likes_order()
    {
        return view('users.facebook-post-likes-order');
    }

    public function facebook_share_order()
    {
        return view('users.facebook-post-share-order');
    }

    public function instagram_followers_order()
    {
        return view('users.instagram-followers-order');
    }

    public function instagram_photo_like_order()
    {
        return view('users.instagram-photo-like-order');
    }

    public function tiktok_followers_order()
    {
        return view('users.tiktok-followers-order');
    }

    public function tiktok_video_likes_order()
    {
        return view('users.tiktok-video-likes-order');
    }

    public function tiktok_video_views_order()
    {
        return view('users.tiktok-video-views-order');
    }

    public function youtube_subscribe_order()
    {
        return view('users.youtube-subscribe-order');
    }

    public function youtube_video_likes_order()
    {
        return view('users.youtube-video-likes-order');
    }

    public function youtube_views_order()
    {
        return view('users.youtube-views-order');
    }
}
