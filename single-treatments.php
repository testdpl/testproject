<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$stylePath = "styles/css/streatment.min.css";
//$headerClass="overview";
include(locate_template('header.php'));
 ?>
 



            <?php 
				//Main treatment option page attributes START 
                $main_image = get_field('image', 'options');
                $main_enable = get_field('enable', 'options');
                $main_heading1 = get_field('main_heading1', 'options');
                $main_heading2 = get_field('main_heading2', 'options');
				//Main treatment option page attributes END 
				
				
		

		
			if($main_enable)://check wheater options are enabled or not
				if($main_image):
            ?>
                <div class="banner" style="background: url(<?php echo $main_image;?>) top;height: 20%;">
                    <div class="container"><h1><?php echo $main_heading1?$main_heading1:""; ?><span><?php echo $main_heading2?$main_heading2:""; ?></span></h1></div>
                    
                    <!-- <img src="agemd_images/banner.jpg" title="banner"> -->
                </div>
				<?php endif; ?>
			<?php endif; ?>
          
           <!--Main Section-->
			<?php 
				$banner = get_field('main_container')['main_section'];
				$title = $banner['title'];
				$title_2 = $banner['title_2'];
				$banner_text = $banner['text'];
                $banner_image= $banner['image'];
             
				?>

			<!--Main Section-->

                     <!--overview_text Section-->
			<?php 
                $overview_text = get_field('overview_text');                
				$text = $overview_text['text'];
				?>
			<!--overview_text Section-->

            
                     <!--body_parts_section Section-->
			<?php 
                $body_parts_section = get_field('body_parts_section');                              
				$body_parts_section_main_title = $body_parts_section['title'];
				$body_parts_section_title = $body_parts_section_main_title['title'];
				$body_parts_section_title_2 = $body_parts_section_main_title['title_2'];
                $body_parts = $body_parts_section['body_parts'];
                $json_body_parts=json_encode($body_parts,JSON_UNESCAPED_SLASHES);
        
           
				?>
			<!--body_parts_section Section-->

                 
                     <!--top_concerns_section Section-->
			<?php 
                $top_concerns_section = get_field('top_concerns_section');                              
				$top_concerns_section_main_heading = $top_concerns_section['heading'];
				$top_concerns_section_heading_title = $top_concerns_section['title'];
				$top_concerns_section_title_2 = $top_concerns_section['title_2'];
                $top_concerns = $top_concerns_section['top_concerns'];
               $json_top_concerns=json_encode($top_concerns,JSON_UNESCAPED_SLASHES);
            
           
				?>
			<!--top_concerns_section Section-->
                             
                     <!--additional_treatments Section-->
			<?php 
                $additional_treatments = get_field('additional_treatments');                              
				$additional_treatments_main_heading = $additional_treatments['heading'];
				$additional_treatments_heading_title = $additional_treatments['title'];
				$additional_treatments_title_2 = $additional_treatments['title_2'];
                $top_treatments = $additional_treatments['treatments'];
               $json_top_treatments=json_encode($top_treatments,JSON_UNESCAPED_SLASHES);
                
                //echo '<br><pre>';
				//print_r($additional_treatments);
				//print_r($json_top_treatments);
				//exit;
           
				?>



               <div class="banner">
                    <div class="container">
                        <div class="main-heding">
                            <h1>    <?php echo $title;?></h1>
                            <h2><?php echo $title_2;?></h2>
                        </div>
                        <span class="header-line"></span>
                        <div class="main-text">
                            <p>
                               <?php echo $banner_text;?>
                            </p>
                        </div>
                      <div class="banner-image">
                        <img class="" src="<?php echo $banner_image['url']; ?>"/>
                       </div>
                    </div>
                </div>


			<!--additional_treatments Section-->
