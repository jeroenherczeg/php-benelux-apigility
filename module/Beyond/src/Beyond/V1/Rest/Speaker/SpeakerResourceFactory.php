<?php
namespace Beyond\V1\Rest\Speaker;

class SpeakerResourceFactory
{
    public function __invoke($services)
    {
        return new SpeakerResource();
    }
}
