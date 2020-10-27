<?php

namespace Livewire\Testing\Contracts;

interface HttpRequestsWrapper
{
    public function temporarilyDisableExceptionHandlingAndMiddleware($callback);
}
