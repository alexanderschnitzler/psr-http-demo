# PSR HTTP Demo

This demo shows how to implement an api client based on `PSR-7` (`RequestInterface`/`ResponseInterface`), `PSR-17` (`RequestFactoryInterface`, `ResponseFactoryInterface`) and `PSR-18` (`ClientInterface`).

When relying solely on PSR's, the user is free to choose whatever http client he/she wants. For example, `symfony/http`, `guzzlehttp/guzzle` or similar. The only requirement is that those http clients support the PSR's either natively or via adapters.
