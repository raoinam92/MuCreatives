<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools;
use SEOMeta;

class AdminController extends Controller
{
    public function customdev(){
        SEOMeta::setTitle('Web Design Pakistan | SEO Services in Pakistan | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives offers Website Design Services, SEO and PPC Services in Lahore, Karachi, Islamabad, Rawalpindi, Punjab and all over the Pakistan.');
        SEOMeta::setRobots('noindex, nofollow');
        return view('custom_dev');
    }
    
    public function webdev(){
        SEOMeta::setTitle('Web Design MI | Michigan SEO Company | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives offers Website Design Services, SEO and PPC Services in RedFord, Kalamazoo, Detroit, Grand Rapids, Michigan and all over the USA.');
        SEOMeta::setRobots('noindex, nofollow');
        return view('web_dev');
    }
    
    public function smmpage(){
        SEOMeta::setTitle('Web Design MI | Michigan SEO Company | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives offers Website Design Services, SEO and PPC Services in RedFord, Kalamazoo, Detroit, Grand Rapids, Michigan and all over the USA.');
        SEOMeta::setRobots('noindex, nofollow');
        return view('smm');
    }
    
    public function seolandingpage(){
        SEOMeta::setTitle('Web Design MI | Michigan SEO Company | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives offers Website Design Services, SEO and PPC Services in RedFord, Kalamazoo, Detroit, Grand Rapids, Michigan and all over the USA.');
        SEOMeta::setRobots('noindex, nofollow');
        return view('seo_landing_page');
    }
    
    public function landingpage(){
        SEOMeta::setTitle('Web Design MI | Michigan SEO Company | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives offers Website Design Services, SEO and PPC Services in RedFord, Kalamazoo, Detroit, Grand Rapids, Michigan and all over the USA.');
        SEOMeta::setRobots('noindex, nofollow');
        return view('landing_page');
    }
    
    public function index(){
        SEOMeta::setTitle('Web Design Pakistan | SEO Services in Pakistan | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives offers Website Design Services, SEO and PPC Services in Lahore, Karachi, Islamabad, Rawalpindi, Punjab and all over the Pakistan.');
        SEOMeta::setRobots('noindex, nofollow');
        return view('Layout.app');
    }

    public function about(){
        SEOMeta::setTitle('About Us | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');
        SEOMeta::setRobots('noindex, nofollow');        
        return view('about.about');
    }
    
    public function services(){
        SEOMeta::setTitle('Services | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!'); 
        SEOMeta::setRobots('noindex, nofollow');         
        return view('services');
    }
    
    public function partnership(){
        SEOMeta::setTitle('Partnership | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');
        SEOMeta::setRobots('noindex, nofollow');            
        return view('about.partnership');
    }

    public function mission_vision(){
        SEOMeta::setTitle('Mission & Vision | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!'); 
        SEOMeta::setRobots('noindex, nofollow');           
        return view('about.mission_vision');
    }

    public function digitalDesign(){
        SEOMeta::setTitle('Digital Design | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');
        SEOMeta::setRobots('noindex, nofollow');            
        return view('graphicDesign.digital_design');
    }

    public function illustration(){
        SEOMeta::setTitle('Illustration | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');
        SEOMeta::setRobots('noindex, nofollow');            
        return view('graphicDesign.illustration');
    }

    public function logoDesign(){
        SEOMeta::setTitle('Logo Design | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!'); 
        SEOMeta::setRobots('noindex, nofollow');            
        return view('graphicDesign.logo_design');
    }

    public function nicheArt(){
        SEOMeta::setTitle('Niche Art | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!'); 
        SEOMeta::setRobots('noindex, nofollow');            
        return view('graphicDesign.niche_artwork');
    }

    public function packagingDesign(){
        SEOMeta::setTitle('Packaging Design | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!'); 
        SEOMeta::setRobots('noindex, nofollow');            
        return view('graphicDesign.packaging_design');
    }
    
    public function printDesign(){
        SEOMeta::setTitle('Print Design | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');           
        return view('graphicDesign.print_design');
    }


    public function productDesign(){
        SEOMeta::setTitle('Product Design | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');           
        return view('graphicDesign.product_design');
    }

    public function userExperience(){
        SEOMeta::setTitle('User Experice UI/UX | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');   
        SEOMeta::setRobots('noindex, nofollow');          
        return view('graphicDesign.user_experience');
    }

