/**
 * A quick script to give current MySQL timestamp
 *
 * TODO: Add daylight savings time consideration
 *
 **

date_default_timezone_set('EST');

echo date( 'Y-m-d H:i:s', time() + 3600 );
