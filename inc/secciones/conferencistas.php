<!--speaking-section-->
<section class="speaking-section" style="background: url(images/background/2.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>Who <span>Speaking?</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore <br>dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.</p>
        </div>
        <div class="row">
            <?php $conferencistas = array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",); ?>
            <?php foreach ($conferencistas as $Conferencista): ?>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="image-holder text-center">
                        <div class="image-box">
                            <figure>
                                <img src="images/resource/1.jpg" alt="">
                            </figure>
                            <div class="overly-box">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </div>                                                      
                        </div>
                        <div class="image-content">
                            <a href="speaker-details.html"><h5>Jonathan Franco</h5></a>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>                
    </div>
</section>
<!--speaking-section-->

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

