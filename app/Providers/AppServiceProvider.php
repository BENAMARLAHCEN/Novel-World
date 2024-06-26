<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repositories\Interfaces\IUserRepository::class,
            \App\Repositories\UserRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\IRoleRepository::class,
            \App\Repositories\RoleRepository::class
        );

        

        $this->app->bind(
            \App\Repositories\Interfaces\INovelRepository::class,
            \App\Repositories\NovelRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\IRankingRepository::class,
            \App\Repositories\RankingRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\IReviewRepository::class,
            \App\Repositories\ReviewRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\IChapterRepository::class,
            \App\Repositories\ChapterRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\IGenreRepository::class,
            \App\Repositories\GenreRepository::class);

        $this->app->bind(
            \App\Repositories\Interfaces\IProfileRepository::class,
            \App\Repositories\ProfileRepository::class
        );

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            Permission::get()->map(function ($permission) {
                Gate::define($permission->name, function ($user) use ($permission) {
                    return $user->hasPermissionTo($permission);
                });
            });
        } catch (\Exception $e) {
            report($e);
        }

        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) : ?>";
        });

        Blade::directive('endrole', function ($role) {
            return "<?php endif; ?>";
        });
    }
    
}
