+++
title = "Infrastructure"
description = "Infrastructure rundown about museum-digital"

[extra]
keywords = "museum-digital, Infrastructure, Servers"
banner_image = "/data/img/banners/A-test-of-a-pneumatic-ASH-handling-system_1914_InternetArchive_p216_rotated.jpg"
banner_image_alt = " Image from page 216 of 'A test of a pneumatic ASH handling system' (1914) "
html_id = "infrastructure"
faq = [
    [
        "Where are museum-digital's servers located?",
        "Our servers are located in Germany. [digiS](https://www.digis-berlin.de/), the research and competency center for digitization of the State of Berlin, is generously sponsoring and running one of them, while the others are rented at Strato."
    ],
]
+++

## Infrastructure

All of museum-digital's services are centralized due to our aim of making museums publish and manage their data _together_ and benefit from working together - most notably in the fields of the controlled vocabularies and the simple advantage of making the data from many museums accessible on one site with a common search function. Our work thus necessarily includes running the software we write and administrating the systems on which it runs.

----

### Servers

The hosting and development of museum-digital is currently done using three dedicated servers. One server, hosted by Strato, is used as the main server for both editing data and serving it to the general public. A second server, hosted by digiS in Berlin, is used as the primary server for distributing images and running backups. Finally, the third server, also hosted at Strato, is used for hosting mostly internal tools such as a [Nextcloud](https://nextcloud.com/) and a [Gitea](https://gitea.io/) instance as well as our mail to ensure that only the minimum of dearly required software is run on production servers.

#### Backup strategy

At museum-digital, we principally have three different types of data to back up: Database contents, media files, and configuration files.

Database contents are dumped once a day, GPG encrypted and then synchronized by the backup server. We keep full, encrypted dumps of the last 7 days available and in reach for a quick recovery at any time (both on the primary database server and the backup server). The dumps are further copied into digiS' central backup system once a day.

The backup server is simultaneously used as an image server. To fulfill this function, it automatically synchronizes all media every three to six hours - the synchronization rate is reduced at night in Europe, as there are barely any new files added at night that would warrant the additional use of bandwidth and computing resources. Thus, a second copy of all media files is available at any time. The media files are further included into digiS' centralized backup system once a day, similar to the database dumps.

Finally, configuration files are regularly synchronized into a git repository that is then synchronized to our Gitea instance and onward to members of our admin team.

To add an additional layer of backups, we do monthly snapshots of the full system.

----

### Open Source

We are currently in the process of releasing more and more of our code as open source. Rather content-driven open source projects such as the handbook are available and editable via [GitHub](https://github.com/museum-digital/), while modules used in the main services are hosted on our own Gitea instance.

----

### Technology Stack

Our systems run on a rather common technology stack of [Ubuntu](https://ubuntu.com/) for an operation system, [nginx](https://www.nginx.com/) as a web server, [MariaDB](https://mariadb.org/) for a database server and [PHP](https://www.php.net/) as the primary programming language of choice for all server-side code. [Redis](https://redis.io/) and [Manticore](https://manticoresearch.com/) are used as a fast key-value store and a fulltext search server respectively. For server-side development, we use [PHPUnit](https://phpunit.de/) for unit testing, [PHPStan](https://phpstan.org/) for static code analysis and [PHPBench](https://github.com/phpbench/phpbench) for benchmarking given functions.

Some sites that don't require any deeper server-side logic run directly on nginx (the document archive) or are generated using static site generators ([Zola](https://www.getzola.org/) in the case of this very site, [mdbook](https://github.com/rust-lang/mdBook) in the case of the handbook).

----

{{ build_faq_list(title = "FAQ") }}
