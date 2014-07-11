php-prototype
=============

Prototype based on toro, php.

Benchmark: ab -n 10000 -c 70 <url>


Document Path:          /
Document Length:        16 bytes

Concurrency Level:      70
Time taken for tests:   1.046 seconds
Complete requests:      10000
Failed requests:        0
Total transferred:      2030000 bytes
HTML transferred:       160000 bytes
Requests per second:    9558.87 [#/sec] (mean)
Time per request:       7.323 [ms] (mean)
Time per request:       0.105 [ms] (mean, across all concurrent requests)
Transfer rate:          1894.97 [Kbytes/sec] received


Document Path:          /hello/1234 (DB access)
Document Length:        52 bytes

Concurrency Level:      70
Time taken for tests:   1.929 seconds
Complete requests:      10000
Failed requests:        0
Total transferred:      2390000 bytes
HTML transferred:       520000 bytes
Requests per second:    5183.48 [#/sec] (mean)
Time per request:       13.504 [ms] (mean)
Time per request:       0.193 [ms] (mean, across all concurrent requests)
Transfer rate:          1209.82 [Kbytes/sec] received

