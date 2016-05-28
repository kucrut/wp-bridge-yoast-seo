# Bridge: Menus
WP REST API endpoint for menus.

This plugin was primarily built for [Minnie](https://github.com/kucrut/minnie).

## Requirements
* WordPress 4.5+
* WP API 2.0-beta13+

## Endpoints
* By Menu ID: `GET /wp-json/bridge/v1/menus/<id>`
* By Menu Location: `GET /wp-json/bridge/v1/menus/<location>`

```json
{
  "id": 2,
  "name": "Primary",
  "slug": "primary",
  "description": "",
  "items": [
    {
      "id": 4,
      "order": 1,
      "parent": 0,
      "title": "Home",
      "url": "/",
      "attr": "",
      "target": "",
      "classes": [],
      "xfn": "",
      "description": "",
      "object_id": 4,
      "object": "custom",
      "type": "custom",
      "type_label": "Custom Link",
      "children": [
        {
          "id": 29,
          "order": 2,
          "parent": 4,
          "title": "WordPress",
          "url": "http://w.org",
          "attr": "",
          "target": "",
          "classes": [],
          "xfn": "",
          "description": "",
          "object_id": 29,
          "object": "custom",
          "type": "custom",
          "type_label": "Custom Link",
          "children": []
        }
      ]
    },
    {
      "id": 5,
      "order": 3,
      "parent": 0,
      "title": "Sample Page",
      "url": "/sample-page/",
      "attr": "",
      "target": "",
      "classes": [],
      "xfn": "",
      "description": "",
      "object_id": 2,
      "object": "page",
      "type": "post_type",
      "type_label": "Page",
      "children": []
    },
    {
      "id": 6,
      "order": 4,
      "parent": 0,
      "title": "Uncategorized",
      "url": "/blog/category/uncategorized/",
      "attr": "",
      "target": "",
      "classes": [],
      "xfn": "",
      "description": "",
      "object_id": 1,
      "object": "category",
      "type": "taxonomy",
      "type_label": "Category",
      "children": []
    }
  ]
}
```

## Changelog
### 0.1.0
* Initial
