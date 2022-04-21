<?php

namespace App\Observers;

use App\Events\ActivityEvent;
use App\Models\Problem;
use Illuminate\Support\Facades\Auth;

class ProblemObserver
{
    /**
     * Handle the Problem "created" event.
     *
     * @param  \App\Models\Problem  $problem
     * @return void
     */
    public function created(Problem $problem)
    {
        ActivityEvent::dispatch('New Problem Create', 'Problem', Auth::id());
    }

    /**
     * Handle the Problem "updated" event.
     *
     * @param  \App\Models\Problem  $problem
     * @return void
     */
    public function updated(Problem $problem)
    {
        ActivityEvent::dispatch('Problem' . $problem->id. 'Updated' , 'Problem',Auth::id());
    }

    /**
     * Handle the Problem "deleted" event.
     *
     * @param  \App\Models\Problem  $problem
     * @return void
     */
    public function deleted(Problem $problem)
    {
        ActivityEvent::dispatch('Problem' . $problem->id . 'Deleted', 'Problem',Auth::id());
    }

    /**
     * Handle the Problem "restored" event.
     *
     * @param  \App\Models\Problem  $problem
     * @return void
     */
    public function restored(Problem $problem)
    {
        //
    }

    /**
     * Handle the Problem "force deleted" event.
     *
     * @param  \App\Models\Problem  $problem
     * @return void
     */
    public function forceDeleted(Problem $problem)
    {
        //
    }
}