</header>

 <section class="overview st-overview">
                <div class="body-bg">
                    <svg width="1364px" height="316px" viewBox="0 0 1364 316" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: sketchtool 52.6 (67491) - http://www.bohemiancoding.com/sketch -->
                        <title>2FE2E481-5DA6-411F-9E3C-DE56D02A42CD</title>
                        <desc>Created with sketchtool.</desc>
                        <defs>
                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                <stop stop-color="#CCCCCC" stop-opacity="0.5" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" stop-opacity="0.5" offset="100%"></stop>
                            </linearGradient>
                            <filter x="-3.0%" y="-15.2%" width="106.0%" height="130.5%" filterUnits="objectBoundingBox" id="filter-2">
                                <feGaussianBlur stdDeviation="13" in="SourceGraphic"></feGaussianBlur>
                            </filter>
                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-3">
                                <stop stop-color="#FFFFFF" offset="0%"></stop>
                                <stop stop-color="#FFFFFF" stop-opacity="0" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g id="Deskop" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Main-Treatment" transform="translate(-278.000000, -770.000000)">
                                <g id="BG-Body" transform="translate(310.000000, 800.000000)">
                                    <polygon id="Rectangle" fill="url(#linearGradient-1)" filter="url(#filter-2)" points="0 0 1300 0 1300 256 0 256"></polygon>
                                    <rect id="Rectangle" fill="url(#linearGradient-3)" x="0" y="0" width="1300" height="260"></rect>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="container">
                    <div class="findprovider-cont">
                    
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 label-arrow">
                            Find A Local Provider for <span>CoolSculpting</span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-wrapp">
                            <div class="formcol col-xs-12 col-sm-12 col-md-4 col-lg-4 "><input type="text" placeholder="Tampa, FL *" class="input-fields"></div>
                            <div class="formcol col-xs-12 col-sm-12 col-md-4 col-lg-4 "><input type="text" placeholder="Butt *" class="input-fields"></div>
                            <div class="formcol col-xs-12 col-sm-12 col-md-4 col-lg-4 "><a href="#" class="find-doc-button"><i></i>Search</a></div>
                        </div>
                    </div>
                </div>



                <div class="overview-container">
                    <div class="container">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 over-text">
                            <i class="top-angel"></i>
                            <div class="content-sec">                                             
                            
                                <div class="b-description_readmore js-description_readmore">
                                    <p>
                                        This technology can even be strategically used to improve overall body shape by smoothing out fat pockets and reducing the volume of fat cells in the treatment area. A consultant and certified technician will work with each patient to determine their goals and expectations, creating a customized treatment plan to meet each patients’ desires. CoolSculpting uses Cryolipolisis® to destroy fat cells by lowering the temperature of the treatment area to the point where the fat cells are irreparably damaged. Fat responds to cold at a higher temperature than the other tissues, so while the fat cells are compromised the surrounding tissue remains unharmed.
                                    </p>
                                    <p>
                                        The average cost is approximately $500 per treated area. Areas treated include the forehead, crow’s feet, frown lines, neck bands, between the brows, and the lower face. For the most accurate pricing, consult with your physician to determine the best approach to meet your goals.
                                    </p>                             
                                </div>                                 
                   
                            </div>     
                            <i class="bottom-angel"></i>
                        </div>                       
                    </div>
                </div>
            </section>

            <!--Aging-Treatments-->
            <section class="aging-concerns-block">             
               

                <div class="container"> 

                    <div class="aging-concerns-heading" style="text-align:center;">

                        <img src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/st-circle.jpg"> 
                        <div class="st-heading">
                            <h2>Body</h2><span> <img src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/st-heading-decor.jpg"> </span><h2>Parts</h2>                            
                        </div>

                    </div>

                    <div class="aging-concerns-content">

                        
                        <div class="aging-concerns-box"> 
                            <a href="#agetreatments">
                                <div class="">
                                    <img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/arms.png" alt=""/>
                                </div>

                                <div class="concerns-text">
                                    <span><a href="#">Arms</a></span>
                                </div>
                            </a>
                        </div>

                        <div class="aging-concerns-box">    
                            <a href="#agetreatments">                        
                             <div class="">
                                <img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/back.png" alt=""/>
                            </div>

                            <div class="concerns-text">
                                
                                <span><a href="#">Back</a></span>
                            </div>
                             </a>
                        </div>

                        <div class="aging-concerns-box"> 
                            <a href="#agetreatments">                           
                             <div class="">
                                <img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/body.png" alt=""/>
                            </div>

                            <div class="concerns-text">
                                
                                <span><a href="#">Body</a></span>
                            </div>
                             </a>
                        </div>

                        <div class="aging-concerns-box"> 
                            <a href="#agetreatments">                           
                             <div class="">
                                <img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/neck.png" alt=""/>
                            </div>

                            <div class="concerns-text">
                                
                                <span><a href="#">Neck</a></span>
                            </div>
                             </a>
                        </div>
                       
                     
                    </div>

                </div>

        
            </section>

            <!--Aging-Concerns-->
            <section class="aging-concerns-block" id="agetreatments">
                <div class="concerns-mainconcerns-page">
                    <div class="container">
                        <div class="aging-concerns-heading">
                            <div class="container">
                                <div class="st-heading">
                                    <h2>Top Concerns</h2><span> <img src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/st-heading-decor.jpg"> </span><h2><span>addressed by</span> CoolSculpting</h2>                            
                                </div>
                            </div>
                        </div>
                        <div class="aging-concerns-content">

                            
                            <div class="aging-concerns-box">                            
                                <div class="inner">
                                    <img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/Menopause.svg" alt=""/>
                                </div>

                                <div class="concerns-text">
                                    <div class="Rectangle">&nbsp;</div>
                                    <span><a href="#">Belly Fat</a></span>
                                </div>
                            </div>

                            <div class="aging-concerns-box">                            
                                <div class="inner">
                                    <img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/Hypothyroidism.svg" alt=""/>
                                </div>
                                <div class="concerns-text">
                                    <div class="Rectangle">&nbsp;</div>
                                    <span>Cellulite</span>
                                </div>
                            </div>

                            <div class="aging-concerns-box">                            
                                <div class="inner">
                                    <img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/Weight-Gain.svg" alt=""/>
                                </div>
                                <div class="concerns-text">
                                    <div class="Rectangle">&nbsp;</div>
                                    <span>Weight Gain</span>
                                </div>
                            </div>

                           
                          
                        </div>
                    </div> 
                </div>
               
            </section>

                       <!--Aging-Treatments-->
            <section class="aging-treatments aging-concerns-block">
                
                <div class="container" id="agetreatments">
                    <div class="aging-concerns-heading">
                        <div class="container">
                        <div class="st-heading">
                            <h2>Additional Treatments</h2><span> <img src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/st-heading-decor.jpg"> </span><h2><span>Similar To</span> CoolSculpting</h2>                            
                        </div>
                    </div>
                    </div>

                    <div class="aging-treatments-content">

                       
                            <div class="swiper-container">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide ">

                                            <div class="aging-treatments-block">
                                                <div class="treatments-img-wrapp">
                                                    <a href="#"><img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="agemd_images/treatments-treatment.jpg" alt=""/></a>
                                                </div>
                                                <div class="treatmentsbox-content">
                                                    <i class="athree"></i>
                                                    <div class="treatmentsbox-right">
                                                        <h2><a href="#">Lorem ipsum <span>dolor sit amet</span></a></h2>
                                                        <i></i>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>


                                    <div class="swiper-slide ">

                                            <div class="aging-treatments-block">
                                                <div class="treatments-img-wrapp">
                                                    <a href="#"><img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="agemd_images/treatments-treatment.jpg" alt=""/></a>
                                                </div>
                                                <div class="treatmentsbox-content">
                                                    <i class="athree"></i>
                                                    <div class="treatmentsbox-right">
                                                        <h2><a href="#">Lorem ipsum <span>dolor sit amet</span></a></h2>
                                                        <i></i>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>

                                   <div class="swiper-slide ">

                                            <div class="aging-treatments-block">
                                                <div class="treatments-img-wrapp">
                                                    <a href="#"><img class="lazy" src="http://localhost:8080/ContentWeb/src/wordpress/wp-includes/agemd_images/loader.jpg" data-srcset="agemd_images/treatments-treatment.jpg" alt=""/></a>
                                                </div>
                                                <div class="treatmentsbox-content">
                                                    <i class="athree"></i>
                                                    <div class="treatmentsbox-right">
                                                        <h2><a href="#">Lorem ipsum <span>dolor sit amet</span></a></h2>
                                                        <i></i>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>

                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="arrow-wrap">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                       
                       

                    </div>

                </div>
            </section>
       
               

        </div>



