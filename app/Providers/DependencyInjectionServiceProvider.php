<?php

namespace App\Providers;

use App\Models\Website\Donation;
use App\Models\Website\Post;
use App\Modules\Backend\Website\Blog\Repositories\BlogRepository;
use App\Modules\Backend\Website\Blog\Repositories\EloquentBlogRepository;
use App\Modules\Backend\Website\Cart\Repositories\CartRepository;
use App\Modules\Backend\Website\Cart\Repositories\EloquentCartRepository;
use App\Modules\Backend\Website\Categories\Repositories\CategoriesRepository;
use App\Modules\Backend\Website\Categories\Repositories\EloquentCategoriesRepository;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Category\Repositories\EloquentCategoryRepository;
use App\Modules\Backend\Website\Contact\Repositories\ContactRepository;
use App\Modules\Backend\Website\Contact\Repositories\EloquentContactRepository;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use App\Modules\Backend\Website\Donation\Repositories\EloquentDonationRepository;
use App\Modules\Backend\Website\Event\Repositories\EloquentEventRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use App\Modules\Backend\Website\Faculty\Repositories\EloquentFacultyRepository;
use App\Modules\Backend\Website\Faculty\Repositories\FacultyRepository;
use App\Modules\Backend\Website\Help\Repositories\EloquentHelpRepository;
use App\Modules\Backend\Website\Help\Repositories\HelpRepository;
use App\Modules\Backend\Website\Order\Repositories\EloquentOrderRepository;
use App\Modules\Backend\Website\Order\Repositories\OrderRepository;
use App\Modules\Backend\Website\OrderItem\Repositories\EloquentOrderItemRepository;
use App\Modules\Backend\Website\OrderItem\Repositories\OrderItemRepository;
use App\Modules\Backend\Website\Post\Repositories\EloquentPostRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Backend\Website\Product\Repositories\EloquentProductRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use App\Modules\Backend\Website\Request\Repositories\EloquentRequestRepository;
use App\Modules\Backend\Website\Request\Repositories\RequestRepository;
use App\Modules\Backend\Website\RequestQuote\Repositories\EloquentGetTouchRepository;
use App\Modules\Backend\Website\RequestQuote\Repositories\GetTouchRepository;
use App\Modules\Backend\Website\Semester\Repositories\EloquentSemesterRepository;
use App\Modules\Backend\Website\Semester\Repositories\SemesterRepository;
use Illuminate\Support\ServiceProvider;

class DependencyInjectionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * User dependency
         */

    }
}
