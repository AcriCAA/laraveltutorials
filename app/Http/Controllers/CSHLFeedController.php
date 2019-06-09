<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSHLFeedController extends Controller
{
    //

public function test (Request $request) {

	echo '<pre>';
	var_dump($request);
	echo '</pre>';
}

public function logPost(Request $request){

	\Log::info(print_r($request)); 
}

public function testResponse(Request $request) {

	$request = json_encode($request); 


	$token = '8ca38bd95465d41cd464a4ade013d040479e7b4c892a8f14300359e2fbb799e0';


	// Demo Results
	$results = array();
	$results[] = array(
		'id' => 'REGRNA-20',
		'calendar_code' => 'REGRNA',
		'year_code' => '20',
		'title' => 'Regulatory & Non-Coding RNAs',
		'abstract_deadline' => '2020-02-21',
		'start_date' => '2020-05-12',
		'end_date' => '2020-05-16',
		'organizers' => '<div class=\"organziers16\"><strong>Ling-Ling Chen, <\/strong>CAS Shanghai Institute of Biological Sciences, China<strong><br>

		Nicholas Proudfoot, <\/strong>University of Oxford, United Kingdom<br>

		<strong>Erik Sontheimer,<\/strong> University of Massachusetts Medical School<br>

		<\/div>',
		'content' => "<h1 class=\"mtitle16\" style=\"margin:10px 0 10px 0\">Regulatory &amp; Non-Coding RNAs<\/h1> \r\n<div class=\"mdate16\">May 12 - 16, 2020<\/div>\r\n<div class=\"mdate16\">Abstract Deadline: February 21, 2020<\/div><br>\r\n \r\n<div class=\"organziers16\"><span style=\"font-weight: bold;\">Organizers:<\/span><\/div><br>\r\n \r\n<div class=\"organziers16\"><strong>Ling-Ling Chen, <\/strong>CAS Shanghai Institute of Biological Sciences, China<strong><br>\r\nNicholas Proudfoot, <\/strong>University of Oxford, United Kingdom<br>\r\n<strong>Erik Sontheimer,<\/strong> University of Massachusetts Medical School<br>\r\n<\/div>\r\n<div class=\"msubtext16\">\r\n<p>You are cordially invited to participate in the&nbsp;fourth meeting on Regulatory &amp; Non-Coding RNAs to be held at Cold Spring Harbor Laboratory. The opening session will begin at 7:30 pm on Tuesday, May 12 and the meeting will end on Saturday lunchtime, May 16. <br>\r\n<\/p><\/div>\r\n<div class=\"msubtitle16\"><strong>Topics: <\/strong><\/div>\r\n<p><\/p>\r\n<div class=\"mtopics16\">\r\n<ul>\r\n<li>Micro RNAs<\/li>\r\n<li>DNA Modification and Novel RNA Biology <\/li>\r\n<li>Long Non-coding and Circular RNAs <\/li>\r\n<li>RNA Regulation in the Nucleus <\/li>\r\n<li>piRNAs and the Transmissible RNAs <\/li>\r\n<li>Microbial RNAs and Modifications<\/li><\/ul><\/div>\r\n<p><\/p>\r\n<div class=\"msubtitle16\"><strong>Keynote Speakers:<\/strong><\/div>\r\n<p><\/p>\r\n<div class=\"mspeakers16\"><strong>tba<\/strong><br>\r\n<\/div><br>\r\n<div class=\"msubtitle16\"><strong>Session Chairs:<\/strong><\/div><br>\r\n<div class=\"mspeakers16\"><strong>tba<\/strong><br>\r\n<\/div>\r\n<p><\/p>  \r\n<div class=\"msubtext16\">   \r\n<p>As currently planned, the program will have eight sessions devoted to oral presentations, together with&nbsp;two poster sessions for presentations which cannot be accommodated in the formal sessions. Selection of talks for the oral sessions will be made by the organizers in conjunction with the session chairpersons, from the submitted abstracts. For this reason, abstracts from accomplished junior and senior investigators are warmly invited. The status (talk\/poster) of abstracts will be posted on our web site (below) as soon as decisions have been made. We have applied for funds from government and industry to partially support graduate students and postdocs.<\/p> \r\n<p><strong>We anticipate this conference is supported in part by funds provided by:<\/strong> TBA <\/p>   \r\n<div class=\"msubtitle16\"><strong>Pricing: <\/strong>\r\n<p><strong>Academic Package: \$XXX<br>\r\nGraduate\/PhD Student Package: \$XXX<br>\r\nCorporate Package: \$XXX<br>\r\nAcademic\/Student No-Housing Package: \$XXX<br>\r\nCorporate No-Housing Package: \$XXX <\/strong><\/p><\/div>    \r\n<p>We have funds to provide partial scholarships for individuals who are US citizens\/permanent residents from minority groups under-represented in the life sciences. Please provide justification in writing to <a href=\"mailto:morrow@cshl.edu\">Maureen Morrow<\/a> and state your financial needs. Preference will be given to those applying who submit abstracts to the meeting.<\/p>  \r\n<p>All questions pertaining to registration, fees, housing, meals, transportation, visas, abstract submission or any other matters may be directed to <a href=\"mailto:morrow@cshl.edu\" target=\"_self\">Maureen Morrow<\/a>.<\/p><\/div> \r\n<div class=\"mimages16\">\r\n<table width=\"750\" border=\"0\">  \r\n<tbody>\r\n<tr>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage1.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage2.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage3.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage4.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage5.jpg\"><\/td>  <\/tr><\/tbody><\/table>   <\/div>",
	);

	$results[] = array(
		'id' => 'PCD-19',
		'calendar_code' => 'PCD',
		'year_code' => '19',
		'title' => 'Cell Death',
		'abstract_deadline' => '2019-05-24',
		'registration_url' => 'https://meetings.cshl.edu/meetingsregistration.aspx?meet=PCD&year=19',
		'abstracts_url' => 'https://meetings.cshl.edu/abstracts.aspx?meet=PCD&year=19',
		'payment_url' => 'https://meetings.cshl.edu/onlinepayment.aspx?meet=PCD&year=19',
		'start_date' => '2019-08-13',
		'end_date' => '2019-08-17',
		'organizers' => "<div class=\"organziers16\"> <span style=\"font-weight: bold;\">David Andrews, <\/span>University of Toronto, Canada<strong> <br>\r\nSimone Fulda, <\/strong>Goethe-Universit\u00E4t Frankfurt, Germany<br>\r\n<strong>Anthony Letai, <\/strong>Dana-Farber Cancer Institute<br>\r\n&nbsp;<\/div>",
		'content' => "<h1 class=\"mtitle16\" style=\"margin:10px 0 10px 0\">Cell Death<br>\r\n<\/h1>\r\n<div class=\"mdate16\">August 13 - 17, 2019<\/div>\r\n<div class=\"mdate16\">Abstract Deadline: May 24, 2019<br>\r\n<\/div><br>\r\n \r\n<div class=\"organziers16\"><strong>Organizers:<\/strong><\/div><br>\r\n \r\n<div class=\"organziers16\"> <span style=\"font-weight: bold;\">David Andrews, <\/span>University of Toronto, Canada<strong> <br>\r\nSimone Fulda, <\/strong>Goethe-Universit\u00E4t Frankfurt, Germany<br>\r\n<strong>Anthony Letai, <\/strong>Dana-Farber Cancer Institute<br>\r\n&nbsp;<\/div>  \r\n<div class=\"msubtext16\">\r\n<p>We are pleased to announce the 13th meeting on Cell Death, to be held at Cold Spring Harbor Laboratory from Tuesday evening, August 13, until after lunch on Saturday, August 17, 2019. The meeting will cover the field of cell death and apoptosis by specific sessions devoted to the topics listed below. <\/p>\r\n<p>The format of the meeting will include morning and evening sessions consisting of short talks, limited to approximately 15 minutes, principally on unpublished work. Because the audience will be composed of investigators with rather diverse backgrounds, the session chairs will anchor each session with a 20-minute talk to provide an overview of the specific area. The other submitted abstracts will be presented in poster sessions in the free afternoons. As usual at Cold Spring Harbor Meetings, all abstracts of both poster and platform sessions will be published in an abstract book given to all the participants. <\/p><\/div>  \r\n<div class=\"msubtitle16\"><strong>Keynote Speakers:<\/strong><\/div> <br>\r\n \r\n<div class=\"mspeakers16\"><strong>Doug Green,<\/strong> St. Jude Children's Research Hospital<br>\r\n<strong>Beth Levine, <\/strong>UT Southwestern Medical Center<\/div> <br>\r\n<div class=\"msubtitle16\"><strong>Topics and Discussion Leaders:<\/strong><\/div><br>\r\n \r\n<div class=\"mspeakers16\">  <span class=\"msubtitle16\"><strong>BCL-2 Family Proteins<\/strong><br>\r\n<\/span><span class=\"mspeakers16\"><strong>Emily Cheng, <\/strong>Memorial Sloan Kettering Cancer Center<br>\r\n<strong>Andreas Strasser,<\/strong> WEHI, Australia<br>\r\n<\/span><br>\r\n<span class=\"msubtitle16\"><strong>Death Receptors, IAPs and Necrosome<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>Pascal Meier, <\/strong>ICR, London, UK<br>\r\n<span class=\"mspeakers16\"><strong>Peter Vandenabeele, <\/strong>VIB, Belgium<br>\r\n<br>\r\n<span class=\"msubtitle16\"><strong>Immunogenic Cell Death<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>Julie Magarian Blander, <\/strong>Weill Cornell Medical College<br>\r\n<span class=\"mspeakers16\"><strong>Sergei Nejentsev, <\/strong>University of Cambridge, UK<br>\r\n<br>\r\n<span class=\"msubtitle16\"><strong>Immunological Cell Death<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>Judy Lieberman, <\/strong>Boston Children's Hospital<br>\r\n<span class=\"mspeakers16\"><strong>Marcela Maus, <\/strong>Massachusetts General Hospital<br>\r\n<br>\r\n<span class=\"msubtitle16\"><strong>Cancer Cell Death<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>Marcus Peter, <\/strong>Northwestern University<br>\r\n<span class=\"mspeakers16\"><strong>Caroline Dive, <\/strong>Cancer Research UK Manchester Institute, UK<br>\r\n<br>\r\n<span class=\"msubtitle16\"><strong>Novel Cell Death Regulation<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>Benjamin Kile, <\/strong>Monash University, Australia<br>\r\n<span class=\"mspeakers16\"><strong>Heidi McBride, <\/strong>McGill University<br>\r\n<br>\r\n<span class=\"msubtitle16\"><strong>Senescence<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>James Kirkland, <\/strong>Mayo Clinic<br>\r\n<span class=\"mspeakers16\"><strong>Daohong Zhou, <\/strong>University of Florida<br>\r\n<br>\r\n<span class=\"msubtitle16\"><strong>Physiologic &amp; Toxic Cell Death and Ferroptosis<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>Marion MacFarlane, <\/strong>MRC Toxicology Unit, University of Cambridge, UK<br>\r\n<span class=\"mspeakers16\"><strong>Brent Stockwell, <\/strong>Columbia University<br>\r\n<br>\r\n<span class=\"msubtitle16\"><strong>Mitochondrial Cell Death<\/strong><\/span><br>\r\n<span class=\"mspeakers16\"><strong>Marni Falk, <\/strong>Children's Hospital of Pennsylvania<br>\r\n<span class=\"mspeakers16\"><strong>Stephen Tait, <\/strong>Beatson Institute, UK<br>\r\n<br>\r\n<div class=\"msubtitle16\"><strong>Additional Confirmed Speakers:<\/strong><\/div>\r\n<span class=\"mspeakers16\"><strong>Kevin Ryan, <\/strong>Beatson Institute for Cancer Research, UK<br>\r\n<span class=\"mspeakers16\"><strong>Xiaodong Wang, <\/strong>National Institute of Biological Sciences, China<br><br>\r\n<\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/span><\/div>  \r\n<div class=\"msubtext16\"> \r\n<p>Abstracts should contain only new and unpublished material and must be submitted electronically by the abstract deadline. Selection of material for oral and poster presentation will be made by the organizers and individual session chairs. The status (talk\/poster) of abstracts will be posted on our web site as soon as decisions have been made.<\/p>\r\n<p>We have funds to provide partial scholarships for individuals who are from U.S. minority groups underrepresented in the life sciences. Please apply in writing via email to <a href=\"mailtocarr@cshl.edu\" target=\"_self\">Catie Carr<\/a> and state your financial needs. Preference will be given to those who submit abstracts.<\/p>\r\n<p><strong>Social Media:<\/strong><\/p>\r\n<p>The designated hashtag for this meeting is #cshlpcd19.  Note that you must obtain permission from an individual presenter before live-tweeting or discussing his\/her talk, poster, or research results on social media.  Click the Policies tab above to see our full <a href=\"http:\/\/meetings.cshl.edu\/policies.aspx?meet=PCD&amp;year=19#media\" target=\"_blank\">Confidentiality &amp; Reporting Policy<\/a>.<\/p>\r\n<p><strong>This meeting is supported in part by: <\/strong>TBA<\/p> <\/div>  \r\n<div class=\"msubtext16\">\r\n<p><strong>Pricing:<\/strong><\/p>\r\n<p><strong>Academic Package: $1515<br>\r\nGraduate\/PhD Student Package: $1260<br>\r\nCorporate Package: $1950<br>\r\nAcademic\/Student No-Housing Package: $1025<br>\r\nCorporate No-Housing Package: $1310<\/strong><\/p><\/div>  \r\n<div class=\"msubtext16\">Regular packages are all-inclusive and cover registration, food, housing, parking, a wine-and-cheese reception, and lobster banquet. No-Housing packages include all costs except housing. Full payment is due four weeks prior to the meeting.<\/div><br>\r\n<div class=\"mimages16\">\r\n<table width=\"750\" border=\"0\"> \r\n<tbody>\r\n<tr>   \r\n<td width=\"150\"><img src=\"images\/mimage1.jpg\" width=\"150\" height=\"150\"><\/td>   \r\n<td width=\"150\"><img src=\"images\/mimage2.jpg\" width=\"150\" height=\"150\"><\/td>   \r\n<td width=\"150\"><img src=\"images\/mimage3.jpg\" width=\"150\" height=\"150\"><\/td>   \r\n<td width=\"150\"><img src=\"images\/mimage4.jpg\" width=\"150\" height=\"150\"><\/td>   \r\n<td width=\"150\"><img src=\"images\/mimage5.jpg\" width=\"150\" height=\"150\"><\/td>  <\/tr><\/tbody><\/table><\/div>",
	);

	$results[] = array(
		'id' => 'TUMBIO-19',
		'calendar_code' => 'TUMBIO',
		'year_code' => '19',
		'title' => 'Biology of Cancer: Microenvironment & Metastasis',
		'abstract_deadline' => '2019-07-05',
		'registration_url' => 'https://meetings.cshl.edu/meetingsregistration.aspx?meet=TUMBIO&year=19',
		'abstracts_url' => 'https://meetings.cshl.edu/abstracts.aspx?meet=TUMBIO&year=19',
		'payment_url' => 'https://meetings.cshl.edu/onlinepayment.aspx?meet=TUMBIO&year=19',
		'start_date' => '2019-09-24',
		'end_date' => '2019-09-28',
		'organizers' => "<div class=\"organziers16\"><strong>Scott Lowe<\/strong>, Memorial Sloan Kettering Cancer Center<br>\r\n<span style=\"font-weight: bold;\">Senthil Muthuswamy<\/span>, BIDMC and Harvard Medical School<br>\r\n<strong>M Celeste Simon,<\/strong> University of Pennsylvania Medical School<br>\r\n<br>\r\n<\/div>",
		'content' => "<h1 class=\"mtitle16\" style=\"margin:10px 0 10px 0\">Biology of Cancer: Microenvironment &amp; Metastasis<br>\r\n<\/h1>\r\n<div class=\"mdate16\">September 24 - 28, 2019<br>\r\n<\/div>\r\n<div class=\"mdate16\">Abstract Deadline: July 5, 2019<br>\r\n<\/div><br>\r\n<div class=\"organziers16\"><strong>Organizers:<\/strong><\/div><br>\r\n<div class=\"organziers16\"><strong>Scott Lowe<\/strong>, Memorial Sloan Kettering Cancer Center<br>\r\n<span style=\"font-weight: bold;\">Senthil Muthuswamy<\/span>, BIDMC and Harvard Medical School<br>\r\n<strong>M Celeste Simon,<\/strong> University of Pennsylvania Medical School<br>\r\n<br>\r\n<\/div>\r\n<div class=\"msubtext16\">We&nbsp;are pleased to announce the fifth Cold Spring Harbor Laboratory meeting on the <strong>Biology of Cancer: Microenvironment &amp; Metastasis<\/strong>. The meeting will begin at 7:30 pm on the evening of Tuesday September 24, 2019, and end after a morning session on Saturday, September 28. Abstracts should contain new and unpublished material. Selection of material for oral and poster presentation will be made by the organizers and individual session chairs. <\/div><br>\r\n<div class=\"msubtitle16\"><strong>Topics:<\/strong><\/div>\r\n<div class=\"mtopics16\">\r\n<ul>\r\n<li>Metastasis &amp; Dormancy<br>\r\n<\/li>\r\n<li>Phenotypic &amp; Genotypic Heterogeneity, Single Cell, etc.<br>\r\n<\/li>\r\n<li>Plasticity, Epigenome, Hypoxia<br>\r\n<\/li>\r\n<li>Heterotypic Interactions - Fibroblasts, Immune, Vascular &amp; Neuronal<br>\r\n<\/li>\r\n<li>Drug Resistance - Intrinsic &amp; Extrinsic Mechanisms<br>\r\n<\/li>\r\n<li>Innate Immunity &amp; Inflammation<br>\r\n<\/li>\r\n<li>Senescence<br>\r\n<\/li>\r\n<li>Metabolism<br>\r\n<\/li><\/ul><\/div>\r\n<div class=\"msubtitle16\"><strong>Keynote Speakers:<\/strong><\/div><br>\r\n<div class=\"mspeakers16\"><span style=\"font-weight: bold;\">Daniel Haber, <\/span>Massachusetts General Hospital<br>\r\n<span style=\"font-weight: bold;\">Tyler Jacks<\/span>, David H. Koch Institute for Integrative Cancer Research at MIT<\/div><br>\r\n<div class=\"msubtitle16\"><strong>Discussion Leaders:<\/strong><\/div>\r\n<div class=\"mspeakers16\">\r\n<p><span style=\"font-weight: bold;\">Shelley Berger<\/span>, University of Pennsylvania<br>\r\n<span style=\"font-weight: bold;\">Ralph DeBerandinis<\/span>, UT Southwestern Children's Medical Center<br>\r\n<span style=\"font-weight: bold;\">Myles Brown,<\/span> Dana-Farber Cancer Insitute<br>\r\n<span style=\"font-weight: bold;\">Jayanta (Jay) Debnath<\/span>, University of California, San Francisco<br>\r\n<span style=\"font-weight: bold;\">Channing Der<\/span>, University of North Carolina<br>\r\n<span style=\"font-weight: bold;\">Peter Friedl<\/span>, Radboud University, The Netherlands<br>\r\n<span style=\"font-weight: bold;\">Gregory Hannon<\/span>, University of Cambridge, UK<br>\r\n<span style=\"font-weight: bold;\">Donald Ingber,<\/span> Wyss Institute at Harvard University<br>\r\n<span style=\"font-weight: bold;\">Ian Macara<\/span>, Vanderbilt University School of Medicine<br>\r\n<span style=\"font-weight: bold;\">Alberto Mantovani<\/span>, Humanitas Clinical &amp; Research Center, Italy<br>\r\n<span style=\"font-weight: bold;\">Sean Morrison,<\/span> UT Southwestern Medical Center<br>\r\n<span style=\"font-weight: bold;\">Morag Park<\/span>, McGill University, Canada<br>\r\n<span style=\"font-weight: bold;\">Manuel Serrano<\/span>, Spanish National Cancer Center (CNIO), Spain<br>\r\n<span style=\"font-weight: bold;\">Padmanee Sharma<\/span>, University of Texas, MD Anderson Cancer Center<br>\r\n<span style=\"font-weight: bold;\">Melody Swartz<\/span>, University of Chicago<br>\r\n<span style=\"font-weight: bold;\">David Tuveson,<\/span> Cold Spring Harbor Laboratory<br>\r\n<span style=\"font-weight: bold;\">Valerie Weaver,<\/span> University of California, San Francisco<br>\r\n<\/p>\r\n<p><span style=\"font-size: 10pt;\">Please bring this notice to the attention of any of your colleagues who may be interested in participating in the meeting.<\/span><\/p><\/div>\r\n<div class=\"msubtext16\">\r\n<p>All abstracts must be submitted by the abstract deadline. Late registrations may be accepted after the abstract deadline if the meeting is not oversubscribed. In the event of over-subscription, every effort will be made to ensure that all groups who wish to participate will be represented. The status (talk\/poster) of abstracts will be posted on our web site as soon as decisions have been made by the organizers.<\/p>\r\n<p>We are eager to have as many young people as possible attend since they are likely to benefit most from this meeting. We have applied for funds from government and industry to partially support graduate students and postdocs. Please apply in writing via email to <a href=\"mailto:pakaluk@cshl.edu\" target=\"_self\">Val Pakaluk<\/a> and state your financial needs; preference will be given to those who submit abstracts.<\/p>\r\n<p><strong>Social Media:<\/strong><\/p>\r\n<p>The designated hashtag for this meeting is #cshlcancer19.  Note that you must obtain permission from an individual presenter before live-tweeting or discussing his\/her talk, poster, or research results on social media.  Click the Policies tab above to see our full <a href=\"http:\/\/meetings.cshl.edu\/policies.aspx?meet=TUMBIO&amp;year=19#media\" target=\"_blank\">Confidentiality &amp; Reporting Policy<\/a>.<\/p>\r\n<p><strong>This meeting is sponsored by:<\/strong><br>\r\n<br>\r\n<a href=\"https:\/\/www.northwell.edu\/\" target=\"_blank\"><img src=\"images\/northwell-logo.png\" style=\"width: 135px; height: 80px;\"><\/a><\/p><\/div>\r\n<div class=\"msubtext16\">\r\n<p><strong>Pricing:<\/strong><\/p>\r\n<p><strong>Academic Package: $1,515<br>\r\nGraduate\/PhD Student Package: $1,260<br>\r\nCorporate Package: $1,950<br>\r\nAcademic\/Student No-Housing Package: $1,025<br>\r\nCorporate No-Housing Package: $1,310<\/strong><\/p><\/div>\r\n<div class=\"msubtext16\">Regular packages are all-inclusive and cover registration, food, housing, parking, a wine-and-cheese reception, and lobster banquet. No-Housing packages include all costs except housing. Full payment is due four weeks prior to the meeting.<\/div><br>\r\n \r\n<div class=\"mimages16\">\r\n<table width=\"750\" border=\"0\">  \r\n<tbody>\r\n<tr>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage1.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage2.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage3.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage4.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage5.jpg\"><\/td>  <\/tr><\/tbody><\/table><\/div>",
	);



	if (strtolower($_SERVER["CONTENT_TYPE"]) !== 'application/json') {
		$response = array(
			'status' => 'error',
			'messages' => array('Invalid response Content-Type.'),
		);
	} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$postFields = json_decode(file_get_contents('php://input'), true);
		if (!isset($postFields['api_key']) || $postFields['api_key'] != $token) {
			return json_encode($response = array(
				'status' => 'error',
				'messages' => array('Unauthorized api_key value submitted.'),
			));
		}

		$message = (!$postFields['last_updated']) ? 'First call to this endpoint' : 'Prior update performed: '.$postFields['last_updated'];
		$response = array(
			'status' => 'ok',
			'result' => $results,
			'messages' => array( $message ),
		);

	} else {
		$response = array(
			'status' => 'error',
			'messages' => array('Invalid request method: '.$_SERVER['REQUEST_METHOD'].'.'),
		);
	}

	return json_encode($response);
}


public function testForm(){

	return view('posts.createfeed'); 

}

public function testGenericResponse(Request $request){

$post = json_encode($request);

print_r($post);  

// return $post; 
// return response()->json("success");

}



}