    public function webDesigning(){
        SEOMeta::setTitle('Website Design | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');       
        SEOMeta::setRobots('noindex, nofollow');      
        return view('graphicDesign.web_designing');
    }

    public function websiteDesign(){
        SEOMeta::setTitle('Website Design | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');          
        return view('graphicDesign.websiteDesign');
    }

    public function webApplication(){
        SEOMeta::setTitle('Web Applications | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');     
        SEOMeta::setRobots('noindex, nofollow');        
        return view('webApplication.web_application');
    }

    public function digitalmarket(){
    SEOMeta::setTitle('Digital Marketing Agency Michigan | Digital Marketing Detroit',false);
    SEOMeta::setDescription('MavenUp is a digital marketing agency for your all business needs serving clients all around Detroit, Ann Arbor, Grand Rapids, Michigan.');        
    SEOMeta::setRobots('noindex, nofollow');  
        return view('digitalmarketing.digital_marketing');
    }

//digital Marketing 

public function reputation(){
        SEOMeta::setTitle('Online Reputation Management | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');       
        SEOMeta::setRobots('noindex, nofollow');  
        return view('digitalmarketing.online_reputation_management');
    }

    public function localSeo(){
        SEOMeta::setTitle('Local SEO | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');          
        return view('digitalmarketing.local_seo');
    }

    public function publicRelation(){
        SEOMeta::setTitle('Public Relations | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');      
        SEOMeta::setRobots('noindex, nofollow');       
        return view('digitalmarketing.public_relations');
    }

    public function appMarketing(){
        SEOMeta::setTitle('APP Marketing | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');           
        return view('digitalmarketing.app_marketing');
    }

    public function ppc(){
    SEOMeta::setTitle('Michigan PPC | Pay per Click Marketing Agency Michigan',false);
    SEOMeta::setDescription('Hire MavenUp Creatives experienced Pay Per Click Marketing Team if you want to maximize your profit with rapid sales through High ROI PPC campaigns.');   
    SEOMeta::setRobots('noindex, nofollow');       
        return view('digitalmarketing.add_ppc');
    }

    public function smm(){
    SEOMeta::setTitle('Social Media Marketing Michigan | Social Media Agency Detroit',false);
    SEOMeta::setDescription('MavenUp Creatives provide Social Media Marketing services in all over the Michigan. Call us if you are looking for reliable social media marketing Agency.');        
    SEOMeta::setRobots('noindex, nofollow');  
        return view('digitalmarketing.social_media');
    }

    public function contentMarketing(){
        SEOMeta::setTitle('Content Marketing | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');     
        SEOMeta::setRobots('noindex, nofollow');        
        return view('digitalmarketing.content_marketing');
    }

    public function seo(){
    SEOMeta::setTitle('Michigan SEO Experts | Minneapolis SEO Agency | Kalamazoo SEO',false);
    SEOMeta::setDescription('We are Michigan SEO Company. Our seasoned SEO experts provide results oriented search engine optimization strategies for your business website high ranking.');     
    SEOMeta::setRobots('noindex, nofollow');     
        return view('digitalmarketing.seo');
    }

//Graphic Design
 
    public function graphicDesign(){
    SEOMeta::setTitle('Ann Arbor Graphic Design Firms | Logo Design Michigan',false);
    SEOMeta::setDescription('Looking for Ann Arbor Graphic Design Firms in Michigan? MavenUp Creatives provides Logo Design services in Detroit, Michigan & across the USA.');      
    SEOMeta::setRobots('noindex, nofollow');     
        return view('graphicDesign.graphics_design');
    }

     public function websiteDesignui(){
    SEOMeta::setTitle('Web Design MI | Web Designers Kalamazoo | Web Design Ann Arbor',false);
    SEOMeta::setDescription('MavenUp is a team of highly skilled web designers providing the UI/UX Optimized web design Services in Kalamazoo, Ann Arbor, Grand Rapids, Michigan.');         
    SEOMeta::setRobots('noindex, nofollow');  
        return view('graphicDesign.web_designing_ui');
    }

    public function logo(){
        SEOMeta::setTitle('Logo Design MI | Logo Designers Kalamazoo | Logo Design Ann Arbor',false);
    SEOMeta::setDescription('MavenUp is a team of highly skilled Logo designers providing the UI/UX Optimized Logo design Services in Kalamazoo, Ann Arbor, Grand Rapids, Michigan.');         
    SEOMeta::setRobots('noindex, nofollow');     
        return view('graphicDesign.logo_design');
    }
    
