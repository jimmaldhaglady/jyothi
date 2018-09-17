@extends('layouts.home')

    <!-- Banner -->
    <div class="slider">

        <div  id="top" class="callbacks_container-wrap">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider1"></div>
                </li>
                <li>
                    <div class="slider1 slider2"></div>
                </li>
                <li>
                    <div class="slider1 slider3"></div>
                </li>
                <li>
                    <div class="slider1 slider4"></div>
                </li>
                <li>
                    <div class="slider1 slider5"></div>
                </li>
                <li>
                    <div class="slider1 slider6"></div>
                </li>
                <li>
                    <div class="slider1 slider7"></div>
                </li>
                <li>
                    <div class="slider1 slider8"></div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Banner -->
<!-- About -->
    <section id="about">
        <div class="about">
            <div class="container">
                <div class="abouttop">
                    <h3>ABOUT</h3>
                    <label class="line"></label>
                    <h6>     Jyothi Public School is one of the school run by the MCBS Educational Board Trust. Its Chairman is very Rev. Fr. Joseph Maleparambil.  </h6>
                    <div class="col-md-3 col-sm-3 aboutleft">
                        <h4>A WORD ABOUT US</h4>
                    </div>
                    <div class="col-md-6 col-sm-6 aboutmiddle">
                        <div class="aboutleftbottom">
                            <p>The Registered Office of the Trust shall be at Bldg.No.V/102. MCBS Generalate, Chunagamvely,Erumathala P.O, Aluva-683112,Ernakulam Dist in Kerala Stateuntil otherwise decided by the Settler Institution.</p>
                            <a href="about.html">EXPLORE</a>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <!--<p> Jyothi Public School, one of the promising institutions in Kerala, was started functioning in June 2003 by Jyothi Educational and Charitable Trust with a view to impart excellent education in a religious atmosphere. The school got its affiliation from Central Board of Secondary Education, Delhi on 11th January, 2013. Our first Batch of class X has successfully completed their Board Examination in March, 2014. </p>
                                                <br> SCHOOL CODE : 42595 </br>
                                                <br>YEAR OF ESTABLISHMENT : 2004</br>
                                                <br>NAME OF THE TRUST/SOCIETY/COMPANY REGISTERED WITH : Jyothi Educational and Charitable Trust </br>
                                                <br>REGISTRATION DATE : 20/05/2008</br>
                                                <br>SOCIETY REGISTRATION NUMBER : 132/IV/08</br>
                                                <br>REGISTRATION VALIDITY : PERMANENT REGISTRATION</br>
                                              </p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="images/bb3.jpg">
                    </div>


                    <div class="col-md-3 col-sm-3 aboutright">
                        <div class="aboutrighttop">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='510' data-delay='.1' data-increment="1">510</div>
                            <label class="aline"></label>
                            <p class="stats-info">Students</p>
                        </div>

                        <div class="aboutrightbottom">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='30' data-delay='.1' data-increment="1">30</div>
                            <label class="aline"></label>
                            <p class="stats-info">Faculty</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="aboutbottom">
                <div class="col-md-3 col-sm-3 aboutimg arrow">
                    <img src="images/b1.jpg">
                </div>
                <div class="col-md-3 col-sm-3 abouttext">
                    <h4>Physics Lab</h4>
                    <h5>Science is different than other subjects. It is not just the subject of science that is different. </h5>
                    <p> The means by which knowledge is acquired is different in science than it is in history or mathematics or poetry </p>
                    <a href="#" data-toggle="modal" data-target="#myModal1">EXPLORE</a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>Physics Lab</h4>
                                    <img src="images/b1m.jpg">
                                    <h5>In physics class, lab is central. Integral. Sacred. More than a mere place in the back of the classroom, the laboratory is the place where physics students do physics. It is in the laboratory that physics students learn to practice the activities of scientists - asking questions, performing procedures, collecting data, analyzing data, answering questions, and thinking of new questions to explore. The lab ideas and associated pages in The Laboratory section of this web site are designed to help teachers improve their lab programs by adopting labs with a purpose.</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 aboutimg arrow">
                    <img src="images/b2.jpg">
                </div>
                <div class="col-md-3 col-sm-3 abouttext">
                    <h4>Biology Lab</h4>
                    <h5>Brine shrimp populations survive in some of the harshest environments. </h5>
                    <p> Students will design and conduct an experiment to test the effect of acid rain on the germination of seeds. They will utilize the data from their experiment  and also read a passage on acid rain.  </p>
                    <a href="#" data-toggle="modal" data-target="#myModal2">EXPLORE</a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>Biology Lab</h4>
                                    <img src="images/b2m.jpg">
                                    <h5>In this investigation students will study the types of bacteria that grow during the formation of sauerkraut, identify some characteristics of each, as well as research the type of respiratory pathway used by the organisms to break down the cabbage to get their energy.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 abouttext">
                    <h4>Chemistry Lab</h4>
                    <h5>This chemistry lab manual is designed to use consumer products for student chemistry experiments. </h5>
                    <p>The students should be required to shop for many of the reagents. </p>
                    <a href="#" data-toggle="modal" data-target="#myModal3">EXPLORE</a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal3" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>Chemistry Lab</h4>
                                    <img src="images/b3m.jpg">
                                    <h5>This chemistry lab manual is designed to use consumer products for student chemistry experiments. The students should be required to shop for many of the reagents. They will need to carefully read the labels of the products. They will develop greater understanding with experience. As they develop the good habit of reading the fine print on the ingredients portion of the label, they will be more confident of their ability to make informed intelligent choices.

                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 aboutimg arrow2">
                    <img src="images/b3.jpg">
                </div>
                <div class="col-md-3 col-sm-3 abouttext">
                    <h4>Play Ground</h4>
                    <h5>The most enchanting schools always have large, open playgrounds with interesting play equipment for creativity.
                    </h5>
                    <p> Children sit at their classroom desk for many hours each day.  </p>
                    <a href="#" data-toggle="modal" data-target="#myModal4">EXPLORE</a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal4" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>Play Ground</h4>
                                    <img src="images/b4.jpg">
                                    <h5>The playgrounds must be spacious and outdoors, but they must also be secluded so that the children (and their parents) feel safe and do not have to consider the outside world. A good playground will allow for anyone on the playground (including the teacher) to see all that is going on, but will not have any connections or visibility to the street or any location off school grounds. At the same time, it should seem open and spacious. Thus, some high walls are necessary, but using the school buildings as boundaries as well can preserve the open feeling of the playground.</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 aboutimg arrow2">
                    <img src="images/b4.jpg">
                </div>




                <div class="col-md-3 col-sm-3 aboutimg arrow">
                    <img src="images/b5.jpg">
                </div>
                <div class="col-md-3 col-sm-3 abouttext">
                    <h4>Language Lab</h4>
                    <h5>Provides great facilities for the students to improve fluency in English with right stress and intonation</h5>
                    <p></p>
                    <a href="#" data-toggle="modal" data-target="#myModal5">EXPLORE</a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal5" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>Language Lab</h4>
                                    <img src="images/b5.jpg">
                                    <h5>Provides great facilities for the students to improve fluency in English with right stress and intonation</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 aboutimg arrow">
                    <img src="images/b6.jpg">
                </div>
                <div class="col-md-3 col-sm-3 abouttext">
                    <h4>New building</h4>
                    <h5>Newly constructed St.Alphonsa block  is clearly designed to satisfy the classroom facilities for the students.</h5>
                    <p>   </p>
                    <a href="#" data-toggle="modal" data-target="#myModal6">EXPLORE</a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal6" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>New building</h4>
                                    <img src="images/b6.jpg">
                                    <p>Newly constructed St.Alphonsa block  is clearly designed to satisfy the classroom facilities for the students.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </section>
    <!-- /About -->
    <!-- Gallery Section -->
    <div class="gallery" id="gallery">
        <div class="container">
            <h3>GALLERY</h3>
            <label class="line"></label>
            <h6>By the Grace of God , magical Moments are Captured the secured hand.Now We are Exploit the Entire Sweet Moments for you</h6>
            <section id="gallery" class="parallax section">

                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/big4.jpg" title="Onam Celebration">
                                <img src="images/4.jpg">
                                <div class="description">
                                    <span class="caption">Onam Celebration</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/big2.jpg" title="BAND WITH LIFE">
                                <img src="images/2.jpg">
                                <div class="description">
                                    <span class="caption">BAND WITH LIFE</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/big3.jpg" title="PRIDE MOMENTS">
                                <img src="images/3.jpg">
                                <div class="description">
                                    <span class="caption">PRIDE MOMENTS</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/big5.jpg" title="Awarnes Class">
                                <img src="images/5.jpg">
                                <div class="description">
                                    <span class="caption">Awarnes Class</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/big7.jpg" title="Annual Day">
                                <img src="images/7.jpg">
                                <div class="description">
                                    <span class="caption">Annual Day</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/big19.jpg" title="Independents Day">
                                <img src="images/19.jpg">
                                <div class="description">
                                    <span class="caption">Independents Day</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <div class="clearfix col-md-12"><br /> </div>
                        </div>
                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/yogaDay.jpeg" title="Yoga day celebration">
                                <img src="images/yogaDay.jpeg">
                                <div class="description">
                                    <span class="caption">Yoga day celebration</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/Nature Day.jpeg" title="Nature day celebration">
                                <img src="images/Nature Day.jpeg">
                                <div class="description">
                                    <span class="caption">Nature day celebration</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 ggrids">
                            <a href="images/anuvelPgm.jpeg" title="School Day">
                                <img src="images/anuvelPgm.jpeg">
                                <div class="description">
                                    <span class="caption">School Day</span>
                                    <span class="camera"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- //Gallery Section -->
        <!-- Faculty Section -->
        <div class="faculty" id="faculty">
            <div class="container">
                <div class="ftop">
                    <h3>OUR FACULTY</h3>
                    <label class="line"></label>
                    <p>Best Faculty at every time ,Updated sequently for new things and higly Qualified Teachers will Taken in class</p>
                </div>
                <div class="col-md-3 col-sm-3 fgrids">
                    <div class="view view-fourth">
                        <img src="images/t1.jpg" />
                        <div class="mask">
                            <h6>Fr. Sunny Thomas </h6>
                            <label class="fline"></label>
                            <p>You’ll always affect someone’s life doing what you do. And, that’s what makes it all worth it.</p>
                            <!--<ul>
                                <li><a class="facebook" href="#"></a></li>
                                <li><a class="twitter" href="#"></a></li>
                                <li><a class="google" href="#"></a></li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="ftext">
                        <h4>Fr. Sunny Thomas </h4>
                        <label class="fline"></label>
                        <h5>Principal </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 fgrids">
                    <div class="view view-fourth">
                        <img src="images/t2.jpg" />
                        <div class="mask">
                            <h6>Fr. James Meledath</h6>
                            <label class="fline"></label>
                            <p>Soul of the Jyothi Public School.A mind when stretched by a new idea never regains its original dimensions.</p>
                            <!--  <ul>
                                  <li><a class="facebook" href="#"></a></li>
                                  <li><a class="twitter" href="#"></a></li>
                                  <li><a class="google" href="#"></a></li>
                              </ul>-->
                        </div>
                    </div>
                    <div class="ftext">
                        <h4>Fr. James Meledath</h4>
                        <label class="fline"></label>
                        <h5> Manager
                        </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 fgrids">
                    <div class="view view-fourth">
                        <img src="images/t3.jpg" />
                        <div class="mask">
                            <h6>Emiline Jenetta Rodregez</h6>
                            <label class="fline"></label>
                            <p>If you are planning for a year, sow rice; if you are planning for a decade, plant trees; if you are planning for a lifetime, educate people.</p>
                            <!-- <ul>
                                 <li><a class="facebook" href="#"></a></li>
                                 <li><a class="twitter" href="#"></a></li>
                                 <li><a class="google" href="#"></a></li>
                             </ul>-->
                        </div>
                    </div>
                    <div class="ftext">
                        <h4>Emiline Jenetta Rodregez</h4>
                        <label class="fline"></label>
                        <h5>Mathematics</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 fgrids">
                    <div class="view view-fourth">
                        <img src="images/t4.jpg" />
                        <div class="mask">
                            <h6>Mrs Kavitha Sunny</h6>
                            <label class="fline"></label>
                            <p>Before any great things are accomplished, a memorable change must be made in the system of education…to raise the lower ranks of society nearer to the higher..</p>
                            <!--  <ul>
                                  <li><a class="facebook" href="#"></a></li>
                                  <li><a class="twitter" href="#"></a></li>
                                  <li><a class="google" href="#"></a></li>
                              </ul>-->
                        </div>
                    </div>
                    <div class="ftext">
                        <h4>Mrs Kavitha Sunny</h4>
                        <label class="fline"></label>
                        <h5>English
                            Communicative</h5>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Faculty Section -->

        <!-- Stats Section -->
        <div class="stats" id="stats">
            <div class="container">
                <div class="stats-info">
                    <div class="col-md-3 col-sm-3 stats-grid slideanim">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12' data-delay='.5' data-increment="100">12</div>
                        <label class="line"></label>
                        <p class="stats-info">Rank</p>
                    </div>
                    <div class="col-md-3 col-sm-3 stats-grid slideanim">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='25' data-delay='.5' data-increment="5">25</div>
                        <label class="line"></label>
                        <p class="stats-info">Computers</p>
                    </div>
                    <div class="col-md-3 col-sm-3 stats-grid slideanim">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2168' data-delay='.5' data-increment="100">2168</div>
                        <label class="line"></label>
                        <p class="stats-info">Books</p>
                    </div>
                    <div class="col-md-3 col-sm-3 stats-grid slideanim">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='169' data-delay='.5' data-increment="1">169</div>
                        <label class="line"></label>
                        <p class="stats-info">Awards</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- Stats Section -->
        <!-- Events Section -->
        <div class="events" id="events">
            <div class="container">
                <h3>EVENTS</h3>
                <label class="line"></label>
                <h6>Talk to your friends and family members and explain that while you want them at graduation, each graduate is allowed only a limited number of guests </h6>
                <div class="col-md-6 col-sm-6 egrid">
                    <div class="img">
                        <img src="images/bl1.jpg">
                    </div>
                    <div class="textt">
                        <div class="date">
                            <h5>15 AUG</h5>
                        </div>
                        <h3>SPORTS DAY</h3>
                        <label class="eline"></label>
                        <p>Sports days, sometimes referred to as field days, are events staged by many schools.
                        </p>
                        <a href="#" data-toggle="modal" data-target="#myModal5">READ MORE</a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal5" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>Sports Day</h4>
                                        <p>The sports teacher helps and encourages students to participate in the ‘Annual Sports Day’ function of the school. Students participate in various competing sports activities. The various sporting activities include flat race, hurdle race, cycling, high and long jump, etc. The participating students display their ability through these sports. The winner of these games gets a sense of proud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-sm-6 egrid">
                    <div class="img">
                        <img src="images/bl2.jpg">
                    </div>
                    <div class="textt">
                        <div class="date">
                            <h5>28 SEP</h5>
                        </div>
                        <h3>ANNUAL DAY</h3>
                        <label class="eline"></label>
                        <p>Annual Day forms an integral part of our school activities.It is an occasion of celebration</p>
                        <a href="#" data-toggle="modal" data-target="#myModal6"> READ MORE</a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal6" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>Annual Day</h4>
                                        <p>Annual Day forms an integral part of our school activities.  , felicitation, feast and festivity when students present not only their wonderful performances but also receive honours for their curricular and co-curricular achievements.

                                            The Annual Day 2010 was woven around the theme ‘PRATIBIMB’ and the Prize Distribution was entitled ‘HARMONY’.

                                            Mr. R. P. Mittal, IPS, IGP, Zone-II, Jalandhar graced the occasion as the Chief Guest for the Cultural Show – PRATIBIMB. Mr. Vinay Bublani, PCS, Commissioner, Municipal Corporation, Jalandhar was the Chief Guest for the Prize Distribution function.

                                            The functions were presided over by honourable Vice President (Apeejay Education Society), Mr. Yash Raj Aggarwal. The other dignitaries present were Mr. Vinay Raj Aggarwal, Secretary (Apeejay Education Society) and various members of Board of Governors.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-sm-6 egrid">
                    <div class="img">
                        <img src="images/bl3.jpg">
                    </div>
                    <div class="textt">
                        <div class="date">
                            <h5>25 AUG</h5>
                        </div>
                        <h3>EXCURSION</h3>
                        <label class="eline"></label>
                        <p>Excursions are planned, approved and conducted  Department .</p>
                        <a href="#" data-toggle="modal" data-target="#myModal7">READ MORE</a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal7" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>Excursion</h4>
                                        <p>carefully negotiate terms and conditions with third parties (e.g. travel agents, travel insurance companies, camp providers, specialist instructors, expedition providers) prior to accepting arrangements
                                            ensure the terms of any travel insurance offered to the school by the third party are satisfactory.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-6 col-sm-6 egrid">
                    <div class="img">
                        <img src="images/bl6.jpg">
                    </div>
                    <div class="textt">
                        <div class="date">
                            <h5>12 NOV</h5>
                        </div>
                        <h3>ANTI DRUG AWARENESS</h3>
                        <label class="eline"></label>
                        <p>Alcohol and drug (AOD) education in schools alone can’t be expected</p>
                        <a href="#" data-toggle="modal" data-target="#myModal8">READ MORE</a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal8" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>ANTI DRUG AWARENESS</h4>
                                        <p> to outweigh the impact of cultural traditions, sophisticated marketing of alcohol and tobacco, and the powerful role modelling by parents, siblings and other adults. However, schools can contribute to attitude and behaviour change around AOD, just as they did in the case of the social campaign against smoking.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-sm-6 egrid">
                    <div class="img">
                        <img src="images/bl5.jpg">
                    </div>
                    <div class="textt">
                        <div class="date">
                            <h5>15 AUG</h5>
                        </div>
                        <h3>ACHIEVEMENTS</h3>
                        <label class="eline"></label>
                        <p>To make Perfect,making future,Winning all events .</p>
                        <a href="#" data-toggle="modal" data-target="#myModal9">READ MORE</a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal9" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>Achievements</h4>
                                        <p>The results of this study show that compared to students with low aspirations and low expectations, having higher aspirations improves school achievement even if expectations are low. Furthermore, complete alignment between high aspirations, high expectations and high achievement is the most important predictor for future educational behaviour among students. Compared with students with low aspirations, low expectations and low achievement, those with high achievement who had expressed high aspirations, but low expectations were more likely to apply for a university course. The latter group of students also had better chances than students with high aspirations, high expectations but low achievement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-sm-6 egrid">
                    <div class="img">
                        <img src="images/bl4.jpg">
                    </div>
                    <div class="textt">
                        <div class="date">
                            <h5>8 AUG</h5>
                        </div>
                        <h3>GRADUATION CEREMONY</h3>
                        <label class="eline"></label>
                        <p>There's no greater recognition of a graduate's achievements </p>
                        <a href="#" data-toggle="modal" data-target="#myModal8">READ MORE</a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal8" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>Graduation Ceremony</h4>
                                        <p>  than a high school.graduation ceremony,commencement. Diplomas are "conferred" or handed out to graduating seniors and the speakers selected for this event often include community dignitaries, alumni and students. The valedictorian, the highest-ranking academic student in the graduation class, usually speaks.

                                            Many schools have to restrict attendance for space reasons. Make sure to check with your school to see if there will be limitations on the number of people you can invite to the ceremony. If your school has space restrictions and you're facing a dilemma about who to include</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!--// Events Section -->
        <!-- Clients Section
         <div class="clients">
            <div class="container">
                <h3>College ties up with following software firms</h3>
                <ul>
                    <li><a>WIPRO</a></li>
                    <li><a>ATOS</a></li>
                    <li><a>TECHM</a></li>
                    <li><a>INFOSYS</a></li>
                    <li><a>CTS</a></li>
                </ul>
            </div>
        </div>-->
        <!--// Clients Section -->
        <!-- Contact Section -->
        <div class="contact" id="contact">
            <div class="container">
                <div class="ctop">
                    <h3>CONTACT</h3>
                    <label class="line"></label>
                    <p>Jyothi Public School is one of the school run by the MCBS Educational Board Trust.The Jyothi Public School seeks to give its students a sound education in the fullest of them.  </p>
                </div>
                <div class="cbottom">
                    <div class="col-md-6 col-sm-6 cbl">
                        <h4>OUR ADDRESS:</h4>
                        <h5>JYOTHI PUBLIC SCHOOL(42595) <br>Nalamile, Aluva - 683 112, <br>Landmark : opposite to ISRO .</h5>
                        <h4> Phone:</h4>
                        <h5>0484-2839305, +91 9496201308</h5>
                        <h4>E-mail:</h4>
                        <h5><a href="jyothipublicschool@gmail.com">jyothipublicschool@gmail.com</a></h5>
                        <h4>Our Website:</h4>
                        <h5><a href="https://w3layouts.com/">www.jyothipublicschool.com</a></h5>
                    </div>
                    <div class="col-md-6 col-sm-6 cbr">
                        <form action="#" method="post">
                            <input type="text" name="your name" placeholder="your Name" required="">
                            <input type="text" name="your phone" placeholder="your Phone" required="">
                            <input type="text" name="your email" placeholder="your Email" required="">
                            <textarea rows="5" cols="50" name="your comment" placeholder="Write Your Comment Here"></textarea><br>
                            <input type="submit" value="SEND MESSAGE">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //Contact Section -->
        <!-- Social Icons Section -->
        <div class="socialicons">
            <div class="container">
                <div class="col-md-4 col-sm-4 left">
                    <div class="lt">
                        <a class="google" href="#"></a>
                        <h3>GOOGLE</h3>
                        <h5>We Have A Circle</h5>
                    </div>
                    <div class="lb">
                        <a class="linkedin" href="#"></a>
                        <h3>LINKEDIN</h3>
                        <h5>We Are Here Too</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 middle">
                    <a class="facebook" href="#"></a>
                    <h3>FACEBOOK</h3>
                    <h5>Join Our Community</h5>
                </div>
                <div class="col-md-4 col-sm-4 right">
                    <div class="rt">
                        <a class="twitter" href="#"></a>
                        <h3>TWITTER</h3>
                        <h5>Follow Us</h5>
                    </div>
                    <div class="rb">
                        <a class="pinterest" href="#"></a>
                        <h3>PINTEREST</h3>
                        <h5>Just Pin It</h5>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Social Icons Section -->

