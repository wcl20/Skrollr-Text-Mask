<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Text Mask</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="background"></div>
    <svg height="100%" width="100%"
    data-0="transform: scale(1);"
    data-500="transform: scale(100);"
    >
      <defs>
        <mask id="mask" x="0" y="0" height="100%" width="100%">
          <rect fill="white" x="0" y="0" height="100%" width="100%" />
          <g>
            <text x="-150" y="35" text-anchor="middle">Skr</text>
            <circle cx="0" cy="0" r="40" />
            <text x="140" y="35" text-anchor="middle">llr</text>
          </g>
        </mask>
      </defs>
      <rect fill="black" x="0" y="0" height="100%" width="100%" mask="url(#mask)" />
    </svg>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
  <script>
    // Skrollr
    let s = skrollr.init();
    // Position svg
    let svg = document.querySelector("svg g");
    let width = window.innerWidth;
    let height = window.innerHeight;
    svg.setAttribute("transform", `translate(${width / 2}, ${height / 2})`);
  </script>
</body>
</html>
