<?php
/**
* @file Posts.models.php
* @synopsis  wp_posts表
* @author Yee, <rlk002@gmail.com>
* @version 1.0
* @date 2016-05-09 11:43:49
*/

class Posts extends Illuminate\Database\Eloquent\Model
{
	protected $table = 'wp_posts';
	public $timestamp = false;
}
