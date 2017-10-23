<?php
function Show_calculate_en(){
    $to_time = strtotime("2017-10-20 12:00:00AM");
    $from_time = Date("Y-m-d h:i:sa");
    $from_time = strtotime($from_time);
    $minutes = round(abs($to_time - $from_time) / 60,2);
    $hours =  substr($minutes / 60, 0 , 2);
    echo '
        <div id="gtco-counter" class="gtco-bg gtco-counter" style="background-image:url(images/img_bg_2.jpg);">
            <div class="gtco-container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-eye"></i>
                                    </span>
    
                                    <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Creativity Fuel</span>
    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-anchor"></i>
                                    </span>
    
                                    <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Happy Clients</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-briefcase"></i>
                                    </span>
                                    <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Projects Done</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span>
    
                                    <span class="counter js-counter" data-from="0" data-to="'. $hours .'" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Hours Worked</span>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}

function Show_calculate_ar(){
    $to_time = strtotime("2017-10-20 12:00:00AM");
    $from_time = Date("Y-m-d h:i:sa");
    $from_time = strtotime($from_time);
    $minutes = round(abs($to_time - $from_time) / 60,2);
    $hours =  substr($minutes / 60, 0 , 2);
    echo '
        <div id="gtco-counter" class="gtco-bg gtco-counter" style="background-image:url(images/img_bg_2.jpg);">
            <div class="gtco-container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-eye"></i>
                                    </span>
    
                                    <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Creativity Fuel</span>
    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-anchor"></i>
                                    </span>
    
                                    <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Happy Clients</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-briefcase"></i>
                                    </span>
                                    <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Projects Done</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span>
    
                                    <span class="counter js-counter" data-from="0" data-to="'. $hours .'" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Hours Worked</span>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
}


?>