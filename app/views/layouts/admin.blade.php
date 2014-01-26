<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
    <link rel=stylesheet href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
</head>
<body ontouchstart="">

    <div class="sidebar">
        <div class="logo-wrapper">
            <img src="http://static.wixstatic.com/media/48e828_3b02e319629e21727558c00768f16d91.png_srz_895_180_75_22_0.50_1.20_0.00_png_srz" alt="HoopNation Logo" style="max-width:100%">
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <a>Tournaments</a>
                <ul class="list-group">
                    <li class="list-group-item"><a>2012</a></li>
                    <li class="list-group-item"><a>2013</a></li>
                    <li class="list-group-item"><a>2014</a></li>
                </ul>

            </li>
            <li class="list-group-item"><a>Teams</a></li>
            <li class="list-group-item"><a>Players</a></li>
            <li class="list-group-item"><a>Matches</a></li>
        </ul>
    </div>
    <div class="main">


        <div class="container full-width">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="http://static.wixstatic.com/media/48e828_3b02e319629e21727558c00768f16d91.png_srz_895_180_75_22_0.50_1.20_0.00_png_srz" alt="HoopNation Logo" style="max-width:100%;margin-bottom: 40px;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <div class="flex-video widescreen">
                            <iframe src="//www.youtube.com/embed/dieQrQ4qa4c" class="bordered"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <hr>

        <div class="container full-width">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Player Profile</h1>
                    <h2 style="color:#0F7451">Sean "Sexy" Anderson</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-2">
                    <img src="http://thumb9.shutterstock.com/display_pic_with_logo/83826/155838182/stock-photo-side-portrait-of-gloomy-man-isolated-on-gray-background-with-copyspace-155838182.jpg" alt="..."  class="bordered">
                </div>
                <div class="col-sm-4">
                    <div class="profile-number">
                        14
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2>Stats</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">

                        <div class="col-sm-6">
                        <span class="profile-number">
                                14
                            </span>
                        </div>
                        <div class="col-sm-6">
                           <img src="http://thumb9.shutterstock.com/display_pic_with_logo/83826/155838182/stock-photo-side-portrait-of-gloomy-man-isolated-on-gray-background-with-copyspace-155838182.jpg" alt="..."  class="bordered">
                       </div>
                   </div>

               </div>
               <div class="col-sm-4">
                <div class="row">

                    <div class="col-sm-6">
                        <h3 style="line-height:85px; text-align: right">Two Point Avg.</h3>
                    </div>
                    <div class="col-sm-6">
                        <div class="chart" data-percent="25">25%</div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <h3 style="line-height:85px; text-align: right">Three Point Avg.</h3>
                    </div>

                    <div class="col-sm-6">
                        <div class="chart" data-percent="45">45%</div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <h3 style="line-height:85px; text-align: right">Free Throw Avg.</h3>
                    </div>

                    <div class="col-sm-6">
                        <div class="chart" data-percent="96">96%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-stats">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h3>Blocks</h3>
                                <span style="color: #446f90">5</span>
                            </div>
                            <div class="col-sm-3">
                                <h3>Steals</h3>
                                <span style="color: #4bab5c">5</span>
                            </div>
                            <div class="col-sm-3">
                                <h3>Rebounds</h3>
                                <span style="color: #df6b62">5</span>
                            </div>
                            <div class="col-sm-3">
                                <h3>Assists</h3>
                                <span style="color: #dfaa62">5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-4">
                <h3>Two Point Average</h3>
                <div class="chart" data-percent="25">25%</div>
            </div>
            <div class="col-sm-4">
                <h3>Three Point Average</h3>
                <div class="chart" data-percent="45">45%</div>
            </div>
            <div class="col-sm-4">
                <h3>Free Throw Average</h3>
                <div class="chart" data-percent="96">96%</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-stats">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h3>Blocks</h3>
                                <span style="color: #446f90">5</span>
                            </div>
                            <div class="col-sm-3">
                                <h3>Steals</h3>
                                <span style="color: #4bab5c">5</span>
                            </div>
                            <div class="col-sm-3">
                                <h3>Rebounds</h3>
                                <span style="color: #df6b62">5</span>
                            </div>
                            <div class="col-sm-3">
                                <h3>Assists</h3>
                                <span style="color: #dfaa62">5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(function() {
            $('.chart').easyPieChart({
                trackColor  : 'rgba(255,255,255,.1)',
                scaleColor: 'rgba(255,255,255,.1)',
                barColor : function(percent){
                    if(percent < 33) {
                        return '#FF8E2E';
                    }
                    else if(percent < 66) {
                        return '#0668B1';
                    }
                    else return '#06B861';
                },
                lineCap: 'butt',
                lineWidth: '4',
                size: '120'
            });
        });

    </script>

    <hr>

    <div class="full-width container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Our Mission</h1>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, vero, culpa, fugit asperiores doloremque nemo placeat modi temporibus non quis voluptas eaque nisi inventore? Totam, dolorem suscipit officiis architecto possimus.</p>
                <p>Natus, unde animi eaque veniam molestias doloremque repellendus ea est aperiam cumque numquam aut corrupti reiciendis labore atque harum mollitia amet veritatis provident error. Accusamus, doloribus mollitia hic neque fugiat!</p>
                <p>Vel voluptatum ad atque obcaecati a non inventore eius iusto cum. Magni, quam, nostrum non laboriosam dolores blanditiis expedita incidunt eum dolorum id recusandae ad numquam dignissimos reprehenderit beatae! Ex.</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="full-width container">
        <div class="row">
            <div class="col-sm-12">
                <h1>THE TEAM</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-left" style="padding-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,.1)">KJ Allen</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-lg-push-6 ">
                        <img src="http://thumb9.shutterstock.com/display_pic_with_logo/83826/155838182/stock-photo-side-portrait-of-gloomy-man-isolated-on-gray-background-with-copyspace-155838182.jpg" alt="..."  class="bordered">
                    </div>
                    <div class="col-sm-12 col-lg-6 col-lg-pull-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, culpa, reiciendis, illum cumque error sapiente accusantium aliquid unde et veniam necessitatibus impedit nobis explicabo voluptate neque adipisci nulla aperiam laborum!</p>
                        <p>Laudantium, voluptatum, ut quos ea quia eum inventore eaque vero temporibus delectus necessitatibus asperiores cupiditate nesciunt excepturi impedit dolorum eos accusamus cum nam dolore illo tenetur voluptates rerum minima sunt!</p>
                    </div>
                </div>

            </div>


            <div class="col-sm-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-right" style="padding-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,.1)">KJ Allen</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <img src="http://image.shutterstock.com/display_pic_with_logo/92498/99037976/stock-photo-an-image-of-a-nice-male-portrait-side-view-99037976.jpg" alt="..."  class="bordered">
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, culpa, reiciendis, illum cumque error sapiente accusantium aliquid unde et veniam necessitatibus impedit nobis explicabo voluptate neque adipisci nulla aperiam laborum!</p>
                        <p>Laudantium, voluptatum, ut quos ea quia eum inventore eaque vero temporibus delectus necessitatibus asperiores cupiditate nesciunt excepturi impedit dolorum eos accusamus cum nam dolore illo tenetur voluptates rerum minima sunt!</p>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <hr>


    <div class="container full-width">
        <div class="col-sm-6">
            <h1>Accomodation</h1>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.6116265939945!2d175.04030889999999!3d-39.927706699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fcd3e738dfa7b3f!2sQuality+Inn+Collegiate+wireless+internet+access+%C2%B7+currency+exchange!5e0!3m2!1sen!2s!4v1390483079814"></iframe>
            </div>
        </div>
        <div class="col-sm-6">
            <h1>Venue Location</h1>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1529.7634400889453!2d175.02985417690923!3d-39.929602832393414!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f6619d62fa0f4de!2sBoys+%26+Girls+Gym+Club!5e0!3m2!1sen!2sus!4v1390483474672"></iframe>
            </div>
        </div>
    </div>



    <hr>



    <div class="container full-width">
        <h1>Sponsors</h1>
        <div class="row">
            <div class="col-sm-4">
                <img src="http://static.wixstatic.com/media/48e828_4f3b71e0b85407b68c39674f5c6a7f00.png_srz_318_246_75_22_0.50_1.20_0.00_png_srz" alt="">
            </div>
            <div class="col-sm-4">
                <img src="http://static.wixstatic.com/media/48e828_032a0c0f9faab1f8280e6d23438e100e.png_srz_383_105_75_22_0.50_1.20_0.00_png_srz" alt="">
            </div>
            <div class="col-sm-4">
                <img src="http://static.wixstatic.com/media/48e828_13cd2f330d1f9e046f3cb9c714765f46.png_srz_555_110_75_22_0.50_1.20_0.00_png_srz" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <img src="http://static.wixstatic.com/media/48e828_d428de796b2180587ef40bfbc3a27b9c.png_srz_610_115_75_22_0.50_1.20_0.00_png_srz" alt="">
            </div>
            <div class="col-sm-4">
                <img src="http://static.wixstatic.com/media/48e828_7eb763ef2f7707e59694d56530958e10.png_srz_205_221_75_22_0.50_1.20_0.00_png_srz" alt="">
            </div>
            <div class="col-sm-4">
                <img src="http://www.basketball.org.nz/_r/img/logo-bbnz-masthead-blk.gif" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <img src="http://static.wixstatic.com/media/48e828_6d4bd9410f02d4c0e845be8e91e85cfb.jpg_srz_360_145_75_22_0.50_1.20_0.00_jpg_srz" alt="">
            </div>
            <div class="col-sm-4">
                <img src="http://www.powerade.co.nz/images/header/logo-powerade.png" alt="">
            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>


    <hr>


    <div class="full-width container">
        @yield('content')
    </div>

</div>
</body>
</html>
