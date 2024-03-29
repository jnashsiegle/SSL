<?php
  if(isset($_POST['submit'])){
    $file = "data.xml";
    $userNode = 'student';

    $doc = new DOMDocument('1.0');
    $doc->preserveWhiteSpace = false; //no text area being ;used so false
    $doc->load($file);
    $doc->formatOutput = true; //do these three in this order or layout may not look right
    
    $root = $doc->documentElement;

    $post = $_POST;
    unset($post['submit']); //don't need submit in our array

    $user = $doc->createElement($userNode); //create the usernode
    $user = $root->appendChild($user); //append the $user to the root 

    foreach($post as $key => $value) {
      $node = $doc->createElement($key, $value); //use id's from the form elements
      $user->appendChild($node); //appending the child we just created thus $node
    }

    $doc->save($file) or die("Sorry, there seems to be a problem saving the file.");
    header('Location: thanks.php');
  }

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Roux Academy: Form Entry</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="../_scripts/respond.min.js"></script>
<![endif]-->
<link href="styles/main.css" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
<link rel="stylesheet" href="styles/base.css" type="text/css">
</head>
<body id="blogPage">
<header class="blogHeader pageHeader">
  <h1>Roux Academy of Art and Design<a href="/index.htm" title="home"></a></h1>
  <nav id="pageNav" class="cf">
    <ul>
      <li><a href="programs/programs.htm" title="programs">Programs</a></li>
      <li><a href="admissions.htm" title="admissions">Admissions</a></li>
      <li><a href="student_portal.htm" title="student portal">Student Portal</a></li>
      <li><a href="campus_portal.htm" title="campus portal">Campus</a></li>
      <li><a href="alumni.htm" title="alumni">Alumni</a></li>
      <li><a href="store/index.php"  title="Roux Academy Store">store</a></li>
      <li><a href="about/about.htm"  title="about Roux Academy">About</a></li>
    </ul>
  </nav>
</header>
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Tell us about yourself</h1>
    <article class="post">

      <h2><a href="#">The more we know, the more we can help</a></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non  mauris orci, quis tincidunt sapien. Vestibulum sodales est ut diam  tincidunt non bibendum dui cursus. </p>
    </article>
        <div id="container">
          <form name="form1" method="post" action="">
            <p>
              <label for="name">Name: </label>
              <input type="text" name="name" id="name" placeholder="Your full name" autofocus required>
            </p>
            <p>
              <label for="email">Email: </label>
              <input type="email" name="email" id="email">
            </p>
            <p>
              <label for="cell">Cell: </label>
              <input type="tel" name="cell" id="cell">
            </p>
            <p>
              <label for="dob">Date of birth: </label>
              <input type="date" name="dob" id="dob">
            </p>
            <p>
              <label for="study">Years of art study: </label>
              0 <input type="range" name="study" id="study" min="0" max="16"> 16
            </p>
            <p style="text-align: center;">
              <input type="submit" name="submit" id="submit" value="Submit">
            </p>
          </form>
        </div>
  </article>
  <aside>
    <section class="info">
      <div class="widget">
        <h2>Search</h2>
        <form>
          <input type="search" id="searchField" placeholder="Enter keyword(s)" />
          <input type="submit" name="search" id="search" value="">
        </form>
      </div>
      <div class="widget">
        <h2>Hot Links</h2>
        <ul>
          <li><a href="#">Conference Schedule-At-A-Glance</a></li>
          <li><a href="#">Another Page Title</a></li>
          <li><a href="#">Yet Another Page Title</a></li>
        </ul>
      </div>
      <div class="widget">
        <h2>Archive</h2>
        <ul>
          <li><a href="#">September</a></li>
          <li><a href="#">August</a></li>
          <li><a href="#">July</a></li>
          <li><a href="#">June</a></li>
        </ul>
      </div>
      <div class="widget">
        <h2>Categories</h2>
        <ul>
          <li><a href="#">Conference</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Student Life</a></li>
          <li><a href="#">Zeitgeist</a></li>
        </ul>
      </div>
    </section>
  </aside>
</div>
<footer id="pageFooter" class="cf">
  <nav class="footerNav">
    <section class="col">
      <h3>About Roux Academy</h3>
      <div class="col1">
        <ul>
          <li><a href="_source/mission.htm" title="Our mission">Mission Statement</a></li>
          <li><a href="_source/history.htm" title="school history">School History</a></li>
          <li><a href="_source/accreditation.htm" title="accreditation and affliates">Accreditation &amp; Affiliates</a></li>
          <li><a href="_source/board.htm" title="board members">Board Members</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="_source/faculty.htm" title="faculty and staff">Faculty &amp; Staff</a></li>
          <li><a href="_source/visiting_professors.htm" title="visiting professors">Visiting Professors</a></li>
          <li><a href="_source/museum.htm" title="Maribielle Roux Museum">Marbielle Roux Museum</a></li>
          <li><a href="_source/directions.htm" title="directions">Map &amp; Directions</a></li>
        </ul>
      </div>
    </section>
    <section class="col">
      <h3>Admissions &amp; Programs</h3>
      <div class="col1">
        <ul>
          <li><a href="_source/degrees.htm" title="Degree programs">Degree Programs</a></li>
          <li><a href="_source/catalog.htm" title="course catalog">Course Catalog</a></li>
          <li><a href="_source/fine_art.htm" title="fine art programs">Fine Art Programs</a></li>
          <li><a href="_source/design.htm" title="design concentration">Design Concentration</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="_source/fashion.htm" title="fashion program">Fashion Program</a></li>
          <li><a href="_source/product_design.htm" title="product design">Product Design</a></li>
          <li><a href="_source/continuing_ed.htm" title="Continuing Education">Continuing Education</a></li>
          <li><a href="_source/financial_aid.htm" title="tuition and financial aid">Tuition &amp; Financial Aid</a></li>
        </ul>
      </div>
    </section>
    <section class="col">
      <h3>Student Resources</h3>
      <div class="col1">
        <ul>
          <li><a href="campus.htm" title="Campus information">Campus Information</a></li>
          <li><a href="housing.htm" title="student housing">Student Housing</a></li>
          <li><a href="contact.htm" title="transcript request">Transcript Request</a></li>
          <li><a href="applying.htm" title="application process">Application Process</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="portfolio_review.htm" title="portfolio review">Portfolio Review</a></li>
          <li><a href="conselling.htm" title="career counselling">Career Counselling</a></li>
          <li><a href="internships.htm" title="internship programs">Internship Programs</a></li>
          <li><a href="student_portal.htm" title="student portal login">Student Portal Login</a></li>
        </ul>
      </div>
    </section>
  </nav>
  <p>&copy;Copyright  Roux Academy of Art &amp; Design.  All rights reserved. <a href="_source/privacy.htm" title="privacy statement">Privacy Statement</a> |<a href="_source/legal.htm" title="legal terms"> Legal Terms and Conditions</a> |<a href="_source/disclosures.htm" title="student outcomes and disclosures"> Student Outcomes/Disclosures</a></p>
</footer>
</body>
</html>
