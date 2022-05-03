<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <link rel="icon" type="image/xl-icon" href="{{ url_for('static',    filename='images/prag.png') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ url_for('static',    filename='css/vendor/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ url_for('static',    filename='css/reg.css') }}">

    <style>
        #canvas,
        #text {
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            z-index: -1;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;

        }

        .form-group .form-control {
            border: none;
            background: none;
            padding-left: 0;
            padding-right: 0;
            border-radius: 0;
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }

        .form-group .form-control:active,
        .form-group .form-control:focus {
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid white;
        }

        .form-control {
            border: none;
            background: none;
            padding-left: 0;
            padding-right: 0;
            border-radius: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }

        .form-control:active,
        .form-control:focus {
            background: none;
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid white;
        }

        .button-21 {
            align-items: center;
            appearance: none;
            background-color: #fd3e3e;
            background-image: linear-gradient(1deg, #ffff99, #cc9900 99%);
            background-size: calc(100% + 20px) calc(100% + 20px);
            border-radius: 100px;
            border-width: 0;
            box-shadow: none;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            display: inline-flex;
            font-size: 1rem;
            height: auto;
            justify-content: center;
            line-height: 1.5;
            padding: 6px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s, background-position .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .button-21:active,
        .button-21:focus {
            outline: none;
        }

        .asdf {
            color: goldenrod;
        }

        .zxcv {
            color: #FFDF33;
        }

        .button-21:hover {
            background-position: -20px -20px;
        }

        .button-21:focus:not(:active) {
            box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
        }

        .titl {
            max-width: 60%;
            height: auto;

        
        }

        @media (max-width: 991.98px) {
            .titl {
                max-width: 90%;
            }
        }


        .inp {
            background: transparent;
            border: none;
            width: 100%;
            color: #FFF;
            background: transparent;
            border: none;
            outline: none;
        }
    </style>
</head>

<body>
    <div style="text-align: center; margin-bottom: -100px;">
        <img class="titl" src="{{url_for('static', filename='images/titlelogo.webp')}}" alt="Pragyotsav 2022"
            onerror="this.onerror=null;this.src='static/images/titlelogo.png';">

    </div>
    <section class="ftco-section">
        <div class="row no-gutters">
            <div class="col-md-7">
                <div class="contact-wrap w-100 p-md-5 p-4" style="background-color:transparent;">
                    <h3 class="zxcv" class="mb-4">Register - To quench your fervor
                    </h3>
                    <div class="col-md-12">
                        <div class="form-group">
                            <select style="background-color: #171717; font-size: large;" class="form-control" required
                                id="eventselector">
                                <option value="" disabled selected>Select the event you wish to register for!!</option>
                                <option value="racing">Rc Robo Racing</option>
                                <option value="drone">Drone Racing</option>
                                <option value="follower">Robo Line Follower</option>
                                <option value="presentation">Technical Paper presentation</option>
                                <option value="war">Robo War</option>
                                <option value="soccer">Robo Soccer</option>
                                <option value="soldering">Style Soldering</option>
                                <option value="hardware">Hardware Assembling</option>
                                <option value="workshop">3D-Printing WorkShop</option>
                            </select>
                        </div>
                    </div>
                    <div class="idiots" id="racing" style="display: none;">
                        <h4 class="zxcv" class="zxcv">You are registering for rc robo racing!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data"  name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Rc Robo Racing">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12" style="margin: 10px;">
                                    <input type="file" name="file" id="bbtn1" required hidden/>
                                    <label class="trlabel" for="bbtn1">Transaction Receipt!</label>
                                    <span class="osen" id="chosen1">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem11 button-21">First Teammate</p>

                                        <p style="float: left; margin-left: 15px; margin-left: 15px;"
                                            class="mem12 button-21">Second Teammate</p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem11">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem12">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="drone" style="display: none;">
                        <h4 class="zxcv" class="zxcv">You are registering for Drone Racing!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Drone Racing">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn2" required hidden/>
                                    <label class="trlabel" for="bbtn2">Transaction Receipt!</label>
                                    <span class="osen" id="chosen2">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem21 button-21">First Teammate</p>
                                        <p style="float: left; margin-left: 15px;" class="mem22 button-21">Second Teammate</p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem21">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem22">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="follower" style="display: none;">
                        <h4 class="zxcv" class="zxcv">You are registering for Robo line follower!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Robo line follower">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn3" required hidden/>
                                    <label class="trlabel" for="bbtn3">Transaction Receipt!</label>
                                    <span class="osen" id="chosen3">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem31 button-21">First Teammate<p>
                                        <p style="float: left; margin-left: 15px;" class="mem32 button-21">Second Teammate<p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem31">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem32">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="presentation" style="display: none;">
                        <h4 class="zxcv">You are registering for Technical Paper Presentation!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Technical Paper Presentaion">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn4" required hidden/>
                                    <label class="trlabel" for="bbtn4">Transaction Receipt!</label>
                                    <span class="osen" id="chosen4">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem41 button-21">First Teammate<p>
                                        <p style="float: left; margin-left: 15px;" class="mem42 button-21">Second Teammate<p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem41">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem42">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="war" style="display: none;">
                        <h4 class="zxcv">You are registering for Robo War!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Robo war">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn5" required hidden/>
                                    <label class="trlabel" for="bbtn5">Transaction Receipt!</label>
                                    <span class="osen" id="chosen5">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem51 button-21">First Teammate<p>
                                        <p style="float: left; margin-left: 15px;" class="mem52 button-21">Second Teammate<p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem51">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem52">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="soccer" style="display: none;">
                        <h4 class="zxcv">You are registering for Robo Soccer!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Robo Soccer">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn6" required hidden/>
                                    <label class="trlabel" for="bbtn6">Transaction Receipt!</label>
                                    <span class="osen" id="chosen6">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem61 button-21">First Teammate<p>
                                        <p style="float: left; margin-left: 15px;" class="mem62 button-21">Second Teammate<p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem61">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem62">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="soldering" style="display: none;">
                        <h4 class="zxcv">You are registering for Style Soldering!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Style Soldering">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn7" required hidden/>
                                    <label class="trlabel" for="bbtn7">Transaction Receipt!</label>
                                    <span class="osen" id="chosen7">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem71 button-21">First Teammate<p>
                                        <p style="float: left; margin-left: 15px;" class="mem72 button-21">Second Teammate<p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem71">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem72">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="hardware" style="display: none;">
                        <h4 class="zxcv">You are registering for Hardware Assembling!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Team Leader Information </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="Hardware Assembling">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn8" required hidden/>
                                    <label class="trlabel" for="bbtn8">Transaction Receipt!</label>
                                    <span class="osen" id="chosen8">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <p style="float: left; margin-left: 15px;" class="mem81 button-21">First Teammate<p>
                                        <p style="float: left; margin-left: 15px;" class="mem82 button-21">Second Teammate<p>
                                    </div>

                                </div>
                                <div class="row" style="display: none;" id="mem81">
                                    <div class="col-md-6">
                                        <label>Team Member-I </label>
                                    </div>
                                    <div class="col-md-6">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Member-1"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-1" maxlength="10" class="form-control rem1"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem1"
                                                name="Year-1">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="Department-1"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem1" name="College-1"
                                                placeholder="College">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <label></label>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row" style="display: none;" id="mem82">
                                    <div class="col-md-6">
                                        <label>Team Member-II </label>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Member-2"
                                                placeholder="Member Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" name="Phone-2" maxlength="10" class="form-control rem2"
                                                placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select style="background-color: #171717;" class="form-control rem2"
                                                name="Year-2">
                                                <option value="" disabled selected>Year</option>

                                                <option>First year</option>
                                                <option>Second year</option>
                                                <option>Third year</option>
                                                <option>Fouth year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="Department-2"
                                                placeholder="Department">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control rem2" name="College-2"
                                                placeholder="College">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="idiots" id="workshop" style="display: none;">
                        <h4 class="zxcv">You are registering for 3D-Printing Workshop!!</h4>
                        <form method="POST" id="contactForm" enctype="multipart/form-data" name="contactForm" action="/registerpage"
                            class="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <label><span></span></label>
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="Event" value="3d-printing workshop">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="TeamLead" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control inp" name="TEmail" placeholder="Email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="TPhone" maxlength="10" class="form-control"
                                            placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select style="background-color: #171717;" class="form-control" name="TYear">
                                            <option value="" disabled selected>Year</option>

                                            <option>First year</option>
                                            <option>Second year</option>
                                            <option>Third year</option>
                                            <option>Fouth year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TDepartment"
                                            placeholder="Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="TCollege" placeholder="College"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="file" name="file" id="bbtn9" required hidden/>
                                    <label class="trlabel" for="bbtn9">Transaction Receipt!</label>
                                    <span class="osen" id="chosen9">Add Screenshot!</span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Register" class="button-34 ">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-stretch" style="position: relative;">
                <div>
                    <figure>
                        <img src="{{url_for('static', filename='images/eventlogo.png')}}"
                            class="info-wrap w-100 p-5 img" style="object-fit: cover;" align="middle" />
                        <figcaption>Upi id: phone number:</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <script src="{{url_for('static', filename='js/jquery.min.js')}}"></script>
    <script src="{{url_for('static', filename='js/popper.js')}}"></script>
    <script src="{{url_for('static', filename='js/bootstrap.min.js')}}"></script>
    <script src="{{url_for('static', filename='js/jquery.validate.min.js')}}"></script>
    <script src="{{url_for('static', filename='js/main.js')}}"></script>
    <script>
        $(function () {
            $('#eventselector').change(function () {
                $('.idiots').hide();
                $('#' + $(this).val()).show();
            });
        });
        $(document).ready(function () {
            $(".mem11").click(function () {
                $("#mem11").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem12").click(function () {
                $("#mem12").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });

            $(".mem21").click(function () {
                $("#mem21").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem22").click(function () {
                $("#mem22").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });
            $(".mem31").click(function () {
                $("#mem31").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem32").click(function () {
                $("#mem32").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });
            $(".mem41").click(function () {
                $("#mem41").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem42").click(function () {
                $("#mem42").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });

            $(".mem51").click(function () {
                $("#mem51").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem52").click(function () {
                $("#mem52").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });
            $(".mem61").click(function () {
                $("#mem61").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem62").click(function () {
                $("#mem62").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });

            $(".mem71").click(function () {
                $("#mem71").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem72").click(function () {
                $("#mem72").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });

            $(".mem81").click(function () {
                $("#mem81").toggle();

                $(".rem1").val(null);

                if ($(this).text() == "First Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("First Teammate");

            });
            $(".mem82").click(function () {
                $("#mem82").toggle();
                $(".rem2").val(null);
                if ($(this).text() == "Second Teammate")
                    $(this).text("Remove Teammate")
                else
                    $(this).text("Second Teammate");

            });
            $('#bbtn1').change(function () {
                $('#chosen1').text( $(this).val().split('\\').pop());              
                
            });
            $('#bbtn2').change(function () {
                $('#chosen2').text( $(this).val().split('\\').pop());               
            
            });
            $('#bbtn3').change(function () {
                $('#chosen3').text( $(this).val().split('\\').pop());               
                
            });$('#bbtn4').change(function () {
                $('#chosen4').text( $(this).val().split('\\').pop());               
                
            });$('#bbtn5').change(function () {
                $('#chosen5').text( $(this).val().split('\\').pop());               
                
            });$('#bbtn6').change(function () {
                $('#chosen6').text( $(this).val().split('\\').pop());               
                
            });$('#bbtn7').change(function () {
                $('#chosen7').text( $(this).val().split('\\').pop());               
                
            });$('#bbtn8').change(function () {
                $('#chosen8').text( $(this).val().split('\\').pop());               
                
            });$('#bbtn9').change(function () {
                $('#chosen9').text( $(this).val().split('\\').pop());               
                
            });



        });

    </script>

</body>

</html>