define({ "api": [
  {
    "type": "post",
    "url": "/search",
    "title": "Searching Keywords",
    "group": "Search",
    "version": "0.0.1",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "keywords",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Int",
            "optional": false,
            "field": "page",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "Int",
            "optional": false,
            "field": "limit",
            "description": ""
          }
        ]
      }
    },
    "sampleRequest": [
      {
        "url": "/search"
      }
    ],
    "filename": "routes/web.php",
    "groupTitle": "Search",
    "name": "PostSearch"
  }
] });
