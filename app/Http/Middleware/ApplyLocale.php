public function handle($request, Closure $next)
{
    $locale = $request->cookie('locale', config('app.locale'));
    app()->setLocale($locale);
    return $next($request);
}