<?php

if(function_exists('get_field')):
    // Product Summary
    if( have_rows('product_summary') ): ?>
        <section class="product-summary">
            <?php while( have_rows('product_summary') ): the_row(); 

                // Get sub field values.
                $duration = get_sub_field('duration');
                $difficulty = get_sub_field('difficulty_level');
                $age_range = get_sub_field('age_range');
                $min_weight = get_sub_field('minimum_weight');
                $price = get_sub_field('price');

                ?>
               
                    <ul class="col-01">
                        <li>Duration: <?php echo $duration ?>h</li>
                        <li>Difficulty: <?php echo $difficulty ?></li>
                        <li>Age Range: <?php echo $age_range ?></li>
                    </ul>

                    <ul class="col-02">
                        <li>Minimum Weight: <?php echo $min_weight ?>lbs</li>
                        <li>Price: $<?php echo $price ?></li>
                    </ul>

            <?php endwhile; ?>
        </section> <!-- end product-summary -->
    <?php endif;?>

    <!-- Book now CTA -->
    <div class="book-btn"><a href="#wc-bookings-booking-form">Book Now</a></div>

    <!-- Product Description -->
    <?php if( have_rows('product_description') ): ?>
        <?php while( have_rows('product_description') ): the_row(); 

            // Get sub field values.
            $overview = get_sub_field('product_overview');?>

            <section class="overview-paragraph">
                <h2>Overview</h2>
                <p><?php echo $overview ?></p>
            </section>

                <!-- Trip Highlight Repeater Field -->
                <?php if( have_rows('trip_highlights') ): ?>
                    <section class="highlights">
                        <p>Trip Highlights</p>
                        <ul class="highlights">
                        <?php while( have_rows('trip_highlights') ): the_row(); 

                        // Get sub field values.
                        $highlight = get_sub_field('one_highlight');?>
                        
                        <li><?php echo $highlight?></li>
                        
                        <?php endwhile; ?>
                        </ul>
                    </section>
                <?php endif; ?> <!-- End trip_highlights -->

            <!-- What's Included Group Field -->
            <section class="whats-included">
                <?php if( have_rows('whats_included') ): ?>
                    <h2>What's Included</h2>
                    <?php while( have_rows('whats_included') ): the_row(); 

                    // Get sub field values.
                    $included_summary = get_sub_field('included_summary');?>
                    
                    <p><?php echo $included_summary?></p>

                        <!-- Included Gear -->
                        <?php if( have_rows('included_gear') ): ?>
                            <section class="gear">
                                <p>Gear</p>
                                <ul class="gear-items">
                                <?php while( have_rows('included_gear') ): the_row(); 
                                
                                $gear = get_sub_field('gear');?>
                
                                <li><?php echo $gear?></li>
                            
                                <?php endwhile; ?>
                                </ul>
                            </section>
                        <?php endif; ?> <!-- End Included Gear -->
                        
                        <!-- Included Lunch -->
                            <?php if( have_rows('included_lunch') ): ?>
                            <section class="lunch">
                                <p>Lunch</p>
                                <ul class="lunch-items">
                                <?php while( have_rows('included_lunch') ): the_row(); 
                                
                                $lunch = get_sub_field('lunch_item');?>
                
                                <li><?php echo $lunch?></li>
                            
                                <?php endwhile; ?>
                                </ul>
                            </section>
                        <?php endif; ?> <!-- End Included Lunch -->
                    
                    <?php endwhile; ?>
                <?php endif; ?> 
            </section><!-- End What's Included -->
        <?php endwhile; ?>
    <?php endif; // End product_description

    get_template_part( 'template-parts/testimonials', 'none' ); ?>


    <!-- Itinerary -->
    <?php if( have_rows('product_itinerary') ): ?>
        <section class="itinerary">
        <h2>Itinerary</h2>
        <?php while( have_rows('product_itinerary') ): the_row(); ?>

        <!-- Morning Trip -->
            <?php if( have_rows('morning_trip') ): ?>
                <section class="morning-trip">
                    <p>Morning Trip</p>
                    <ul>
                        <?php while( have_rows('morning_trip') ): the_row(); 

                        $time = get_sub_field('time');
                        $activity = get_sub_field('activity');?>

                        <li><?php echo $time?> | <?php echo $activity?></li>
                        <hr class="vertical-line">

                        <?php endwhile; ?>
                    </ul>
                </section> <!-- end morning-trip -->
            <?php endif;

            // Afternoon Trip
            if( have_rows('afternoon_trip') ): ?>
                <section class="afternoon-trip">
                    <p>Afternoon Trip</p>
                    <ul>
                        <?php while( have_rows('afternoon_trip') ): the_row(); 

                        $time = get_sub_field('time');
                        $activity = get_sub_field('activity');?>

                        <li><?php echo $time?> | <?php echo $activity?></li>
                        <hr class="vertical-line">

                        <?php endwhile; ?>
                    </ul>
                </section> <!-- end afternoon-trip -->
            <?php endif;
            

        endwhile; ?>
        </section> <!-- end product-itinerary -->
    <?php endif; 

endif; // end if(function_exists) ?>



