---
title: Actualité
template: blog
sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true

feed:
    description: Le Drakkar coworking - actualités
    limit: 10

pagination: true
---

