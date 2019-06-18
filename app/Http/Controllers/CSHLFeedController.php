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

	\Log::info($request->getBody()->getContents()); 
}


public function returnBooks(Request $request){

	// \Log::info($request->getContents()); 
	$postFields = $request;

	\Log::info($postFields); 



	$token = env('CSHL_FEED_TOKEN_BOOKS'); 


	// Demo Res

	$results = array();
	$results[] = array(
		'id' => '1',

		'title' => 'Restriction Enzymes: A History', 
		'description' => 'Restriction enzymes cleave DNA at specific recognition sites and have many uses in molecular biology, genetics, and biotechnology. More than 4000 restriction enzymes are known today, of which more than 621 are commercially available, justifying their description by Nobel Prize winner Richard Roberts as \"the workhorses of molecular biology.\"', 
		'permalink' => 'https://www.cshlpress.com/default.tpl?action=full&cart=1560281535435768050&--eqskudatarq=1256&typ=ps&newtitle=Restriction%20Enzymes%3A%20A%20History', 
		'author_editors' => 'Wil A.M. Loenen, Leiden University Medical Center', 
		'contents' => '<div class="box" style="display: block;"><h4>Contents</h4>
    <dl> <dt style="padding-top:6px;">Preface</dt> <dt style="padding-top:6px;">Abbreviations</dt> <dt style="padding-top:6px;">Introduction</dt> <dt style="padding-top:6px;">1. Discovery of a Barrier to Infection and Host-Controlled Variation: 1952–1953</dt> <dt style="padding-top:6px;">2. Host-Controlled Variation Is Methylation and Restriction of DNA: The 1960s</dt> <dt style="padding-top:6px;">3. The Discovery of Type II Restriction Enzymes: The 1970s</dt> <dt style="padding-top:6px;">4. Expansion and Cloning Restriction Enzymes: The 1970s and Early 1980s</dt> <dt style="padding-top:6px;">5. The First Decade after the Discovery of EcoRI: Biochemistry and Sequence Analysis during the 1970s and Early 1980s</dt> <dt style="padding-top:6px;">6. Variety in Mechanisms and Structures of Restriction Enzymes: ∼1982–1993</dt> <dt style="padding-top:6px;">7. Crystal Structures of Type II Restriction Enzymes and Discovery of the Common Core of the Catalytic Domain: ∼1993−2004</dt> <dt style="padding-top:6px;">8. Improved Detection Methods, Single-Molecule Studies, and Whole-Genome Analyses Result in Novel Insights in Structures, Functions, and Applications of Type I, II, III, and IV Restriction Enzymes: ∼2004–2016</dt> <dt style="padding-top:6px;">Summary and Conclusions</dt> <dt style="padding-top:6px;">Appendix A: The History of Restriction Enzymes October 19–21, 2013 Meeting Program</dt> <dt style="padding-top:6px;">Appendix B: Modern-Day Applications of Restriction Enzymes</dt> <dt style="padding-top:6px;">Index</dt> <dt style="padding-top:6px;">About the Author</dt> </dl> 

</div>', 
		'isbn' => '978-1-621821-05-2 ', 
		'publication_date' => 'January 1, 2044', 
		'image_url' => 'https://www.cshlpress.com/productgraphics/big/restrictionenz_f.jpg'

		);

		$results[] = array(

			'id' => '2',

		'title' => 'Function and Dysfunction of the Cochlea: From Mechanisms to Potential Therapies', 
		'description' => 'The cochlea, the mammalian auditory organ, is a spiral-shaped structure in the inner ear that is responsible for hearing. It converts sound vibrations into electrical signals and sends them to the brain with a remarkable temporal precision. Defects in the cellular or molecular components of the cochlea can lead to deafness and other hearing impairments.',
		'subject_areas' => 'Cell Biology; Human Biology and Disease', 
		'permalink' => 'https://www.cshlpress.com/default.tpl?action=full&cart=1560281535435768050&--eqskudatarq=1224&typ=ps&newtitle=Function%20and%20Dysfunction%20of%20the%20Cochlea%3A%20From%20Mechanisms%20to%20Potential%20Therapies', 
		'author_editors' => 'Edited by Guy P. Richardson, Sussex Neuroscience, University of Sussex; Christine Petit, Collège de France, Institut Pasteur', 
		'contents' => 'contents', 
		'isbn' => '978-1-621822-79-0', 
		'publication_date' => 'January 1, 3022', 
		'image_url' => 'https://www.cshlpress.com/productgraphics/big/funcdyscochlea_f.jpg' 

		);


			$results[] = array(

				'id' => '3',

		'title' => 'Next-Generation Sequencing in Medicine', 
		'description' => 'Next-generation sequencing technologies have the capacity to generate large numbers of DNA sequence reads at relatively high speed and low cost. These technologies have revolutionized biomedical research and are increasingly employed in clinical settings, where they can be used to detect inherited disorders, predict disease risk, and personalize therapies.

',
		'subject_areas' => 'Human Biology and Disease; Molecular Biology', 
		'permalink' => 'https://www.cshlpress.com/default.tpl?action=full&cart=1560281535435768050&--eqskudatarq=1225&typ=ps&newtitle=Next-Generation%20Sequencing%20in%20Medicine', 
		'author_editors' => 'Edited by W. Richard McCombie, Cold Spring Harbor Laboratory; Elaine R. Mardis, Institute for Genomic Medicine at Nationwide Children’s Hospital and The Ohio State University College of Medicine; James A. Knowles, SUNY Downstate Medical Center; John D. McPherson, University of California Davis, Comprehensive Cancer Center', 
		'contents' => 'contents feed', 
		'isbn' => '978-1-621821-13-7', 
		'publication_date' => 'Janauary 22, 2222', 

		'image_url' => 'https://www.cshlpress.com/productgraphics/big/nextgenseqmed_f.jpg'
		

		
		); 


	
		if (!isset($postFields['api_key']) || $postFields['api_key'] != $token) {
			return json_encode($response = array(
				'status' => 'error',
				'messages' => array('Unauthorized api_key value submitted.'),
			));
		}


	else{

		$message = (!$postFields['last_updated']) ? 'First call to this endpoint' : 'Prior update performed: '.$postFields['last_updated'];
		$response = array(
			'status' => 'ok',
			'result' => $results,
			'messages' => array( $message ),
		);

 }

	return json_encode($response);


}


