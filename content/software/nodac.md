+++
title = "nodac"
description = "nodac is museum-digital's tool for curating controlled vocabularies."

[extra]
keywords = "Software, Controlled Vocabularies, Subject Headings"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## Nodac: Manage Controlled Vocabularies

nodac is museum-digital's tool for curating controlled vocabularies. That means
- labeling,
- describing,
- translating,
- creating hierarchies of concepts and 
- linking concepts to entries in external repositories like Wikidata, GND, AAT, geonames, ...
nodac is able to work with multiple polyhierarchical thesauri and follows the SKOS 2 standard.

As the primary management tool behind museum-digital's vocabularies it is essential for nodac to be trainable. It works with
- blacklists,
- automatic transfer between different vocabularies,
- permanent re-writing of one term to another

### Linked open data

From the start, nodac has been written with linked open data in mind. It not only helps curating such links but also enables the automatic retrieval of data recorded at Wikidata, GND, AAT and other sources.

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/nodac/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbook (German) on nodac{% end %}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="News") }}
