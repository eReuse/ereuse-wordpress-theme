<?php
/**
 * The main template file
 *
 * @package bootstrap-basic
 */

get_header();

?>
<section> <!-- presentation web -->
    <article class="jumbotron" id="banner-intro">
        <div class="container text-center">
            <h1>Reuse electronics ensuring final recycling</h1>
			<a class="btn btn-primary" target="_blank" href="files/2018/10/eReuse-org-Brochure.pdf">Download brochure</a
        </div>
    </article>
    <article class="well">
        <h2 id="second-slogan" class="container text-center">
            Our mission is the transition to a collaborative and circular consumption of electronics
        </h2>
    </article>
    <article class="container" id="what-we-do">
        <header class="text-center">
            <h2>
                We bootstrap local and autonomous platforms for reusing electronics
            </h2>
        </header>
        <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-offset-0 col-lg-3 margin-v-sm">
                <img src="<?php print get_stylesheet_directory_uri() . '/images/software.png' ?>"
                     class="img-responsive">
                <a href="software" class="showcase"><h4><i class="fa fa-code"></i>&nbsp;Open-Source software</h4></a>
                <p>Device Management System for reusing and refurbishing, erasing hard-drives, and diagnosing
                    components.</p>
                <p>
                    <a href="software">
                        Know more
                    </a>
                </p>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 margin-v-sm">
                <img src="<?php print get_stylesheet_directory_uri() . '/images/traceability-header-3.jpg' ?>"
                     class="img-responsive">
                <h4><i class="fa fa-globe"></i>&nbsp;Global traceability</h4>
                <p>Tracking systems at component level that can provide global coverage by connecting with
                    eReuse.org servers.</p>
            </div>
            <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-offset-0 col-lg-3 margin-v-sm">
                <img src="<?php print get_stylesheet_directory_uri() . '/images/open-data.svg' ?>"
                     class="img-responsive">
                <h4><i class="fa fa-bar-chart"></i>&nbsp;Research & analytics</h4>
                <p>Global Open-Data Store with metrics e.g. the social impact of reusing, durability of components,
                    and tracking.</p>
                <!--<p><a href="#">Working...</a></p>-->
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 margin-v-sm">
                <img src="<?php print get_stylesheet_directory_uri() . '/images/licenses.png' ?>"
                     class="img-responsive">
                <h4><i class="fa fa-file-text-o"></i>&nbsp;Base licenses for the commons</h4>
                <p>Base licenses and deed of assignment templates for transferring devices with the circular values of
                    eReuse.org.</p>
                <!--<p><a href="software">Know more</a></p>-->
            </div>
            <!--<div class="col-sm-6 col-md-4 card padding-0 col-sm-offset-3 col-md-offset-0">
        <img src="<?php /*print get_stylesheet_directory_uri() . '/images/licenses.png' */ ?>">
        <h4><i class="fa fa-handshake-o"></i>&nbsp;Shared procedures</h4>
        <p>Device Management System for reusing, erasing hard-drives, and tracking at component level.</p>
        <p><a href="software">Know more</a></p>
      </div>-->
        </div>
		<div class="row text-center">
			<a class="btn btn-primary" href="demo">Try the software</a>
		</div>
    </article>
    <article class="container text-center">
        <h2 class="text-center">
            Reuse fosters circular economy, boosts digital inclusion, and reduces e-waste
        </h2>
        <p>
            See how our open-software promotes reuse
        </p>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <iframe src="https://player.vimeo.com/video/145730246"
                        width="100%"
                        height="360"
                        frameborder="0"
                        webkitallowfullscreen
                        mozallowfullscreen
                        allowfullscreen></iframe>
            </div>

        </div>

    </article>
    <!--<div class="container panel panel-default">
      <div class="panel-heading">
        <div class="panel-title">Open-Source Software <i class="fa fa-code fa-lg pull-right"></i></div>
      </div>
      <div class="panel-body">
        <p>
          We develop a modern device Management System for reusing, with tools that erase hard-drives, register
          components and track devices at component level.
        </p>
      </div>
    </div>-->
    <article class="well" id="community">
        <h2 class="container text-center">Community</h2>
        <div class="container">
            <p>
                We are a community of refurbishers, reuse advocates, social inclusion organizations, recycling
                companies, public
                administration, university service-learning programs, charity donation programs, and IT companies.
            </p>
            <div class="row text-center">
                <figure class="col-sm-6 col-md-4 margin-v-sm">
                    <a><img class="picture-md"
                                            src="<?php print get_stylesheet_directory_uri() . '/images/solidanca-logo.svg' ?>"></a>
                    <figcaption>
                        Refurbishers, like <a href="http://www.solidanca.cat" target="_blank">Solidança</a>, use the software to prepare and manage devices to be traded or
                        donated, ensuring
                        giver's donation policy, and final disposal.
                    </figcaption>
                </figure>
                <figure class="col-sm-6 col-md-4 margin-v-sm">
                    <a ><img src="<?php print get_stylesheet_directory_uri() . '/images/upc-logo.svg' ?>"
                                    class="picture-md"></a>
                    <figcaption>
                        Each year 500 students from the <a href="https://www.upc.edu" target="_blank">Catalan Polytechnic University</a> cooperate in repairing and
                        installing
                        free software to computers that are donated to NGOs.
                    </figcaption>
                </figure>
                <figure class="col-sm-6 col-md-4 margin-v-sm col-sm-offset-3 col-md-offset-0">
                    <a><img
                                src="<?php print get_stylesheet_directory_uri() . '/images/barcelona-activa-logo.png' ?>"
                                class="picture-md"></a>
                    <figcaption>
                        The <a href="http://ajuntament.barcelona.cat/en/" target="_blank">Barcelona government</a> donates PC to schools and NGOs. The eReuse.org base licenses
                        ensure their correct treatment and facilitate the NGOs and refurbishers to work with them.
                    </figcaption>
                </figure>
            </div>
            <p class="text-right links"><em><a class="btn btn-default" href="members">View more members</a></em><em><a class="btn btn-default" href="partners" style="margin-left: 20px">View more partners</a></em></p>
        </div>
    </article>
    <article class="well">
        <div class="container">
            <div class="row" id="testimonials">
                <div class="col-sm-8">
                    <img src="<?php print get_stylesheet_directory_uri() . '/images/testimonials.jpg' ?>">
                </div>
                <div class="col-sm-4">
                    <h3 class="lead">Our community talks in video about eReuse.org.</h3>
                    <a class="btn btn-primary" href="https://vimeo.com/album/4006288" target="_blank">Watch them on
                        Vimeo&nbsp;<i
                                class="fa fa-vimeo"></i></a>
                </div>
            </div>
        </div>
    </article>
    <article class="container" id="main-objectives">
        <h2 class="text-center">Our main objectives</h2>
        <div class="row text-center">
            <div class="col-sm-6 col-md-4">
                <i class="fa fa-3x fa-child"></i>
                <p>Share stories to communicate the social value of reuse and recycling.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <i class="fa fa-3x fa-money"></i>
                <p>Reduce the cost of refurbishing and reusing by developing open-data and open-source
                    tools and services.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <i class="fa fa-3x fa-pie-chart"></i>
                <p>Develop open data of electronic components to compute circularity metrics, like the
                    extended durability of devices.
                </p>
            </div>
            <div class="col-sm-6 col-md-4">
                <i class="fa fa-3x fa-pagelines"></i>
                <p>Prevent illegal export of WEEE by promoting reuse quality standards.</p>
            </div>

            <div class="col-sm-6 col-md-4">
                <i class="fa fa-3x fa-flag-o"></i>
                <p>Develop open data about reusing and recycling traceability to build confidence in donors
                    and governments.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <i class="fa fa-3x fa-line-chart"></i>
                <p>Promote electronic refurbishing and reusing by exchanging and creating new business models
                    around circular economy.</p>
            </div>
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <i class="fa fa-3x fa-map-pin"></i>
                <p>Ensure reusing and recycling by providing traceability at component level.</p>
            </div>
        </div>
        <h3 style="display: inline-block;">Do you want to know more?</h3>
		<a class="btn btn-default" href="publications" style="display: inline-block; margin-left: 10px;">Read our publications</a>
    </article>
    <article class="panel panel-default margin-v-b-0" id="keep-updated">
        <div class="panel-heading">
            <h2 class="panel-title text-center">Keep updated</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                <form action="//ereuse.us12.list-manage.com/subscribe/post?u=64100fd47e04e01275e6fbd9b&amp;id=227e773863"
                      method="post"
                      id="mc-embedded-subscribe-form"
                      name="mc-embedded-subscribe-form"
                      class="validate subscribe-form col-md-4 col-md-offset-1"
                      target="_blank"
                      novalidate>
                    <div class="input-group">
            <span class="mc-field-group">
              <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL"
                     placeholder="Write an e-mail">
            </span>
                        <span class="input-group-btn">
              <input type="submit"
                     value="Subscribe"
                     name="subscribe"
                     id="mc-embedded-subscribe"
                     class="button btn btn-primary">
            </span>
                        <span id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </span>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <span style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text"
                     name="b_64100fd47e04e01275e6fbd9b_227e773863"
                     tabindex="-1"
                     value="">
            </span>
                    </div>
                </form>
                <div class="text-center col-md-6">
                    <ul class="list-inline">
                        <li>
                            <a class="twitter-follow-button"
                               href="https://twitter.com/eReuseOrg"
                               data-size="large"></a>
                        </li>
                        <li><a href="https://vimeo.com/ereuseorg" target="_blank"><i
                                        class="fa fa-vimeo-square fa-3x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    <article class="container margin-v-t-0 text-center" id="collaborate">
        <h2>Collaborate and join &nbsp;<i class="fa fa-handshake-o"></i></h2>
        <p>
            We welcome any initiative focused on refurbishing, reusing, and promoting Zero Waste on electronic equipment
            in general.
        </p>
        <div class="row">
            <div class="col-md-4">
                <h4>Reporting data</h4>
                <p>Open information is freedom. Report non-personal device metadata
                    to evaluate product circularity, social impact, and appropriate recycling.</p>
            </div>
            <div class="col-md-4">
                <h4>Enhance the resources</h4>
                <p>
                    Share your skills and pick up a few new ones along the way by writing open-source code, testing,
                    providing support, translating, among others.
                </p>
            </div>
            <div class="col-md-4">
                <h4>Promote a local circuit</h4>
                <p>
                    Circuits are communities that exchange devices. Empower them or create new ones using our know-how
                    and tools.
                </p>
            </div>
        </div>
        <div class="text-center margin-v-sm">
            <a class="btn btn-primary" href="mailto:hello@ereuse.org">
                Send us an e-mail
				<p style="margin-top: 5px; margin-bottom: 0; text-transform: lowercase;">hello@ereuse.org</p>
            </a>
        </div>
    </article>
    <hr>
    <article class="container">
        <h2 class="text-center">News</h2>
        <div class="row">
            <div class="col-sm-7 col-md-8 col-lg-9">
                <section id="content" class="row site-content">
                    <div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
                        <main id="main" class="site-main" role="main">
                            <?php if (have_posts()) { ?>
                                <?php
                                // start the loop
                                if(have_posts()) {
                                    the_post();

                                    /* Include the Post-Format-specific template for the content.
                                    * If you want to override this in a child theme, then include a file
                                    * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                    */
                                    get_template_part('content', get_post_format());
                                }// end while
                                ?>
                                <div class="text-center">
                                    <a href="/category/news/" class="btn btn-default">See more news</a>
                                </div>
                            <?php } else { ?>
                                <?php get_template_part('no-results', 'index'); ?>
                            <?php } // endif; ?>
                        </main>
                    </div>
                </section>
            </div>
            <aside class="col-sm-5 col-md-4 col-lg-3">
                <a class="twitter-timeline"
                   data-height="400"
                   data-dnt="true"
                   data-theme="dark"
                   href="https://twitter.com/eReuseOrg">eReuseOrg</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </aside>
        </div>
    </article>
</section>


</div>
<?php get_footer(); ?>
