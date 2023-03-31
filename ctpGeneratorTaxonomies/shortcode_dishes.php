<?php
    class Shortcode{

    public function showAllDishesPostType(){
        add_shortcode( 'dishes_list', 'shortcode_dishes_post_type' );
        function shortcode_dishes_post_type(){
          $atts='';
          $atts = shortcode_atts( array(
              'type' => 'dishes_post_type',
              'posts_per_page' => '3',
          ), $atts );
      
          $paged=get_query_var('paged') ? get_query_var('paged'):1;
      
          $query = new WP_Query( array(
          'post_type' => $atts['type'],
          'posts_per_page' => $atts['posts_per_page'],
          'paged' => $paged
          ));

      
          $output='';
          if ( $query->have_posts() ) :
              $output .= '<div class="dishes_container">';
              $output .= '<div class="row">';
              while ( $query->have_posts() ) : $query->the_post();
                $excerpt = get_the_excerpt();
                $trimmed_excerpt = wp_trim_words($excerpt, 20);

                $output .= '<div class="col-lg-4 mt-lg-0 mt-md-4">';
                $output .= '    <div class="card pt-3">';
                $output .= '        <a href="' . get_the_permalink() . '" class="text-center">'.get_the_post_thumbnail().'</a>';
                $output .= '        <div class="card-body">';
                $output .= '            <h5 class="card-title"><a href="' . get_permalink() .' " class="nav-link p-0">' . get_the_title() . '</a></h5>';
                $output .= '            <p class="card-text">' . $trimmed_excerpt . '</p>';
                $output .= '            <div class="text-center">';
                $output .= '                <a href="' . get_the_permalink() . '" class="btn btn-primary">View Post</a>';
                $output .= '            </div>';
                $output .= '        </div>';
                $output .= '    </div>';
                $output .= '</div>';
              endwhile;
              $output .= '   </div>';
              $output .= '  </div>';
              wp_reset_postdata();
          else :
              $output = '<p>No custom post types found.</p>';
          endif;
      
          if($query->max_num_pages > 1 && is_page()){
              $output .= '<div class="prev-next-posts d-flex justify-content-center mt-3">';
              $output .= '<div call="nav-previous">';
              $output .= get_previous_posts_link(__('<button class="btn">Previous</button>'));
              $output .= '</div>';
              $output .= '<div class="next-posts-link">';
              $output .= get_next_posts_link(__('<button class="btn">Next</button>'), $query->max_num_pages);
              $output .= '</div>';
              $output .= '</div>';
          }
          return $output;
        }
    }

    public function showOnePostInFront(){
        add_shortcode( 'showOnePost', 'showingOnePost' );
        function showingOnePost(){
            $atts='';
            $atts = shortcode_atts( array(
                'type' => 'dishes_post_type',
                'posts_per_page' => '1',
            ), $atts );

            $query = new WP_Query( array(
                'post_type' => $atts['type'],
                'posts_per_page' => $atts['posts_per_page'],
                'order'=>'ASC',
            ));
            $output='';
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    $output .= '<div class="col-lg-6 col-md-12 col-sm-12">';
                    $output .= '    <h3 class="text-capitalize text-lg-start text-md-center">the best meals</h3>';
                    $output .= '    <h1 class="text-uppercase fw-bold text-lg-start text-md-center"><a href="' . get_the_permalink() . '" class="link-posts">' . get_the_title() . '</a></h1>';
                    $output .= '    <div class="text-center">';
                    $output .= '        <a href="' . get_the_permalink() . '"><img src="'.get_bloginfo('template_url').'/images/index1.jpg" class="img-fluid"></a>';
                    $output .= '    </div>';
                    $output .= '</div>';
                    $output .= '<div class="col-lg-6 col-md-12 col-sm-12">';
                    $output .= '    <div class="text-center d-none d-lg-block">';
                    $output .= '        <a href="' . get_the_permalink() . '"><img src="'.get_bloginfo('template_url').'/images/index3.jpg" class="img-fluid"></a>';
                    $output .= '        <p class="fs-5 mt-5">' . get_the_content() . '</p>';
                    $output .= '    </div>';
                    $output .= '    <div class="text-center d-none d-sm-block d-md-block d-lg-none ">';
                    $output .= '        <a href="' . get_the_permalink() . '"><img src="'.get_bloginfo('template_url').'/images/index3.jpg" class="img-fluid"></a>';
                    $output .= '    </div>';
                    $output .= '</div>';
                endwhile;
                wp_reset_postdata();
            else :
                $output = '<p>No custom post types found.</p>';
            endif;
            return $output;
        }
    }

    public function showDishesInfront(){
        add_shortcode( 'showPostsFront', 'showDishesInfront' );
        function showDishesInfront(){
            $atts='';
            $atts = shortcode_atts( array(
                'type' => 'dishes_post_type',
                'posts_per_page' => '4',
            ), $atts );

            $query = new WP_Query( array(
                'post_type' => $atts['type'],
                'posts_per_page' => $atts['posts_per_page'],
            ));

            $output='';
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    $output .= '  <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4">';
                    $output .= '    <div class="restaurant-menu-item d-flex">';
                    $output .= '        <div class="row">';
                    $output .= '            <div class="col-xxl-6 col-xl-4 col-lg-6 col-md-6 col-sm-12">';
                    $output .= '                <div class="item-image text-center">';
                    $output .= '                   <a href="' . get_the_permalink() . '">'.get_the_post_thumbnail().'</a>';
                    $output .= '                </div>';
                    $output .= '            </div>';
                    $output .= '            <div class="col-xxl-6 col-xl-8 col-lg-6 col-md-6 col-sm-12 ">';
                    $output .= '                <div class="item-content ps-3">';
                    $output .= '                    <h2 class="text-uppercase title"><a href="' . get_the_permalink() . '" class="link-posts">' . get_the_title() . '</a></h2>';
                    $output .= '                    <p class="description">' . get_the_excerpt() . '</p>';
                    $output .= '                    <h4 class="price">$16</h4>'; 
                    $output .= '                </div>';
                    $output .= '            </div>';
                    $output .= '        </div>';
                    $output .= '    </div>';
                    $output .= '  </div>';
                endwhile;
                wp_reset_postdata();
            else :
                $output = '<p>No custom post types found.</p>';
            endif;
            return $output;
        }
    }

    public function widgetCustomPostTypes(){

        add_shortcode( 'taxonomieWidget', 'widget' );
        function widget(){
            $taxonomy = get_terms(array(
                'taxonomy'=>'country',
                'hide_empty' => true,));

            foreach ( $taxonomy as $term ) {
                $args =array(
                    'post_type' => 'dishes_post_type',
                    'posts_per_page' => '1',
                    'tax_query' => array(
                        array(
                            'taxonomy'=>'country',
                            'field'=>'slug',
                            'terms'=>$term->name
                        )
                    )
                );
                $query = new WP_Query( $args );
                echo '<div>';
                echo '  <h5>'.$term->name.'</h5>';
                echo '  <ul class="list-group mb-4">';
                 if($query->have_posts()){
                     while($query->have_posts()) : $query->the_post();
                         $excerpt = get_the_excerpt();
                         $trimmed_excerpt = wp_trim_words($excerpt, 15);
                         echo '  <li class="list-group-item">';
                         echo '      <h6><a href="' . get_the_permalink() . '" class="link-posts">' . get_the_title() . '</a></h6>';
                         echo '      <p>' . $trimmed_excerpt . '</p>';
                         echo '  </li>';
                     endwhile;
                 } else {

                      echo 'no tiene<br/>';
                 }
                 echo '  </ul>';
                 echo '</div>';
                wp_reset_query();
            }
        }
        
    }


   
  }