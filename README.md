# Argo

Argo is a flat-file static-site blog authoring and building system. It presents
a browser interface for ease of use, and synchronizes with any hosting service
using Git or rsync.

Because Argo keeps all your content on your computer, no hosting service can
ever deprive you of your content by shutting down your account. The content you
create is always on your own computer. This makes Argo sites censorship-
resistant. Further, because Argo is a flat-file static-site system, remove
hosting requirements are minimal. Only a web server is needed.

## Warnings

This package is **IS NOT** a server application. **DO NOT** install
it on a server.

Instead, this package is an **end-user** application, to be installed on
firewalled client computers.

This package **DOES NOT** use Semantic Versioning. It is intended primarily as a
product, not as a set of libraries.

## Installation

### Tech Nerd

First,  get [Composer](https://getcomposer.org), then issue
the following commands:

```
$ composer create-project getargo/php argo
$ php ./argo/bin/admin.php
```

That will open Argo in your client browser.

### Normal Well-Adjusted People

Download and double-click the Mac- or Linux-based desktop appliction from
[getargo/app](https://github.com/getargo).

Linux users may need to install PHP first, if it is not already present.

## Getting Started

Watch this video.