public function returnMeetings(Request $request){

	// \Log::info($request->getContents()); 
	$postFields = $request;

	\Log::info($postFields); 



	$token = env('CSHL_FEED_TOKEN_MEETINGS'); 


	// Demo Results
	$results = array();
	$results[] = array(
		'id' => 'REGRNA-20',
		'calendar_code' => 'REGRNA',
		'year_code' => '20',
		'title' => 'Regulatory & Non-Coding RNAs (test2)',
		'abstract_deadline' => '2020-02-21',
		'registration_url' => 'https://meetings.cshl.edu/meetingsregistration.aspx?meet=REGRNA&year=20',
		'abstracts_url' => 'https://meetings.cshl.edu/abstracts.aspx?meet=REGRNA&year=20',
		'payment_url' => 'https://meetings.cshl.edu/onlinepayment.aspx?meet=REGRNA&year=20',
		'start_date' => '2020-05-12',
		'end_date' => '2020-05-16',
		'organizers' => '<div class=\"organziers16\"><strong>Ling-Ling Chen, <\/strong>CAS Shanghai Institute of Biological Sciences, China<strong><br>

		Nicholas Proudfoot, <\/strong>University of Oxford, United Kingdom<br>

		<strong>Erik Sontheimer,<\/strong> University of Massachusetts Medical School<br>

		<\/div>',
		'content' => "<div class=\"organziers16\"><span style=\"font-weight: bold;\">Organizers:<\/span><\/div><br>\r\n \r\n<div class=\"organziers16\"><strong>Ling-Ling Chen, <\/strong>CAS Shanghai Institute of Biological Sciences, China<strong><br>\r\nNicholas Proudfoot, <\/strong>University of Oxford, United Kingdom<br>\r\n<strong>Erik Sontheimer,<\/strong> University of Massachusetts Medical School<br>\r\n<\/div>\r\n<div class=\"msubtext16\">\r\n<p>You are cordially invited to participate in the&nbsp;fourth meeting on Regulatory &amp; Non-Coding RNAs to be held at Cold Spring Harbor Laboratory. The opening session will begin at 7:30 pm on Tuesday, May 12 and the meeting will end on Saturday lunchtime, May 16. <br>\r\n<\/p><\/div>\r\n<div class=\"msubtitle16\"><strong>Topics: <\/strong><\/div>\r\n<p><\/p>\r\n<div class=\"mtopics16\">\r\n<ul>\r\n<li>Micro RNAs<\/li>\r\n<li>DNA Modification and Novel RNA Biology <\/li>\r\n<li>Long Non-coding and Circular RNAs <\/li>\r\n<li>RNA Regulation in the Nucleus <\/li>\r\n<li>piRNAs and the Transmissible RNAs <\/li>\r\n<li>Microbial RNAs and Modifications<\/li><\/ul><\/div>\r\n<p><\/p>\r\n<div class=\"msubtitle16\"><strong>Keynote Speakers:<\/strong><\/div>\r\n<p><\/p>\r\n<div class=\"mspeakers16\"><strong>tba<\/strong><br>\r\n<\/div><br>\r\n<div class=\"msubtitle16\"><strong>Session Chairs:<\/strong><\/div><br>\r\n<div class=\"mspeakers16\"><strong>tba<\/strong><br>\r\n<\/div>\r\n<p><\/p>  \r\n<div class=\"msubtext16\">   \r\n<p>As currently planned, the program will have eight sessions devoted to oral presentations, together with&nbsp;two poster sessions for presentations which cannot be accommodated in the formal sessions. Selection of talks for the oral sessions will be made by the organizers in conjunction with the session chairpersons, from the submitted abstracts. For this reason, abstracts from accomplished junior and senior investigators are warmly invited. The status (talk\/poster) of abstracts will be posted on our web site (below) as soon as decisions have been made. We have applied for funds from government and industry to partially support graduate students and postdocs.<\/p> \r\n<p><strong>We anticipate this conference is supported in part by funds provided by:<\/strong> TBA <\/p>   \r\n<div class=\"msubtitle16\"><strong>Pricing: <\/strong>\r\n<p><strong>Academic Package: \$XXX<br>\r\nGraduate\/PhD Student Package: \$XXX<br>\r\nCorporate Package: \$XXX<br>\r\nAcademic\/Student No-Housing Package: \$XXX<br>\r\nCorporate No-Housing Package: \$XXX <\/strong><\/p><\/div>    \r\n<p>We have funds to provide partial scholarships for individuals who are US citizens\/permanent residents from minority groups under-represented in the life sciences. Please provide justification in writing to <a href=\"mailto:morrow@cshl.edu\">Maureen Morrow<\/a> and state your financial needs. Preference will be given to those applying who submit abstracts to the meeting.<\/p>  \r\n<p>All questions pertaining to registration, fees, housing, meals, transportation, visas, abstract submission or any other matters may be directed to <a href=\"mailto:morrow@cshl.edu\" target=\"_self\">Maureen Morrow<\/a>.<\/p><\/div> \r\n<div class=\"mimages16\">\r\n<table width=\"750\" border=\"0\">  \r\n<tbody>\r\n<tr>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage1.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage2.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage3.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage4.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage5.jpg\"><\/td>  <\/tr><\/tbody><\/table>   <\/div>",
	);

	$results[] = array(
		'id' => 'PCD-19',
		'calendar_code' => 'PCD',
		'year_code' => '19',
		'title' => 'Cell Death (test 22)',
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
		'title' => 'Test2 Biology of Cancer: Microenvironment & Metastasis',
		'abstract_deadline' => '2019-07-05',
		'registration_url' => 'https://meetings.cshl.edu/meetingsregistration.aspx?meet=TUMBIO&year=19',
		'abstracts_url' => 'https://meetings.cshl.edu/abstracts.aspx?meet=TUMBIO&year=19',
		'payment_url' => 'https://meetings.cshl.edu/onlinepayment.aspx?meet=TUMBIO&year=19',
		'start_date' => '2019-09-24',
		'end_date' => '2019-09-28',
		'organizers' => "<div class=\"organziers16\"><strong>Scott Lowe<\/strong>, Memorial Sloan Kettering Cancer Center<br>\r\n<span style=\"font-weight: bold;\">Senthil Muthuswamy<\/span>, BIDMC and Harvard Medical School<br>\r\n<strong>M Celeste Simon,<\/strong> University of Pennsylvania Medical School<br>\r\n<br>\r\n<\/div>",
		'content' => "<h1 class=\"mtitle16\" style=\"margin:10px 0 10px 0\">Biology of Cancer: Microenvironment &amp; Metastasis<br>\r\n<\/h1>\r\n<div class=\"mdate16\">September 24 - 28, 2019<br>\r\n<\/div>\r\n<div class=\"mdate16\">Abstract Deadline: July 5, 2019<br>\r\n<\/div><br>\r\n<div class=\"organziers16\"><strong>Organizers:<\/strong><\/div><br>\r\n<div class=\"organziers16\"><strong>Scott Lowe<\/strong>, Memorial Sloan Kettering Cancer Center<br>\r\n<span style=\"font-weight: bold;\">Senthil Muthuswamy<\/span>, BIDMC and Harvard Medical School<br>\r\n<strong>M Celeste Simon,<\/strong> University of Pennsylvania Medical School<br>\r\n<br>\r\n<\/div>\r\n<div class=\"msubtext16\">We&nbsp;are pleased to announce the fifth Cold Spring Harbor Laboratory meeting on the <strong>Biology of Cancer: Microenvironment &amp; Metastasis<\/strong>. The meeting will begin at 7:30 pm on the evening of Tuesday September 24, 2019, and end after a morning session on Saturday, September 28. Abstracts should contain new and unpublished material. Selection of material for oral and poster presentation will be made by the organizers and individual session chairs. <\/div><br>\r\n<div class=\"msubtitle16\"><strong>Topics:<\/strong><\/div>\r\n<div class=\"mtopics16\">\r\n<ul>\r\n<li>Metastasis &amp; Dormancy<br>\r\n<\/li>\r\n<li>Phenotypic &amp; Genotypic Heterogeneity, Single Cell, etc.<br>\r\n<\/li>\r\n<li>Plasticity, Epigenome, Hypoxia<br>\r\n<\/li>\r\n<li>Heterotypic Interactions - Fibroblasts, Immune, Vascular &amp; Neuronal<br>\r\n<\/li>\r\n<li>Drug Resistance - Intrinsic &amp; Extrinsic Mechanisms<br>\r\n<\/li>\r\n<li>Innate Immunity &amp; Inflammation<br>\r\n<\/li>\r\n<li>Senescence<br>\r\n<\/li>\r\n<li>Metabolism<br>\r\n<\/li><\/ul><\/div>\r\n<div class=\"msubtitle16\"><strong>Keynote Speakers:<\/strong><\/div><br>\r\n<div class=\"mspeakers16\"><span style=\"font-weight: bold;\">Daniel Haber, <\/span>Massachusetts General Hospital<br>\r\n<span style=\"font-weight: bold;\">Tyler Jacks<\/span>, David H. Koch Institute for Integrative Cancer Research at MIT<\/div><br>\r\n<div class=\"msubtitle16\"><strong>Discussion Leaders:<\/strong><\/div>\r\n<div class=\"mspeakers16\">\r\n<p><span style=\"font-weight: bold;\">Shelley Berger<\/span>, University of Pennsylvania<br>\r\n<span style=\"font-weight: bold;\">Ralph DeBerandinis<\/span>, UT Southwestern Children's Medical Center<br>\r\n<span style=\"font-weight: bold;\">Myles Brown,<\/span> Dana-Farber Cancer Insitute<br>\r\n<span style=\"font-weight: bold;\">Jayanta (Jay) Debnath<\/span>, University of California, San Francisco<br>\r\n<span style=\"font-weight: bold;\">Channing Der<\/span>, University of North Carolina<br>\r\n<span style=\"font-weight: bold;\">Peter Friedl<\/span>, Radboud University, The Netherlands<br>\r\n<span style=\"font-weight: bold;\">Gregory Hannon<\/span>, University of Cambridge, UK<br>\r\n<span style=\"font-weight: bold;\">Donald Ingber,<\/span> Wyss Institute at Harvard University<br>\r\n<span style=\"font-weight: bold;\">Ian Macara<\/span>, Vanderbilt University School of Medicine<br>\r\n<span style=\"font-weight: bold;\">Alberto Mantovani<\/span>, Humanitas Clinical &amp; Research Center, Italy<br>\r\n<span style=\"font-weight: bold;\">Sean Morrison,<\/span> UT Southwestern Medical Center<br>\r\n<span style=\"font-weight: bold;\">Morag Park<\/span>, McGill University, Canada<br>\r\n<span style=\"font-weight: bold;\">Manuel Serrano<\/span>, Spanish National Cancer Center (CNIO), Spain<br>\r\n<span style=\"font-weight: bold;\">Padmanee Sharma<\/span>, University of Texas, MD Anderson Cancer Center<br>\r\n<span style=\"font-weight: bold;\">Melody Swartz<\/span>, University of Chicago<br>\r\n<span style=\"font-weight: bold;\">David Tuveson,<\/span> Cold Spring Harbor Laboratory<br>\r\n<span style=\"font-weight: bold;\">Valerie Weaver,<\/span> University of California, San Francisco<br>\r\n<\/p>\r\n<p><span style=\"font-size: 10pt;\">Please bring this notice to the attention of any of your colleagues who may be interested in participating in the meeting.<\/span><\/p><\/div>\r\n<div class=\"msubtext16\">\r\n<p>All abstracts must be submitted by the abstract deadline. Late registrations may be accepted after the abstract deadline if the meeting is not oversubscribed. In the event of over-subscription, every effort will be made to ensure that all groups who wish to participate will be represented. The status (talk\/poster) of abstracts will be posted on our web site as soon as decisions have been made by the organizers.<\/p>\r\n<p>We are eager to have as many young people as possible attend since they are likely to benefit most from this meeting. We have applied for funds from government and industry to partially support graduate students and postdocs. Please apply in writing via email to <a href=\"mailto:pakaluk@cshl.edu\" target=\"_self\">Val Pakaluk<\/a> and state your financial needs; preference will be given to those who submit abstracts.<\/p>\r\n<p><strong>Social Media:<\/strong><\/p>\r\n<p>The designated hashtag for this meeting is #cshlcancer19.  Note that you must obtain permission from an individual presenter before live-tweeting or discussing his\/her talk, poster, or research results on social media.  Click the Policies tab above to see our full <a href=\"http:\/\/meetings.cshl.edu\/policies.aspx?meet=TUMBIO&amp;year=19#media\" target=\"_blank\">Confidentiality &amp; Reporting Policy<\/a>.<\/p>\r\n<p><strong>This meeting is sponsored by:<\/strong><br>\r\n<br>\r\n<a href=\"https:\/\/www.northwell.edu\/\" target=\"_blank\"><img src=\"images\/northwell-logo.png\" style=\"width: 135px; height: 80px;\"><\/a><\/p><\/div>\r\n<div class=\"msubtext16\">\r\n<p><strong>Pricing:<\/strong><\/p>\r\n<p><strong>Academic Package: $1,515<br>\r\nGraduate\/PhD Student Package: $1,260<br>\r\nCorporate Package: $1,950<br>\r\nAcademic\/Student No-Housing Package: $1,025<br>\r\nCorporate No-Housing Package: $1,310<\/strong><\/p><\/div>\r\n<div class=\"msubtext16\">Regular packages are all-inclusive and cover registration, food, housing, parking, a wine-and-cheese reception, and lobster banquet. No-Housing packages include all costs except housing. Full payment is due four weeks prior to the meeting.<\/div><br>\r\n \r\n<div class=\"mimages16\">\r\n<table width=\"750\" border=\"0\">  \r\n<tbody>\r\n<tr>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage1.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage2.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage3.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage4.jpg\"><\/td>    \r\n<td width=\"150\"><img width=\"150\" height=\"150\" src=\"images\/mimage5.jpg\"><\/td>  <\/tr><\/tbody><\/table><\/div>",
	);


	
		if (!isset($postFields['api_key']) || $postFields['api_key'] != $token) {
			return json_encode($response = array(
				'status' => 'error',
				'messages' => array('Unauthorized api_key value submitted.'),
			));
		}


	else{

		$message = (!$postFields['last_updated']) ? 'First call to this endpoint' : 'Prior update performed: '.$postFields['last_updated'];
		$response = array(
			'status' => 'ok',
			'result' => $results,
			'messages' => array( $message ),
		);

 }

	return json_encode($response);


}


