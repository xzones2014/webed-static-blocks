<?php namespace WebEd\Base\StaticBlocks\Http\Middleware;

use \Closure;

class BootstrapModuleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * Register to dashboard menu
         */
        dashboard_menu()->registerItem([
            'id' => 'webed-static-blocks',
            'priority' => 1.1,
            'parent_id' => null,
            'heading' => null,
            'title' => trans('webed-static-blocks::base.admin_menu.title'),
            'font_icon' => 'fa fa-server',
            'link' => route('admin::static-blocks.index.get'),
            'css_class' => null,
            'permissions' => ['has-permission:view-static-blocks'],
        ]);

        return $next($request);
    }
}
