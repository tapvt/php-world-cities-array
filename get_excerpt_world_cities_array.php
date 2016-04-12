<?php

/**
 * PHP Cities Array
 * @author Ben Weller ben@tapvt.com
 *
 * function get_excrept_array
 * Description function to print excrept array from the large array in world_cities_array.php, eg of use to generate 70 cities form each country form the list: <php include('world_cities_array.php');  include('get_excerpt_world_cities_array.php'); get_excerpt_array($cities_array,['IT', 'DE', 'FR', 'US', 'GB', 'CN'], 70);
 * @author Andrei O. andrei@flashsoft.ro
 *
 * @param array $countryList $cities_array, array with all the cities 
 *
 * @param array $countryList - Array with the list of countries included in the print eg ['RO', 'DE', 'FR', 'US']
 * Codes list available:  AD AE AF AG AI AL AM AO AQ AR AS AT AU AW AX AZ BA BB BD BE BF BG BH BI BJ BL BM BN BO BQ BR BS BT BV BW BY BZ CA CC CD CF CG CH CI CK CL CM CN CO CR CU CV CW CX CY CZ DE DJ DK DM DO DZ EC EE EG EH ER ES ET FI FJ FK FM FO FR GA GB GD GE GF GG GH GI GL GM GN GP GQ GR GS GT GU GW GY HK HM HN HR HT HU ID IE IL IM IN IO IQ IR IS IT JE JM JO JP KE KG KH *KI KM KN KP KR KW KY KZ LA LB LC LI LK LR LS LT LU LV LY MA MC MD ME MF MG MH MK ML MM MN MO MP MQ MR MS MT MU MV MW MX MY MZ NA NC NE NF NG NI NL NO NP NR NU NZ OM PA PE PF PG PH PK PL PM PN PR PS PT PW PY QA RE RO RS RU RW SA SB SC SD SE SG SH SI SJ SK SL SM SN SO SR SS ST SV SX SY SZ TC TD TF TG TH TJ TK TLa TM TN TO TR TT TV TW TZ UA UG UM US UY UZ VA VC VE VG VI VN VU WF WS YE YT ZA ZM ZW
 *
 * @param int $maxPerCpuntry optional - Max number of returned cities for a country if omitted it will return all cities
 *
 * @return void
 */
function get_excerpt_array($cities_array, $countryList, $maxPerCountry = 0) {
    $resultArrayToPrint = [];

    if ($maxPerCountry == 0) {
        foreach ($cities_array as $city) {
            if (in_array($city['country'], $countryList)) {
                $resultArrayToPrint[] = $city;
            }
        }
    } else {
        $countryCount = [];
        foreach ($countryList as $country) {
            $countryCount[$country] = 1;
        }
        foreach ($cities_array as $city) {
            if (in_array($city['country'], $countryList)) {
                if ($countryCount[$city['country']] == $maxPerCountry) {
                    $key = array_search($city['country'], $countryList);
                    unset($countryList[$key]);
                }
                $countryCount[$city['country']] +=1;
                $resultArrayToPrint[] = $city;
            }
        }
    }
    var_export($resultArrayToPrint);
}
