+++
title = "Frontend/Portal"
description = "Most of the work museum-digital does focuses on bringing museums online. We do so mainly using our main frontend/portal software."

[extra]
keywords = "Software, Museums, Museum Objects, Museum Software, Exhibitions, Web Portal"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/earth.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "frontend"
og_image = "/data/img/logo/mdlogo-code-1024px.png"
+++

## The Main Frontend of museum-digital

museum-digital was founded to publish museum object information online. That's not possible without the right software.

The "frontend" is thus the first application, that was developed at museum-digital. With it, museums can join together to present themselves and their objects online.

To offer a comprehensive glimpse at the museums and their objects, a variety of additional information has been made presentable since. On the one hand, museums can now add information on their collections, object groups, exhibitions, and events. On the other, a number of options for linking and visualizing information have been added.

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Startpage.jpg",
    image_alt=""
    ) %}Start page of the German national portal of museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExtendedSearch.jpg",
    image_alt="Extended search page in the museum-digital frontend."
    ) %}Using the extended search settings, users can define exact searches.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-EnrichedSearchPages.jpg",
    image_alt="Enriched search results in the museum-digital frontend"
    ) %}Search result pages are enriched based on data from our controlled vocabularies.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Timeline.jpg",
    image_alt="A timeline page in museum-digital."
    ) %}The museum-digital frontend offers a timeline, for viewing search results sorted by their relations to time.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-oak.jpg",
    image_alt="Objects on map pages in museum-digital."
    ) %}Using the "objects on map" pages, users can find interesting objects based on their geographical background.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Object.jpg",
    image_alt="An object page."
    ) %}An object page in the frontend of museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Multilingual.jpg",
    image_alt="Multilingualism in the museum-digital frontend."
    ) %}museum-digital is multilingual, and so, too, can be the displayed entries. The navigation language and the record language can be switched independent of each other.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExhibitionOverview.jpg",
    image_alt="Exhibition overview page in the museum-digital frontend"
    ) %}The exhibition overview page in tiles mode.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Calendar.jpg",
    image_alt="Calendars are available for exhibitions and events."
    ) %}Calendars are available for exhibitions and events.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-GraphView.jpg",
    image_alt="Graph view"
    ) %}The "graph view" offers users an alternative option for navigating the portal.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Keyboard.jpg",
    image_alt="Keyboard control of the museum-digital frontend."
    ) %}Power users can navigate the portal using their keyboard through an emacs-inspired interface.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Compare.jpg",
    image_alt="Comparing obects"
    ) %}Two objects can be compared with each other.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Technical Information

#### Focus - Design Principles

"The "frontend" of museum-digital is primarily designed to always offer a clear focus on whichever information is central to a given page or section. This allows for easy understanding. A lot of additional options exist for power users - from visualizations to a command line menu embedded into the website. These are however "hidden" in sidebars or only accessible through keyboard shortcuts, so that they don't irritate first-time users.

#### API(s)

Publishing and making things accessible doesn't only mean making it possible to view something. It also means enabling people to use data to realize their own ideas. Accordingly, all information that is published using the "frontend" of museum-digital is also accessible in a machine-readable way via our JSON API.

As much as possible, the "frontend" provides information in open standards as well: object information can be accessed in [LIDO](http://www.lido-schema.org/), information about museums can be downloaded as electronic business cards ([vCard](https://de.wikipedia.org/wiki/VCard)), and calendar information such as exhibitions can be integrated with calendar tools using the [iCalendar](https://de.wikipedia.org/wiki/ICalendar) standard.

#### Development

The "frontend" of museum-digital is built using PHP8 and MySQL. JavaScript is used for interactive features and visualizations. A list of the used libraries can be found here. We use git for version control.

----

### Resources

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Ausgabe/",
    image="/data/img/icons/more.svg",
    image_alt="") %}Handbook pages (German){% end %}

{% museumdigital_linktiles_tile(link="https://nat.museum-digital.de/index.php?t=text&st=api",
    image="/data/img/icons/more.svg",
    image_alt="") %}Short introduction to the API{% end %}

{{ museumdigital_linktiles_list_end() }}

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/frontend/feed/",
    html_url="https://blog.museum-digital.org/category/development/frontend/",
    title="News About the Frontend in the Blog") }}
