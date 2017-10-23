<?php
function Show_information_site_en(){
    $to_time = strtotime("2017-10-20 12:00:00AM");
    $from_time = Date("Y-m-d h:i:sa");
    $from_time = strtotime($from_time);
    $minutes = round(abs($to_time - $from_time) / 60,2);
    $hours =  substr($minutes / 60, 0 , 2);

    $con = new mysqli('localhost','root','','db_progfields_8003112356_v');
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $sql = "SELECT Project_Done,Projects_Under_Construction,Views FROM information_site";
    $result = $con->query($sql);
    if($result->num_rows > 0 ){
        while ($row = $result->fetch_assoc()){
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
            
                                            <span class="counter js-counter" data-from="0" data-to="' . $row['Views'] . '" data-speed="5000" data-refresh-interval="50">1</span>
                                            <span class="counter-label">Views</span>
            
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 animate-box">
                                        <div class="feature-center">
                                            <span class="icon">
                                                <i class="icon-anchor"></i>
                                            </span>
            
                                            <span class="counter js-counter" data-from="0" data-to="' . $row['Projects_Under_Construction'] . '" data-speed="5000" data-refresh-interval="50">1</span>
                                            <span class="counter-label">Projects under construction</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 animate-box">
                                        <div class="feature-center">
                                            <span class="icon">
                                                <i class="icon-briefcase"></i>
                                            </span>
                                            <span class="counter js-counter" data-from="0" data-to="'. $row['Project_Done'] .'" data-speed="5000" data-refresh-interval="50">1</span>
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
    }
}

function Show_information_site_ar(){
    $to_time = strtotime("2017-10-20 12:00:00AM");
    $from_time = Date("Y-m-d h:i:sa");
    $from_time = strtotime($from_time);
    $minutes = round(abs($to_time - $from_time) / 60,2);
    $hours =  substr($minutes / 60, 0 , 2);

    $con = new mysqli('localhost','root','','db_progfields_8003112356_v');
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $sql = "SELECT Project_Done,Projects_Under_Construction,Views FROM information_site";
    $result = $con->query($sql);
    if($result->num_rows > 0 ){
        while ($row = $result->fetch_assoc()){
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
            
                                            <span class="counter js-counter" data-from="0" data-to="' . $row['Views'] . '" data-speed="5000" data-refresh-interval="50">1</span>
                                            <span class="counter-label">المشاهدات</span>
            
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 animate-box">
                                        <div class="feature-center">
                                            <span class="icon">
                                                <i class="icon-anchor"></i>
                                            </span>
            
                                            <span class="counter js-counter" data-from="0" data-to="' . $row['Projects_Under_Construction'] . '" data-speed="5000" data-refresh-interval="50">1</span>
                                            <span class="counter-label">مشاريع تحت الإنشاء</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 animate-box">
                                        <div class="feature-center">
                                            <span class="icon">
                                                <i class="icon-briefcase"></i>
                                            </span>
                                            <span class="counter js-counter" data-from="0" data-to="'. $row['Project_Done'] .'" data-speed="5000" data-refresh-interval="50">1</span>
                                            <span class="counter-label">مشاريع أنجزت</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 animate-box">
                                        <div class="feature-center">
                                            <span class="icon">
                                                <i class="icon-clock"></i>
                                            </span>
            
                                            <span class="counter js-counter" data-from="0" data-to="'. $hours .'" data-speed="5000" data-refresh-interval="50">1</span>
                                            <span class="counter-label">ساعات العمل</span>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    }
}


?>