<?php

use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExpertController as AdminExpertController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PublicationController as AdminPublicationController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\NetworkController as AdminNetworkController;
use App\Http\Controllers\Admin\TeamController as AdminTeamController;
use App\Http\Controllers\Admin\BlockController as AdminBlockController;
use App\Http\Controllers\Admin\LibraryRegistrationController as AdminLibraryRegistrationController;
use App\Http\Controllers\Admin\LibraryTicketController as AdminLibraryTicketController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\CurrentEventController;
use App\Http\Controllers\Admin\DegreeController;
use App\Http\Controllers\Admin\EmailController as AdminEmailController;
use App\Http\Controllers\Admin\SettingsController as AdminSettingsController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\DonatorController as AdminDonatorController;
use App\Http\Controllers\Admin\EventRegistrationController;
use App\Http\Controllers\Admin\EventTypeController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\MediabankController;
use App\Http\Controllers\Admin\PublicationTypeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\Admin\WinnerController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\AgendaController as ControllersAgendaController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SingleProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect()->route('home', [
        'locale' => 'ru'
    ]);
});

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('tags', TagController::class)->except(['show'])->names('admin.tags');
    Route::resource('agendas', AgendaController::class)->names('admin.agendas');
    Route::resource('news', AdminNewsController::class)->names('admin.news');
    Route::resource('experts', AdminExpertController::class)->names('admin.experts');
    Route::resource('publication_types', PublicationTypeController::class)->except(['show'])->names('admin.publication_types');
    Route::resource('publications', AdminPublicationController::class)->names('admin.publications');
    Route::resource('/events', AdminEventController::class)->names('admin.events');
    Route::get('events/export/{id}', [AdminEventController::class, 'exportRegistrations'])->name('admin.events.export');
    Route::resource('/projects', AdminProjectController::class)->except('show')->names('admin.projects');
    Route::resource('/network', AdminNetworkController::class)->only('index', 'store')->names('admin.networks');
    Route::resource('/teams', AdminTeamController::class)->except('show')->names('admin.teams');
    Route::resource('blocks', AdminBlockController::class)->names('admin.blocks');
    Route::resource('books', AdminBookController::class)->except('show')->names('admin.books');
    Route::resource('emails', AdminEmailController::class)->names('admin.emails');
    Route::resource('settings', AdminSettingsController::class)->names('admin.settings');
    Route::resource('main-page', MainPageController::class)->names('admin.main-page');
    Route::resource('mediabank', MediabankController::class)->except('show')->names('admin.mediabanks');
    Route::resource('current-event', CurrentEventController::class)->only('index', 'store')->names('admin.current-event');

    Route::resource('library-registration', AdminLibraryRegistrationController::class)->names('admin.library-registration');
    Route::post('library/{id}/confirm', [AdminLibraryRegistrationController::class, 'confirm'])->name('admin.library-regs.confirm');
    Route::resource('library-tickets', AdminLibraryTicketController::class)->names('admin.library-tickets');

    Route::resource('event-regs', EventRegistrationController::class)->except('show')->names('admin.event-regs');
    Route::get('event-regs/{id}/self-declined', [EventRegistrationController::class, 'indexSelfDeclined'])->name('event-regs.self-declined');
    Route::get('event-regs/{id}/admin-declined', [EventRegistrationController::class, 'indexAdminDeclined'])->name('event-regs.admin-declined');

    Route::resource('/pages', AdminPageController::class)->names('admin.pages');
    Route::resource('partners', AdminPartnerController::class)->names('admin.partners');
    Route::resource('donators', AdminDonatorController::class)->names('admin.donators');
    Route::resource('winners', WinnerController::class)->except('show')->names('admin.winners');
    Route::resource('works', WorkController::class)->except('show')->names('admin.works');
    Route::resource('event-types', EventTypeController::class)->except('show')->names('admin.event_types');
    Route::resource('languages', LanguageController::class)->except('show')->names('admin.languages');
    Route::resource('universities', UniversityController::class)->except('show')->names('admin.universities');
    Route::resource('degrees', DegreeController::class)->except('show')->names('admin.degrees');
    Route::post('/pages/update/ajax/{id}', [AdminPageController::class, 'updateByAjax'])->name('admin.pages.ajax');
    Route::post('/is_main', [DashboardController::class, 'is_main']);
});

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });



Route::group([
    'prefix' => '{locale}',
    'middleware' => 'Language'
], function(){
    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::resource('/posts', PostController::class)->names('posts');
    Route::resource('/news', NewsController::class)->only(['index', 'show'])->names('news');
    Route::resource('/experts', ExpertController::class)->only('index')->names('experts');
    Route::resource('/events', EventController::class)->only('index', 'show')->names('events');
    Route::post('/events-register', [EventController::class, 'register'])->name('events.register');
    Route::get('/event_material_download', [EventController::class, 'download'])->name('events.download');
    Route::resource('/agenda', ControllersAgendaController::class)->only('index', 'show')->names('agendas');
    Route::resource('/publications', PublicationController::class)->only(['index', 'show'])->names('publications');
    Route::get('our-team', [TeamController::class, 'index'])->name('team.index');
    Route::resource('experts', ExpertController::class)->only(['index', 'show'])->names('experts');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/{slug}', [ProjectController::class, 'showBySlug'])->name('projects.slug');
    Route::get('/single-projects/{id}', [SingleProjectController::class, 'show'])->name('projects.show');
    // Route::resource('projects', ProjectController::class)->only(['index', 'show'])->names('projects');
    Route::get('/library', [LibraryController::class, 'index'])->name('library.index');
    Route::post('/library-recommend', [LibraryController::class, 'recommend'])->name('library.recommend');
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::get('/search', [SearchController::class, 'search'])->name('search.index');

    Route::get('/ajax/{lang}/upcoming_events', [AjaxController::class, 'upcoming_events']);
    Route::get('/ajax/{lang}/past_events', [AjaxController::class, 'past_events']);
    Route::get('/ajax/{lang}/other_events', [AjaxController::class, 'other_events']);
    Route::get('/ajax/{lang}/other_news', [AjaxController::class, 'other_news']);
    Route::get('/ajax/{lang}/other_publications', [AjaxController::class, 'other_publications']);
    Route::get('/ajax/media_video', [AjaxController::class, 'media_video']);
    Route::get('/ajax/media_image', [AjaxController::class, 'media_image']);

    Route::get('people', [PageController::class, 'people'])->name('pages.people');
    Route::get('{path?}', [PageController::class, 'show'])->name('pages.show')->where('path', '.+');
});