public function returnCourses(Request $request){

	// \Log::info($request->getContents()); 
	$postFields = $request;

	\Log::info($postFields); 



	$token = env('CSHL_FEED_TOKEN_COURSES'); 


	$results = array();
	$results[] = array(
		'id' => '1', 
		'title' => 'Neural Data Science',
		'summary' => 'This course is designed to help neuroscience practitioners to develop the conceptual and practical capabilities to meet the challenges posed by the analysis of these hard-won and large data-sets. We will emphasize statistical issues such as the pre-processing of data, sampling biases, estimation methods and hypothesis testing as well as data wrangling (in MATLAB). We will work with data from a variety of recording technologies including multi-electrode array recordings, local field potentials and EEG as well as two-photon and wide-field optical imaging.

', 
		'start_date' => '2019-07-13',
		'end_date' => '2019-07-26',
		'instructors' => '<strong>Co-Instructors:</strong>
<p><strong>Kathryn Bonnen</strong>, New York University <br>
<strong>Madineh Sarvestani</strong>, Max Planck Florida Institute for Neuroscience <br>
<strong>Carsen Stringer</strong>, HHMI Janelia</p>', 
		'application_deadline' => '2019-04-01', 
		'application_url' => 'https://meetings.cshl.edu/coursesapplication.aspx?course=C-NEUDATA&year=19', 
		'intent_to_apply_url' => '', 
		'calendar_code' => 'C-NEUDATA',
		'year_code' => '19', 
		'payment_url' => 'https://meetings.cshl.edu/onlinepayment.aspx?course=C-NEUDATA&year=19', 
		'content' => '<div class="col-xs-10 col-sm-10 col-md-12">
                        <h1 class="ctitle16" style="margin:10px 0 10px 0">Neural Data Science</h1>
<div class="cdate16">July 13 - 26, 2019<br>
Application Deadline: April 1, 2019</div><br>
<div class="cinstructors16"><strong>Instructors:</strong> 
<p><strong>Marius Pachitariu,</strong> HHMI Janelia<br>
<strong>Mark Reimers,</strong> Michigan State University<br>
<strong>Pascal Wallisch,</strong> New York University</p></div>
<div class="cinstructors16"><strong>Co-Instructors:</strong>
<p><strong>Kathryn Bonnen</strong>, New York University <br>
<strong>Madineh Sarvestani</strong>, Max Planck Florida Institute for Neuroscience <br>
<strong>Carsen Stringer</strong>, HHMI Janelia</p></div>
<div class="cinstructors16">See the <a href="https://meetings.cshl.edu/alumni.aspx?course=C-NEUDATA&amp;year=17" target="_self">Roll of Honor</a> - who\'s taken the course in the past</div> 
<div class="csubtext16">
<p>Today\'s technologies enable neuroscientists to gather data in previously unimagined quantities. This necessitates - and allows for - the development of new analysis methods to address dynamic systems function of brain networks. </p>
<p>This course is designed to help neuroscience practitioners to develop the conceptual and practical capabilities to meet the challenges posed by the analysis of these hard-won and large data-sets. We will emphasize statistical issues such as the pre-processing of data, sampling biases, estimation methods and hypothesis testing as well as data wrangling (in MATLAB). We will work with data from a variety of recording technologies including multi-electrode&nbsp;array recordings, local field potentials and EEG as well as two-photon and wide-field optical imaging. </p>
<p><strong>The course will give a solid conceptual and technical grounding in widely applicable methods such as:</strong> </p>
<div class="ctopics16">
<ul>
<li>Data Processing for each recording technique </li>
<li>Spectral Methods</li>
<li>Neural Population analysis</li>
<li>Behavioral analysis</li>
<li>How to integrate&nbsp;neural data with behavioral data&nbsp; </li></ul></div> The workshop will proceed in a seminar style, guided by leading neural data analysts, with demonstrations and practical lab data analysis exercises supervised by instructors.</div><br>
<div class="csubtitle16"><strong>2019 Speakers:</strong></div>
<div class="cspeakers16">
<p></p>
<p><strong>Megan Carey,</strong>&nbsp; Champalimaud Center for the Unknown<br>
<strong>Michael X. Cohen, </strong>University of Amsterdam<br>
<strong>Saskia de Vries, </strong>The Allen Institute<br>
<strong>Tatiana Engel, </strong>Cold Spring Harbor Laboratory<br>
<strong>Konrad Kording, </strong>University of Pennsylvania<br>
<strong>Loren Looger, </strong>HHMI Janelia<br>
<strong>Alexander Mathis, </strong>Harvard University <br>
<strong>Majid Mohajerani, </strong>Canadian Center for Behavioral Neuroscience<br>
<strong>Liam Paninski ,&nbsp; </strong>Columbia University <br>
<strong>Jonathan W. Pillow, </strong>Princeton University<br>
<strong>Cristina Savin, </strong>New York University<br>
<strong>Matthew A. Smith,</strong> University of Pittsburgh<br>
<strong>Nick Steinmetz,&nbsp; </strong>University of Washington <br>
<strong>Karel Svoboda, </strong>HHMI Janelia<br>
<strong>Byron Yu, </strong>Carnegie Mellon University</p>
<p>The course is aimed primarily at advanced grad students and early postdocs, and will be held at the Laboratory’s Banbury Conference Center located on the north shore of Long Island. All participants stay within walking distance of the Center, close to tennis court, pool and private beach. Please contact the Course Registrar with all accessibility needs, and/or note them in your course application form. The workshop will begin on the morning of July 13 (students are expected to arrive on the afternoon or evening of July 12) and end by lunchtime on July 26.</p></div>
<div class="csubtext16">
<p><strong>The course is&nbsp;supported with funds provided by:</strong> <a href="http://helmsleytrust.org/programs/health-biomedical-research-infrastructure" target="_blank">Helmsley Charitable Trust</a>. Grant funds&nbsp;will be&nbsp;used to defray student tuition, room and board costs, subject to financial need.</p></div>
<div class="csubtitle16"><strong>Cost (including board and lodging): $3,955</strong>
<p>No fees are due until you have completed the full application process and are accepted into the course. </p>
<div class="csubtitle16"><strong>Before applying, ensure you have:</strong></div>
<div class="ctopics16">
<ol>
<li>Personal statement/essay; </li>
<li>Letter(s) of recommendation; </li>
<li>Curriculum vitae/resume; </li>
<li>Financial aid request (optional). <br>
<a href="https://meetings.cshl.edu/information.aspx?course=C-neudata&amp;year=19" target="_blank">More details</a>.</li></ol></div>
<p><input onclick="location.href = \'https://meetings.cshl.edu/coursesapplication.aspx?course=C-NEUDATA&amp;year=19\'" type="button" runat="server" value="Apply to the Course"></p>
<div class="csubtext16">
<p>If you are not ready to fully apply but wish to express interest in applying, receive a reminder two weeks prior to the deadline, and tell us about your financial aid requirements, click below:</p>  
<p><input onclick="location.href = \'https://meetings.cshl.edu/coursesintentoapply.aspx?course=C-neudata&amp;year=19\'" type="button" runat="server" value="Expression of Interest"></p>  </div></div>
                    </div>'
	); 

		$results[] = array(
			'id' => '2', 
		'title' => 'Synthetic Biology',
		'summary' => 'This course focuses on how the complexity of biological systems can be combined with traditional engineering approaches to result in new design principles for synthetic biology. The centerpiece of the course is an immersive laboratory experience in which students work in teams to learn the practical and theoretical underpinnings of synthetic biology research. Broadly, the course explores how cellular regulation (transcriptional, translational, post-translational, and epigenetic) can be used to engineer cells that accomplish well-defined goals.

', 
		'start_date' => '2019-07-23', 
		'end_date' => '2019-08-05', 
		'instructors' => '<strong>James Chappell, </strong>Rice University<br>
<strong>Elisa Franco</strong>, University of California Los Angeles<br>
<strong>Philip Romero, </strong>University of Wisconsin-Madison<br>
<strong>Michael Smanski,</strong> University of Minnesota<br>
<strong>Ophelia Venturelli, </strong>University of Wisconsin-Madison', 
		'application_deadline' => '2019-04-22', 
		'application_url' => 'https://meetings.cshl.edu/coursesapplication.aspx?course=C-SYNBIO&year=19', 
		'intent_to_apply_url' => '', 
		'calendar_code' => '',
		'year_code' => '', 
		'payment_url' => 'https://meetings.cshl.edu/onlinepayment.aspx?course=C-SYNBIO&year=19', 
	
		'content' => '<div class="col-xs-10 col-sm-10 col-md-12">
                        <h1 class="ctitle16" style="margin:10px 0 10px 0">Synthetic Biology</h1>
<div class="cdate16">July 23 - August 5, 2019</div>
<div class="cdate16">Application Deadline: April 22, 2019</div><br>
<div class="cinstructors16"><strong>Instructors </strong>(see full profiles <a href="https://cshlsynbio.wordpress.com/instructors-2019/" target="_blank">here</a>):</div><br>
<div class="cinstructors16"><strong>James Chappell, </strong>Rice University<br>
<strong>Elisa Franco</strong>, University of California Los Angeles<br>
<strong>Philip Romero, </strong>University of Wisconsin-Madison<br>
<strong>Michael Smanski,</strong> University of Minnesota<br>
<strong>Ophelia Venturelli, </strong>University of Wisconsin-Madison</div>
<div class="cinstructors16">
<p>See the <a href="https://meetings.cshl.edu/alumni.aspx?course=C-SYNBIO&amp;year=18" target="new">roll of honor&nbsp;</a>&nbsp;- who\'s taken the course in the past</p></div>
<div class="csubtext16">
<p>Cells are the world’s most sophisticated chemists, and their ability to adapt to changing environments offers enormous potential for solving modern engineering challenges. Nonetheless, biological systems are noisy, massively interconnected, and non-linear, and they have not evolved to be easily engineered. The grand challenge of synthetic biology is to reconcile the desire for a predictable, formalized biological design process with the inherent ‘squishiness’ of biology.</p>
<p>This course focuses on how the complexity of biological systems can be combined with traditional engineering approaches to result in new design principles for synthetic biology. The centerpiece of the course is an immersive laboratory experience in which students work in teams to learn the practical and theoretical underpinnings of synthetic biology research. Broadly, the course explores how cellular regulation (transcriptional, translational, post-translational, and epigenetic) can be used to engineer cells that accomplish well-defined goals. </p>
<p><strong>Laboratory modules cover the following areas:</strong></p>
<p></p>
<div class="ctopics16">
<ul>
<li>Microfluidics for high-throughput characterization of biological systems</li>
<li>Cell-free transcription and translation systems to characterize genetic circuits and RNA regulators </li>
<li>Modeling gene expression using ordinary differential equations </li>
<li>DNA Assembly and Design of Expression Cassettes </li>
<li>Computational modeling of genetic circuits and microbial communities.</li></ul></div>
<p></p>
<p>Students will first learn essential synthetic biology techniques in a four-day ‘bootcamp’ at the beginning of the course. Following the bootcamp, they will rotate through research projects in select areas. Students will also interact closely with a panel of internationally recognized speakers who will collectively provide a broad overview of synthetic biology applications, including renewable chemical production and therapeutics, state-of-the-art techniques, case studies in human practices, and socially responsible innovation.</p></div>
<div class="csubtitle16"><strong>Confirmed 2019 Lecturers:</strong></div><br>
<div class="cspeakers16"><b>Lauren Andrews,</b> University of Massachusetts Amherst<br>
<b>Adam Arkin, </b>University of California Berkeley<br>
<b>Chase Beisel, </b>Helmholtz Institute for RNA-Based Infection Research<br>
<b>Francesca Ceroni,&nbsp;</b>Imperial College London<br>
<b>Andy Ellington, </b>University of Texas Austin<br>
<b>Karmella Haynes, </b>Emory University/Georgia Institute of Technology<br>
<b>Mustafa Khammash,&nbsp;</b>ETH Zurich<br>
<span id="MSIEparagraph_left"></span><span style="font-weight: bold;">Rebecca Schulman,</span> Johns Hopkins University<br>
<b>Huimin Zhao, </b>University of Illinois, Urbana-Champaign<br>
<b>Ron Weiss, </b>Massachusetts Institute of Technology<span id="MSIEparagraph_right"></span><br>
<br>
</div>
<div class="csubtext16">
<p><strong>Application instructions:</strong></p>
<p><span id="docs-internal-guid-bb2f3fdd-7fff-14c0-2edd-d1eb334f166f" style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Synthetic biology is an inherently interdisciplinary field. We encourage students of all backgrounds to apply, from experimental biology to very theoretical fields. At the end of your personal statement/essay, please rank your interest in the following major available laboratory modules (from highest to lowest interest): </span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(1)</span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"> Cell-free transcription and translation systems to characterize genetic circuits and RNA regulators</span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(2) </span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Modeling gene expression using ordinary differential equations</span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(3)</span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"> DNA Assembly and Design of Expression Cassettes</span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(4) </span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Microfluidics for high-throughput characterization of biological systems; and (5) Computational modeling of genetic circuits and microbial communities. </span></p></div>
<div class="ctopics16">
<p></p></div>
<div class="csubtext16">
<p><strong> Cost: $3,960</strong></p>
<p>This tuition rate is all-inclusive and includes housing and food. Additional financial aid is available; to indicate financial need, please submit a short stipend request as part of your application materials. </p>
<p><strong>This course is supported with funds provided by: </strong><a href="http://www.nigms.nih.gov/" target="_blank">National Institute of General Medical Sciences</a>, <a href="http://www.hhmi.org" target="_blank">Howard Hughes Medical Institute</a>, <a href="http://helmsleytrust.org/" target="_blank">Helmsley Charitable Trust</a>, and <a href="http://www.nsf.gov" target="_blank">National Science Foundation</a>.</p>
<p>No fees are due until you have completed the full application process and are accepted into the course. Students accepted into the course should plan to arrive by early evening on July 22 and plan to depart after lunch on August 5.</p>
<div class="csubtitle16"><strong>Before applying, ensure you have:</strong></div>
<div class="ctopics16">
<ol>
<li>Personal statement/essay; </li>
<li>Letter(s) of recommendation; </li>
<li>Curriculum vitae/resume (optional); </li>
<li>Financial aid request (optional). <br>
<a href="https://meetings.cshl.edu/information.aspx?course=C-synbio&amp;year=19" target="_blank">More details</a>.</li></ol></div>
<p><input onclick="location.href = \'https://meetings.cshl.edu/coursesapplication.aspx?course=C-SYNBIO&amp;year=19\'" type="button" runat="server" value="Apply to the Course"></p>
<p>If you are not ready to fully apply but wish to express interest in applying, receive a reminder two weeks prior to the deadline, and tell us about your financial aid requirements, click below:</p>  
<p><input onclick="location.href = \'https://meetings.cshl.edu/coursesintentoapply.aspx?course=C-SYNBIO&amp;year=19\'" type="button" runat="server" value="Expression of Interest"><br>
</p></div>
                    </div>'
	); 



			$results[] = array(
				'id' => '3', 
		'title' => 'Test 3',
		'summary' => '', 
		'start_date' => '', 
		'end_date' => '', 
		'instructors' => '', 
		'application_deadline' => '', 
		'application_url' => '', 
		'intent_to_apply_url' => '', 
		'calendar_code' => '',
		'year_code' => '', 
		'payment_url' => '', 
		'content' => '<div class="col-xs-10 col-sm-10 col-md-12">
                        <h1 class="ctitle16" style="margin:10px 0 10px 0">Synthetic Biology</h1>
<div class="cdate16">July 23 - August 5, 2019</div>
<div class="cdate16">Application Deadline: April 22, 2019</div><br>
<div class="cinstructors16"><strong>Instructors </strong>(see full profiles <a href="https://cshlsynbio.wordpress.com/instructors-2019/" target="_blank">here</a>):</div><br>
<div class="cinstructors16"><strong>James Chappell, </strong>Rice University<br>
<strong>Elisa Franco</strong>, University of California Los Angeles<br>
<strong>Philip Romero, </strong>University of Wisconsin-Madison<br>
<strong>Michael Smanski,</strong> University of Minnesota<br>
<strong>Ophelia Venturelli, </strong>University of Wisconsin-Madison</div>
<div class="cinstructors16">
<p>See the <a href="https://meetings.cshl.edu/alumni.aspx?course=C-SYNBIO&amp;year=18" target="new">roll of honor&nbsp;</a>&nbsp;- who\'s taken the course in the past</p></div>
<div class="csubtext16">
<p>Cells are the world’s most sophisticated chemists, and their ability to adapt to changing environments offers enormous potential for solving modern engineering challenges. Nonetheless, biological systems are noisy, massively interconnected, and non-linear, and they have not evolved to be easily engineered. The grand challenge of synthetic biology is to reconcile the desire for a predictable, formalized biological design process with the inherent ‘squishiness’ of biology.</p>
<p>This course focuses on how the complexity of biological systems can be combined with traditional engineering approaches to result in new design principles for synthetic biology. The centerpiece of the course is an immersive laboratory experience in which students work in teams to learn the practical and theoretical underpinnings of synthetic biology research. Broadly, the course explores how cellular regulation (transcriptional, translational, post-translational, and epigenetic) can be used to engineer cells that accomplish well-defined goals. </p>
<p><strong>Laboratory modules cover the following areas:</strong></p>
<p></p>
<div class="ctopics16">
<ul>
<li>Microfluidics for high-throughput characterization of biological systems</li>
<li>Cell-free transcription and translation systems to characterize genetic circuits and RNA regulators </li>
<li>Modeling gene expression using ordinary differential equations </li>
<li>DNA Assembly and Design of Expression Cassettes </li>
<li>Computational modeling of genetic circuits and microbial communities.</li></ul></div>
<p></p>
<p>Students will first learn essential synthetic biology techniques in a four-day ‘bootcamp’ at the beginning of the course. Following the bootcamp, they will rotate through research projects in select areas. Students will also interact closely with a panel of internationally recognized speakers who will collectively provide a broad overview of synthetic biology applications, including renewable chemical production and therapeutics, state-of-the-art techniques, case studies in human practices, and socially responsible innovation.</p></div>
<div class="csubtitle16"><strong>Confirmed 2019 Lecturers:</strong></div><br>
<div class="cspeakers16"><b>Lauren Andrews,</b> University of Massachusetts Amherst<br>
<b>Adam Arkin, </b>University of California Berkeley<br>
<b>Chase Beisel, </b>Helmholtz Institute for RNA-Based Infection Research<br>
<b>Francesca Ceroni,&nbsp;</b>Imperial College London<br>
<b>Andy Ellington, </b>University of Texas Austin<br>
<b>Karmella Haynes, </b>Emory University/Georgia Institute of Technology<br>
<b>Mustafa Khammash,&nbsp;</b>ETH Zurich<br>
<span id="MSIEparagraph_left"></span><span style="font-weight: bold;">Rebecca Schulman,</span> Johns Hopkins University<br>
<b>Huimin Zhao, </b>University of Illinois, Urbana-Champaign<br>
<b>Ron Weiss, </b>Massachusetts Institute of Technology<span id="MSIEparagraph_right"></span><br>
<br>
</div>
<div class="csubtext16">
<p><strong>Application instructions:</strong></p>
<p><span id="docs-internal-guid-bb2f3fdd-7fff-14c0-2edd-d1eb334f166f" style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Synthetic biology is an inherently interdisciplinary field. We encourage students of all backgrounds to apply, from experimental biology to very theoretical fields. At the end of your personal statement/essay, please rank your interest in the following major available laboratory modules (from highest to lowest interest): </span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(1)</span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"> Cell-free transcription and translation systems to characterize genetic circuits and RNA regulators</span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(2) </span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Modeling gene expression using ordinary differential equations</span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(3)</span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;"> DNA Assembly and Design of Expression Cassettes</span></p>
<p><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap; font-weight: bold;">(4) </span><span style="color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Microfluidics for high-throughput characterization of biological systems; and (5) Computational modeling of genetic circuits and microbial communities. </span></p></div>
<div class="ctopics16">
<p></p></div>
<div class="csubtext16">
<p><strong> Cost: $3,960</strong></p>
<p>This tuition rate is all-inclusive and includes housing and food. Additional financial aid is available; to indicate financial need, please submit a short stipend request as part of your application materials. </p>
<p><strong>This course is supported with funds provided by: </strong><a href="http://www.nigms.nih.gov/" target="_blank">National Institute of General Medical Sciences</a>, <a href="http://www.hhmi.org" target="_blank">Howard Hughes Medical Institute</a>, <a href="http://helmsleytrust.org/" target="_blank">Helmsley Charitable Trust</a>, and <a href="http://www.nsf.gov" target="_blank">National Science Foundation</a>.</p>
<p>No fees are due until you have completed the full application process and are accepted into the course. Students accepted into the course should plan to arrive by early evening on July 22 and plan to depart after lunch on August 5.</p>
<div class="csubtitle16"><strong>Before applying, ensure you have:</strong></div>
<div class="ctopics16">
<ol>
<li>Personal statement/essay; </li>
<li>Letter(s) of recommendation; </li>
<li>Curriculum vitae/resume (optional); </li>
<li>Financial aid request (optional). <br>
<a href="https://meetings.cshl.edu/information.aspx?course=C-synbio&amp;year=19" target="_blank">More details</a>.</li></ol></div>
<p><input onclick="location.href = \'https://meetings.cshl.edu/coursesapplication.aspx?course=C-SYNBIO&amp;year=19\'" type="button" runat="server" value="Apply to the Course"></p>
<p>If you are not ready to fully apply but wish to express interest in applying, receive a reminder two weeks prior to the deadline, and tell us about your financial aid requirements, click below:</p>  
<p><input onclick="location.href = \'https://meetings.cshl.edu/coursesintentoapply.aspx?course=C-SYNBIO&amp;year=19\'" type="button" runat="server" value="Expression of Interest"><br>
</p></div>
                    </div>'
	); 






	
		if (!isset($postFields['api_key']) || $postFields['api_key'] != $token) {
			return json_encode($response = array(
				'status' => 'error',
				'messages' => array('Unauthorized api_key value submitted.'),
			));
		}


	else{

		$message = (!$postFields['last_updated']) ? 'First call to this endpoint' : 'Prior update performed: '.$postFields['last_updated'];
		$response = array(
			'status' => 'ok',
			'result' => $results,
			'messages' => array( $message ),
		);

 }

	return json_encode($response);


}

public function testResponse(Request $request) {

	


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
