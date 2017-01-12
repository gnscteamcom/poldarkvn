<?php

// Series initialization
$s03 = new Series(3, 2017, 9);

// === EPISODE 1 ===
$e01 = new Episode(1);
// Ep info
$e01->setReleasedDate('04/03/2017')
	->addTranslator('anmap')
	->setDriveID('0B4k5OikQ11AlcWMzdno2Ym16YnM')
	->setOpenloadID('zgW9ebygRhY')
	->setFrontImage('p045xt7k')
	->setDescription("Elizabeth hạ sinh Valentine.")
	->setSubReleasedDate('05/03/2017');
// Add to series
$s03->addEpisode($e01);

// ===================================================================


// Add series to Poldark
Poldark::addSeries($s03);