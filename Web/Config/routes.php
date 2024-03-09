<?php

// homepage router
$router->get('/index.php', 'HomeController@homePage');
$router->get('/homepage', 'HomeController@homePage');

// user router
$router->get('/user','UserController@index');
$router->get('/user/login','UserController@loginUI');
$router->post('/user/login','UserController@login');
$router->get('/user/registery','UserController@registeryUI');
$router->post('/user/registery','UserController@registery');
$router->get('/user/logout','UserController@logout');
// $router->get('/user/profile','UserController@profile');
// $router->get('/user/edit','UserController@editUI');
// $router->post('/user/edit','UserController@edit');

// admin router
$router->get('/manager/user', 'Admin@userAccount');
$router->get('/manager/recipe', 'Admin@recipeManager');
$router->get('/manager/ingredient', 'Admin@ingredientsManager');
$router->get('/manager/recipe/add', 'Admin@addRecipeUI');

// ingredient router
$router->get('/ingredient','IngredientController@index');
$router->get('/ingredient/list','IngredientController@listAll');
$router->get('/ingredient/add','IngredientController@addUI');
$router->post('/ingredient/add','IngredientController@add');
$router->get('/ingredient/edit','IngredientController@editUI');
$router->post('/ingredient/edit','IngredientController@edit');
$router->get('/ingredient/delete','IngredientController@delete');

// recipe router
$router->get('/recipe','RecipeController@index');
$router->get('/recipe/list','RecipeController@list_all');
$router->get('/recipe/add','RecipeController@addUI');
$router->post('/recipe/add','RecipeController@add');
$router->get('/recipe/edit','RecipeController@editUI');
$router->post('/recipe/edit','RecipeController@edit');
$router->get('/recipe/delete','RecipeController@delete');
$router->get('/recipe/show','RecipeController@show');
$router->get('/recipe/search','RecipeController@search');