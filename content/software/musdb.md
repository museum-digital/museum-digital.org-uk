+++
title = "musdb"
description = "musdb is museum-digital's tool for collection management. It has in many ways developed into a more general museum-management tool."

[extra]
keywords = "musdb, Museum Management, Inventory, Software, Collection Management System"
banner_image = "/data/img/banners/usda_nrcs_montana_snow_survey65.jpg"
banner_image_alt = "Public domain / US gov't work. USDA NRCS Montana / Snow Survey65.tif / Man working on computer, analyzing data, 1977."
html_id = "musdb"
og_image = "/data/img/logo-musdb/musdbLogoBrown.svg"
+++

<!--
banner_image = "/data/img/banners/NLMHMD_Office-of-Computer-and-Communications-Systems-staff-configuring-Grateful-Med.jpg"
banner_image_alt = "Public domain / US gov't work. National Library of Medicine. 'Office of Computer and Communications Systems staff configuring Grateful Med'"
-->

## musdb

Musdb is museum-digital's tool for indexing and creating inventories. Originally developed for recording objects to be published only, it has since developed into a full-featured inventory and museum management solution.

Central to the development of musdb are:

- musdb is developed based on requests by and communication with the museums using it
- musdb is made with collaboration in mind: New features and fixes are available to all museums
- using musdb means working collaboratively: the controlled vocabularies, that are used for linking people, times, places, and tags, are used together by all museums of a given language
- working with musdb should be as easy and intuitive as possible
- Tips and warnings are given to not just enter data, but to create high quality data

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Dashboard.jpg",
    image_alt="Dashboard/Default startpage of musdb."
    ) %}The default start page is a customizable dashboard. Other start pages can be selected by the user.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-BatchEditing.jpg",
    image_alt="Batch editing in musdb."
    ) %}musdb features batch editing functionalities for batch publishing or tagging.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Export.jpg",
    image_alt="XML export"
    ) %}Users can export their data in our own md:xml (a simple notation featuring all available fields) and LIDO.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Backgrounds.jpg",
    image_alt="Background research tool."
    ) %}Using the "backgrounds" section, users can browse the controlled vocabularies directly from musdb.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Find-an-Expert.jpg",
    image_alt="Find an expert: Connecting users."
    ) %}Using the "Find an Export" button, users can find other users who have done much work on a given topic. Still, every user can decide if they want to let others find them through this tool or not.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Multilingual.jpg",
    image_alt="Multilingual usage of musdb."
    ) %}Musdb is multilingual and it can handle multilingual inputs.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Navigation.jpg",
    image_alt="Navigation of musdb."
    ) %}The navigation gives a rough overview over different sections of musdb: Museums, Collections, Objects, Object Groups, Exhibitions, etc.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectOverview.jpg",
    image_alt="Object overview page."
    ) %}An object overview page in image mode. The sidebar on the right offers search and filter-based exporting and batch editing functionalities. A simple list view is also available.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectPage.jpg",
    image_alt="Object page"
    ) %}The main section of an object page. At the top, most basic information on the object can be entered. At the bottom, the tabbed menu for managing detailed information on the object can be seen.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-RecordHistory.jpg",
    image_alt="Record history of an object."
    ) %}Edits to an object are logged. If the user who previously edited the object set up their user profile, new users who see the logs can get to know others from the museum through the logs.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Research.jpg",
    image_alt="Provenance research tab"
    ) %}Using the provenance research tab, detailed reports on a predefined set of critical issues can be recorded.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Restoration.jpg",
    image_alt="Restoration tab on a musdb object page"
    ) %}The restoration tab of an object page offers options for color-coded and easily accessible notes towards the top of the section, detailed ones on the bottom.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Settings.jpg",
    image_alt="User management and user rights section"
    ) %}Museum directors and regional administrators set detailed permissions for what users can edit or view.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Technical Information

#### Design Principles

Musdb should be easy and intuitive to use. It should be fun to use. On the one hand, this means that the design should give a clear focus to the main subject of a given page. To reach this aim, options exist to toggle many features on or off. Optional features (like generating QR codes for object pages or a table of contents to directly jump to the wanted section of a page) are available in a toolbox on the left border of the window.

But _easy_ and _intuitive_ also means that power users can work efficiently in whatever way suits them best. Musdb offers a variety of aids for this. A selection of these are:

- Clicking into a field, users can see how many characters have been entered, how many are required, and how many are allowed at max.
- PuQi: the "Publication Quality Index" shows, how object information can be enhanced
- Plausi: using the controlled vocabularies, musdb can warn about implausible entries (e.g. a painter cannot have painted a painting before she was born)
- Text blocks provide for a quick entry of similar contents

#### Development

Musdb is based on PHP8 and MySQL. A number of PHP and JavaScript libraries are used, a list of which can be found in the handbook.

----

### Resources

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/musdb/",
    image="/data/img/icons/more.svg",
    image_alt="") %}Documentation (German){% end %}

{% museumdigital_linktiles_tile(link="https://www.youtube.com/playlist?list=PLFbmcALPcmvLtbv38OpjEkHFteP-qhmDY",
    image="/data/img/icons/more.svg",
    image_alt="") %}Videos on YouTube{% end %}

{% museumdigital_linktiles_tile(link="https://demo.museum-digital.org/musdb/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API documentation{% end %}

{{ museumdigital_linktiles_list_end() }}

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/musdb/feed/",
    html_url="https://blog.museum-digital.org/category/development/musdb/",
    title="News About the Development of musdb") }}
