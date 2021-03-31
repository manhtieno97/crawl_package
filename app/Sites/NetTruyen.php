<?php


namespace App\Sites;

use Nggiahao\Crawler\SitesConfig\SiteAbstract;
use Symfony\Component\DomCrawler\Crawler;
class NetTruyen extends SiteAbstract
{
    public function rootUrl(): string
    {
        return 'http://www.nettruyen.com/';
    }

    public function startUrls(): array {
        return [
            "http://www.nettruyen.com/",
        ];
    }

    public function shouldCrawl( $url ) {
        return preg_match( "/^http:\/\/www\.nettruyen\.com\/truyen-tranh\//", $url);
    }

    public function shouldGetData( $url ) {
        return preg_match( "/\/truyen-tranh\//", $url);
    }

    public function getInfoFromCrawler(Crawler $dom_crawler)
    {
        return parent::getInfoFromCrawler($dom_crawler);
    }
}
