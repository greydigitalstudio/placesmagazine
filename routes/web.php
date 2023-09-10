<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\JournalController;


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

Route::get('/', [ClientController::class, 'index'])->name('client-index');

Route::get('/events', [ClientController::class, 'events'])->name('client-events');
Route::get('/events/{id}', [ClientController::class, 'event_single'])->name('client-event-single');



Route::get('/journal', [ClientController::class, 'journal'])->name('client-journal');
Route::get('/journal/{id}', [ClientController::class, 'journal_single'])->name('client-journal-single');

Route::get('/search', [ClientController::class, 'search'])->name('client-search');
Route::get('/favorites', [ClientController::class, 'favorites'])->name('client-favorites');



Auth::routes();



// Route::get('/login', 'App\Http\Controllers\authentications\LoginBasic@index')->name('login');
// Route::get('/register', 'App\Http\Controllers\authentications\RegisterBasic@index')->name('register');



Route::group([
  'middleware' => 'auth'
], function () {
  // Main Page Route
  Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin-index');

  // Users Page route
  Route::get('/admin/users/management', [UserManagement::class, 'UserManagement'])->name('laravel-example-user-management');

  Route::post('/admin/events/store', [EventController::class, 'store'])->name('admin-events-store');
  Route::get('/admin/events', [EventController::class, 'index'])->name('admin-events');
  Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin-events-create');
  Route::get('/admin/events/{id}', [EventController::class, 'edit'])->name('admin-events-edit');
  Route::put('/admin/events/{id}', [EventController::class, 'update'])->name('admin-events-update');
  Route::delete('/admin/events/{id}', [EventController::class, 'destroy'])->name('admin-events-destroy');



  Route::get('/admin/tags', [TagController::class, 'index'])->name('admin-tags');
  Route::post('/admin/tags', [TagController::class, 'store'])->name('admin-tags-store');
  Route::put('/admin/tags/{id}', [TagController::class, 'update'])->name('admin-tags-update');
  Route::delete('/admin/tags/{id}', [TagController::class, 'destroy'])->name('admin-tags-destroy');



  Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin-categories');
  Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin-category-store');
  Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])->name('admin-category-update');
  Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin-category-destroy');


  Route::get('/admin/organizers', [OrganizerController::class, 'index'])->name('admin-organizers');
  Route::post('/admin/organizers', [OrganizerController::class, 'store'])->name('admin-organizer-store');
  Route::put('/admin/organizers/{id}', [OrganizerController::class, 'update'])->name('admin-organizer-update');
  Route::delete('/admin/organizers/{id}', [OrganizerController::class, 'destroy'])->name('admin-organizer-destroy');




  Route::post('/admin/journals/store', [JournalController::class, 'store'])->name('admin-journals-store');
  Route::get('/admin/journals', [JournalController::class, 'index'])->name('admin-journals');
  Route::get('/admin/journals/create', [JournalController::class, 'create'])->name('admin-journals-create');
  Route::get('/admin/journals/{id}', [JournalController::class, 'edit'])->name('admin-journals-edit');
  Route::put('/admin/journals/{id}', [JournalController::class, 'update'])->name('admin-journals-update');
  Route::delete('/admin/journals/{id}', [JournalController::class, 'destroy'])->name('admin-journals-destroy');





  // Route::get('/', 'App\Http\Controllers\dashboard\Analytics@index')->name('dashboard-analytics');
  Route::get('/dashboard/analytics', 'App\Http\Controllers\dashboard\Analytics@index')->name('dashboard-analytics');
  Route::get('/dashboard/crm', 'App\Http\Controllers\dashboard\Crm@index')->name('dashboard-crm');
  Route::get('/dashboard/ecommerce', 'App\Http\Controllers\dashboard\Ecommerce@index')->name('dashboard-ecommerce');

  // locale
  Route::get('lang/{locale}', 'App\Http\Controllers\language\LanguageController@swap');

  // layout
  Route::get('/layouts/collapsed-menu', 'App\Http\Controllers\layouts\CollapsedMenu@index')->name('layouts-collapsed-menu');
  Route::get('/layouts/content-navbar', 'App\Http\Controllers\layouts\ContentNavbar@index')->name('layouts-content-navbar');
  Route::get('/layouts/content-nav-sidebar', 'App\Http\Controllers\layouts\ContentNavSidebar@index')->name('layouts-content-nav-sidebar');
  Route::get('/layouts/navbar-full', 'App\Http\Controllers\layouts\NavbarFull@index')->name('layouts-navbar-full');
  Route::get('/layouts/navbar-full-sidebar', 'App\Http\Controllers\layouts\NavbarFullSidebar@index')->name('layouts-navbar-full-sidebar');
  Route::get('/layouts/horizontal', 'App\Http\Controllers\layouts\Horizontal@index')->name('dashboard-analytics');
  Route::get('/layouts/vertical', 'App\Http\Controllers\layouts\Vertical@index')->name('dashboard-analytics');
  Route::get('/layouts/without-menu', 'App\Http\Controllers\layouts\WithoutMenu@index')->name('layouts-without-menu');
  Route::get('/layouts/without-navbar', 'App\Http\Controllers\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
  Route::get('/layouts/fluid', 'App\Http\Controllers\layouts\Fluid@index')->name('layouts-fluid');
  Route::get('/layouts/container', 'App\Http\Controllers\layouts\Container@index')->name('layouts-container');
  Route::get('/layouts/blank', 'App\Http\Controllers\layouts\Blank@index')->name('layouts-blank');

  // apps
  Route::get('/app/email', 'App\Http\Controllers\apps\Email@index')->name('app-email');
  Route::get('/app/chat', 'App\Http\Controllers\apps\Chat@index')->name('app-chat');
  Route::get('/app/calendar', 'App\Http\Controllers\apps\Calendar@index')->name('app-calendar');
  Route::get('/app/kanban', 'App\Http\Controllers\apps\Kanban@index')->name('app-kanban');
  Route::get('/app/invoice/list', 'App\Http\Controllers\apps\InvoiceList@index')->name('app-invoice-list');
  Route::get('/app/invoice/preview', 'App\Http\Controllers\apps\InvoicePreview@index')->name('app-invoice-preview');
  Route::get('/app/invoice/print', 'App\Http\Controllers\apps\InvoicePrint@index')->name('app-invoice-print');
  Route::get('/app/invoice/edit', 'App\Http\Controllers\apps\InvoiceEdit@index')->name('app-invoice-edit');
  Route::get('/app/invoice/add', 'App\Http\Controllers\apps\InvoiceAdd@index')->name('app-invoice-add');
  Route::get('/app/user/list', 'App\Http\Controllers\apps\UserList@index')->name('app-user-list');
  Route::get('/app/user/view/account', 'App\Http\Controllers\apps\UserViewAccount@index')->name('app-user-view-account');
  Route::get('/app/user/view/security', 'App\Http\Controllers\apps\UserViewSecurity@index')->name('app-user-view-security');
  Route::get('/app/user/view/billing', 'App\Http\Controllers\apps\UserViewBilling@index')->name('app-user-view-billing');
  Route::get('/app/user/view/notifications', 'App\Http\Controllers\apps\UserViewNotifications@index')->name('app-user-view-notifications');
  Route::get('/app/user/view/connections', 'App\Http\Controllers\apps\UserViewConnections@index')->name('app-user-view-connections');
  Route::get('/app/access-roles', 'App\Http\Controllers\apps\AccessRoles@index')->name('app-access-roles');
  Route::get('/app/access-permission', 'App\Http\Controllers\apps\AccessPermission@index')->name('app-access-permission');

  // pages
  Route::get('/pages/profile-user', 'App\Http\Controllers\pages\UserProfile@index')->name('pages-profile-user');
  Route::get('/pages/profile-teams', 'App\Http\Controllers\pages\UserTeams@index')->name('pages-profile-teams');
  Route::get('/pages/profile-projects', 'App\Http\Controllers\pages\UserProjects@index')->name('pages-profile-projects');
  Route::get('/pages/profile-connections', 'App\Http\Controllers\pages\UserConnections@index')->name('pages-profile-connections');
  Route::get('/pages/account-settings-account', 'App\Http\Controllers\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
  Route::get('/pages/account-settings-security', 'App\Http\Controllers\pages\AccountSettingsSecurity@index')->name('pages-account-settings-security');
  Route::get('/pages/account-settings-billing', 'App\Http\Controllers\pages\AccountSettingsBilling@index')->name('pages-account-settings-billing');
  Route::get('/pages/account-settings-notifications', 'App\Http\Controllers\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
  Route::get('/pages/account-settings-connections', 'App\Http\Controllers\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
  Route::get('/pages/faq', 'App\Http\Controllers\pages\Faq@index')->name('pages-faq');
  Route::get('/pages/help-center-landing', 'App\Http\Controllers\pages\HelpCenterLanding@index')->name('pages-help-center-landing');
  Route::get('/pages/help-center-categories', 'App\Http\Controllers\pages\HelpCenterCategories@index')->name('pages-help-center-categories');
  Route::get('/pages/help-center-article', 'App\Http\Controllers\pages\HelpCenterArticle@index')->name('pages-help-center-article');
  Route::get('/pages/pricing', 'App\Http\Controllers\pages\Pricing@index')->name('pages-pricing');
  Route::get('/pages/pricing-front', 'App\Http\Controllers\pages\PricingFront@index')->name('pages-pricing-front');
  Route::get('/pages/misc-error', 'App\Http\Controllers\pages\MiscError@index')->name('pages-misc-error');
  Route::get('/pages/misc-under-maintenance', 'App\Http\Controllers\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');
  Route::get('/pages/misc-comingsoon', 'App\Http\Controllers\pages\MiscComingSoon@index')->name('pages-misc-comingsoon');
  Route::get('/pages/misc-not-authorized', 'App\Http\Controllers\pages\MiscNotAuthorized@index')->name('pages-misc-not-authorized');

  // authentication
  Route::get('/auth/login-front', 'App\Http\Controllers\authentications\LoginBasic@index')->name('auth-login-front');
  Route::get('/auth/login-cover', 'App\Http\Controllers\authentications\LoginCover@index')->name('auth-login-cover');
  Route::get('/auth/register-front', 'App\Http\Controllers\authentications\RegisterFront@index')->name('auth-register-front');

  Route::get('/auth/register-cover', 'App\Http\Controllers\authentications\RegisterCover@index')->name('auth-register-cover');
  Route::get('/auth/register-multisteps', 'App\Http\Controllers\authentications\RegisterMultiSteps@index')->name('auth-register-multisteps');
  Route::get('/auth/verify-email-front', 'App\Http\Controllers\authentications\VerifyEmailFront@index')->name('auth-verify-email-front');
  Route::get('/auth/verify-email-basic', 'App\Http\Controllers\authentications\VerifyEmailBasic@index')->name('auth-verify-email-basic');
  Route::get('/auth/verify-email-cover', 'App\Http\Controllers\authentications\VerifyEmailCover@index')->name('auth-verify-email-cover');
  Route::get('/auth/reset-password-front', 'App\Http\Controllers\authentications\ResetPasswordFront@index')->name('auth-reset-password-front');
  Route::get('/auth/reset-password-basic', 'App\Http\Controllers\authentications\ResetPasswordBasic@index')->name('auth-reset-password-basic');
  Route::get('/auth/reset-password-cover', 'App\Http\Controllers\authentications\ResetPasswordCover@index')->name('auth-reset-password-cover');
  Route::get('/auth/forgot-password-front', 'App\Http\Controllers\authentications\ForgotPasswordFront@index')->name('auth-forgot-password-front');
  Route::get('/auth/forgot-password-basic', 'App\Http\Controllers\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');
  Route::get('/auth/forgot-password-cover', 'App\Http\Controllers\authentications\ForgotPasswordCover@index')->name('auth-forgot-password-cover');
  Route::get('/auth/two-steps-front', 'App\Http\Controllers\authentications\TwoStepsFront@index')->name('auth-two-steps-front');
  Route::get('/auth/two-steps-basic', 'App\Http\Controllers\authentications\TwoStepsBasic@index')->name('auth-two-steps-basic');
  Route::get('/auth/two-steps-cover', 'App\Http\Controllers\authentications\TwoStepsCover@index')->name('auth-two-steps-cover');

  // wizard example
  Route::get('/wizard/ex-checkout', 'App\Http\Controllers\wizard_example\Checkout@index')->name('wizard-ex-checkout');
  Route::get('/wizard/ex-property-listing', 'App\Http\Controllers\wizard_example\PropertyListing@index')->name('wizard-ex-property-listing');
  Route::get('/wizard/ex-create-deal', 'App\Http\Controllers\wizard_example\CreateDeal@index')->name('wizard-ex-create-deal');

  // modal
  Route::get('/modal-examples', 'App\Http\Controllers\modal\ModalExample@index')->name('modal-examples');

  // cards
  Route::get('/cards/basic', 'App\Http\Controllers\cards\CardBasic@index')->name('cards-basic');
  Route::get('/cards/advance', 'App\Http\Controllers\cards\CardAdvance@index')->name('cards-advance');
  Route::get('/cards/statistics', 'App\Http\Controllers\cards\CardStatistics@index')->name('cards-statistics');
  Route::get('/cards/analytics', 'App\Http\Controllers\cards\CardAnalytics@index')->name('cards-analytics');
  Route::get('/cards/actions', 'App\Http\Controllers\cards\CardActions@index')->name('cards-actions');

  // User Interface
  Route::get('/ui/accordion', 'App\Http\Controllers\user_interface\Accordion@index')->name('ui-accordion');
  Route::get('/ui/alerts', 'App\Http\Controllers\user_interface\Alerts@index')->name('ui-alerts');
  Route::get('/ui/badges', 'App\Http\Controllers\user_interface\Badges@index')->name('ui-badges');
  Route::get('/ui/buttons', 'App\Http\Controllers\user_interface\Buttons@index')->name('ui-buttons');
  Route::get('/ui/carousel', 'App\Http\Controllers\user_interface\Carousel@index')->name('ui-carousel');
  Route::get('/ui/collapse', 'App\Http\Controllers\user_interface\Collapse@index')->name('ui-collapse');
  Route::get('/ui/dropdowns', 'App\Http\Controllers\user_interface\Dropdowns@index')->name('ui-dropdowns');
  Route::get('/ui/footer', 'App\Http\Controllers\user_interface\Footer@index')->name('ui-footer');
  Route::get('/ui/list-groups', 'App\Http\Controllers\user_interface\ListGroups@index')->name('ui-list-groups');
  Route::get('/ui/modals', 'App\Http\Controllers\user_interface\Modals@index')->name('ui-modals');
  Route::get('/ui/navbar', 'App\Http\Controllers\user_interface\Navbar@index')->name('ui-navbar');
  Route::get('/ui/offcanvas', 'App\Http\Controllers\user_interface\Offcanvas@index')->name('ui-offcanvas');
  Route::get('/ui/pagination-breadcrumbs', 'App\Http\Controllers\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
  Route::get('/ui/progress', 'App\Http\Controllers\user_interface\Progress@index')->name('ui-progress');
  Route::get('/ui/spinners', 'App\Http\Controllers\user_interface\Spinners@index')->name('ui-spinners');
  Route::get('/ui/tabs-pills', 'App\Http\Controllers\user_interface\TabsPills@index')->name('ui-tabs-pills');
  Route::get('/ui/toasts', 'App\Http\Controllers\user_interface\Toasts@index')->name('ui-toasts');
  Route::get('/ui/tooltips-popovers', 'App\Http\Controllers\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
  Route::get('/ui/typography', 'App\Http\Controllers\user_interface\Typography@index')->name('ui-typography');

  // extended ui
  Route::get('/extended/ui-avatar', 'App\Http\Controllers\extended_ui\Avatar@index')->name('extended-ui-avatar');
  Route::get('/extended/ui-blockui', 'App\Http\Controllers\extended_ui\BlockUI@index')->name('extended-ui-blockui');
  Route::get('/extended/ui-drag-and-drop', 'App\Http\Controllers\extended_ui\DragAndDrop@index')->name('extended-ui-drag-and-drop');
  Route::get('/extended/ui-media-player', 'App\Http\Controllers\extended_ui\MediaPlayer@index')->name('extended-ui-media-player');
  Route::get('/extended/ui-perfect-scrollbar', 'App\Http\Controllers\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
  Route::get('/extended/ui-star-ratings', 'App\Http\Controllers\extended_ui\StarRatings@index')->name('extended-ui-star-ratings');
  Route::get('/extended/ui-sweetalert2', 'App\Http\Controllers\extended_ui\SweetAlert@index')->name('extended-ui-sweetalert2');
  Route::get('/extended/ui-text-divider', 'App\Http\Controllers\extended_ui\TextDivider@index')->name('extended-ui-text-divider');
  Route::get('/extended/ui-timeline-basic', 'App\Http\Controllers\extended_ui\TimelineBasic@index')->name('extended-ui-timeline-basic');
  Route::get('/extended/ui-timeline-fullscreen', 'App\Http\Controllers\extended_ui\TimelineFullscreen@index')->name('extended-ui-timeline-fullscreen');
  Route::get('/extended/ui-tour', 'App\Http\Controllers\extended_ui\Tour@index')->name('extended-ui-tour');
  Route::get('/extended/ui-treeview', 'App\Http\Controllers\extended_ui\Treeview@index')->name('extended-ui-treeview');
  Route::get('/extended/ui-misc', 'App\Http\Controllers\extended_ui\Misc@index')->name('extended-ui-misc');

  // icons
  Route::get('/icons/tabler', 'App\Http\Controllers\icons\Tabler@index')->name('icons-tabler');
  Route::get('/icons/font-awesome', 'App\Http\Controllers\icons\FontAwesome@index')->name('icons-font-awesome');

  // form elements
  Route::get('/forms/basic-inputs', 'App\Http\Controllers\form_elements\BasicInput@index')->name('forms-basic-inputs');
  Route::get('/forms/input-groups', 'App\Http\Controllers\form_elements\InputGroups@index')->name('forms-input-groups');
  Route::get('/forms/custom-options', 'App\Http\Controllers\form_elements\CustomOptions@index')->name('forms-custom-options');
  Route::get('/forms/editors', 'App\Http\Controllers\form_elements\Editors@index')->name('forms-editors');
  Route::get('/forms/file-upload', 'App\Http\Controllers\form_elements\FileUpload@index')->name('forms-file-upload');
  Route::get('/forms/pickers', 'App\Http\Controllers\form_elements\Picker@index')->name('forms-pickers');
  Route::get('/forms/selects', 'App\Http\Controllers\form_elements\Selects@index')->name('forms-selects');
  Route::get('/forms/sliders', 'App\Http\Controllers\form_elements\Sliders@index')->name('forms-sliders');
  Route::get('/forms/switches', 'App\Http\Controllers\form_elements\Switches@index')->name('forms-switches');
  Route::get('/forms/extras', 'App\Http\Controllers\form_elements\Extras@index')->name('forms-extras');

  // form layouts
  Route::get('/form/layouts-vertical', 'App\Http\Controllers\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
  Route::get('/form/layouts-horizontal', 'App\Http\Controllers\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');
  Route::get('/form/layouts-sticky', 'App\Http\Controllers\form_layouts\StickyActions@index')->name('form-layouts-sticky');

  // form wizards
  Route::get('/form/wizard-numbered', 'App\Http\Controllers\form_wizard\Numbered@index')->name('form-wizard-numbered');
  Route::get('/form/wizard-icons', 'App\Http\Controllers\form_wizard\Icons@index')->name('form-wizard-icons');
  Route::get('/form/validation', 'App\Http\Controllers\form_validation\Validation@index')->name('form-validation');

  // tables
  Route::get('/tables/basic', 'App\Http\Controllers\tables\Basic@index')->name('tables-basic');
  Route::get('/tables/datatables-basic', 'App\Http\Controllers\tables\DatatableBasic@index')->name('tables-datatables-basic');
  Route::get('/tables/datatables-advanced', 'App\Http\Controllers\tables\DatatableAdvanced@index')->name('tables-datatables-advanced');
  Route::get('/tables/datatables-extensions', 'App\Http\Controllers\tables\DatatableExtensions@index')->name('tables-datatables-extensions');

  // charts
  Route::get('/charts/apex', 'App\Http\Controllers\charts\ApexCharts@index')->name('charts-apex');
  Route::get('/charts/chartjs', 'App\Http\Controllers\charts\ChartJs@index')->name('charts-chartjs');

  // maps
  Route::get('/maps/leaflet', 'App\Http\Controllers\maps\Leaflet@index')->name('maps-leaflet');

  // laravel example
  
  Route::resource('/user-list', UserManagement::class);
});

