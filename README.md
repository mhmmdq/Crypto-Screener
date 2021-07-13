![Banner](https://mhmmdq.ir/Crypto_Screener/img.png)

A small example of crawling another website and extracting the required information from it to save the website wherever we need it
## Description
This software runs using `Laravel` and `VueJs`
There is a route to the home page (/) that executes the `index` method in Class `App\Http\Controllers\CryptoPriceController` ( In fact, it does nothing but display `Home.blad.php` )

#### Crawl
Crawling is done using the `paquettg/php-html-parser` class. In the `crawlData` method of the `App\Http\Controllers\CryptoPriceController` class, you can see the process.

The crawel operation is done once a day and is stored in a `Json` file with the name of the same day in `Storage`, and to access the file information every day, it is enough to `get a request`. Send route `/api/get` and get the result