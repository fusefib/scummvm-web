<?

/*
 * Links to Demo downloads
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_header("ScummVM :: Game Demos");
sidebar_start();

//display welcome table
echo html_round_frame_start("Game Demos","");


?>
	<h1>Game Demos</h1>
	<p>
	  This page lists some links to demos of various games, that in general don't work as well as the
	  full versions. Full Throttle, The Dig, and the Curse of Monkey Island in particular.<br><br>
	  Do not file bug reports against these demos as they aren't supported games.<br><br>
	  Please contact us if you have a copy of a demo not listed here.<br><br>
	  Demos without functional download links are denoted by a * character.<br>
          <br><br>
	</p>

<?

$demos = array(
	'Maniac Mansion (DOS demo - Non interactive)'
		=> array('http://quick.mixnmojo.com/demos/maniac.rar', 'maniac'),
	'Zak McKracken and the Alien Mindbenders (Atari ST - Non interactive)'
		=> array('http://www.cowlark.com/scumm.dat/zakstdemo.zip', 'zak'),
	'The Secret of Monkey Island (16 colour demo)'	
		=> array('http://www.cowlark.com/scumm.dat/mi_demo2.zip', 'monkeyega'),
	'The Secret of Monkey Island (Amiga demo)'	
		=> array('http://quick.mixnmojo.com/demos/mi1amigademo.zip', 'monkeyvga'),
	'Indiana Jones and the Last Crusade (16 colour - Non interactive)'	
		=> array('http://www.cowlark.com/scumm.dat/indy3ega-demo.zip', 'indy3ega'),
	'Loom (16 colour - Non interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Loomdemo.zip', 'loom'),
	'Passport to Adventure (16 colour demos of mi, loom, indy3)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Sampler.zip', 'pass'),
	'Indiana Jones and the Last Crusade & Loom (FM Towns demo - Non interactive)'
		=> array('http://www.cowlark.com/scumm.dat/indyloom.zip', 'zaktowns'),
	'Indiana Jones and the Last Crusade & Zak McKracken (FM Towns demo - Non interactive)'
		=>array('http://www.cowlark.com/scumm.dat/indyzak.zip', 'zaktowns'),
	'Zak McKracken & Loom (FM Towns demo - Non interactive)'
		=>array('http://www.cowlark.com/scumm.dat/zakloom.zip', 'zaktowns'),
	'Monkey Island 2 (DOS demo)'
		=> array('http://www.cowlark.com/scumm.dat/mi2demo.zip', 'mi2demo'),
	'Indiana Jones and the Fate of Atlantis (DOS demo - Interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Playfate.zip', 'playfate'),
	'Indiana Jones and the Fate of Atlantis (DOS demo - Non interactive)'
		=> array('http://www.cowlark.com/scumm.dat/fate.zip', 'fate'),
	'Indiana Jones and the Fate of Atlantis (FM Towns demo - Non interactive)'
		=> array('http://www.cowlark.com/scumm.dat/indy4demo.zip', 'indydemo'),
	'Sam and Max Hit the Road (DOS demo - Non interactive)'
		=> array('http://www.cowlark.com/scumm.dat/samdemo.zip', 'samdemo'),
	'Sam and Max Hit the Road (Macintosh demo - Interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/mac/samdemo.sea.bin', 'samdemo'),
	'Sam and Max Hit the Road (DOS demo - Interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Snmdemo.zip', 'snmdemo'),
	'Sam and Max Hit the Road WIP (DOS demo - Interactive)'
		=> array('http://www.cowlark.com/scumm.dat/snmidemo.zip', 'snmidemo'),
	'Putt-Putt Joins the Parade (DOS demo)'
		=> array('http://www.cowlark.com/scumm.dat/puttpara.zip', 'puttdemo'),
	'Putt-Putt Goes to the Moon (DOS demo)'
		=> array('http://www.cowlark.com/scumm.dat/moondemo.zip', 'moondemo'),
	'Fatty Bear\'s Birthday Surprise (DOS demo)'
		=> array('http://www.cowlark.com/scumm.dat/fatdemo.zip', 'fbdemo'),
	'Day of the Tentacle (DOS demo - Non interactive)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/Dottdemo.zip', 'dottdemo'),
	'Full Throttle (Macintosh demo)*'
		=> array('', 'ftdemo'),
	'Full Throttle (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/ftdemo.zip', 'ftpcdemo'),
	'The Dig (Macintosh demo)*'
		=> array('', 'digdemo'),
	'The Dig (DOS demo)'
		=> array('http://quick.mixnmojo.com/demos/digdemo.zip', 'digdemo'),
	'The Curse of Monkey Island (Windows demo)'
		=> array('ftp://ftp.lucasarts.com/demos/pc/cursedemo.exe', 'comidemo'),
	'The Curse of Monkey Island (Windows demo with movies)*'
		=> array('http://files.mixnmojo.com/m3demo.zip', 'comidemo'),
	'Simon the Sorcerer 1 (DOS demo)'
		=> array('http://www.cowlark.com/scumm.dat/simon1demo.zip', 'simon1demo'),
	'Simon the Sorcerer 1 Talkie (Acorn demo)*'
		=> array('', 'simon1acorn'),
	'Simon the Sorcerer 2 Talkie (DOS demo)'
		=> array('http://www.cowlark.com/scumm.dat/simon2demo.zip', 'simon2talkie'),
	'Broken Sword II'
		=> array('http://ftp.se.kde.org/pub/pc/games/pcgameworld/demos/bs2-demo.zip', 'sword2demo'),
	'Flight of the Amazon Queen (Datafile only)'
		=> array('http://0x.7fc1.org/fotaq/fotaq_demo.zip', 'queen'),
	'Flight of the Amazon Queen (PCGAMES demo, Datafile only)'
		=> array('http://0x.7fc1.org/fotaq/fotaq_demo_pcgames.zip', 'queen')
	);

// render the demo list
echo html_frame_start("Game Demos","90%",2,1,"color4");
echo html_frame_tr(
		   html_frame_td("Demo Name / Download Link").
		   html_frame_td("Game Target"),
		   "color4"

		  );
	$c = 0;
	while (list($name,$array) = each($demos))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
			html_frame_td("<a href=\"$array[0]\">$name</a>").
		    	html_frame_td($array[1]),
	  	        $color
	 	);
		$c++;
	}

echo html_frame_end("&nbsp;");
  
echo html_p();
echo html_round_frame_end("&nbsp;");

// end of html
sidebar_end();
html_footer();

?>
