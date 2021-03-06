<?php
	$title = 'Links';
	include 'inc/header.php';
	include 'inc/breadcrumb.php';
?>

<h1>Links</h1>

<p>
	Text links must always be underlined, colour alone is not enough of a visual cue for users to identify links. 
</p>
<p>
	Links in navigation areas and footers don’t need to be underlined because their location indicates their function.
</p>


<article class="listing-grid">
	<div class="listing-icon">
		<p class="danger">
			<i class="fa fa-times-circle" aria-hidden="true"></i>
		</p>
	</div>
	<div class="ps-listing">
			The <a href="" style="text-decoration: none;">Small Business Loan Guarantee Program</a> is available for qualifying businesses.
	</div>
</article>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	The <a href="">Small Business Loan Guarantee Program</a> is available for qualifying businesses.
</div>
</article>


<p>
	Reference: <a href="https://www.w3.org/WAI/WCAG21/Techniques/failures/F73.html">WCAG 2.1 Common Failure F73</a>
</p>

<p>
	Link text should:
</p>

<ul>
	<li>describe the content you’re linking to</li>
	<li>never say things like “Click here” or “Tell me more”</li>
	<li>not include the punctuation if it comes at the end of a sentence or before a comma</li>
</ul>

<p>
	The best way to test that link text accurately describes where they lead is to remove all the other text on the page and read just the link text — do we still know where we’ll go?
</p>
	

<article class="listing-grid">
	<div class="listing-icon">
		<p class="danger">
			<i class="fa fa-times-circle" aria-hidden="true"></i>
		</p>
	</div>
	<div class="ps-listing">
			For information about social distancing guidelines <a href="">click here</a>.
	</div>
</article>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
		Workers exempt from the self-isolation requirement should follow <a href="">social distancing guidelines</a>.
</div>
</article>

<p>
	Reference: <a href="https://www.w3.org/WAI/WCAG21/Understanding/link-purpose-in-context.html">WCAG 2.1 Success Criterion 2.4.4: Link Purpose</a>
</p>


<h2>Buttons vs links</h2>

<p>
	There is a semantic difference between links <code>&lt;a&gt;</code> and buttons <code>&lt;button&gt;</code>. As a general rule, if it takes you to another page - it should be a link, if it performs and action (like submitting data) it should be a button.
</p>
<p>
	There are times when it is okay to present a link <code>&lt;a&gt;</code> styled as a <code>&lt;button&gt;</code>:
</p>
<ul>
	<li>when it is the primary call to action on a page (example: program start pages)</li>
	<li>when you are linking to an online service or application</li>
</ul>

<p>Apply the <a href="https://cns.pages.novascotia.ca/patternlab/buttons.html">button pattern classes</a> to a link <code>&lt;a&gt;</code> to style it:</p>
<div class="row">
	<div class="col-xs-6 col-md-3">
		<a class="btn-lg btn-success">Start now<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	</div>
	<div class="col-xs-6 col-md-9">
		<textarea rows="3" style="width: 100%;">&lt;a class="btn-lg btn-success"&gt;Start now&lt;i class="fa fa-arrow-right" aria-hidden="true"&gt;&lt;/i&gt;&lt;/a&gt;</textarea>
		<p><a href="buttons/btn-a-start.html">btn-a-start.html</a></p>
	</div>
</div>


<h2 id="email-addresses">Email addresses</h2>

<p>Write email addresses in full, in lowercase and as active links. Don’t include any other words as part of the link.</p>

<p>Don’t label email addresses with “Email:” or include any punctuation that’s not part of the address.</p>


<article class="listing-grid">
	<div class="listing-icon">
		<p class="danger">
			<i class="fa fa-times-circle" aria-hidden="true"></i>
		</p>
	</div>
	<div class="ps-listing">
		<p>
			<a href="mailto:program@novascotia.ca">Email Program@NovaScotia.ca for more information</a>.
		</p>
	</div>
</article>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	<p>
		<a href="mailto:program@novascotia.ca">program@novascotia.ca</a>.
	</p>
</div>
</article>

<p>
	Use our <a href="https://cns.pages.novascotia.ca/email-obfuscator/">email obfuscator tool</a> to prevent email addresses on your pages from being scraped and targeted with spam.
</p>


<h2>Links to files</h2>

<p>
	When linking to files include the file type and file size in brackets. This lets the user know that the link goes to a file, and showing the file size is important to our growing share of users who access government programs and services from mobile devices. No one wants to accidentally download a 5 MB PDF file on their phone! 
</p>
<p>
	Make sure the file type and file size are part of the link text, you'll want screen readers to have this information too.
</p>


<article class="listing-grid">
	<div class="listing-icon">
		<p class="danger">
			<i class="fa fa-times-circle" aria-hidden="true"></i>
		</p>
	</div>
	<div class="ps-listing">
		<p>
			<a href="">Document name</a> (PDF 5.3 MB)
		</p>
	</div>
</article>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	<p>
		<a href="">Document name (PDF 5.3 MB)</a>
	</p>
</div>
</article>


<h2>When to open links in a new window</h2>

<p>
	As a general rule, links in content should never open in a new window. Opening new window that were not requested by the user can be disorienting and create confusion because it renders the back button useless.
<p>
	If a user is in an application or service process where information could be lost, opening a link to supporting information in a new window is okay as long as users are informed with link text indicating that the link will open in a new window.
</p>



<article class="listing-grid">
	<div class="listing-icon">
		<p class="danger">
			<i class="fa fa-times-circle" aria-hidden="true"></i>
		</p>
	</div>
	<div class="ps-listing">
		<p>
			<a href="help.html" target="_blank">Help</a>
		</p>
	</div>
</article>

<article class="listing-grid">
<div class="listing-icon">
	<p class="success">
		<i class="fa fa-check-circle" aria-hidden="true"></i>
	</p>
</div>
<div class="ps-listing">
	<p>
		<a href="help.html" target="_blank">Help (opens new window)</a>
	</p>
</div>
</article>



<p>
	Reference: <a href="https://www.w3.org/WAI/WCAG21/Techniques/html/H83.html">WCAG 2.1 Technique H83</a>
</p>


<?php
	include 'inc/footer.php';
?>