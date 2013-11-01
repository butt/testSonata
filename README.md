testSonata
==========
 
 I have created test build with vendors in https://github.com/butt/testSonata 
```
        "doctrine/orm": ">=2.2.3,<2.4-dev",
        "doctrine/doctrine-bundle": "1.2.*",
        "sonata-project/admin-bundle": "2.2.7",
        "sonata-project/doctrine-orm-admin-bundle": "master-dev"
```

In order to reproduce bug you will need to create local copy, create a couple entities and open admin edit page for entity /admin/acme/demo/author/1/edit
screenshot attached
![position](https://f.cloud.github.com/assets/1155876/1453083/eb2b3b94-42e7-11e3-8615-ed970f400275.png)