    public function printmedia(){
                SEOMeta::setTitle('Print Media Design MI | Print Media Designers Kalamazoo | Print Media Design Ann Arbor',false);
                SEOMeta::setDescription('MavenUp is a team of highly skilled Print Media designers providing the UI/UX Optimized Print Media design Services in Kalamazoo, Ann Arbor, Grand Rapids, Michigan.');         
                SEOMeta::setRobots('noindex, nofollow'); 
        return view('graphicDesign.print_Media');
    }

    public function branding(){
        SEOMeta::setTitle('Branding | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');         
        return view('graphicDesign.user_experience');
    }
// Website Development
    public function webdevelopment(){
    SEOMeta::setTitle('Web Developer Grand Rapids | Web Development Companies in Michigan',false);
    SEOMeta::setDescription('Looking for ace web development companies in Michigan? Call MavenUp Creatives for web development services in Ann Harbor and Grand Rapids, MI.');    
    SEOMeta::setRobots('noindex, nofollow');    
        return view('websiteDevelopment.website_development');
    }
    public function wordpress(){
    SEOMeta::setTitle('WordPress Developer Michigan | WordPress Grand Rapids',false);
    SEOMeta::setDescription('MavenUp Creatives development team works to improve or design new clean, functional and SEO Friendly WordPress Website for your business.');      
    SEOMeta::setRobots('noindex, nofollow');
        return view('websiteDevelopment.wordpress');
    }
    public function wix(){
    SEOMeta::setTitle('Wix Developer Michigan | Wix Grand Rapids',false);
    SEOMeta::setDescription('MavenUp Creatives development team works to improve or design new clean, functional and SEO Friendly WordPress wix for your business.');        
    SEOMeta::setRobots('noindex, nofollow');
        return view('websiteDevelopment.wix');
    }    
    public function joomla(){
    SEOMeta::setTitle('Joomla Developer Michigan | Joomla Grand Rapids',false);
    SEOMeta::setDescription('MavenUp Creatives development team works to improve or design new clean, functional and SEO Friendly Joomla Website for your business.');   
    SEOMeta::setRobots('noindex, nofollow');     
        return view('websiteDevelopment.joomla');
    }
    public function drupal(){
    SEOMeta::setTitle('Drupal Developer Michigan | Drupal Grand Rapids',false);
    SEOMeta::setDescription('MavenUp Creatives development team works to improve or design new clean, functional and SEO Friendly drupal Website for your business.');  
    SEOMeta::setRobots('noindex, nofollow');      
        return view('websiteDevelopment.drupal');
    }         
    
    public function cakephp(){
    SEOMeta::setTitle('Hire CakePHP Michigan | CakePHP Developer Detroit, MI',false);
    SEOMeta::setDescription('MavenUp Creatives is the leading CakePHP development company in Michigan. Contact us to hire the best CakePHP Developers at affordable rates.');      
    SEOMeta::setRobots('noindex, nofollow');   
        return view('websiteDevelopment.cakephp');
    }
    public function dotnet(){
    SEOMeta::setTitle('Hire .NET Michigan | .NET Developer Detroit, MI',false);
    SEOMeta::setDescription('MavenUp Creatives is the leading .NET development company in Michigan. Contact us to hire the best .NET Developers at affordable rates.');        
    SEOMeta::setRobots('noindex, nofollow'); 
        return view('websiteDevelopment.dot-net');
    }
    
    
    
    
    public function cms(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');       
        return view('websiteDevelopment.cms');
    } 
    
    public function language(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('websiteDevelopment.language');
    } 
    
    public function framework(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('websiteDevelopment.framework');
    } 
    
    public function contact(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('contact');
    }
    
     public function industries(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('industries');
    }
     public function google5ebfd155bb9f7e32(){
        return view('google5ebfd155bb9f7e32');
    }
   
//webApplication 
     public function csd(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('webApplication.csd');
    }
     
     public function cmssystem(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('webApplication.cmssystem');
    }
     
     public function socialnetworking(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('webApplication.socialnetworking');
    }
    
     public function customerp(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('webApplication.customerp');
    }
   
   
        
// Mobile Applications

