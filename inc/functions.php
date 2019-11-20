<?php 

// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = array(
	[
		"quote" 	=> "One of my most productive days was throwing away 1000 lines of code.",
		"source"	=> "Ken Thompson",
		"link"		=> "http://thoughtsoncoding.com/author/ken-thompson",
		"citation"	=> "Thoughts.on(coding)",
		"year"		=> "unknown year"
	],
	[
		"quote" 	=> "A good programmer is someone who always looks both ways before crossing a one-way street.",
		"source"	=> "Doug Linder",
		"link"		=> "https://www.journaldev.com/240/my-25-favorite-programming-quotes-that-are-funny-too",
		"citation"	=> "JournalDev",
		"year"		=> "2010"
	],
	[
		"quote" 	=> "Code never lies, comments sometimes do.",
		"source"	=> "Ron Jeffries",
		"link"		=> "https://www.developerkafasi.com/code-comments/",
		"citation"	=> "Developer Kafası",
		"year"		=> "2019"
	],
	[
		"quote" 	=> "Let's go live on friday",
		"source"	=> "No developer ever",
		"link"		=> "",
		"citation"	=> "unknown",
		"year"		=> "never"
	],
	[
		"quote" 	=> "I choose a lazy person to do a hard job. Because a lazy person will find an easy way to dot it.",
		"source"	=> "Bill Gates",
		"link"		=> "",
		"citation"	=> "unknown",
		"year"		=> ""
	]
);

$colors = array(
	"#3639b5", "#7f36b5", "#e582b8", "#36b581", "#dd421d", "#debd0e"
);



// Get random array in quotes array

function getRandomQuote($quotes) {
	//get quotes array and randomize it
	return $quotes[random_int(0,4)];
}



// Display random quote

function printQuote($quotes) {

	//get random quote
	$random_quote = getRandomQuote($quotes);

	//define random quote data in variables
	$quote = $random_quote['quote'];
	$source = $random_quote['source'];
	$citation = $random_quote['citation'];
	$year = $random_quote['year'];
	$link = $random_quote['link'];

	echo '<div id="quote-box">';
	echo '<p class="quote">';
	echo $quote;
	echo '</p>';
	echo '<p class="source">';
	echo $source;

	//check if source has link
	if($link && $citation) {
		echo '<a href="' . $link . '" target="_blank">';
		echo '<span class="citation">';
		echo $citation;
		echo '</span>';
		echo '</a>';
	} else {
		echo '<span class="citation">';
		echo $citation;
		echo '</span>';
	}

	//check if year isset or else show unknown year
	if($year) {
		echo '<span class="year">';
		echo $year;
		echo '</span>';
	} else {
		echo '<span class="year">';
		echo 'unknown year';
		echo '</span>';
	}

	
	echo '</p>';
	echo '</div>';


}

// Get random color
function getRandomColor($colors) {
	//get colors array and randomize it
	return $colors[random_int(0,5)];
}


?>