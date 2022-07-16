<?php

$data = [
    ['Symbol', 'Company', 'Price'],
    ['GOOG', 'Google Inc.', '800'],
    ['AAPL', 'Apple Inc.', '500'],
    ['AMZN', 'Amazon.com Inc.', '250'],
    ['YHOO', 'Yahoo! Inc.', '250'],
    ['FB', 'Facebook, Inc.', '30'],
];

// var_dump( $data );

$file_name = 'stocks.csv';

$f = fopen( $file_name, 'w' );

if ( $f === false ) {
    die( 'file not open successfully' );
}

foreach ( $data as $row ) {
    fputcsv( $f, $row );
}

fclose( $f );