<!DOCTYPE html
	<html lang="en">
		<head>
			<meta charset="UTF-8" />
			<title>IMDB Data Design</title>
		</head>
		<body>
			<div>
				<header>
					<p>IMDB Data Design Project</p>
					<img src="images/imdb-dylanimg.png" alt="image of dylan">
				</header>
				<div>
					<p>Persona</p>
					<p>Name:</p>
					<p>Dylan McDonald</p>
					<p>Profession:</p>
					<p>Deep Dive BootCamp Instructor, Freelance Backend Coder</p>
					<p>Technology:</p>
					<p>A little bit everything</p>
					<p>Frustrations & Needs</p>
					<p>Dylan is a lifelong Trekkie who prides himself on his knowledge of the Star Trek universe. His friend
						claims that Patrick Stewart made an appearance on Star Trek Voyager as Jean-Luc Picard. Dylan bets the
						next round of drinks that in fact Jean-Luc did not make an appearance on Star Trek Voyager but did
						make a cameo on Deep Space Nine</p>
					<p>Goal:</p>
					<p>Dylan knows he is right but with the next round of drinks on the way Dylan needs quick access to
						Patrick Stewarts filmography within 1 minute and prove to his friends that he is superior in all
						thing StarTrek and avoid the shame of having to pay for the next round</p>
				</div>
				<div>
					<p>USE CASES</p>
					<p>Use Case 1</p>
					<p>Goal: To find out if Patrick Stewart (Jean-Luc Picard) appeared in Star Trek: Deep Space Nine or Star
						Trek Voyager</p>
						<ol type="1">
							<li>Type Jean-Luc Picard into search bar and press the magnifying glass search botton</li>
							<li>IMDB returns search results with a character category and a keyword category</li>
							<li>Scroll down and click the Jean-Luc Picard link, under the character category, hightlighted in blue</li>
							<li>IMDB navigates to the Jean-Luc Picard(character) page, including a picture, fictional biography
							and a filmography</li>
							<li>Scroll through the filmography section, confirming a credit for Star Trek: Deep Space Nine but not
							for Voyager</li>
						</ol>
				</div>
				<div>
					<p>Use Case 2</p>
					<p>Goal: To find out if Patrick Stewart (Jean-Luc Picard) appeared in Star Trek: Deep Space Nine or Star
						Trek Voyager</p>
						<ol type="1">
							<li>Type Star Trek in the search bar and press magnifying glass search button</li>
							<li>IMDB returns many results under the Title category</li>
							<li>Find the Star Trek: The Next Generation and click the link</li>
							<li>IMDB navigates to the Star Trek: The Next Generation page, which includes a synopsis of the series,
								options for exploring different seasons and episodes, videos and photos relating to the series
								and cast, and a list of actors with real names, photos and character names</li>
							<li>Scroll down to the cast section and click on Patrick Stewarts link</li>
							<li>IMDB navigates to Patrick Stewarts page which includes a pic, a biography and a filmography</li>
							<li>Scroll down to the filography section noting a credit for Star Trek: Deep Space Nine, nut not for
								Voyager</li>
						</ol>
				</div>
				<div>
					<p>Use Case 3</p>
 					<p>Goal: To find out if Patrick Stewart (Jean-Luc Picard) appeared in Star Trek: Deep Space Nine or Star
					Trek Voyager</p>
						<ol type="1">
							<li>Type Patrick Stewart into the search bar and press magnifying glass search button</li>
							<li>IMDB returns many search under the name category</li>
							<li>Find the Patrick Stewart (The Next Generation) link and click it</li>
							<li>IMDB navigates to the actor page of Patrick Stewart which includes a picture, a biography and a
							filmography</li>
							<li>Scroll down to the filmography section of the page, noting a credit for Star Trek: Deep Space Nine,
							but not for Voyager</li>
						</ol>
				<div>
					<img src="images/imdbdatachart.jpg" alt="imdb data design img">
				</div>
				</div>
				<!-- HTML generated using hilite.me --><div style="background: #f8f8f8; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #008000; font-weight: bold">DROP</span> <span style="color: #008000; font-weight: bold">TABLE</span> <span style="color: #008000; font-weight: bold">IF</span> <span style="color: #008000; font-weight: bold">EXISTS</span> credit;
