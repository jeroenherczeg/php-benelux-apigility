<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Beyond\\V1\\Rest\\Talk\\TalkResource' => 'Beyond\\V1\\Rest\\Talk\\TalkResourceFactory',
            'Beyond\\V1\\Rest\\Speaker\\SpeakerResource' => 'Beyond\\V1\\Rest\\Speaker\\SpeakerResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'beyond.rest.talk' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/talk[/:talk_id]',
                    'defaults' => array(
                        'controller' => 'Beyond\\V1\\Rest\\Talk\\Controller',
                    ),
                ),
            ),
            'beyond.rest.speaker' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/speaker[/:speaker_id]',
                    'defaults' => array(
                        'controller' => 'Beyond\\V1\\Rest\\Speaker\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'beyond.rest.talk',
            1 => 'beyond.rest.speaker',
        ),
    ),
    'zf-rest' => array(
        'Beyond\\V1\\Rest\\Talk\\Controller' => array(
            'listener' => 'Beyond\\V1\\Rest\\Talk\\TalkResource',
            'route_name' => 'beyond.rest.talk',
            'route_identifier_name' => 'talk_id',
            'collection_name' => 'talk',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Beyond\\V1\\Rest\\Talk\\TalkEntity',
            'collection_class' => 'Beyond\\V1\\Rest\\Talk\\TalkCollection',
            'service_name' => 'talk',
        ),
        'Beyond\\V1\\Rest\\Speaker\\Controller' => array(
            'listener' => 'Beyond\\V1\\Rest\\Speaker\\SpeakerResource',
            'route_name' => 'beyond.rest.speaker',
            'route_identifier_name' => 'speaker_id',
            'collection_name' => 'speaker',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Beyond\\V1\\Rest\\Speaker\\SpeakerEntity',
            'collection_class' => 'Beyond\\V1\\Rest\\Speaker\\SpeakerCollection',
            'service_name' => 'speaker',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Beyond\\V1\\Rest\\Talk\\Controller' => 'HalJson',
            'Beyond\\V1\\Rest\\Speaker\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Beyond\\V1\\Rest\\Talk\\Controller' => array(
                0 => 'application/vnd.beyond.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Beyond\\V1\\Rest\\Speaker\\Controller' => array(
                0 => 'application/vnd.beyond.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Beyond\\V1\\Rest\\Talk\\Controller' => array(
                0 => 'application/vnd.beyond.v1+json',
                1 => 'application/json',
            ),
            'Beyond\\V1\\Rest\\Speaker\\Controller' => array(
                0 => 'application/vnd.beyond.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Beyond\\V1\\Rest\\Talk\\TalkEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'beyond.rest.talk',
                'route_identifier_name' => 'talk_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'Beyond\\V1\\Rest\\Talk\\TalkCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'beyond.rest.talk',
                'route_identifier_name' => 'talk_id',
                'is_collection' => true,
            ),
            'Beyond\\V1\\Rest\\Speaker\\SpeakerEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'beyond.rest.speaker',
                'route_identifier_name' => 'speaker_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'Beyond\\V1\\Rest\\Speaker\\SpeakerCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'beyond.rest.speaker',
                'route_identifier_name' => 'speaker_id',
                'is_collection' => true,
            ),
        ),
    ),
);
