<?php
namespace Beyond\V1\Rest\Talk;

class TalkResourceFactory
{
    public function __invoke($services)
    {
        return new TalkResource();
    }
}
