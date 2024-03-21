<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['sign_in'] = 'Auth/index';
$route['sign_up'] = 'Auth/register';


$route['dashboard'] = 'Dashboard/index';




$route['create'] = 'Blog/create_blog';
$route['createPost'] = 'Blog/createPost';

$route['allBlogs'] = 'Blog/allBlogs';
$route['deleteBlog'] = 'Blog/deleteBlog';   

$route['editBlog'] = 'Blog/editBlog';   
$route['update'] = 'Blog/updateBlog';

$route['blogCategories'] = 'Blog/categories';   
$route['addCategory'] = 'Blog/addCategory';   



$route['getBlogs'] = 'Api/getBlogs';
$route['getBlogsfromId'] = 'Api/getBlogsfromId';