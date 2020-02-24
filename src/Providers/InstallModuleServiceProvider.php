<?php namespace WebEd\Base\StaticBlocks\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Illuminate\Database\Schema\Blueprint;

class InstallModuleServiceProvider extends ServiceProvider
{
    protected $module = 'WebEd\Base\StaticBlocks';

    protected $moduleAlias = 'webed-static-blocks';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->booted(function () {
            $this->booted();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    protected function booted()
    {
        $this->createSchema();
        //acl_permission()
        //->registerPermission('Permission 1 description', 'description-1', $this->moduleAlias)
        //->registerPermission('Permission 2 description', 'description-2', $this->moduleAlias);
    }

    protected function createSchema()
    {
        //Schema::create('field_groups', function (Blueprint $table) {
        //    $table->engine = 'InnoDB';
        //    $table->increments('id');
        //});
    }
}
