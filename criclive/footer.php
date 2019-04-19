<!--
Authors :
Chathura Widanage
Sasith Wathmal Sonnadara
@Moraspirit
-->
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UNIVERSITY SPORTS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald|Coda|Arimo' rel='stylesheet' type='text/css'>

        <style type="text/css">
            /* Sticky footer styles -------------------------------------------------- */
            html {
                position: relative;
                min-height: 100%;
            }
            /*            body {
                            Margin bottom by footer height 
                            margin-bottom:600px;
                        }*/
            @media (max-width: 768px) {
                body{
                    margin-bottom:670px;
                }

            }
            @media (min-width:768px)  and (max-width: 970px){
                body{
                    margin-bottom:540px;
                }

            }

            @media (min-width: 970px) {
                body{
                    margin-bottom:470px;
                }

            }

            .footer {
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                max-height: 100%;
                //  background-color: #f5f5f5;
                background-image: url('http://sports.moraspirit.com/pics/footertexture.gif');
                background-repeat: repeat;
            }
            #footer-wrapper{
                padding-top: 10px;
            }

            #footer-wrapper a{
                color: white;
                font-size: 16px;
            }

            #bottom-footer{
                padding-top: 15px;
                font-family: 'Arimo', sans-serif;
                color: #B2B2B2;
            }

            #bottom-footer td{
                padding: 8px 8px 8px 8px;
            }

            #bottom-footer .form-type-textfield{
                margin-top: 12px;
                margin-bottom: 12px;
            }

            #bottom-footer .content{
                font-family: 'Arimo', sans-serif;
                padding-top: 10px;
                padding-bottom: 20px;
            }

            #bottom-footer a{
                color: #B2B2B2;
                font-size: 13px;

            }
            /*
            additional footer styles
            from moraspirit site
    
            */
            .titlecontainer h4{
                font-family: 'Coda', cursive;
                text-transform: uppercase;
                margin-top: 15px;
                color: #ffffff;
                font-size: 15px;
                font-weight: bold;
            }

            .form-required{color:#f00;}

            .row-same-height {
                display: table;
                width: 100%;
                /* fix overflow */
                table-layout: fixed;
            }

            .equalheight {
                overflow: hidden;
            }

            @media (max-width: 768px) {
                .col-xs-6:nth-child(2n+1) {
                    clear:both;
                }
            }

            /*            .field-dark {
                            color: white;
                            background-color: var(--darken-3);
                            border: 1px solid var(--darken-1);
                            border-radius: var(--border-radius, 3px);
                        }*/

            .field-dark::placeholder {
                color: rgba(255,255,255,.75);
            }

            .field-dark:focus {
                outline: 0;
                border: 1px solid rgba(255,255,255,.5);
                box-shadow: 0 0 0 2px rgba(255,255,255,.25);
            }

            /*
            extracted css
            */
            #INPUT_1 {
                box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
                box-sizing: content-box;
                color: rgb(85, 85, 85);
                height: 20px;
                vertical-align: middle;
                width: 206px;
                perspective-origin: 110px 15px;
                transform-origin: 110px 15px;
                background: rgb(64, 64, 64) none repeat scroll 0% 0% / auto padding-box border-box;
                border: 1px solid rgb(34, 34, 34);
                border-radius: 3px 3px 3px 3px;
                font: normal normal normal normal 14px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
                margin: 0px 0px 9px;
                outline: rgb(85, 85, 85) none 0px;
                padding: 4px 6px;
                transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
            }/*#INPUT_1*/

            #DIV_1 {
                color: rgb(102, 102, 102);
                height: 46px;
                text-align: center;
                width: 100%;
                margin-right: auto;
                margin-left: auto;
                perspective-origin: 580px 30.5px;
                transform-origin: 580px 30.5px;
                border: 0px none rgb(102, 102, 102);
                font: normal normal normal normal 12px/18px Arimo, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                outline: rgb(102, 102, 102) none 0px;
                padding: 0px 0px 15px 15px;
            }/*#DIV_1*/

            #DIV_2 {
                box-shadow: rgba(0, 0, 0, 0.701961) 0px 0px 3px 0px inset;
                color: rgb(102, 102, 102);
                height: 44px;
                text-align: center;
                perspective-origin: 580px 23px;
                transform-origin: 580px 23px;
                background: rgb(17, 17, 17) none repeat scroll 0% 0% / auto padding-box border-box;
                border-top: 1px solid rgb(30, 30, 30);
                border-right: 0px none rgb(102, 102, 102);
                border-bottom: 1px solid rgb(30, 30, 30);
                border-left: 0px none rgb(102, 102, 102);
                font: normal normal normal normal 12px/18px Arimo, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                outline: rgb(102, 102, 102) none 0px;
            }/*#DIV_2*/

            #DIV_3 {
                color: rgb(102, 102, 102);
                height: 44px;
                text-align: center;
                perspective-origin: 580px 22px;
                transform-origin: 580px 22px;
                border: 0px none rgb(102, 102, 102);
                font: normal normal normal normal 12px/18px Arimo, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                outline: rgb(102, 102, 102) none 0px;
                padding: 0px 10px 0px 0px;
            }/*#DIV_3*/

            #DIV_3:after {
                clear: both;
                color: rgb(102, 102, 102);
                display: table;
                text-align: center;
                visibility: hidden;
                width: 1px;
                perspective-origin: 0.5px 0px;
                transform-origin: 0.5px 0px;
                content: '';
                border: 0px none rgb(102, 102, 102);
                font: normal normal normal normal 12px/0px Arimo, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                outline: rgb(102, 102, 102) none 0px;
            }/*#DIV_3:after*/

            #DIV_3:before {
                color: rgb(102, 102, 102);
                display: table;
                text-align: center;
                width: 1px;
                perspective-origin: 0.5px 0px;
                transform-origin: 0.5px 0px;
                content: '';
                border: 0px none rgb(102, 102, 102);
                font: normal normal normal normal 12px/0px Arimo, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                outline: rgb(102, 102, 102) none 0px;
            }/*#DIV_3:before*/

            #DIV_4 {
                color: rgb(102, 102, 102);
                display: inline-block;
                height: 18px;
                text-align: center;
                perspective-origin: 144.015625px 22px;
                transform-origin: 144.015625px 22px;
                border: 0px none rgb(102, 102, 102);
                font: normal normal normal normal 12px/18px Arimo, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                outline: rgb(102, 102, 102) none 0px;
                padding: 13px;
            }/*#DIV_4*/

            #A_5 {
                color: rgb(240, 40, 40);
                text-align: center;
                text-decoration: none;
                border: 0px none rgb(240, 40, 40);
                font: normal normal normal normal 12px/18px Arimo, 'Helvetica Neue', Helvetica, Arial, sans-serif;
                outline: rgb(240, 40, 40) none 0px;
            }/*#A_5*/

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <!--<div class="row social_bar">
                <ul>
                    <li></li>
                </ul>
            </div>-->

            <br><br>

            <div class="container" ng-app="mspApp" ng-controller="scoreCtrl">

                <!--End of body-->
                <footer class="footer container-fluid">
                    <div id="footer-wrapper">
                        <div class="row" style="background-color: rgb(234, 46, 43);">
                        </div>
                    </div>
                    <div class="container" id="bottom-footer" style="padding-top: 30px; text-align: center; color: grey">
                        <div class="row" style="text-align: left;">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

                                <div id="block-simplenews-0" class="clearfix block block-simplenews">

                                    <div class="titlecontainer"><h4>Receive our Newsletter</h4></div>

                                    <div class="content">

                                        <form action="http://moraspirit.com/" method="post" id="simplenews-subscriptions-multi-block-form" accept-charset="UTF-8">
                                            <div>
                                                <div id="edit-newsletters" class="form-checkboxes">
                                                    <div class="form-item form-type-checkbox form-item-newsletters-58">

                                                    </div>
                                                </div>
                                                
                                                <div class="form-item form-type-textfield form-item-mail">
                                                    <br>
                                                    
                                                </div>

                                               
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="border: none; vertical-align: top;">
                                                <a href="http://old.moraspirit.com" target="_blank" style="line-height: 200%; font-weight: 300;"></a><br>
                                                <!--<a href="http://moraspirit.com/careers" style="line-height: 250%; font-weight: 300;">| Careers</a><br>-->
                                                <a href="http://moraspirit.com/site-map" style="line-height: 250%; font-weight: 300;"></a><br>
                                                <a data-toggle="modal" role="button" href="#myModal3" style="line-height: 250%; font-weight: 300;"></a><br>
                                                <a href="sites/default/files/spaces.pdf" target="_blank" style="line-height: 200%; font-weight: 300;"></a><br>
                                            </td>

                                            <td style="border:none;">

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <table>
                                    <tbody>
                                        <tr>

                                            <td style="border: none; color:#B2B2B2">
                                              
                                            </td>
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>

                                              
                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>

                                        </tr>
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                
                            </div>
                        </div>

                        <div class="row" style="padding-bottom: 15px">
                            <div id="DIV_1">
                                <div id="DIV_2">
                                    <div id="DIV_3">
                                        <div id="DIV_4">
                                            ©2019 All Rights Reserved |CricTeam
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </footer>

            </div>
    </body>
</html>