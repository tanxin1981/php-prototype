<?php

require("lib/mysql.php");
require("lib/queries.php");
require("lib/toro.php");


class HelloHomepageHandler {

    function get() {
 	echo "Hello, homepage!";
    }

    function get_xhr() {
	echo "Hello, homepage!";
    }
}

class HelloHandler {
    function get($id) {
        echo json_encode(get_catalogbyid($id));
    }
    function get_xhr($id) {
        echo json_encode(get_catalogbyid($id));
    }

}


Toro::serve(array(
    "/" => "HellohomepageHandler",
    "/hello/:number" => "HelloHandler",
));
