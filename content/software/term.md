+++
title = "md:term"
description = "md:term - це браузер словників, який, зокрема, використовується для самостійного доступу до контрольованих словників museum-digital."

[extra]
keywords = "програмне забезпечення, керовані словники, предметні рубрики"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p518.jpg"
banner_image_alt = "Image from page 518 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## md:term - Оглядач словників

md:term - це менеджер контрольованих словників. З його допомогою можна переміщатися по ієрархії ключових слів і місць, переглядати опис і переклади міток і понять. Найголовніше, що контрольовані словники доступні для пошуку та надаються у форматі, придатному для машинного читання, а також у форматі, зручному для читання людиною.

----

### md:term як портал

Еталонна реалізація md:term представляє контрольовані словники museum-digital для місць, акторів, тегів і часу, а також деякі зовнішні словники, такі як Hornbostel-Sachs-Systematk або Technikthesaurus. Словники, представлені в md:term, можна завантажити цілком.

md:term може використовуватися незалежно від museum-digital як презентаційний інструмент для словників. Однак найкраще він працює в поєднанні з [nodac](/software/nodac).

----

### Скріншоти

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_place_2.png",
    image_alt="md:term сторінка місця: Hansaviertel"
    ) %}Крім завжди доступних посилань на машинозчитувані параметри експорту, базову інформацію та посилання на сховища нормативних даних, на сторінках місць перелічуються вищі й нижчі за рівнем місця та місце на карті.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_tag.png",
    image_alt="md:term сторінка тегів"
) %} Сторінка тегів розташовуватиме теги ієрархічно, посилатиметься на інші сховища нормативних даних, описуватиме їх і пропонуватиме машиночитабельні варіанти експорту. Крім того, можуть бути перераховані об'єкти з museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_downloads.png",
    image_alt="Сторінка завантаження md:term"
    ) %}Повні JSON і SKOS / XML дампи наших контрольованих словників можна завантажити за допомогою сторінки завантаження{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/md-term/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Довідник з md:term (німецькою мовою){% end %}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="Новини") }}
