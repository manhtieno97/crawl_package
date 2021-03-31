<?php


namespace App\Sites;

use App\Crawler\SitesConfig\SiteAbstract;
use Symfony\Component\DomCrawler\Crawler;
class W123job  extends SiteAbstract
{
    public function rootUrl(): string
    {
        return 'https://123job.vn';
    }

    public function startUrls(): array {
        return [
            "https://123job.vn",
        ];
    }

    public function shouldCrawl( $url ) {
        return preg_match( "/^https:\/\/123job\.vn\/viec-lam\//", $url) || preg_match( "/^https:\/\/123job\.vn\/company\//", $url);
    }

    public function shouldGetData( $url ) {
        return preg_match( "/\/company\//", $url);
    }

    public function getInfoFromCrawler(Crawler $dom_crawler)
    {
        return parent::getInfoFromCrawler($dom_crawler);
    }
}
