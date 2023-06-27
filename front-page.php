<?php get_header() ?>
<section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Best Seller</h2>
          <span></span>
          <a href="#">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="bestseller">

           <?php $bestseller = new Wp_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
              array(
                'key' => 'category',
                'value' => 'Best Seller',
                'compare' => 'LIKE'
              )
            )
           )) ?>

          <?php if($bestseller->have_posts()) : while($bestseller->have_posts()) :  $bestseller->the_post() ?>
          <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">
                <a href="<?php the_permalink();?>"> 
                <h4><?php the_title(); ?></h4>
                </a> 
                </div>
                <div class="price">
                  <p>Start at <br /><span><?php the_field('price') ?></span></p>
                  
                </div>
              </div>
              <button class="btnAddtoCart">Add to Cart</button>
            </div>
            <?php endwhile;
            else:
              echo "No more Jollibee for Youu:(";
            endif;
            wp_reset_postdata();
            ?>
         
          </div>
        </div>
      </div>
    </section>
   
    <section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Chicken Joy</h2>
          <span></span>
          <a href="<?php echo site_url('/chicken-bojoy')?>">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="chickenjoy">

           <?php $bestseller = new Wp_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
              array(
                'key' => 'category',
                'value' => 'Chicken Joy',
                'compare' => 'LIKE'
              )
            )
           )) ?>

          <?php if($bestseller->have_posts()) : while($bestseller->have_posts()) :  $bestseller->the_post() ?>
          <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">
                <a href="<?php the_permalink();?>"> 
                <h4><?php the_title(); ?></h4>
                </a> 
                </div>
                <div class="price">
                  <p>Start at <br /><span><?php the_field('price') ?></span></p>
                  
                </div>
              </div>
            </div>
            <?php endwhile;
            else:
              echo "No more Jollibee for Youu:(";
            endif;
            wp_reset_postdata();
            ?>
         
          </div>
        </div>
      </div>
    </section>

    <section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Yum Burger</h2>
          <span></span>
          <a href="<?php echo site_url('/yum-burger')?>">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="burger">

           <?php $bestseller = new Wp_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
              array(
                'key' => 'category',
                'value' => 'Yum Burger',
                'compare' => 'LIKE'
              )
            )
           )) ?>

          <?php if($bestseller->have_posts()) : while($bestseller->have_posts()) :  $bestseller->the_post() ?>
          <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">
                <a href="<?php the_permalink();?>"> 
                <h4><?php the_title(); ?></h4>
                </a> 
                </div>
                <div class="price">
                  <p>Start at <br /><span><?php the_field('price') ?></span></p>
                  
                </div>
              </div>
            </div>
            <?php endwhile;
            else:
              echo "No more Jollibee for Youu:(";
            endif;
            wp_reset_postdata();
            ?>
         
          </div>
        </div>
      </div>
    </section>

    <section class="food py--3">
      <div class="container">
        <div class="food__header flex justify--between align--center">
          <h2>Breakfast</h2>
          <span></span>
          <a href="<?php echo site_url('/breakfast')?>">View All</a>
        </div>
      </div>
      <div class="container with--overflow">
        <div class="food__wrapper">
          <div class="food__slider" id="breakfast">

           <?php $bestseller = new Wp_Query(array(
            'post_type' => 'foods',
            'meta_query' => array(
              array(
                'key' => 'category',
                'value' => 'Breakfast',
                'compare' => 'LIKE'
              )
            )
           )) ?>

          <?php if($bestseller->have_posts()) : while($bestseller->have_posts()) :  $bestseller->the_post() ?>
          <div class="food__slider__wrapper">
              <div class="inner">
                <figure>
                  <img src="<?php echo get_field('image') ?>" alt="" />
                </figure>
                <div class="content bg--accent text--center clr--light">
                <a href="<?php the_permalink();?>"> 
                <h4><?php the_title(); ?></h4>
                </a> 
                </div>
                <div class="price">
                  <p>Start at <br /><span><?php the_field('price') ?></span></p>
                  
                </div>
              </div>
            </div>
            <?php endwhile;
            else:
              echo "No more Jollibee for Youu:(";
            endif;
            wp_reset_postdata();
            ?>
         
          </div>
        </div>
      </div>
    </section>
<div class="cart">
  <h3>cart</h3>
  <div class="cart__wrapper">
  <!-- <div class="cartItem"> 
    <img src="http://localhost/jollibee/wp-content/uploads/2023/06/bfast-2.png" alt="">
    <div>
    <h3>Jollibee Title one</h3>
    <p>Php 120.00</p>
  </div>
  <button><i class="fas fa-times"></i></button>
  </div> -->


  </div>
</div>
   
<?php get_footer() ?>

