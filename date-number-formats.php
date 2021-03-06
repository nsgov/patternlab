<?php
	$title = 'Date and number formats';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1>Dates and number formats</h1>

<h2 id="dates">Dates</h2>
<ul>
	<li>Use upper case for months (January, February)</li>
	<li>If only using month and year, don’t use a comma</li>
	<li>When space is an issue (tables, publication titles, etc.) you can use truncated months (Jan, Feb, Mar)</li>
	<li>Use “to” in date ranges instead of a dash or hyphen (January to March 2016). “To” is quicker to read than a dash, and it’s easier for screen readers</li>
	<li>Don’t use “quarter” for dates; use the months (“Budget expenses, January to March 2016”)</li>
	<li>When referring to “today” (only used in a news release) make sure you include the date as well (“The minister announced today (14 June 2012) that...”)</li>
	<li>Don’t use ordinal numbers (1st, 3rd, etc.)</li>
</ul>

<h3>Long date format</h3>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	Monday, 22 March 2021 
</div>
</article>


<h3>Medium date format</h3>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	22 March 2021
</div>
</article>



<h3>Numerical date format</h3>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	2021-03-20
</div>
</article>

<h2 id="numbers">Phone numbers</h2>

<p>
	Mark phone numbers in your content up as links.
</p>


<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	<a href="tel:902-424-5555">902-424-5555</a>
</div>
</article>


<h2 id="time">Time</h2>

<ul>
	<li>Use “to” in time ranges, not hyphens, en rules or em dashes: 10am to 11am</li>
	<li>Use lowercase without periods for “am” and “pm”</li>
	<li>Show time using a 12-hour clock: 5:30pm not 17:30hrs</li>
	<li>Use midnight, not 00:00</li>
	<li>6 hours 30 minutes</li>
</ul>


<h2 id="numbers">Writing guidelines for numbers</h2>
<ul>
	<li>Show numbers numerically, not as words.</li>

	<li>Write all numbers in numerals (including 0 to 9) except when they’re part of a common expression that would look strange (like “one 
	or two of them”).</li>

	<li>Avoid starting a sentence with a number.</li>

	<li>If a number starts a sentence, write it out in full: “Twenty-three Nova Scotia businesses ...” (except when it starts a title or sub-heading).</li>

	<li>Use numerals for numbers under 10 in headlines, titles, and sub-headings.</li>

	<li>For numerals over 999, insert a comma for clarity: “It was over 9,000.”</li>

	<li>Spell out common fractions, such as one-half. Use a % sign for percentages: 50%.</li>

	<li>Use a 0 where there’s no digit before the decimal point: 0.5%.</li>

	<li>Use “500 to 900” and not “500-900” (except in tables).</li>

	<li>Use MB not KB for anything over 1MB for file size. For under 1MB, use KB. Keep it as accurate as possible and up to 2 decimal places. For example: 4.03MB.</li>

	<li>Abbreviate big numbers if there are space restraints, as in a tweet, chart, or table: 1k, 150k.</li>

	<li>Use “to” in address ranges, for example: 49 to 53 Cherry Street.</li>

	<li>For ordinal numbers, spell out first to ninth. After that, use 10th, etc. In tables, use numerals throughout.</li>

	<li>Use figures for all ages, sums of money and times of day.</li>
</ul>


<p>
	Reference: <a href="https://novascotia.sharepoint.com/sites/Projects/CNSGovWebStrategy/Tools%20and%20Guides/Forms/AllItems.aspx?id=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides%2FOnline%20Writing%20Guide%20v2%2Epdf&parent=%2Fsites%2FProjects%2FCNSGovWebStrategy%2FTools%20and%20Guides">Government of Nova Scotia Web Strategy: Online writing guide (PDF)</a>
</p>


<?php
	include 'inc/footer.php';
?>