    public function mobileapplication(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('mobileApplication.mobile_applications');
    }
    public function iphone(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('mobileApplication.iphone');
    }
    public function android(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('mobileApplication.android');
    }
    public function hybrid(){
    SEOMeta::setTitle('CMS Michigan | CMS Website Development | CMS Website Design',false);
    SEOMeta::setDescription('MavenUp Creatives offers professional Content Management System Development. Control the content of your website with our Custom CMS Development solutions.'); 
    SEOMeta::setRobots('noindex, nofollow');          
        return view('mobileApplication.hybrid');
    }
// E-Commerce
    public function ecommerce(){
    SEOMeta::setTitle('Ecommerce Web Design Detroit, Michigan | Magento Developers MI',false);
    SEOMeta::setDescription('Looking for E-commerce website developers in Michigan? Get your shopping store website developed by MavenUp Creatives Magento & eCommerce Developers.');  
    SEOMeta::setRobots('noindex, nofollow');      
        return view('ecommerce.ecommerce_portals');
    }
    public function bigcommerce(){
    SEOMeta::setTitle('Ecommerce Web Design Detroit, Michigan | Magento Developers MI',false);
    SEOMeta::setDescription('Looking for E-commerce website developers in Michigan? Get your shopping store website developed by MavenUp Creatives Magento & eCommerce Developers.');  
    SEOMeta::setRobots('noindex, nofollow');          
        return view('ecommerce.bigcommerce');
    }
    
     public function magento(){
    SEOMeta::setTitle('Ecommerce Web Design Detroit, Michigan | Magento Developers MI',false);
    SEOMeta::setDescription('Looking for E-commerce website developers in Michigan? Get your shopping store website developed by MavenUp Creatives Magento & eCommerce Developers.');  
    SEOMeta::setRobots('noindex, nofollow');          
        return view('ecommerce.magento');
    }
    
     public function shopify(){
    SEOMeta::setTitle('Ecommerce Web Design Detroit, Michigan | Magento Developers MI',false);
    SEOMeta::setDescription('Looking for E-commerce website developers in Michigan? Get your shopping store website developed by MavenUp Creatives Magento & eCommerce Developers.');  
    SEOMeta::setRobots('noindex, nofollow');          
        return view('ecommerce.shopify');
    }
    
    
    
     public function woocommerce(){
    SEOMeta::setTitle('Ecommerce Web Design Detroit, Michigan | Magento Developers MI',false);
    SEOMeta::setDescription('Looking for E-commerce website developers in Michigan? Get your shopping store website developed by MavenUp Creatives Magento & eCommerce Developers.');  
    SEOMeta::setRobots('noindex, nofollow');          
        return view('ecommerce.woocommerce');
    }
    
    
// Language

    public function php(){
        SEOMeta::setTitle('Illustration | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');        
        return view('websiteDevelopment.php');
    }
    
    public function angularjs(){
    SEOMeta::setTitle('Hire AngularJS Michigan | AngularJS Developer Detroit, MI',false);
    SEOMeta::setDescription('MavenUp Creatives is the leading AngularJS development company in Michigan. Contact us to hire the best AngularJS Developers at affordable rates.'); 
    SEOMeta::setRobots('noindex, nofollow');        
        return view('websiteDevelopment.angular-js');
    }
    
    public function java(){
        SEOMeta::setTitle('Illustration | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');        
        return view('websiteDevelopment.java');
    }
    
    public function javascript(){
        SEOMeta::setTitle('Illustration | MavenUp Creatives',false);
        SEOMeta::setDescription('MavenUp Creatives stands with you to fulfill your digital marketing goals, and to make any “Business a Brand” across the United States of America…!!');  
        SEOMeta::setRobots('noindex, nofollow');        
        return view('websiteDevelopment.javascript');
    }

//Frameworks

public function laravel(){
    SEOMeta::setRobots('noindex, nofollow');
        return view('websiteDevelopment.laravel');
    }
    
    
    public function codeigniter(){
        SEOMeta::setRobots('noindex, nofollow');
        return view('websiteDevelopment.codeigniter');
    }
    
    public function zend(){
        SEOMeta::setRobots('noindex, nofollow');
        return view('websiteDevelopment.zend');
    }

    public function get_ip()
    {
    // print_r('inside');die;
    $ip=$_SERVER['REMOTE_ADDR'];
    $url = 'http://www.geoplugin.net/json.gp?ip='.$ip;
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    $contents = curl_exec($ch);
    $visitor_info = json_decode($contents, true);
    $country = $visitor_info['geoplugin_countryName'];
    $countryCode = $visitor_info['geoplugin_countryCode'];
    $city = $visitor_info['geoplugin_city'];
    print_r($countryCode);
    }


}
