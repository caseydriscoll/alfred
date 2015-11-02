/**
 * A quick script to give current MySQL timestamp
 *
**/

date_default_timezone_set('EST');

$time = time();

// If daylight savings time add an hour
// $time += 3600;

echo date( 'Y-m-d H:i:s', $time );
