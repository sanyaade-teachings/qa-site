<?php

// Written by Greg Opperman for the Participatory Culture Foundation
// Copyright 2006

$i= $_REQUEST['i'];

	print <<<END
<HTML><BODY>
<H2>Miro Feed update test</H2>

END;

if ($i < 1 or $i > 2) {
	print <<<END
	This script is meant to test feed updates and the newly available badge display in Miro.
	You can use the buttons below to replace 
	<a href="http://qa.participatoryculture.org/feeds_test/feed9.rss">http://qa.participatoryculture.org/feeds_test/feed9.rss</a>
	with a feed with either one item or ten:<br />
	<BLOCKQUOTE>
	<FORM action="http://qa.participatoryculture.org/feeds_test/feed-add-items.php" method="GET">
	<input type="radio" name="i" value="1"> 1 Item
	<br />
	<input type="radio" name="i" value="2"> 10 Items <br />
	<INPUT type="submit" value="Submit">
	</FORM>
	&nbsp;&nbsp;&nbsp;
	</FORM>
	</BLOCKQUOTE>
END;
} else {
   $f = fopen('feed9.rss', 'w');
   if(!$f) {
      echo "Error! Couldn't open the file.";
   } else {
   	fputs($f,"<?xml version=\"1.0\" encoding=\"utf-8\"?>
		<rss version=\"2.0\" 
			xmlns:media=\"http://search.yahoo.com/mrss\"
			xmlns:creativeCommons=\"http://backend.userland.com/creativeCommonsRssModule\"
			xmlns:dtvmedia=\"http://particpatoryculture.org/RSSModules/dtv/1.0\">
		<channel>
		<title>Feed update TEST</title>
		<description>
		This is a PCF-governed RSS 2.0 feed to test feed 
updating.
		</description>
		<link>http://qa.participatoryculture.org/feeds_test/feed1</link>
		<dtvmedia:libraryLink>http://qa.participatoryculture.org/feeds_test/feed1</dtvmedia:libraryLink>
		<pubDate>Thu, 20 Apr 2006 12:53:29 -0500</pubDate>
		<generator>Participatory Culture Foundation</generator>
		<item>
			<title>Video 1</title>
			<link>http://qa.participatoryculture.org/feeds_test/py1.mov</link>
			<guid 
isPermaLink=\"false\">A1cd241bf61bf9c4fb34aa48ecb252c1e40d50088</guid>
			<description>
				This is the first test video, it is 842 KB and should download quickly.
			</description>
			<media:thumbnail url=\"http://qa.participatoryculture.org/feeds_test/mike_tv_drawing_cropped.jpg\"/>
			<enclosure url=\"http://qa.participatoryculture.org/feeds_test/py1.mov\" type=\"video/quicktime\" length=\"842\"/>
			<pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
		</item>");
	if ($i == 2) {
		fputs($f,"<item>
			<title>Video 2</title>
			<link>http://qa.participatoryculture.org/feeds_test/machine_gun.avi</link>
			<guid isPermaLink=\"false\">A1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
			<description>
				This is the second test video, it is 842 KB and should download quickly.
			</description>
			<media:thumbnail url=\"http://qa.participatoryculture.org/feeds_test/mike_tv_drawing_cropped.jpg\"/>
			<enclosure url=\"http://qa.participatoryculture.org/feeds_test/machine_gun.avi\" type=\"video/quicktime\" length=\"842\"/>
			<pubDate>Thu, 20 Apr 2006 13:53:21 -0500</pubDate>
		</item>

<item>
   <title>Capt.: 1 Dead in Calif. Coast Guard Boat Collision</title>
   <description>A 33-foot Coast Guard vessel and a pleasure boat collided as a Christmas watercraft parade was going on in San Diego Bay, killing an 8-year-old boy and seriously injuring five people, authorities said. (Dec. 21)</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://www.youtube.com/v/qkO2RVYfAoQ?f=user_uploads&app=youtube_gdata\" length=\"0\" type=\"application/x-shockwave-flash\" />
</item>



<item>
   <title>The Joo Joo</title>
   <description>&lt;br &#x2F;&gt;

An imaginnary animal created by a pupil in Meldrum PS. This strange creature came into being as the result of the learner being involved in a games based learning project that involved the use of Samba De Amigo for the Wii. &lt;br &#x2F;&gt;&lt;br &#x2F;&gt;Here we see how technology can help encourage children to do their very best in writing so that when their creature &#x27;comes to life&#x27; with Crazy Talk then it is at its very best!</description>
   <pubDate>Thu, 25 Feb 2010 17:03 GMT</pubDate>
   <enclosure url=\"http://blip.tv/file/get/Consolarium-TheJooJoo216.flv\" length=\"3425485\" type=\"video/x-flv\" />
</item>

<item>
   <title>YouTube - yesterday</title>
   <description></description>
   <pubDate>Thu, 25 Feb 2010 17:03 GMT</pubDate>
   <enclosure url=\"http://www.youtube.com/watch?v=ONXp-vpE9eU\" length=\"0\" type=\"video/x-flv\" />
</item>


<item>
   <title>ShowBiz Minute: Murphy, Avatar, Jonas</title>
   <description>Actress Brittany Murphy dies at age 32; &#x27;Avatar&#x27; tops the US box office; Reports say Kevin Jonas has married girlfriend in New York. (Dec. 21)</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://www.youtube.com/v/t_1ODfsUjYI?f=user_uploads&app=youtube_gdata\" length=\"0\" type=\"application/x-shockwave-flash\" />
</item>

<item>
   <title>The politics of what is possible</title>
   <description>&lt;div&gt;
&lt;table cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; border=&quot;0&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td width=&quot;140&quot; valign=&quot;top&quot; rowspan=&quot;2&quot;&gt;&lt;div&gt;&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;watch?v=hiy99yukFIo&amp;amp;feature=youtube_gdata&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;i.ytimg.com&#x2F;vi&#x2F;hiy99yukFIo&#x2F;default.jpg&quot; &#x2F;&gt;&lt;&#x2F;a&gt;&lt;&#x2F;div&gt;&lt;&#x2F;td&gt;
&lt;td width=&quot;256&quot; valign=&quot;top&quot;&gt;&lt;div&gt;&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;watch?v=hiy99yukFIo&amp;amp;feature=youtube_gdata&quot;&gt;The politics of what is possible&lt;&#x2F;a&gt;
&lt;br &#x2F;&gt;&lt;&#x2F;div&gt;
&lt;div&gt;&lt;span&gt;The Cap and Trade Debate part 3&lt;&#x2F;span&gt;&lt;&#x2F;div&gt;&lt;&#x2F;td&gt;
&lt;td width=&quot;146&quot; valign=&quot;top&quot;&gt;&lt;div&gt;&lt;span&gt;From:&lt;&#x2F;span&gt;
&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;profile?user=TheRealNews&quot;&gt;TheRealNews&lt;&#x2F;a&gt;&lt;&#x2F;div&gt;
&lt;div&gt;&lt;span&gt;Views:&lt;&#x2F;span&gt;
3&lt;&#x2F;div&gt;
&lt;div&gt;&lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_empty_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_empty_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_empty_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_empty_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_empty_11x11.gif&quot; &#x2F;&gt;&lt;&#x2F;div&gt;
&lt;div&gt;0
&lt;span&gt;ratings&lt;&#x2F;span&gt;&lt;&#x2F;div&gt;&lt;&#x2F;td&gt;&lt;&#x2F;tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;span&gt;Time:&lt;&#x2F;span&gt;
&lt;span&gt;15:31&lt;&#x2F;span&gt;&lt;&#x2F;td&gt;
&lt;td&gt;&lt;span&gt;More in&lt;&#x2F;span&gt;
&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;categories_portal?c=25&quot;&gt;News &amp;amp; Politics&lt;&#x2F;a&gt;&lt;&#x2F;td&gt;&lt;&#x2F;tr&gt;&lt;&#x2F;tbody&gt;&lt;&#x2F;table&gt;&lt;&#x2F;div&gt;</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://www.youtube.com/watch?v=hiy99yukFIo&feature=youtube_gdata\" length=\"0\" type=\"video/flv\" />
</item>


<item>
   <title>France: Farewell to Corporal Punishment</title>
   <description>Many French parents still feel that if you spare the rod, you spoil the child, and that a swat on the rear every now and again does no lasting damage. But now the state is stepping in.&lt;br &#x2F;&gt;&lt;p&gt;A parliamentarian from the ruling conservative UMP party is trying to pass a law making the corporal punishment of children illegal, as it is in Germany and many other EU member states. The Enlightenment might have had its roots in France, but when it comes to raising children, many parents seem to prefer a strict line. Even Astrid Lindgren&#x27;s &quot;Pippi Longstocking&quot; books were censored for many years, because the red-haired protagonist was a little too anarchistic for French taste. The planned ban on corporal punishment still hasn&#x27;t gained wide acceptance, because many people in France think it goes too far.&lt;strong&gt;&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://dw-world-od.streamfarm.net/Events/mp4/ej/2009_12_17_10_30_frankreich_sd.mp4\" length=\"19771584\" type=\"video/mp4\" />
</item>

<item>
   <title>Hollywood vs. New York</title>
   <description>&lt;br &#x2F;&gt;

Four decades of celluloid New York annihilation distilled into one musical montage.</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://blip.tv/file/get/Kirby1-HollywoodVsNewYork529.flv\" length=\"34240633\" type=\"video/x-flv\" />
</item>
<item>
   <title>Monty Python on iTunes</title>
   <description>&lt;div&gt;
&lt;table cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; border=&quot;0&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td width=&quot;140&quot; valign=&quot;top&quot; rowspan=&quot;2&quot;&gt;&lt;div&gt;&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;watch?v=8Dd5AkbwJHw&amp;amp;feature=youtube_gdata&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;i.ytimg.com&#x2F;vi&#x2F;8Dd5AkbwJHw&#x2F;default.jpg&quot; &#x2F;&gt;&lt;&#x2F;a&gt;&lt;&#x2F;div&gt;&lt;&#x2F;td&gt;
&lt;td width=&quot;256&quot; valign=&quot;top&quot;&gt;&lt;div&gt;&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;watch?v=8Dd5AkbwJHw&amp;amp;feature=youtube_gdata&quot;&gt;Monty Python on iTunes&lt;&#x2F;a&gt;
&lt;br &#x2F;&gt;&lt;&#x2F;div&gt;
&lt;div&gt;&lt;span&gt;Monty Python on itunes. Now available in the UK: itunes.com&lt;&#x2F;span&gt;&lt;&#x2F;div&gt;&lt;&#x2F;td&gt;
&lt;td width=&quot;146&quot; valign=&quot;top&quot;&gt;&lt;div&gt;&lt;span&gt;From:&lt;&#x2F;span&gt;
&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;profile?user=MontyPython&quot;&gt;MontyPython&lt;&#x2F;a&gt;&lt;&#x2F;div&gt;
&lt;div&gt;&lt;span&gt;Views:&lt;&#x2F;span&gt;
26308&lt;&#x2F;div&gt;
&lt;div&gt;&lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_full_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_full_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_full_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_full_11x11.gif&quot; &#x2F;&gt; &lt;img align=&quot;top&quot; alt=&quot;&quot; src=&quot;http:&#x2F;&#x2F;gdata.youtube.com&#x2F;static&#x2F;images&#x2F;icn_star_half_11x11.gif&quot; &#x2F;&gt;&lt;&#x2F;div&gt;
&lt;div&gt;595
&lt;span&gt;ratings&lt;&#x2F;span&gt;&lt;&#x2F;div&gt;&lt;&#x2F;td&gt;&lt;&#x2F;tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;span&gt;Time:&lt;&#x2F;span&gt;
&lt;span&gt;01:18&lt;&#x2F;span&gt;&lt;&#x2F;td&gt;
&lt;td&gt;&lt;span&gt;More in&lt;&#x2F;span&gt;
&lt;a href=&quot;http:&#x2F;&#x2F;www.youtube.com&#x2F;categories_portal?c=23&quot;&gt;Comedy&lt;&#x2F;a&gt;&lt;&#x2F;td&gt;&lt;&#x2F;tr&gt;&lt;&#x2F;tbody&gt;&lt;&#x2F;table&gt;&lt;&#x2F;div&gt;</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://www.youtube.com/watch?v=8Dd5AkbwJHw&feature=youtube_gdata\" length=\"0\" type=\"video/flv\" />
</item>

<item>
   <title>Fast Draw: Human Power</title>
   <description>There are devices that can turn energy created by humans into electricity. Fast Draw&#x27;s Mitch Butler and Josh Landis talk about how it works and how it can be harnessed to power the future.</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://feeds.cbsnews.com/~r/VideoFastDraw/~5/V0ueueIVPB0/FastDraw_HumanPower_720.mp4\" length=\"0\" type=\"video/mp4\" />
</item>

<item>
   <title>La saponetta</title>
   <description></description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://mediapolis.rai.it/relinker/relinkerServlet.htm?cont=4PQBxiT5mpUeeqqEEqual\" length=\"1532772\" type=\"video/mp4\" />
</item>

<item>
 <title>The Lionshare</title>
<description>This the kind of film 'anyone' could have made -- 'anyone', that is, with the talent to prise dialogue (and in-jokes) from their own lives, use the backdrop of their own homes for scenery, friends as actors and their own experiences as scenarios -- and still make it pop. These stories are ours, and we think this is the start of a new kind of cinema.</description>
   <pubDate>Thu, 25 Feb 2010 17:00 GMT</pubDate>
   <enclosure url=\"http://vodo.net/media/torrents/Lionshare.2009.Legacy.2008.720p.x264-VODO.torrent\" length=\"1532772\" type=\"application/x-bittorrent\" />
</item>

");
	}
	fputs($f, "</channel></rss>");

   }

   fclose($f);
   print"Feed Changed";
}




print "</BODY></HTML>";
?>
