# PHP World Cities Array
_Based on data from http://geonames.org_

This file is released under the same license as the original datasource from http://geonames.org - Creative Commons Attribution 3.0

This file is large. It is recommended to be used as a datasource for bootstrapping your own city database within a more appropriate datastore. You will likely need to increase the PHP memory limit in order to use this file.

## Sample array element structure

    array (
      'city' => 'Sant Julià de Lòria',
      'region' => '06',
      'country' => 'AD',
      'latitude' => '42.46372',
      'longitude' => '1.49129',
    ),
## Generate excerpt from array
You can use the function get_excerpt_array() as explained in the  get_excerpt_world_cities_array.php file to generate a smaller array based on your preferred countries and a max city per country value..

