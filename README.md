# Simple Dapr Actor Example

A simple actor that keeps track of a count.

## Running the server

```bash
$ PHP_CLI_SERVER_WORKERS=10 dapr run --app-id example --app-port 3000 --dapr-http-port 3500 -- php -S 0.0.0.0:3000 src/index.php
```

## Running the repl

```
$ composer repl
>>>  $counter = $app->run(fn(Dapr\Actors\ActorProxy $proxy) => $proxy->get(Example\Interfaces\CountInterface::class, 'an id'))
=> Dapr\Proxies\dapr_proxy_Count {#2770
     +id: "an id",
     +DAPR_TYPE: "Count",
   }
>>> $counter->getCount()
=> 0
>>> $counter->incrementAndGet(13)
=> 13
>>> $counter->incrementAndGet(13)
=> 26
>>> $counter->incrementAndGet(13)
=> 39
>>> $counter->getCount();
=> 39
```
