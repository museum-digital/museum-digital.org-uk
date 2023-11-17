<?PHP
/**
 * Fetches data from RSS feeds and caches them as JSON files to the relevant cache directory.
 * For use with museumdigital_rss_tile.
 *
 * @author Joshua Ramon Enslin <joshua@jrenslin.de>
 */
declare(strict_types = 1);

const CACHE_DIR = __DIR__ . '/../cached/fetched_feeds/';

const FEEDS = [
    'https://blog.museum-digital.org/tag/controlled-vocabularies/feed/',
    'https://blog.museum-digital.org/category/development/feed/',
    'https://blog.museum-digital.org/category/development/frontend/feed/',
    'https://blog.museum-digital.org/category/development/musdb/feed/',
    'https://blog.museum-digital.org/category/technik-design/themator-de/feed/',
    'https://blog.museum-digital.org/category/development/development-md-term/feed/',
    'https://blog.museum-digital.org/category/development/museum-digital-qa/feed/',
    'https://blog.museum-digital.org/category/technik-design/externe-tools/feed/',
    'https://blog.museum-digital.org/feed/',

    'https://blog.museum-digital.org/ru/author/adamm/feed/',
    'https://blog.museum-digital.org/ru/author/andersm/feed/',
    'https://blog.museum-digital.org/ru/author/jrenslin/feed/',
    'https://blog.museum-digital.org/ru/author/malygina/feed/',
    'https://blog.museum-digital.org/ru/author/stefan-rohde-enslin/feed/',
];

require __DIR__ . '/../themes/museum-digital-theme-zola/scripts/getRssFeed.php';

