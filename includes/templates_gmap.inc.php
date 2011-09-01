<?php

/*
    MyBlitzortung - a tool for participants of blitzortung.org
	to display lightning data on their web sites.

    Copyright (C) 2011  Tobias Volgnandt

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/*******************************************************************/
/* IMPORTANT: DO NOT EDIT THIS FILE!                               */
/* Use config.php for individual setting!                          */
/* This file is included BEFORE config.php !                       */
/*******************************************************************/


if (!defined('BO_VER'))
	exit('No BO_VER');

	
/**************************************/
/* Dynamic map tiles                  */
/**************************************/


// 0 to 15 minutes
$_BO['tpl_gmap']['0-15']['tstart'] = 15;
$_BO['tpl_gmap']['0-15']['trange'] = 15;
$_BO['tpl_gmap']['0-15']['upd_intv'] = 1;
$_BO['tpl_gmap']['0-15']['col'][] = array(255, 255, 0);
$_BO['tpl_gmap']['0-15']['col'][] = array(255, 240, 0);
$_BO['tpl_gmap']['0-15']['col'][] = array(255, 225, 0);
$_BO['tpl_gmap']['0-15']['default_show'] = true;
$_BO['tpl_gmap']['0-15']['sel_name'] = '0-15 min';

// 15 to 120 minutes
$_BO['tpl_gmap']['15-120']['tstart'] = 120;
$_BO['tpl_gmap']['15-120']['trange'] = 105;
$_BO['tpl_gmap']['15-120']['upd_intv'] = 15;
$_BO['tpl_gmap']['15-120']['col'][] = array(250, 190, 0);
$_BO['tpl_gmap']['15-120']['col'][] = array(245, 170, 10);
$_BO['tpl_gmap']['15-120']['col'][] = array(240, 150, 10);
$_BO['tpl_gmap']['15-120']['col'][] = array(235, 130, 10);
$_BO['tpl_gmap']['15-120']['col'][] = array(230, 110, 10);
$_BO['tpl_gmap']['15-120']['col'][] = array(225,  90, 10);
$_BO['tpl_gmap']['15-120']['col'][] = array(220,  70, 10);
$_BO['tpl_gmap']['15-120']['default_show'] = true;
$_BO['tpl_gmap']['15-120']['sel_name'] = '15-120 min';

// 2 to 24 hours
$_BO['tpl_gmap']['2-24h']['tstart'] = 60 * 24;
$_BO['tpl_gmap']['2-24h']['trange'] = 60 * 22;
$_BO['tpl_gmap']['2-24h']['upd_intv'] = 30;
for ($i=0;$i<20;$i++)
	$_BO['tpl_gmap']['2-24h']['col'][] = array(200-150*$i/20, 10+40*$i/20, 50+200*$i/20);
$_BO['tpl_gmap']['2-24h']['default_show'] = false;
$_BO['tpl_gmap']['2-24h']['sel_name'] = '2-24 h';

// 1 to 10 days
// Be careful: can cause high database load!
$_BO['tpl_gmap']['1-10d']['tstart'] = 60 * 24 * 10;
$_BO['tpl_gmap']['1-10d']['trange'] = 60 * 24 * 9;
$_BO['tpl_gmap']['1-10d']['upd_intv'] = 60;
for ($i=0;$i<20;$i++)
	$_BO['tpl_gmap']['1-10d']['col'][] = array(80 + 2*$i/20, 50   +200*$i/20, 230   -200*$i/20);
$_BO['tpl_gmap']['1-10d']['default_show'] = false;
$_BO['tpl_gmap']['1-10d']['sel_name'] = '1-10 days';
$_BO['tpl_gmap']['1-10d']['only_loggedin'] = true;


/**************************************/
/* Manual time selection: colors      */
/**************************************/

$_BO['tpl_gmap']['manual']['col'][] = array(255, 255, 0);
$_BO['tpl_gmap']['manual']['col'][] = array(255, 240, 0);
$_BO['tpl_gmap']['manual']['col'][] = array(255, 225, 0);
$_BO['tpl_gmap']['manual']['col'][] = array(250, 190, 0);
$_BO['tpl_gmap']['manual']['col'][] = array(245, 170, 10);
$_BO['tpl_gmap']['manual']['col'][] = array(240, 150, 10);
$_BO['tpl_gmap']['manual']['col'][] = array(235, 130, 10);
$_BO['tpl_gmap']['manual']['col'][] = array(230, 110, 10);
$_BO['tpl_gmap']['manual']['col'][] = array(225,  90, 10);
$_BO['tpl_gmap']['manual']['col'][] = array(220,  70, 10);
for ($i=0;$i<20;$i++)
	$_BO['tpl_gmap']['manual']['col'][] = array(200-150*$i/20, 10+40*$i/20, 50+200*$i/20);



/**************************************/
/* Extra Overlays for dynamic Map     */
/**************************************/

