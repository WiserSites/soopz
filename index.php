<?php
/* Template Name: editor */
get_header(); 
?>

        <div class="twelve columns word-count" style="margin: 15% auto 25% 10%;">
            <h4>Quick start</h4>
            <div class="nine columns soopz-input">
                <textarea onkeyup="textAreaAdjust(this)" name="content" class="form-control" type="text" placeholder="Type your social message..."></textarea>
            </div>
            <div class="two columns counters">
                <ul class="counters">
                    <li class="char-count">Characters <span class="chars"></span></li>
                    <li class="word-count">Words<span class="words"></span></li>
                    <li class="par-count">Paragraphs<span class="paras"></span></li>
                    <!--<li class="dot-dot-dot"><span class="ion-more"></span></li>-->
                </ul>
            </div>
            <div id="social-buttons" class="ten columns">
                <?php
                    if(function_exists('social_warfare')):
                        social_warfare();
                    endif;
                ?>
            </div>
        </div>
        <div class="twelve columns" style="text-align:center;margin:0 auto;">
            <p class="alert" style="text-align:center;"><strong>Thanks for stopping by!</strong> This site is strictly a <em>beta</em> project and not in full production yet. So please excuse any <span class="ion-bug"></span>s.</p>
        </div>
<?php get_footer(); ?>