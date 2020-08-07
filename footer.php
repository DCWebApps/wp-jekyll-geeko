<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-jekyll-geeko
 */

?>


        <footer>
            <div class="container beautiful-jekyll-footer">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  
                    <!--<ul class="list-inline text-center footer-links">

                    <li>
                      <a href="https://www.facebook.com/{{ site.author.facebook }}" title="Facebook">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://github.com/{{ site.author.github }}" title="GitHub">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://twitter.com/{{ site.author.twitter }}" title="Twitter">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://reddit.com/u/{{ site.author.reddit }}" title="Reddit">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-reddit fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://plus.google.com/{{ site.author.google-plus }}" title="Google+">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="mailto:{{ site.author.email }}" title="Email me">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://linkedin.com/in/{{ site.author.linkedin }}" title="LinkedIn">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://www.xing.com/profile/{{ site.author.xing }}" title="Xing">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-xing fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://stackoverflow.com/users/{{ site.author.stackoverflow }}" title="StackOverflow">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://www.snapchat.com/add/{{ site.author.snapchat }}" title="Snapchat">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-snapchat-ghost fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://www.instagram.com/{{ site.author.instagram }}" title="Instagram">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://www.youtube.com/{{ site.author.youtube }}" title="YouTube">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="https://open.spotify.com/user/{{ site.author.spotify }}" title="Spotify">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-spotify fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="tel:{{ site.author.telephone }}" title="Phone">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                    </li>

                            <li>
                                  <a href="{{ '/feed.xml' | prepend: site.baseurl }}" title="RSS">
                                    <span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                                    </span>
                                  </a>
                            </li>

                  </ul>-->
                  <p class="copyright text-muted">
                            Author: <?php the_author(); ?> 
                            <!--&nbsp;&bull;&nbsp;
                            
                            &nbsp;&bull;&nbsp;-->
                            
                            
                      </p>
                          <!-- Please don't remove this, keep my open source work credited :) -->
                          <p class="theme-by text-muted">
                            Theme by Moreplavec, <a href="http://moreplavec.cz/wp-jekyll">wp-jekyll</a>
                          </p>
                </div>
              </div>
            </div>
          </footer>



<?php wp_footer(); ?>

</body>
</html>