//Meteox Radar Overlay
//WARNING: Copyright! Only internal private usage!
$_BO['tpl_overlay']['meteox_radar']['img'] = 'http://www2.meteox.com/radareu.php';
$_BO['tpl_overlay']['meteox_radar']['coord'] = array(59.9934, 20.4106, 41.4389, -14.9515); //North, East, South, West (Degrees)
$_BO['tpl_overlay']['meteox_radar']['default_show'] = false;
$_BO['tpl_overlay']['meteox_radar']['sel_name'] = 'Meteox rain radar';
$_BO['tpl_overlay']['meteox_radar']['only_loggedin'] = true;
$_BO['tpl_overlay']['meteox_radar']['to_mercator'] = true;

//Meteox Radar Overlay (Scandinavia)
//WARNING: Copyright! Only internal private usage!
$_BO['tpl_overlay']['meteox_radar_scandinavia']['img'] = 'http://www.vaderradar.se/image.ashx';
$_BO['tpl_overlay']['meteox_radar_scandinavia']['coord'] = array(71.546744,35.110422,53.879462,2.865478); //North, East, South, West (Degrees)
$_BO['tpl_overlay']['meteox_radar_scandinavia']['default_show'] = false;
$_BO['tpl_overlay']['meteox_radar_scandinavia']['sel_name'] = 'Meteox rain radar (Scandinavia)';
$_BO['tpl_overlay']['meteox_radar_scandinavia']['only_loggedin'] = true;
$_BO['tpl_overlay']['meteox_radar_scandinavia']['to_mercator'] = true;

//EUCLID (you can check strike polarity with this map)
//WARNING: Copyright! Only internal private usage!
//It's calibrated only for germany!
$_BO['tpl_overlay']['euclid']['img'] = 'http://www.meteorage.fr/euclid/euclid_last_lightnings.gif';
$_BO['tpl_overlay']['euclid']['coord'] = array(68, 43, 33.7, -22); //North, East, South, West (Degrees)
$_BO['tpl_overlay']['euclid']['default_show'] = false;
$_BO['tpl_overlay']['euclid']['sel_name'] = 'EUCLID';
$_BO['tpl_overlay']['euclid']['only_loggedin'] = true;
$_BO['tpl_overlay']['euclid']['to_mercator'] = false;
$_BO['tpl_overlay']['euclid']['opacity'] = 50;

//BLIDS Lightning Overlay
//WARNING: Copyright! Only internal private usage!
$_BO['tpl_overlay']['blids_de']['img'] = 'http://www.blids.de/spion/bilder/aktkartegergrau.jpg';
$_BO['tpl_overlay']['blids_de']['coord'] = array(55.11, 15.53, 47.13, 4.97);  //North, East, South, West (Degrees)
$_BO['tpl_overlay']['blids_de']['default_show'] = false;
$_BO['tpl_overlay']['blids_de']['sel_name'] = 'BLIDS Germany';
$_BO['tpl_overlay']['blids_de']['only_loggedin'] = true;
$_BO['tpl_overlay']['blids_de']['to_mercator'] = false;
$_BO['tpl_overlay']['blids_de']['opacity'] = 50;

//T-Online/wetter.info Radar
//WARNING: Copyright! Only internal private usage!
$time = time() - 300;
$i = sprintf('%02d', (string)intval(date('i', $time) / 15) * 15);
$time = strtotime(gmdate('Y-m-d H:'.$i.':00', $time).' UTC');
$date = gmdate('YmdHi', $time);

$_BO['tpl_overlay']['wetterinfo_radar']['img'] = "http://data.wetter.info//data/layers/xxlradar-de/xxlradar-de_radar_$date.gif"; //'http://data.wetter.info//data/maps/basemaps/xxlradar-de.jpg';
$_BO['tpl_overlay']['wetterinfo_radar']['coord'] = array(55.5, 16.6, 46.2, 4.5);  //North, East, South, West (Degrees)
$_BO['tpl_overlay']['wetterinfo_radar']['default_show'] = false;
$_BO['tpl_overlay']['wetterinfo_radar']['sel_name'] = 'Wetter.info Radar ('.date('H:i', $time).')';
$_BO['tpl_overlay']['wetterinfo_radar']['only_loggedin'] = true;
$_BO['tpl_overlay']['wetterinfo_radar']['to_mercator'] = true;
$_BO['tpl_overlay']['wetterinfo_radar']['opacity'] = 40;

$_BO['tpl_overlay']['wetterinfo_radar_small']['img'] = 'http://data.wetter.info/data/teaser/radar_de.gif';
$_BO['tpl_overlay']['wetterinfo_radar_small']['coord'] = array(55.4, 16.25, 46.55, 4.64);  //North, East, South, West (Degrees)
$_BO['tpl_overlay']['wetterinfo_radar_small']['default_show'] = false;
$_BO['tpl_overlay']['wetterinfo_radar_small']['sel_name'] = 'Wetter.info Radar (animiert)';
$_BO['tpl_overlay']['wetterinfo_radar_small']['only_loggedin'] = true;
$_BO['tpl_overlay']['wetterinfo_radar_small']['to_mercator'] = false;
$_BO['tpl_overlay']['wetterinfo_radar_small']['opacity'] = 60;




?>