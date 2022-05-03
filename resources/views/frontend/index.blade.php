@extends('layouts.app')

@section('content')
    <div>
        <div class="modal fade" id="racing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">RC-ROBO RACING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">
                            <!-- / tabs -->
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>
                                    <h5 class="zxcv">Rules :</h5>
                                    <ol>
                                        <li>Participants should bring their own rc robo car, no equipments will be
                                            provided by the conducting committee.
                                        </li>
                                        <li>The robots build by given dimension and specification will be allowed for
                                            game.
                                        </li>
                                        <li>The rounds will be decided according to groups participated.</li>
                                        <li>The robot which gain maximum points will be the winner.</li>
                                        <li>The team should not consist of more than 3 members.</li>
                                        <li>Each member from same college is not mandatory.</li>
                                        <li> The robot should follow the robot specifications provided. Any deviation
                                            from the mentioned specifications will lead to disqualification.
                                        </li>
                                        <li>Once the race begins, three hand touches are allowed, if your taking hand
                                            touch you have to start from last check point.
                                        </li>
                                        <li> No test practice will be allowed on the main arena.</li>
                                        <li>Terminals for charging the battery will not be provided in the college.
                                        </li>
                                        <li>The arena may subject to change before the commencement of any round.</li>
                                        <li>If the Robot crosses a checkpoint, and moves off track, then the Robot would
                                            be placed back on the previous checkpoint crossed.
                                        </li>
                                        <li>The decision of the judges will be final and abiding.</li>
                                        <li>Argument with judges in any form will lead to the disqualification of the
                                            team.
                                        </li>

                                    </ol>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li>
                                            Gopal - 8939239919
                                        </li>
                                        <li>Naveen - 9025270226
                                        </li>
                                    </ul>
                                </div> <!-- / tabs_item -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <a target="_blank" href="#" class="btn btn-primary">Register Now!</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="drone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">DRONE RACING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">
                            <!-- / tabs -->
                            <div class="tab_content">
                                <div class="tabs_item">

                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>

                                    <h5 class="zxcv">Rules :</h5>
                                    <ol>
                                        <li>Round -1 Level of Control Test
                                            <ol>
                                                <li>The pilot should have a smooth lift-off from the ground.</li>
                                                <li>The pilot can show the judges some tricks with drone to get extra
                                                    points
                                                    (i.e. flips, multi directions movement, etc.)
                                                </li>
                                                <li>The pilot should land smoothly on the ground.</li>
                                            </ol>
                                        </li>
                                        <li>Round -2 Speed Test And Timed laps
                                            <ol>
                                                <li>Traps and obstacles will be placed all over the course.</li>
                                                <li>Checkpoints are present around the racing course.</li>
                                                <li>Drone should pass through every checkpoints to stay in the race.
                                                </li>
                                                <li>If the drone collides with an obstacle an extra chance is given to
                                                    continue
                                                    in the race.
                                                </li>
                                                <li>Finishing the course in least time will be awarded with points.
                                                </li>
                                                <li>Each participants will be given two trials, best timed lap will be
                                                    chosen.
                                                </li>
                                                <li>Laps will be recorded by judges for both the trials of one
                                                    participants at a
                                                    time.
                                                </li>
                                                <li>The list will be sorted by most points scored in the circuit.</li>
                                            </ol>
                                        </li>
                                    </ol>
                                    <h5 class="zxcv">General Instructions :</h5>
                                    <ol>
                                        <li>The drones will be inspected by the judges before the event.</li>
                                        <li>Drones which meets under the specifications will be disqualified.</li>
                                        <li>Only the participants are allowed to pilot the drone.</li>
                                        <li>All the drones should be charged before the race.(Bring the charger if
                                            required.)
                                        </li>
                                        <li>Drones should only be used to racing purpose and no other reasons.</li>
                                        <li>Drones with camera should be informed before prior before the event.</li>
                                        <li>Practice time will be given to get familiar with the circuit and obstacles.
                                        </li>
                                        <li>Professional drone can be used with proper license, special circuit will be
                                            given to the participants.*
                                        </li>
                                        <li>Event organizers are not responsible for drone damage, during practice, race
                                            or
                                            any time, take care of your drone responsibly.
                                        </li>
                                        <li>Event will be organized with proper permissions and will be supervised under
                                            event organizers.
                                        </li>
                                        *professional drone should weigh under 400gms.<br>

                                    </ol>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li>Nandagopal- 9445064737</li>
                                        <li> Gopika- 8807955505</li>
                                    </ul>
                                </div> <!-- / tabs_item -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <a target="_blank" href="#" class="btn btn-primary">Register Now!</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="war" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">ROBO WAR</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">

                            <div class="tab_content">
                                <div class="tabs_item">
                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>

                                    <h5 class="zxcv">General Rules :</h5>
                                    <ol>
                                        <li>The competition will be played stage wise as each stage holds true
                                            enthusiasm.
                                        </li>

                                        <li>The bot will be inspected for safety before the event begins. If found to be
                                            unsafe for the participants/spectators, it will be discarded.
                                        </li>

                                        <li>The organizers reserve the right to change any or all of the rules as they
                                            deem
                                            fit. Changes in rules, if any, will be highlighted on the website.
                                        </li>

                                        <li>Violation of any of the rules will result in immediate disqualification.
                                        </li>

                                        <li>The maximum time limit for the battle royale round inside the arena is 10 -
                                            15
                                            minutes.
                                        </li>

                                        <li>A bot will be declared immobile (out) if it cannot move or provide giggle
                                            moments within 20seconds. A bot with one side of its drive train disabled
                                            will
                                            not be counted out if it can demonstrate some degree of controlled movement.
                                        </li>

                                        <li>Teams that are not ready when called for battle will be considered to have
                                            declared a walkover, and will receive no points.
                                        </li>

                                        <li>The bot cannot be split into two sub-units. Two distinct parts connected by
                                            a
                                            flexible cable will be considered separate units.
                                        </li>

                                        <li>Damaging the arena will lead to immediate disqualification.</li>

                                        <li>Lego kits, readymade kits, car bases and development boards are not
                                            permitted.
                                            Readymade gear boxes are permitted.
                                        </li>

                                        <li>In all cases, the judges' decision will be final and binding.
                                        </li>
                                        <li>In arena matches reserved areas or special areas cannot be used by the bots.
                                        </li>
                                        <li>Teams are not allowed to repair the robots during the match and separate
                                            time
                                            will be allotted for repairing of robots between the rounds.
                                        </li>
                                        <li>Repairing of robots will be accompanied by volunteers of IETE and after
                                            repairing the robots will be checked before the next round.
                                        </li>
                                    </ol>

                                    <h5 class="zxcv">
                                        Robot specifications:
                                    </h5>
                                    <ol>
                                        <li>There will be no restrictions on the dimensions of the bot.</li>
                                        <li>The weight of the machine should not exceed 15 Kgs (33.07 Lbs).</li>
                                        <li>The total weight of all the bots and the dimensions
                                            of the combination of bots must satisfy the above two points.
                                        </li>
                                        <li>Robots with pneumatic or hydraulic mechanisms or electric lifters are
                                            allowed.
                                        </li>
                                        <li>Only active weapon bots are allowed.</li>


                                    </ol>
                                    <h5 class="zxcv">Round Specifications:</h5>
                                    <ol type="I">
                                        <li> Battle Royal:
                                            <ol>
                                                <li>This round is based on battle royal in which few (depends upon
                                                    participants) teams participate in one round together.
                                                </li>
                                                <li>The timing of this round is around 10 to 15 mins.</li>
                                                <li>Top 6 TO 4 teams will be selected in the end of the battle round
                                                    (According to the no, of participants) based on the last standing
                                                    qualifies for the next round or the top bots with high attacking
                                                    points will get qualified.
                                                </li>

                                            </ol>
                                        </li>
                                        <li>Sumo Round :
                                            <ol>
                                                <li>This round is based on sumo wrestling between bots(1v1).</li>
                                                <li>The timing of this round is around 5 to 7 mins.</li>
                                                <li>The one pushes away the other one out of the given area is qualified
                                                    to the next round.
                                                </li>

                                            </ol>
                                        </li>
                                        <li>1 vs 1 Battle:
                                            <ol>
                                                <li>This round will be played based on knockout basis.</li>
                                                <li>Rounds will be declared on no.of qualified players.</li>
                                                <li>The timing of this round is 5 mins.</li>
                                                <li>The one bot which stand at the last will be consider as the winner
                                                    of this event.
                                                </li>
                                                <li>Semi finals and finals will conduct to finalize the winner and
                                                    runner.
                                                </li>

                                            </ol>
                                        </li>
                                    </ol>

                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li>PoojaSri - 9360226591</li>
                                        <li>Pramodh - 97919 53264</li>
                                    </ul>
                                </div> <!-- / tabs_item -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        {{--                    <a target="_blank" href="{{ url_for('register') }}" class="btn btn-primary">Register Now!</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hardware" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">HARDWARE ASSEMBLING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">

                            <div class="tab_content">
                                <div class="tabs_item">
                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>

                                    <h5 class="zxcv">Rules :</h5>
                                    <ol>

                                        <li>Participants will be given a dismantled hardware and will be asked to
                                            assemble it back within a given duration.
                                        </li>
                                        <li>2 rounds will be conducted.</li>
                                        <li>Round 1 is for qualifier and Round 2 is the final round.</li>
                                        <li>Round 1 => The participants need to assemble the disassembled keyboard.
                                        </li>
                                        <li>Round 2 => The participants need to assemble the disassembled Bluetooth speaker.
                                        </li>

                                        <li> Teams will be qualified for Round 2 based on Time, how they have assembled
                                            and on how good it works.
                                        </li>
                                        <li>The team which does it with minimum duration will be selected to next round ,and in round two the winners will be finalized.</li>
                                        <li>In the final round both the winner and runner will be selected and cash
                                            prize will be given.
                                        </li>


                                    </ol>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li> Vignesh - 8825873979</li>
                                        <li> Murali - 7904773955</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        {{--                    <a target="_blank" href="{{ url_for('register') }}" class="btn btn-primary">Register Now!</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="soldering" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">STYLE SOLDERING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>
                                    <h5 class="zxcv">Rules :</h5>
                                    <ol>
                                        <li>This is a team event, each team will comprise of 2 Participants.</li>
                                        <li>Each team will have 5 minutes to complete the given design.</li>
                                        <li>Participants are required to keep their gloves on throughout the event for
                                            their own safety.
                                        </li>
                                        <li>Fume removal fans will be provided and should be kept switched on during the
                                            course of the event.
                                        </li>
                                        <li>Designs and models for soldering will be shown before the start of event and
                                            participants are required to replicate the same.
                                        </li>
                                        <li>Burning the board will result in negative marking.</li>
                                        <li>The strength and continuity of the solder pin will be evaluated.</li>
                                        <li>Only a limited supply of pins will be provided, depending upon the design
                                            model.
                                        </li>

                                    </ol>
                                    <br>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li> Aravindkumar - 7358598007</li>
                                        <li>Bhuvaneshwaran- 9551673053</li>
                                    </ul>
                                </div> <!-- / tabs_item -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        {{--                    <a target="_blank" href="{{ url_for('register') }}" class="btn btn-primary">Register Now!</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="follower" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">ROBO-LINE FOLLOWER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">


                            <div class="tab_content">
                                <div class="tabs_item">

                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>
                                    <h5 class="zxcv">Rules :</h5>
                                    <ol>
                                        <li>Maximum of Four members are allowed in each participating team. Lone wolves
                                            are also welcomed.
                                        </li>
                                        <li>
                                            <ul style="list-style-type: none; /* Remove bullets */
                                                padding: 0; /* Remove padding */
                                                margin: 0;">
                                                <li>Round 1- White background with black track .</li>
                                                <li>Round 2- black background with white track.</li>
                                            </ul>

                                        <li>The bot has to programmed as per the above rule.</li>
                                        <li>The track would be of 3cm width.</li>
                                        <li>The robots prepared need to be completely autonomous.</li>
                                        <li>Teams can be inter-disciplinary as well as inter collegiate. Teams need to
                                            prepare their own bot.
                                        </li>
                                        <li>The Robot must be non-destructive and non-harmful to humans and the track.
                                        </li>
                                        <li>Readymade kits are strictly prohibited. The robot must not be made from any
                                            ready-made kit, if found so, the team will be disqualified.
                                        </li>
                                        <li>Once the bot starts, a timer starts and the time taken to reach the finish
                                            line will have the highest weightage in evaluation.
                                        </li>
                                        <li>Teams are suggested to build generic and robust code.</li>
                                        <li>The teams may use any number of sensors but only a maximum of four actuators
                                            are allowed for the movement of the robot.
                                        </li>
                                        <li>The decision of the organizers will be final and abiding. Argument with them
                                            in any form will lead to the disqualification of the team right-away.
                                        </li>
                                        <li>Penalties will be given to the teams who have touched the bot while the run.
                                        </li>
                                        <li>Bonus points will be provided for the best design of the bot</li>

                                    </ol>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li>Ajay - 8925408347</li>
                                        <li>Samyuktha - 9843775004</li>
                                    </ul>
                                </div> <!-- / tabs_item -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        {{--                    <a target="_blank" href="{{ url_for('register') }}" class="btn btn-primary">Register Now!</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="presentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">TECHNICAL PAPER PRESENTATION</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>
                                    <h5 class="zxcv">Rules :</h5>
                                    <ol type="I">
                                        <li>General Rules:
                                            <ol>
                                                <li>A team should consist of a maximum of 3 members.</li>
                                                <li>Only participants who qualify in the preliminary abstract submission
                                                    round shall be eligible for the final presentation.
                                                </li>
                                                <li>Qualified candidates are required to bring along with them one soft
                                                    copy (preferably in a pen drive) and 2 hard copies of the technical
                                                    paper on the day of the event.
                                                </li>
                                                <li>Any theme related to Engineering and Emerging technology can be
                                                    chosen for the presentation.
                                                </li>

                                            </ol>
                                        </li>
                                        <li>
                                            Paper Rules:
                                            <ol>
                                                <li>The paper should strictly follow IEEE format.</li>
                                                <li>Abstract may not exceed the limit of 200 words.</li>
                                                <li>The front page should have the title of paper on the top and the
                                                    details of the team members at the bottom.
                                                </li>
                                                <li> Font style for text should be ‘Times New Roman’.</li>
                                                <li>Font size for text should be 12 points in general and 16 points for
                                                    headings.
                                                </li>
                                                <li>Margin of 1 inches from all sides is must.</li>
                                                <li> Plagiarism is strictly prohibited and citing the references is
                                                    mandatory.
                                                </li>
                                                <li>The paper should be in PDF format, readable in Adobe acrobat reader.
                                                </li>

                                            </ol>
                                        </li>
                                        <li>Presentation rules:
                                            <ol>
                                                <li>The presentation should be only in MS PowerPoint (ppt /pptx) format.
                                                </li>
                                                <li>The first slide should display the title of the presentation & name
                                                    of the presenter.
                                                </li>
                                                <li>Each team will be given a maximum of 15 mins for the presentation.
                                                    Presentation time restrictions will be strictly followed.
                                                </li>
                                                <li>Presentations should be clearly structured and should contain the
                                                    essential elements of the accepted formal paper.
                                                </li>
                                                <li> Use preferably large font size and bullets at the beginning of each
                                                    lines to separate ideas
                                                </li>
                                                <li>Do not use more than 2 font colours per slide.</li>
                                                <li>The final PowerPoint presentation file must be shared 2 days before
                                                    the actual day of event to the specified mail ID.
                                                </li>

                                            </ol>
                                        </li>
                                    </ol>
                                    <br>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li> Sowmiya A - 9894608222</li>
                                        <li>Sai Keerthi - 9384690103
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        {{--                    <a target="_blank" href="{{ url_for('register') }}"--}}
                        class="btn btn-primary">Register Now!</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="soccer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">ROBO SOCCER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">

                            <div class="tab_content">
                                <div class="tabs_item">
                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the event and provide the Registration Id on the day of
                                            event.
                                        </li>
                                        <li>Registration fee:
                                            <ol>
                                                <li>For IETE members : 200 rupees</li>
                                                <li>For Non-IETE members: 400 rupees</li>
                                            </ol>
                                        </li>
                                    </ol>
                                    <h5 class="zxcv">Rules :</h5>
                                    <ol>

                                        <li>Entry fee: 200 for IETE member and 300 for IETE non member.</li>
                                        <li>
                                            Team can have maximum number of two members.
                                        </li>
                                        <li>
                                            Only one participant should control the robot no player can be exchanged in
                                            the middle of match.
                                        </li>
                                        <li>
                                            A robot can push or hit the ball. It cannot withhold or grab the ball.
                                        </li>
                                        <li>
                                            Human interference (e.g. touching the robot) during the game is not allowed.
                                        </li>
                                        <li>
                                            Decision of the Judges and Event Organizers shall be treated as final and
                                            binding on all and cannot be contested.
                                        </li>

                                    </ol>
                                    <br>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li>Sri Bhagath - 6374380811</li>
                                        <li> Saravanan - 93604 70161</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <a target="_blank" href="#" class="btn btn-primary">Register Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="painting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#171717;">
                    <div class="modal-header">
                        <h5 class="modal-title zxcv" id="exampleModalLongTitle">3D-Printing Workshop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab">


                            <div class="tab_content">
                                <div class="tabs_item">
                                    <h5 class="zxcv">Registration :</h5>
                                    <ol>
                                        <li>College ID is mandatory.</li>
                                        <li>Register online for the Workshop and provide the Registration Id on the day
                                            of
                                            event.
                                        </li>
                                        <li>Registration fee: 700 rupees

                                        </li>
                                    </ol>
                                    <h5 class="zxcv">Co-Ordinator :</h5>
                                    <ul>
                                        <li>Sowmiya - 8056844228</li>
                                        <li>Smiritishree - 9176956481</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <a target="_blank" href="#" class="btn btn-primary">Register Now!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <nav class="unslate_co--site-mobile-menu">
        <div class="close-wrap d-flex">
            <a href="#" class="d-flex ml-auto js-menu-toggle">
                <span class="close-label">Close</span>
                <div class="close-times">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                </div>
            </a>
        </div>
        <div class="site-mobile-inner"></div>
    </nav>

    <div class="unslate_co--site-wrap ">

        <div class="unslate_co--site-inner">

            <nav class="unslate_co--site-nav site-nav-target">

                <div class="container">

                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-8">

                            <ul class="site-nav-ul js-clone-nav d-none d-lg-inline-block">

                                <li class="has-children">
                                    <a href="#home-section" class="nav-link">Home</a>
                                </li>

                                <li><a href="#about-section" class="nav-link">About</a></li>
                                <li><a href="#events-section" class="nav-link">Events</a></li>

                                <li><a href="#testimonial-section" class="nav-link">Presenters</a></li>
                                <li><a href="#journal-section" class="nav-link">Gallery</a></li>
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            </ul>

                            <ul class="site-nav-ul-none-onepage text-left d-inline-block d-lg-none">
                                <li><a href="#" class="js-menu-toggle"><img
                                                src="{{ asset('theme/images/menuicon.jpg') }}"
                                                style="width: 20px; height: 20px;filter: invert(100%)"></a></li>
                            </ul>

                        </div>
                    </div>
                </div>

            </nav>
            <!-- END nav -->
            <div class="cover-v1 jarallax hero" style="background: radial-gradient(#141414 ,BLACK);" id="home-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9 mx-auto text-center">
                            <div>
                                <br><br>
                                <h1 class=""><img src="{{ asset('theme/images/collegelogo.webp') }}" alt="Pragyotsav2022" id="abcde"></h1>
                                <h1 class=""><img src="{{ asset('theme/images/ietelogo.webp') }}" id="fghjkl"></h1>
                                <h1>
                                    <img class="qwert" src="{{ asset('theme/images/25logo.webp') }}">
                                </h1>


                            </div>

                            <h1 class="heading"><img src="{{ asset('theme/images/titlelogo.webp') }}"
                                                     alt="Pragyotsav 2022" style="max-width: 100%; height: auto;"></h1>

                            <h5 class="subheading"> A National Level Technical Festival.</h5>
                        </div>

                    </div>
                </div>
            </div>
        <!--
{{--            <div class="unslate_co--section">--}}
        {{--                <div class="container">--}}
        {{--                    <div class="owl-carousel logo-slider">--}}
        {{--                        <div class="logo-v1 gsap-reveal">--}}
        {{--                            <img src="{{url_for('static', filename='images/logo-google.png')}}" alt="Image"--}}
        {{--                                class="img-fluid">--}}
        {{--                        </div>--}}
        {{--                        <div class="logo-v1 gsap-reveal">--}}
        {{--                            <img src="{{url_for('static', filename='images/logo-puma.png')}}" alt="Image"--}}
        {{--                                class="img-fluid">--}}
        {{--                        </div>--}}
        {{--                        <div class="logo-v1 gsap-reveal">--}}
        {{--                            <img src="{{url_for('static', filename='images/logo-paypal.png')}}" alt="Image"--}}
        {{--                                class="img-fluid">--}}
        {{--                        </div>--}}
        {{--                        <div class="logo-v1 gsap-reveal">--}}
        {{--                            <img src="{{url_for('static', filename='images/logo-adobe.png')}}" alt="Image"--}}
        {{--                                class="img-fluid">--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
                -->
            <div class="unslate_co--section" style="background: radial-gradient(#141414 ,BLACK);" id="about-section">
                <div class="container">

                    <div class="section-heading-wrap text-center mb-5">
                        <h2 class="heading-h2 text-center"><span class="gsap-reveal">About Us</span></h2>
                        <div class="border">
                        </div>
                    </div>


                    <div class="row justify-content-between">
                        <div>
                            <div class="listing-ite">
                                <div class="feature-v1 " data-aos="fade-up" data-aos-delay="200">

                                    <h3 class="zxcv">The College</h3>
                                    <p>Easwari Engineering College is an Autonomous
                                        institution (as per the 2019
                                        regulation), that was instituted in the
                                        academic year 1996 -1997, with the approval of the Government of Tamil Nadu and
                                        AICTE, New Delhi. As per Govt.,
                                        Regulations for affiliation, originally the college was affiliated to the
                                        University of Madras, subsequently, the
                                        college is affiliated to Anna University Chennai since 2002. Pursuing the
                                        philosophy of continuous learning, the
                                        Institution prepares the students to score creditably in the Academic sessions
                                        and also encourages them to develop their
                                        interpersonal and intrapersonal skills and attitudes to approach life with
                                        confidence. </p>
                                </div>
                            </div>

                            <!-- <div class="listing-ite">
                                <div class="feature-v1 " data-aos="fade-up" data-aos-delay="200">
                                    <h3 style="color: gold;">The IETE</h3>
                                    <p style="color: goldenrod;">The Institution of Electronics and Telecommunication
                                        Engineers (IETE) is a
                                        platform to enrich profound knowledge in the
                                        field of science and technology. It is India’s leading and most recognized
                                        professional society which was established in
                                        1953 and serves more than 1,25,000 members (including Corporate, Student, and
                                        ISF members) through 63 Centres, spread
                                        all over India and abroad. The government of India has recognised IETE as a
                                        Scientific and Industrial Research
                                        Organization (SIRO) and has also notified it as an educational Institution of
                                        National Eminence. The department of
                                        Electronics and Communication Engineering of SRM Easwari Engineering College,
                                        has been the local chapter of IETE from
                                        2008. Since then, our department has conducted multiple events to keep our
                                        student members engaged in various technical
                                        fields to learn efficient skills and acquire knowledge on the very same. </p>
                                </div>
                            </div>-->

                            <div class="listing-ite">
                                <div class="feature-v1 " data-aos="fade-up" data-aos-delay="200">

                                    <h3 class="zxcv">Pragyotsav</h3>
                                    <p>Pragyotsav is a national-level technical event
                                        conducted by the IETE forum of our
                                        college. This event is to provide
                                        extensive knowledge and exposure in the field of engineering and come out with
                                        innovative ideas on the technical
                                        challenges. Our past Pragyotsav events bloomed with triumph with the dedication
                                        of fellow members, support from the
                                        college, and the contribution of the sponsors. This event had reached more than
                                        10,000 undergraduate and postgraduate
                                        students across India. This year we are expecting bigger reach in order to sow
                                        more knowledge into students by this
                                        event. </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="unslate_co--section" style="background: radial-gradient(#141414 ,BLACK);" id="events-section">
                <div class="container">

                    <div class="section-heading-wrap text-center mb-5">
                        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Events</span></h2>
                        <div class="border"></div>
                        <br>

                    </div>

                    <div class="row gutter-v3">
                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#racing">
                                <div class="feature-v1 " data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/roboracing.jpg') }}" alt="Icon" style="width: 100%"/>
                                    </div>
                                    <h3 class="zxcv">RC Robo Racing</h3>
                                    <p>This eye-catching event is all about the mini bots that
                                        should navigate carefully
                                        along the stipulated path within the
                                        stipulated time, avoiding and tackling obstacles to the finishing line. </p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#drone">
                                <div class="feature-v1 " data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/drone.jpg') }}" alt="Icon"
                                             width="100%">
                                    </div>
                                    <h3 class="zxcv">Drone Racing</h3>
                                    <p>Fly Above and Beyond. Pilots, Get ready for an exciting drone racing league .Find your path and fly onward.It is a sport where you control drones and unleash your skills.Fly free and show your unique perspective. Come, compete and get a chance to win prizes.</p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#war">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/robowar.jpg')}}" alt="Icon"
                                             width="100%">
                                    </div>
                                    <h3 class="zxcv">Robo War</h3>
                                    <p>We are all soldiers in the war of life. Now ready for a real fun war?! Get your
                                        robots to battle their ways in the
                                        field, abiding rules, pressures and tests to top up the leaderboard and win
                                        exciting prizes. </p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>


                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#hardware">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/hardware.jpg') }}" alt="Icon"
                                             width="100%">
                                    </div>
                                    <h3 class="zxcv">Hardware Assembling</h3>
                                    <p>Is your life broken, don't know how to assemble, here is a chance to make your
                                        hands play on the broken things, play
                                        till, you get it assembled. </p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#soldering">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/soldering.jpg')}}" alt="Icon"
                                             width="100%">
                                    </div>
                                    <h3 class="zxcv">Style Soldering</h3>
                                    <p>A perfect chance to focus and fuse. Precision and perfection is primary. Bring
                                        out your crafting skills to design a
                                        style of a letter or a pattern. Let your fingers do the talking and showcase the
                                        magic. </p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#follower">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/linefollow.jpg')}}" alt="Icon"
                                             width="100%">
                                    </div>
                                    <h3 class="zxcv">Robo-Line Follower</h3>
                                    <p>"I took a path that was less taken by men"-Robert Frost. Prep up your robots to
                                        detect and follow a predefined path
                                        within the shortest time, overcoming several twists and turns to the end of the
                                        path and grab up your prize. </p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#presentation">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/presentation.jpg')}}" alt="Icon"
                                             width="100%">
                                    </div>
                                    <h3 class="zxcv">Technical Paper Presentaion</h3>
                                    <p>Showcase your research ideas as paper presentation. This paper presentation
                                        provides a platform for young minds to be
                                        the technology changer with their ideas and just let it flow through your words.
                                    </p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#soccer">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/soccer.jpg')}}" alt="Icon"
                                             width="100%"/>
                                    </div>
                                    <h3 class="zxcv">Robo Soccer</h3>
                                    <p>Y'all soccer fans and no-one plays soccer better than engineers in their own
                                        better way, we hail this event ROBO SOCCER.
                                        So if you are geared up for the challenge get your soccer playing bots ready to
                                        compete and bring out the latent RONALDO
                                        or MESSI in you. </p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#painting">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
                                        <img src="{{ asset('theme/images/printing.jpg')}}" alt="Icon"
                                             width="100%">
                                    </div>
                                    <h3 class="zxcv">3D-Printing WorkShop</h3>
                                    <p>Printing is fine. Heard of 3D printing? Join this event to learn more and to
                                        manure your knowledge about it and also to
                                        be a part of a fun-filled problem (design) solving.</p>
                                    <p class="font-weight-bold text-xl-left gold_color">Explore
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="9 6 15 12 9 18"/>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>

                    <!--
                     <div class="col-md-6 col-lg-4 mb-4 listing-item">
                            <a data-toggle="modal" data-target="#3dpainting">
                                <div class="feature-v1" data-aos="fade-up" data-aos-delay="200">
                                    <div class="wrap-icon mb-3">
{{--                                        <img src="{{url_for('static', filename='images/printing.jpg')}}" alt="Icon"--}}
                            width="100%">
                    </div>
                    <h3 class="zxcv">3D <br> Printing</h3>
                    <p>Printing is fine. Heard of 3D printing? Join this event to learn more and to
                        manure your knowledge about it and also to
                        be a part of a fun-filled problem (design) solving.</p>
                </div>

        </div>
-->

                    </div>
                </div>
            </div>
            <div class="unslate_co--section" id="registration">
                <div class="container">

                    <div class="section-heading-wrap text-center mb-5">
                        <!-- designed by me... enjoy! -->
                        <div class="wrapper">
                            <a class="cta" target="_blank" href="#">
                                <span id="sspan">Register Online!! </span>
                                <span id="sspan">
                                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path class="one"
                                                  d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                                  fill="#FFFFFF"></path>
                                            <path class="two"
                                                  d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                                  fill="#FFFFFF"></path>
                                            <path class="three"
                                                  d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                                  fill="#FFFFFF"></path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="unslate_co--section" style="background: radial-gradient(#141414 ,BLACK);" id="journal-section">
                <div class="container">
                    <div class="section-heading-wrap text-center mb-5">
                        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">A leap towards yester leap
                                year</span></h2>
                        <div class="border"></div>
                    </div>


                    <div class="row gutter-v4 align-items-stretch">
                        <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

                            <a class="grid-item blog-item w-100 h-100">
                                <div class="overlay">
                                    <div class="portfolio-item-content">
                                        <h3>The Elation Of Participation.</h3>
                                    </div>
                                </div>
                                <img src="{{ asset('theme/images/IMG_0416.JPG')}}" class="lazyload"
                                     alt="Image"/>
                            </a>


                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="grid-item blog-item w-100 h-100">
                                <div class="overlay">
                                    <div class="portfolio-item-content">
                                        <h3>The Complacency in the Participation!</h3>

                                    </div>
                                </div>
                                <img src="{{ asset('theme/images/IMG_1834.JPG')}}" class="lazyload"
                                     alt="Image"/>
                            </a>
                        </div>


                        <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

                            <a class="grid-item blog-item w-100 h-100">
                                <div class="overlay">
                                    <div class="portfolio-item-content">
                                        <h3>The Actuation of Erudition.</h3>

                                    </div>
                                </div>
                                <img src="{{ asset('theme/images/IMG_0349.JPG')}}" class="lazyload"
                                     alt="Image"/>
                            </a>


                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a class="grid-item blog-item w-100 h-100">
                                <div class="overlay">
                                    <div class="portfolio-item-content">
                                        <h3>A Luminary’s Accolade</h3>

                                    </div>
                                </div>
                                <img src="{{ asset('theme/images/vjs1.png')}}" class="lazyload"
                                     alt="Image"/>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
                            <a class="grid-item blog-item w-100 h-100">
                                <div class="overlay">
                                    <div class="portfolio-item-content">
                                        <h3>The Jubilation of Recognition.</h3>
                                    </div>
                                </div>
                                <img src="{{ asset('theme/images/vjs2.png')}}" class="lazyload"
                                     alt="Image"/>
                            </a>
                        </div>


                    </div>

                </div>
            </div>
            <div class="unslate_co--section" style="background: radial-gradient(#141414 ,BLACK);"
                 id="testimonial-section">
                <div class="container">
                    <div class="section-heading-wrap text-center mb-5">
                        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Our Presenters</span>
                        </h2>
                        <div class="border"></div>
                    </div>
                </div>

                <span class="row gasp-reveal">
                    <div class="column" style="text-align: center;">
                        <figure>
                            <img src="{{ asset('theme/images/iniya.jpg')}}" class="lazyload   img-fluid"
                                 alt="Images"/>
                            <figcaption style="text-align: center;">
                                <h4 class="nameline zxcv">INIYA R</h4>
                                <h6 class="nline">SECRETARY </h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column">
                        <figure style="text-align: center;">
                            <img src="{{ asset('theme/images/akshaya.jpg')}}" class="lazyload   img-fluid"
                                 alt="Images"/>
                            <figcaption style="text-align: center;">
                                <h4 class="nameline zxcv">AKSHAYA M</h4>
                                <h6 class="nline">SECRETARY </h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column">
                        <figure style="text-align: center;">
                            <img src="{{ asset('theme/images/keshav.jpg')}}" class="lazyload  img-fluid"
                                 alt="Images"/>
                            <figcaption style="text-align: center;">
                                <h4 class="nameline zxcv">KESAV G</h4>
                                <h6 class="nline">PRESIDENT</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column">
                        <figure style="text-align: center;">
                            <img src="{{ asset('theme/images/vishwa.jpg')}}" class="lazyload    img-fluid"
                                 alt="Images"/>
                            <figcaption style="text-align: center;">
                                <h4 class="nameline zxcv">VISHWAA T</h4>
                                <h6 class="nline">TREASURER</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column" style="text-align: center;">
                        <figure style="text-align: center;">
                            <img src="{{ asset('theme/images/swetha.jpg')}}" class="lazyload   "
                                 alt="Images"/>
                            <figcaption style="text-align: center;">
                                <h4 class="nameline zxcv">SWETHA S</h4>
                                <h6 class="nline">TREASURER</h6>
                            </figcaption>
                        </figure>
                    </div>
                </span>

            </div>

            <div class="unslate_co--section" style="background: radial-gradient(#141414 ,BLACK);" id="contact-section">
                <div class="container">
                    <div class="section-heading-wrap text-center mb-5">
                        <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">For Queries </span>
                        </h2>
                        <div class="border"></div>
                    </div>


                    <div class="row justify-content-between">

                        <div class="col-md-6">
                            <form method="post" class="form-outline-style-v1" action="">
                                <div class="form-group row mb-0">

                                    <div class="col-lg-6 form-group gsap-reveal">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                    <div class="col-lg-6 form-group gsap-reveal">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email">
                                    </div>
                                    <div class="col-lg-12 form-group gsap-reveal">
                                        <label for="message">Write your message...</label>
                                        <textarea name="message" id="message" cols="30" rows="7"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row gsap-reveal">
                                    <div class="col-md-12 d-flex align-items-center">
                                        <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3"
                                               value="Send Message">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="col-md-4">
                            <div class="contact-info-v1">
                                <div class="gsap-reveal d-block">
                                    <span class="d-block contact-info-label">Email</span>
                                    <a href="#" class="">eec.ieteforum@gmail.com</a>
                                </div>
                                <div class="gsap-reveal d-block">
                                    <span class="d-block contact-info-label">Kesav G - President</span>
                                    <a href="#" class="">9884809092</a>
                                </div>
                                <div class="gsap-reveal d-block">
                                    <span class="d-block contact-info-label">Vishwaa T - Treasurer</span>
                                    <a href="#" class="">9600297742</a>
                                </div>
                                <div class="gsap-reveal d-block">
                                    <span class="d-block contact-info-label">Easwari Engineering
                                        College</span>
                                    <address class="">162, Bharathi Salai, Ramapuram,
                                        Chennai, Tamil
                                        Nadu - 600089
                                    </address>
                                </div>
                                <div class="gsap-reveal d-block">
                                    <a target="_blank" href="https://www.instagram.com/pragyotsav_2022/"><span
                                                class="d-block contact-info-label">Follow Us @ <img class="fab" style="width: 23.8px; height: 23px;margin-top: -6.9px;" src="{{ asset('theme/images/instagram.png') }}"></span>
                                    </a></label>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- END .unslate_co-site-inner -->

        <footer class="unslate_co--footer unslate_co--section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-12">

                        <div class="footer-site-logo"><a href="#">Pragyotsav <span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">2022</span>
                        </div>

                        <center>
                            <iframe
                                    src="https://maps.google.com/maps?q=SRM%20Easwari%20Engineering%20College%20162%2C%20Bharathi%20Salai%2C%20Ramapuram%2C%20Ramapuram%2C%20Chennai%2C%20Tamil%20Nadu%20600089&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near"
                                    width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </center>

                    </div>

                </div>
            </div>
        </footer>


    </div>


    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
        <div class="site-loader"></div>
    </div>

@endsection