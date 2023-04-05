+++
title = "Программное обеспечение"
description = "В museum-digital мы разработали набор программных решений для помощи в различных частях музейной работы (по дигитализации)."

[extra]
keywords = "программное обеспечение, музеи, музейные предметы, музейное программное обеспечение, museum-digital"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/grand_tour.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "software"
+++

## Программное обеспечение

В museum-digital мы разработали набор программных решений для упрощения процесса дигитализации в музеях. Изначально museum-digital был основан для публикации информации об объектах онлайн. Поэтому мы начали с разработки [внешнего интерфейса для отображения информации об объектах.](/software/frontend).

Поскольку первоначальный метод ввода данных - музеи вводили свои данные в локальную базу данных, отправляли их программистам, а те вводили их в museum-digital - не очень хорошо масштабировался, мы разработали простой онлайн-интерфейс ввода, - [musdb](/software/musdb). Некоторые музеи, у которых еще не было специальной базы данных для инвентаризации, но которые хорошо знали musdb, начали просить дополнительные функции инвентаризации. Таким образом, подход musdb изменился: вместо того, чтобы быть интерфейсом ввода данных и платформой для публикаций, он превратился в инструмент инвентаризации с возможностью публикации.

Вскоре после этого участились запросы на опции для более детального отображения цифровых повествований и историй. Хотя музейные объекты могут быть интересны сами по себе, их контекстуализация также является важной задачей музеев. В ответ на эти запросы мы создали [тематор](/software/themator) как независимый инструмент для составления и публикации историй онлайн.

На раннем этапе, при разработке основного внешнего интерфейса и musdb, мы решили использовать контролируемые словари для всех баз данных конкретного языка. Внутри сайта мы используем наш "инструмент контроля нормативных данных" [nodac](/software/term-nodac) для их курирования. Поскольку словари с тех пор значительно расширились и к настоящему времени стали самостоятельным полезным ресурсом, мы также разработали фронтенд для их поиска, [md:term](/software/term).

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/frontend",
    image="/data/img/logo/mdlogo-code-128px.png",
    image_alt="Logo") %}Внешний интерфейс/порталы{% end %}

{% museumdigital_linktiles_tile(link="/software/musdb",
    image="/data/img/logo-musdb/musdbLogoBrown-128.png",
    image_alt="Logo") %}musdb{% end %}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}nodac{% end %}

{% museumdigital_linktiles_tile(link="/software/themator",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Тематор{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/feed/",
    html_url="https://blog.museum-digital.org/category/development/",
    title="Новости технического характера в нашем блоге") }}
