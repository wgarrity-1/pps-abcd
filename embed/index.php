<?php

$iframe_code = [
    "one-day-simple" => "<iframe src='https://abcd.wgarrity.com/embed/one-day/simple.php' height='200' width='200' style='border: 0px;'></iframe>",
    "one-day-middle" => "<iframe src='https://abcd.wgarrity.com/embed/one-day/schedule-middle.php' height='700' width='700' style='border: 0px;'></iframe>",
    "one-day-high" => "<iframe src='https://abcd.wgarrity.com/embed/one-day/schedule-high.php' height='500' width='700' style='border: 0px;'></iframe>",
    "one-day-cte-junior" => "<iframe src='https://abcd.wgarrity.com/embed/one-day/schedule-cte-junior.php' height='500' width='700' style='border: 0px;'></iframe>",
    "one-day-cte-senior" => "<iframe src='https://abcd.wgarrity.com/embed/one-day/schedule-cte-senior.php' height='500' width='700' style='border: 0px;'></iframe>",
]


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Embed This Site</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/link-browse.css">
    <link rel="stylesheet" href="../assets/highlight.js/styles/github.css">
    <script src="../assets/highlight.js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    
    <style>
        
        main {
            margin: 0px;
        }
        
        .how-to-embed-links {
            padding-bottom: 10px;
            width: 90%;
            margin: auto;
            border-bottom: 1px solid black;
        }
        
        iframe {
            margin: 5px auto;
        }
        
        pre {
            width: 50%;
            border: 1px solid black;
            margin: 5px auto;
        }
        
        
    </style>
    
    <!-- CSS Variables Polyfill for IE11 so that this site displays properly on IE11, literally nobody is using IE, or should, but putting this in here just in case that one person who uses IE tries to visit this site gets to see this site work properly. Source code https://github.com/nuxodin/ie11CustomProperties -->
    <script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.1.0/ie11CustomProperties.min.js"><\/script>');</script>
</head>

<body>
    
    <header>
        Embed This Site
    </header>
    
    <nav>
        <a href="../index.php">Normal Schedule</a>
        <a href="../cte.php">CTE Schedule</a>
        <a href="https://docs.google.com/document/d/10AsMpaTQHgyvpkZ617QAIu6Q960K_rP9PePc6a3BmYY/edit">PPS Schedule Designation Document</a>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0q4J-G4v-dvZeb01JuLjBRxiyuKWSyGRxKstK6TLBP4LHMA/viewform?usp=sf_link">Contact Form</a>
    </nav>
    
    <main>
        
        <div class="how-to-embed-links">
            <a href="https://docs.google.com/document/d/1HLWoVfNLSCcT99PsBNcdXzTlfNYM0LBeXFiWVw5JVPw/edit?usp=sharing">How to Embed HTML Content on Canvas - Specifically for The Embeds Below</a>
        </div>
        
        <div class="embed-views">
            
            <h1>Simple One Day</h1>
            <?=$iframe_code["one-day-simple"]?>
            <h2>Code:</h2>
            <pre><code class="html"><?=htmlspecialchars($iframe_code["one-day-simple"]);?></code></pre>
            
            <h1>One Day with Middle School Schedule</h1>
            <?=$iframe_code["one-day-middle"]?>
            <h2>Code:</h2>
            <pre><code class="html"><?=htmlspecialchars($iframe_code["one-day-middle"]);?></code></pre>
            
            <h1>One Day with High School Schedule</h1>
            <?=$iframe_code["one-day-high"]?>
            <h2>Code:</h2>
            <pre><code class="html"><?=htmlspecialchars($iframe_code["one-day-high"]);?></code></pre>
            
            <h1>One Day with Junior CTE Schedule</h1>
            <?=$iframe_code["one-day-cte-junior"]?>
            <h2>Code:</h2>
            <pre><code class="html"><?=htmlspecialchars($iframe_code["one-day-cte-junior"]);?></code></pre>
            
            <h1>One Day with Senior CTE Schedule</h1>
            <?=$iframe_code["one-day-cte-senior"]?>
            <h2>Code:</h2>
            <pre><code class="html"><?=htmlspecialchars($iframe_code["one-day-cte-senior"]);?></code></pre>
            
            
        </div>
        
        <h1>More Embeds Coming Soon!</h1>
        
    </main>
    
    <footer>
        
        <div id="created-by">Site Created by William Garrity</div>
        
    </footer>
    
</body>

</html>