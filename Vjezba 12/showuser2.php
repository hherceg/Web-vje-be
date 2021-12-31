<pre><div class="text_to_html">&lt;?php
echo &#039;&lt;!DOCTYPE HTML&gt;
&lt;html lang=&quot;hr&quot;&gt;
	&lt;head&gt;
		&lt;title&gt;Primjeri&lt;/title&gt;
		&lt;meta http-equiv=&quot;content-type&quot; content=&quot;text/html; charset=UTF-8&quot;&gt;
		&lt;meta name=&quot;description&quot; content=&quot;&quot;&gt;
		&lt;meta name=&quot;keywords&quot; content=&quot;&quot;&gt;
		&lt;meta name=&quot;author&quot; content=&quot;Alen &Scaron;imec&quot;&gt;
		&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
		&lt;link rel=&quot;shortcut icon&quot; type=&quot;image/x-icon&quot; href=&quot;favicon.ico&quot;&gt;
		&lt;link rel=&quot;stylesheet&quot; href=&quot;<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot;&gt" class="_blanktarget">https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot;&gt</a>;
		&lt;script src=&quot;<a href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt" class="_blanktarget">https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt</a>;
		&lt;script src=&quot;<a href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot;&gt;&lt;/script&gt" class="_blanktarget">https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot;&gt;&lt;/script&gt</a>;
		&lt;style&gt;
			body { margin: 1em; }
			form { width: 300px; }
		&lt;/style&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;Contact form&lt;/h1&gt;
		&lt;p&gt;Firstname: &#039;.$_POST[&#039;firstname&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;Lastname: &#039;.$_POST[&#039;lastname&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;Email: &#039;.$_POST[&#039;email&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;Country: &#039;.$_POST[&#039;country&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;Message: &#039;.$_POST[&#039;message&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;&lt;a href=&quot;contactform.html&quot;&gt;Back to form!&lt;/a&gt;&lt;/p&gt;&#039;;

		$body = &#039;&lt;h1&gt;Contact form&lt;/h1&gt;
		&lt;p&gt;Firstname: &#039;.$_POST[&#039;firstname&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;Lastname: &#039;.$_POST[&#039;lastname&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;E-mail: &#039;.$_POST[&#039;email&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;Country: &#039;.$_POST[&#039;country&#039;] . &#039;&lt;/p&gt;
		&lt;p&gt;Message: &#039;.$_POST[&#039;message&#039;] . &#039;&lt;/p&gt;&#039;;

		
		$headers = &quot;MIME-Version: 1.0&quot; . &quot;\r\n&quot;;
		$headers .= &quot;Content-type:text/html;charset=UTF-8&quot; . &quot;\r\n&quot;;
		$headers .= &#039;From: &lt;webmaster@example.com&gt;&#039; . &quot;\r\n&quot;;
		$headers .= &#039;Cc: myboss@example.com&#039; . &quot;\r\n&quot;;
		mail($_POST[&#039;email&#039;], &#039;My online form&#039;, $body, $headers);
	echo &#039;&lt;/body&gt;
&lt;/html&gt;&#039;;
?&gt;</div></pre>