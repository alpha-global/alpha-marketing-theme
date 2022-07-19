<?php
/**
 * Card Block
 *
 * @package Alpha
 */

$block_id = 'alpha-offices-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-offices';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

$regions = array(
	'all'                => array(
		'name'  => __( 'All Offices', 'alpha' ),
		'image' => 'all.png',
	),
	'africa'             => array(
		'name'  => __( 'Africa', 'alpha' ),
		'image' => 'africa.png',
	),
	'americas'           => array(
		'name'  => __( 'Americas', 'alpha' ),
		'image' => 'americas.png',
	),
	'asia-pacific'       => array(
		'name'  => __( 'Asia-Pacific', 'alpha' ),
		'image' => 'asia-pacific.png',
	),
	'europe-middle-east' => array(
		'name'  => __( 'Europe, Middle East & North Africa', 'alpha' ),
		'image' => 'europe-middle-east.png',
	),
);

$sites = array(
	// Africa
	0  => array(
		'name'    => __( 'Africa Regional', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'africa',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	1  => array(
		'name'    => __( 'Burundi', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'bi',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	2  => array(
		'name'    => __( 'Botswana', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'bw',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	3  => array(
		'name'    => __( 'ኢትዮጵያ / Ethiopia', 'alpha' ),
		'domain'  => 'https://ethiopia.alpha.org/',
		'flag'    => 'et',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	4  => array(
		'name'    => __( 'Ghana', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'gh',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	5  => array(
		'name'    => __( 'Indian-Ocean-Regional', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	6  => array(
		'name'    => __( 'Kenya', 'alpha' ),
		'domain'  => 'https://kenya.alpha.org/',
		'flag'    => 'ke',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	7  => array(
		'name'    => __( 'Liberia', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'lr',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	8  => array(
		'name'    => __( 'Nigeria', 'alpha' ),
		'domain'  => 'http://nigeria.alpha.org/',
		'flag'    => 'ng',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	9  => array(
		'name'    => __( 'Rwanda', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'rw',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	10 => array(
		'name'    => __( 'South Africa', 'alpha' ),
		'domain'  => 'https://southafrica.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	11 => array(
		'name'    => __( 'Sierra Leone', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'sl',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	12 => array(
		'name'    => __( 'Uganda', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'ug',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	13 => array(
		'name'    => __( 'Zambia', 'alpha' ),
		'domain'  => 'http://zambia.alpha.org/',
		'flag'    => 'zm',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	14 => array(
		'name'    => __( 'Zimbabwe', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'zw',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	// Americas
	15 => array(
		'name'    => __( 'Argentina', 'alpha' ),
		'domain'  => 'https://argentina.alpha.org/',
		'flag'    => 'ar',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	16 => array(
		'name'    => __( 'Brasil', 'alpha' ),
		'domain'  => 'https://vemproalpha.org/',
		'flag'    => 'br',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	17 => array(
		'name'    => __( 'Canada', 'alpha' ),
		'domain'  => 'https://www.alphacanada.org/',
		'flag'    => 'ca',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	18 => array(
		'name'    => __( 'Colombia', 'alpha' ),
		'domain'  => 'https://colombia.alpha.org/',
		'flag'    => 'co',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	19 => array(
		'name'    => __( 'Costa Rica', 'alpha' ),
		'domain'  => 'https://latam.alpha.org/',
		'flag'    => 'cr',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	20 => array(
		'name'    => __( 'Latinoamérica Regional', 'alpha' ),
		'domain'  => 'https://latam.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	21 => array(
		'name'    => __( 'Mexico', 'alpha' ),
		'domain'  => 'http://mexico.alpha.org/',
		'flag'    => 'mx',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	22 => array(
		'name'    => __( 'Trinidad and Tobago', 'alpha' ),
		'domain'  => 'https://latam.alpha.org/',
		'flag'    => 'tt',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	23 => array(
		'name'    => __( 'United States', 'alpha' ),
		'domain'  => 'https://alphausa.org/',
		'flag'    => 'us',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	// Asia-Pacific
	24 => array(
		'name'    => __( 'Australia', 'alpha' ),
		'domain'  => 'https://alpha.org.au',
		'flag'    => 'au',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	25 => array(
		'name'    => __( 'Asia-Pacific Regional', 'alpha' ),
		'domain'  => 'https://asiapacific.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	26 => array(
		'name'    => __( 'ព្រះរាជាណាចក្រកម្ពុជា / Cambodia', 'alpha' ),
		'domain'  => 'https://asiapacific.alpha.org/',
		'flag'    => 'kh',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	29 => array(
		'name'    => __( 'India', 'alpha' ),
		'domain'  => 'http://india.alpha.org/',
		'flag'    => 'in',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	30 => array(
		'name'    => __( 'Indonesia', 'alpha' ),
		'domain'  => 'https://indonesia.alpha.org/',
		'flag'    => 'id',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	31 => array(
		'name'    => __( '日本 / Japan', 'alpha' ),
		'domain'  => 'https://japan.alpha.org/',
		'flag'    => 'jp',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	32 => array(
		'name'    => __( '대한민국 / Korea', 'alpha' ),
		'domain'  => 'https://alphakorea.org',
		'flag'    => 'kr',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	33 => array(
		'name'    => __( 'Malaysia', 'alpha' ),
		'domain'  => 'http://malaysia.alpha.org/',
		'flag'    => 'my',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	34 => array(
		'name'    => __( 'ပြည်ထောင်စုသမ္မတ မြန်မာနိုင်ငံတော် / Myanmar', 'alpha' ),
		'domain'  => 'https://asiapacific.alpha.org/',
		'flag'    => 'mm',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	35 => array(
		'name'    => __( 'New Zealand', 'alpha' ),
		'domain'  => 'http://www.alpha.org.nz',
		'flag'    => 'nz',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	36 => array(
		'name'    => __( 'Philippines', 'alpha' ),
		'domain'  => 'http://philippines.alpha.org/',
		'flag'    => 'ph',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	37 => array(
		'name'    => __( 'Singapore', 'alpha' ),
		'domain'  => 'http://singapore.alpha.org/',
		'flag'    => 'sg',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	38 => array(
		'name'    => __( '台灣 / Taiwan', 'alpha' ),
		'domain'  => 'http://taiwan.alpha.org/',
		'flag'    => 'tw',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	39 => array(
		'name'    => __( 'ไทย / Thailand', 'alpha' ),
		'domain'  => 'https://thailand.alpha.org/',
		'flag'    => 'th',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	40 => array(
		'name'    => __( 'Vietnam', 'alpha' ),
		'domain'  => 'http://vietnam.alpha.org/',
		'flag'    => 'vn',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
// Europe and Middle East
	/* 41 => array(
		'name'    => __( 'Shqipërisë', 'alpha' ),
		'domain'  => 'mailto:hervinfushekati@gmail.com',
		'flag'    => 'al',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	42 => array(
		'name'    => __( 'Österreich', 'alpha' ),
		'domain'  => 'https://alpha.at/',
		'flag'    => 'at',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	/* 43 => array(
		'name'    => __( 'Belarus', 'alpha' ),
		'domain'  => 'mailto:alphahomeminsk@gmail.com',
		'flag'    => 'by',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	44 => array(
		'name'    => __( 'België', 'alpha' ),
		'domain'  => 'https://alphavlaanderen.be/',
		'flag'    => 'be',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	45 => array(
		'name'    => __( 'Belgique', 'alpha' ),
		'domain'  => 'https://www.parcoursalpha.be/',
		'flag'    => 'be',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	/* 46 => array(
		'name'    => __( 'Боснa и Херцеговина', 'alpha' ),
		'domain'  => 'https://alpha.org/run',
		'flag'    => 'ba',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	47 => array(
		'name'    => __( 'България', 'alpha' ),
		'domain'  => 'https://run.bulgaria.alpha.org/',
		'flag'    => 'bg',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	/* 48 => array(
		'name'    => __( 'Hrvatska', 'alpha' ),
		'domain'  => 'https://alpha.org/run',
		'flag'    => 'hr',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	/* 49 => array(
		'name'    => __( 'Cyprus', 'alpha' ),
		'domain'  => 'https://alpha.org/run',
		'flag'    => 'cy',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	50 => array(
		'name'    => __( 'Česká Republika', 'alpha' ),
		'domain'  => 'https://www.kurzyalfa.cz/',
		'flag'    => 'cz',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	51 => array(
		'name'    => __( 'Danmark', 'alpha' ),
		'domain'  => 'https://danmark.alpha.org/',
		'flag'    => 'dk',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	52 => array(
		'name'    => __( 'مصر', 'alpha' ),
		'domain'  => 'https://mena.alpha.org/',
		'flag'    => 'eg',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	53 => array(
		'name'    => __( 'Eesti', 'alpha' ),
		'domain'  => 'https://run.estonia.alpha.org',
		'flag'    => 'ee',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	55 => array(
		'name'    => __( 'Suomi', 'alpha' ),
		'domain'  => 'https://kokeilealfaa.fi/',
		'flag'    => 'fi',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	56 => array(
		'name'    => __( 'France', 'alpha' ),
		'domain'  => 'https://www.parcoursalpha.fr/',
		'flag'    => 'fr',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	/* 57 => array(
		'name'    => __( 'Georgia', 'alpha' ),
		'domain'  => 'https://run.europe.alpha.org',
		'flag'    => 'ge',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	58 => array(
		'name'    => __( 'Gulf ', 'alpha' ),
		'domain'  => 'https://gulf.alpha.org',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	59 => array(
		'name'    => __( 'Deutschland', 'alpha' ),
		'domain'  => 'https://alphakurs.de/',
		'flag'    => 'de',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	60 => array(
		'name'    => __( 'Magyarország', 'alpha' ),
		'domain'  => 'https://alpha.org.hu/',
		'flag'    => 'hu',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	/* 61 => array(
		'name'    => __( 'Iceland', 'alpha' ),
		'domain'  => 'mailto:ragnar@sik.is',
		'flag'    => 'is',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	62 => array(
		'name'    => __( 'Ireland', 'alpha' ),
		'domain'  => 'https://alphaireland.org/',
		'flag'    => 'ie',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	63=> array(
		'name'    => __( 'Italia', 'alpha' ),
		'domain'  => 'https://italia.alpha.org/',
		'flag'    => 'it',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	83=> array(
		'name'    => __( 'יִשְׂרָאֵל', 'alpha' ),
		'domain'  => 'https://israel.alpha.org/',
		'flag'    => 'il',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	64 => array(
		'name'    => __( 'Latvija', 'alpha' ),
		'domain'  => 'https://alfakurss.lv/',
		'flag'    => 'lv',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	65 => array(
		'name'    => __( 'Levant ', 'alpha' ),
		'domain'  => 'mailto:nabil.shehadi@alpha.org',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	66 => array(
		'name'    => __( 'Lietuva', 'alpha' ),
		'domain'  => 'https://www.alfakursai.lt',
		'flag'    => 'lt',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	/* 67 => array(
		'name'    => __( 'Mакедонија', 'alpha' ),
		'domain'  => 'https://alpha.org/run',
		'flag'    => 'mk',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	/* 68 => array(
		'name'    => __( 'Malta', 'alpha' ),
		'domain'  => 'https://www.alpha.org.mt/',
		'flag'    => 'mt',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	70 => array(
		'name'    => __( 'Nederland', 'alpha' ),
		'domain'  => 'https://alphanederland.org/',
		'flag'    => 'nl',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	71 => array(
		'name'    => __( 'Norge', 'alpha' ),
		'domain'  => 'https://norge.alpha.org/',
		'flag'    => 'no',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	72 => array(
		'name'    => __( 'Polska', 'alpha' ),
		'domain'  => 'https://polska.alpha.org/',
		'flag'    => 'pl',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	73 => array(
		'name'    => __( 'Portugal', 'alpha' ),
		'domain'  => 'https://portugal.alpha.org/',
		'flag'    => 'pt',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	74 => array(
		'name'    => __( 'Romania', 'alpha' ),
		'domain'  => 'https://alpharomania.org/',
		'flag'    => 'ro',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	75 => array(
		'name'    => __( 'Россия', 'alpha' ),
		'domain'  => 'https://alphacourse.ru/',
		'flag'    => 'ru',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	/* 76 => array(
		'name'    => __( 'Србија', 'alpha' ),
		'domain'  => 'https://alpha.org/run',
		'flag'    => 'rs',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	), */
	77 => array(
		'name'    => __( 'España', 'alpha' ),
		'domain'  => 'https://spain.alpha.org/',
		'flag'    => 'es',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	78 => array(
		'name'    => __( 'Suisse', 'alpha' ),
		'domain'  => 'https://fr.alphalive.ch/',
		'flag'    => 'ch',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	79 => array(
		'name'    => __( 'Schweiz', 'alpha' ),
		'domain'  => 'https://de.alphalive.ch/',
		'flag'    => 'ch',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),	
	80 => array(
		'name'    => __( 'Sverige', 'alpha' ),
		'domain'  => 'https://sverige.alpha.org/',
		'flag'    => 'se',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	81 => array(
		'name'    => __( 'Türkiye', 'alpha' ),
		'domain'  => 'https://turkey.alpha.org/',
		'flag'    => 'tr',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	82 => array(
		'name'    => __( 'Україна', 'alpha' ),
		'domain'  => 'https://alpha.org.ua/',
		'flag'    => 'ua',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	99 => array(
		'name'    => __( 'United Kingdom', 'alpha' ),
		'domain'  => 'https://alpha.org.uk/',
		'flag'    => 'gb',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	54 => array(
		'name'    => __( 'Europe ', 'alpha' ),
		'domain'  => 'https://run.europe.alpha.org',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',

		),
	),
	69 => array(
		'name'    => __( 'Middle East & North Africa ', 'alpha' ),
		'domain'  => 'https://run.mena.alpha.org',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),	
);

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="alpha-offices-tabs alpha-tabs">
		<ul class="alpha-offices-nav alpha-tabs-nav">
			<?php foreach ( $regions as $key => $region ) : ?>
				<li>
					<a data-id="<?php echo esc_attr( $key ); ?>" href="#">
						<img src="<?php echo get_template_directory_uri() . '/country-flags/' . $key .'.png'; ?>" alt="" />
						<span><?php echo esc_html( $region['name'] ); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
			<div class="indicator"></div>
		</ul>

		<?php foreach ( $regions as $region_key => $region ) : ?>
			<div class="alpha-offices-tab alpha-tabs-single" data-id="<?php echo esc_attr( $region_key ); ?>">
				<?php foreach ( $sites as $site ) : ?>
					<?php if ( in_array( $region_key, $site['regions'] ) ) : ?>
						<a href="<?php echo esc_url( $site['domain'] ); ?>" class="alpha-offices-single">
							<?php alpha_flag_image( $site['flag'] ); ?>
							<span class="alpha-offices-single-name"><?php echo esc_html( $site['name'] ); ?></span>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>