<?php get_footer(); ?>
         
<script>
   var moreLines=true;
</script>
<?php get_footer(); ?>
<!--Load runtime JS for treatment page-->

<script src="<?php echo replaceCdnUrl('scripts/jquery.morelines.min.js');?> "></script>
<script src="<?php echo replaceCdnUrl('plugins/swiper/swiper.min.js');?> "></script>
<script type="text/javascript" src="<?php echo replaceCdnUrl('scripts/BODY_PARTS_MOCK_DATA.json',1); ?>" ></script>
<?php
 if($advertisement=get_field('advertisement')):
	echo'<script>';
	echo $advertisement;
	echo'</script>';
endif; 
 if($advertisement_copy=get_field('advertisement_copy')):
	echo'<script>';
	echo $advertisement_copy;
	echo'</script>';
endif; 
?>

    <script>
    var bodyParts='<?php echo $json_body_parts; ?>';
    var topConcerns'<?php echo $json_top_concerns; ?>';
    var topTreatments'<?php echo $json_top_treatments; ?>';
        function filterData(filterobjectsArray){
            let result = mockBodyPartsData.filter(itemX => filterobjectsArray.includes(itemX.name));
            console.log(result);   
            return result;
        }
        var partsData=filterData(bodyParts);
           console.log(parts);  
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: false,
            autoHeight: true,
            observer: true,
            observeParents: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                  slidesPerView: 3,
                  spaceBetween: 40,
                },
                768: {
                  slidesPerView: 2,
                  spaceBetween: 30,
                },
                480:{
                  slidesPerView: 1,
                  spaceBetween: 10,
                }
              }
        });
    </script>
        <script>
    $(function() {
      $('.js-description_readmore').moreLines({
        linecount: 2, 
        baseclass: 'b-description',
        basejsclass: 'js-description',
        classspecific: '_readmore',    
        buttontxtmore: "",               
        buttontxtless: "",
        animationspeed: 250 
      });
    });
  </script>
