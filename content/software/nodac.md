+++
title = "nodac"
description = "nodac - це інструмент museum-digital для курирування контрольованих словників."

[extra]
keywords = "програмне забезпечення, керовані словники, предметні рубрики"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
faq = [
    [
        "Чи можна використовувати nodac з моїм власним словником?",
        "Звичайно. Ця версія nodac завжди призначена лише для одного конкретного словника. Однак ми можемо встановити будь-яку кількість версій."
    ],
    [
        "Чи можу я використовувати nodac для публікації свого контрольованого словника?",
        "Ні. nodac - це лише інструмент управління. Однак ми створили окремий інструмент, [md:term](/software/term), за допомогою якого можна опублікувати будь-який словник, відредагований у nodac."
    ],
]
+++

## nodac: Керування контрольованими словниками

nodac - це інструмент museum-digital для управління контрольованими словниками. Це означає маркування, опис, переклад, створення ієрархії визначень і зв'язування понять із відповідними записами в зовнішніх сховищах, таких як Wikidata, GND, AAT, geonames тощо.

Як основний інструмент управління словниками museum-digital, nodac має бути здатним до навчання. У nodac можна заносити визначення до "чорного списку", налаштовувати автоматичне перенесення визначень з одного словника до іншого та зберігати постійні зміни визначень до їхніх канонічних форм. Таким чином, nodac дає змогу не лише полегшити точний процес редагування, а й зробити його довгостроковим, попри обмежені ресурси.

nodac здатен працювати з кількома поліієрархічними тезаурусами та відповідає стандарту SKOS 2.

### Пов'язані відкриті дані

Від самого початку nodac був написаний з урахуванням використання пов'язаних відкритих даних. Він не тільки допомагає керувати такими посиланнями, а й дає змогу автоматично витягувати дані, записані у Wikidata, Gemeinsame Normdatei (GND).


----

### Скріншоти

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_01_Startpage.png",
    image_alt="Стартова сторінка nodac"
    ) %}На стартовій сторінці nodac відображаються нові записи та власна активність. Вона може бути налаштована за допомогою збережених пошукових запитів.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_02_Overview_Actors.png",
    image_alt="Сторінка огляду для акторів"
    ) %}Сторінки огляду відображають поточний прогрес у куруванні даного контрольованого словника у вигляді тексту і графіків. Усі метрики доступні для пошуку.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_03_Search_Tags.png",
    image_alt=""
    ) %}Сторінка результатів пошуку за тегами. У лівій бічній панелі ви можете побачити деякі з доступних варіантів пошуку.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_06_Edit_Page_Actor.png",
    image_alt=""
) %}Сторінка редагування для акторів (1): Кожне поняття має відповідну сторінку редагування. Тут можна додати опис та іншу основну інформацію, переклади; класифікувати сутність як "затверджену" та задати синоніми для запису.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_07_Actors_noda_Links.png",
    image_alt=""
    ) %}Сторінка редагування для акторів (2): Також можна додати посилання на набір найважливіших сховищ нормативних даних.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_08_Edit_Page_Actor_Objects.png",
    image_alt=""
) %}Сторінка редагування для акторів (3): nodac може бути пов'язаний з musdb. Якщо це так, то об'єкти, пов'язані з цією сутністю, будуть перераховані в нижній частині сторінки редагування.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_09_Import_Wikidata.png",
    image_alt=""
    ) %}Якщо сутність або поняття вже відомі у Вікіданих / Вікіпедії, дані можуть бути імпортовані звідти. Тут записи Вікіданих пропонуються для вибору на основі їхніх назв.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_10_Places_Wikidata_by_Coordinates.png",
    image_alt=""
    ) %}Зокрема, для місць, відповідні об'єкти Вікіданих також можуть бути знайдені на основі координат місця.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_05_Actors_Blacklist.png",
    image_alt=""
    ) %}Визначення, які безумовно непридатні для використання в даному контрольованому словнику, можуть бути занесені в чорний список, щоб запобігти повторному створенню записів з аналогічною назвою.{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ build_faq_list(title = "Частозадавані питання") }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/nodac/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Довідник про nodac (німецькою мовою){% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="Новини") }}
