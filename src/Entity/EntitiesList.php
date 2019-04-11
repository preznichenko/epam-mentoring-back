<?php
namespace App\Entity;

use Symfony\Component\Config\Definition\Exception\Exception;

use App\Entity\Page;
use App\Entity\PageSlot;

class EntitiesList {
    static $repositories = [
        'page' => Page::class,
        'page_slot' => PageSlot::class,
    ];

    static function getEntityClass( $reponame ) {
        if (self::$repositories[ $reponame ]) {
            return self::$repositories[ $reponame ];
        } else {
            throw new Exception( 'Repository for entity ' . $reponame . ' was not found' );
        }
    }

}