<span style="color: #008000; font-weight: bold">DROP</span> <span style="color: #008000; font-weight: bold">TABLE</span> <span style="color: #008000; font-weight: bold">IF</span> <span style="color: #008000; font-weight: bold">EXISTS</span> film;
<span style="color: #008000; font-weight: bold">DROP</span> <span style="color: #008000; font-weight: bold">TABLE</span> <span style="color: #008000; font-weight: bold">IF</span> <span style="color: #008000; font-weight: bold">EXISTS</span> actor;
<span style="color: #008000; font-weight: bold">CREATE</span> <span style="color: #008000; font-weight: bold">TABLE</span> <span style="color: #0000FF">actor</span> (
	actorId <span style="color: #B00040">INT</span> <span style="color: #008000; font-weight: bold">UNSIGNED</span> <span style="color: #008000">AUTO_INCREMENT</span> <span style="color: #008000; font-weight: bold">NOT</span> <span style="color: #880000">NULL</span>,
	socialMedia <span style="color: #B00040">VARCHAR</span>(<span style="color: #666666">128</span>),
	biography <span style="color: #B00040">VARCHAR</span>(<span style="color: #666666">2500</span>),
	imagesPath <span style="color: #B00040">VARCHAR</span>(<span style="color: #666666">128</span>),
	<span style="color: #008000; font-weight: bold">UNIQUE</span>(socialMedia),
	<span style="color: #008000; font-weight: bold">UNIQUE</span>(biography),
	<span style="color: #008000; font-weight: bold">UNIQUE</span>(imagesPath),
	<span style="color: #008000; font-weight: bold">PRIMARY</span> <span style="color: #008000; font-weight: bold">KEY</span>(actorId)
);

<span style="color: #008000; font-weight: bold">CREATE</span> <span style="color: #008000; font-weight: bold">TABLE</span> <span style="color: #0000FF">film</span> (
	filmId <span style="color: #B00040">INT</span> <span style="color: #008000; font-weight: bold">UNSIGNED</span> <span style="color: #008000">AUTO_INCREMENT</span> <span style="color: #008000; font-weight: bold">NOT</span> <span style="color: #880000">NULL</span>,
	releaseDate <span style="color: #B00040">DATETIME</span> <span style="color: #008000; font-weight: bold">NOT</span> <span style="color: #880000">NULL</span>,
	director <span style="color: #B00040">VARCHAR</span>(<span style="color: #666666">128</span>),
	<span style="color: #008000; font-weight: bold">INDEX</span>(filmId),
	<span style="color: #008000; font-weight: bold">FOREIGN</span> <span style="color: #008000; font-weight: bold">KEY</span>(actorId) <span style="color: #008000; font-weight: bold">REFERENCES</span> <span style="color: #0000FF">actor</span>(actorId),
	<span style="color: #008000; font-weight: bold">PRIMARY</span> <span style="color: #008000; font-weight: bold">KEY</span>(filmId)
);

<span style="color: #008000; font-weight: bold">CREATE</span> <span style="color: #008000; font-weight: bold">TABLE</span> <span style="color: #0000FF">credit</span> (
	actorId <span style="color: #B00040">INT</span> <span style="color: #008000; font-weight: bold">UNSIGNED</span> <span style="color: #008000; font-weight: bold">NOT</span> <span style="color: #880000">NULL</span>,
	filmId <span style="color: #B00040">INT</span> <span style="color: #008000; font-weight: bold">UNSIGNED</span> <span style="color: #008000; font-weight: bold">NOT</span> <span style="color: #880000">NULL</span>,
	role <span style="color: #B00040">VARCHAR</span>(<span style="color: #666666">128</span>),
	<span style="color: #008000; font-weight: bold">INDEX</span>(actorId),
	<span style="color: #008000; font-weight: bold">INDEX</span>(filmId),
	<span style="color: #008000; font-weight: bold">FOREIGN</span> <span style="color: #008000; font-weight: bold">KEY</span>(actorId) <span style="color: #008000; font-weight: bold">REFERENCES</span> <span style="color: #0000FF">actor</span>(actorId),
	<span style="color: #008000; font-weight: bold">FOREIGN</span> <span style="color: #008000; font-weight: bold">KEY</span>(filmId) <span style="color: #008000; font-weight: bold">REFERENCES</span> <span style="color: #0000FF">film</span>(filmId)
);
</pre></div>
			</div>
		</body>
