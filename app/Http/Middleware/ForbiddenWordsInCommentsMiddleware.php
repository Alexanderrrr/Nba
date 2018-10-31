<?php

namespace App\Http\Middleware;

use Closure;
use App\Comment;
class ForbiddenWordsInCommentsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (str_contains(request('content'), ['hate', 'idiot', 'stupid'])) {
            return redirect('/nba/forbidden-comment');
        }
        return $next($request);
    }
}
