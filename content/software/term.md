+++
title = "md:term"
description = "md:term is a vocabulary browser that is, among others, used for making museum-digital's controlled vocubaliries accessible on their own."

[extra]
keywords = "Software, Controlled Vocabularies, Subject Headings"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p518.jpg"
banner_image_alt = "Image from page 518 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## md:term - Vocabulary Browser

museum-digital uses four kinds of controlled vocabularies. Actors, Places, Time(spans) and Keywords are controlled. These vocabularies are enriched with links to other repositories (like VIAF) and translated in many languages. They can be accessed by a special interface called md:term. Moreover external vocabularies are also available at this place. All entries are available and may be used as reference in skos and json format.

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/md-term/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Handbook (German) on md:term{% end %}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="News") }}
