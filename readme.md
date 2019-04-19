<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Eloquent, Namespacing, and MVC
<p>php artisan make:model Project</p>
<p>php artisan tinker</p>
<p>In tinker:</p>
<p>App\Project::all()->first()</p>
<p>$project = new App\Project;</p>
<p>$project->title = 'My First Project';</p>
<p>$project->description = 'Lorem ipsum';</p>
<p>$project->save();</p>
<p>App\Project::first()->title;</p>
<p>App\Project::all()->map->title;</p>