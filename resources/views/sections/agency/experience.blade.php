<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/01/2017
 * Time: 15:15
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Experience</h2>
            <h3 class="section-subheading text-muted">
                <?= \Cryslo\Core\Date::yearsFrom('2011-01-01'); ?>+ years industry experience<br />
                2:1 including Hons - Computer Science degree from <a href="http://bucks.ac.uk/">Buckinghamshire New University</a>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <ul class="timeline">

                {{--<li class="timeline-inverted">--}}
                    {{--<div class="timeline-image">--}}
                        {{--<h4>Be Part--}}
                            {{--<br>Of Our--}}
                            {{--<br>Story!</h4>--}}
                    {{--</div>--}}
                {{--</li>--}}

                <li>
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="images/experience/noqu-240.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>April 2015 - Present</h4>
                            <h4 class="subheading"><a href="<?= secure_url('/lineten') ?>">Lineten</a></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Key developer working directly under the CTO who has 30+ years experience in development</p>
                            <p class="text-muted">Designed & built the payment infrastructure for our flagship product <a href="http://noqu.co.uk/">NOQU</a>, which you can see <a href="https://order.goodearthgroup.co.uk/" target="_blank">here</a></p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-image" style="background-color: #fff;">
                        {{--<img class="img-circle img-responsive" src="images/logo/bm-trada-400.jpg" alt="Crystal Gaming">--}}
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Jan 2014 - March 2015</h4>
                            <h4 class="subheading"><a href="#">IT Contracting / Consulting</a></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Work at various companies including <a href="https://www.engrave-it.uk">Engrave-It</a></p>
                            <p class="text-muted">Remodeled IT infrastructure to streamline processes, built an internal network inc. server to centralise and secure important documents</p>
                            <p class="text-muted">Introduced digital <a href="https://www.xero.com/">accounting</a>, stock and order management and simple to use <a href="https://en-gb.wordpress.org/">wordpress</a> website</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="images/experience/bm-trada-400.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Sept 2012 - Dec 2013</h4>
                            <h4 class="subheading"><a href="https://www.exovabmtrada.com/" target="_blank">BM Trada</a></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Graduated on the 3rd Sept</p>
                            <p class="text-muted">Started work on the 4th Sept</p>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image" style="background-color: #fff7f1">
                        <img class="img-circle img-responsive" src="images/experience/crystal-gaming-800.png" alt="Crystal Gaming">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2008 - 2011</h4>
                            <h4 class="subheading"><a href="#">Crystal Gaming</a></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Designed and created a fully fledged game server control panel, able to install, fully customise and manage your game server, totaling 5 physical machines and 20 virtual machines</p>
                        </div>
                    </div>
                </li>
                {{--<li class="timeline-inverted">--}}
                    {{--<div class="timeline-image">--}}
                        {{--<img class="img-circle img-responsive" src="templates/agency/img/about/4.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="timeline-panel">--}}
                        {{--<div class="timeline-heading">--}}
                            {{--<h4>July 2014</h4>--}}
                            {{--<h4 class="subheading">Phase Two Expansion</h4>--}}
                        {{--</div>--}}
                        {{--<div class="timeline-body">--}}
                            {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}

                <li>
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="images/experience/graduation-800.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2007 - 2012</h4>
                            <h4 class="subheading">My Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Studied Practical IT & Computer Science at <a href="http://bucks.ac.uk/">Buckinghamshire New University</a></p>
                            <p class="text-muted">Modules include, Advanced Interactive Programming, Artificial Intelligence, Software Engineering and Website Design</p>
                            <p class="text-muted">Achieving a final grade of <span style="font-weight: bold; font-style: italic;">2:1 including Hons</span></p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>