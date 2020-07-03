$(document).ready(function() {

    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
    $("#rule").modal("show");
    badge("#badge");

    function badge(div_img_id) {

        let img;
        if (!img) {
            $(div_img_id).empty();
            img = $('<img />', {
                src: '/images/badge.png'
            }).appendTo(div_img_id);
        }

    }
    $('#playagain').hide();

    $('#myTable').prepend(`<tr id="tr20" class="">
<td><input type="button"id="button1" value="0"class="b_game" name="btn1"  /></td>
<td><input type="button" id="button2" value="0"class="b_game" name="btn2" /></td>
<td><input type="button" id="button3"value="0"class="b_game" name="btn3" /></td>
<td><input type="button" id="button4" value="0"class="b_game" name="btn4" /></td>
<td><input type="button" id="button5" value="0"class="b_game" name="btn5" /></td>
<td style=""><input type="button" id="button6" value="0" class="b_game" name="btn6"/></td>
<td><input type="button" id="button7"value="0"class="b_game" name="btn7"  /></td>
<td style="border-style: solid;;color:#0275d8"><input type="button" id="button8" value="1"class="b_game" name="btn8" /></td>
<td><input type="text" class="btext" id="text1"value="1" style="text-align:center;font-weight:30px;
background-color:#0275d8;color:white;width:55px; margin-top:-2px;height:45px;line-height: 45px; border-radius: 7px;" name="text"/></td>
<td><button type="button" id="remove" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
 </tr>`)


    $("#remove").click(() => {
        let Id = $("#tr20").remove();

    });

    $(".info0").html("You can delete the first game block if you want is just and example.")
    time0 = setTimeout(() => {
        $("#message0").fadeOut(2000);
    }, 9000);

    $("#start").click(() => {
      
        let random1=Math.floor(Math.random() * (5-2+1)) + 2;
        let random2=Math.floor(Math.random() *  (9-5+1)) + 5;
        let random3=Math.floor(Math.random() * (20-15+1)) + 15;
        let random4=Math.floor(Math.random() * (30-21+1)) + 21;
        let random5=Math.floor(Math.random() * (60-40+1)) + 40;
        let random6=Math.floor(Math.random() * (129-90+1)) + 90;
        let random7=Math.floor(Math.random() * (166-130+1)) + 130;
        let ran1=Math.round(Math.random())//generate a random number between 0 and 1
        let ran2=Math.round(Math.random())
        let ran3=Math.round(Math.random())
        let ran4=Math.round(Math.random()) 
        let ran5=Math.round(Math.random())
        let ran6=Math.round(Math.random())
        let ran7=Math.round(Math.random())
        let ran8=Math.round(Math.random())



        var Tab1 = `<tr id=tr1>
                <td>
                <input type="button" id="button11" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button21" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button31"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button41" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button51" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button61" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button71" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button81" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="button" class="btext" style="background:#0275d8;"value="${random1}" id="test1"style="" name=btn1/></td>
                <td><button type="button" id="answer" class="btn btn-success value1"><i class="fa fa-play " aria-hidden="true"></i></button></td>

                </tr>`



        badge("#badge")

        var Tab2 = `<tr id=tr2>
                <td>
                <input type="button" id="button12" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button22" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button32"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button42" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button52" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button62" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button72" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button82" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="button" class="btext" value="${random2}" id="test2"style="" name=btn2/></td>
                <td><button type="button" id="answer" class="btn btn-success value2"><i class="fa fa-play " aria-hidden="true"></i></button></td>

                </tr>`

        var Tab3 = `<tr id=tr3>
                <td>
                <input type="button" id="button13" value="0" class="b_game" name="btn1"/>
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button23" value="0"class="b_game" name="btn2"/>
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button33"value="0"class="b_game" name="btn3"/>
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button43" value="0"class="b_game" name="btn4"/>
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button53" value="1"class="b_game" name="btn5"/>
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button63" value="0" class="b_game" name="btn6"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button73"value="${ran2}"class="b_game" name="btn7"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button83" value="${ran3}"class="b_game" name="btn8"/>
                <input type="hidden"id="h_button8" value="1" name="btn8"/>
                </td>
                <td><input type="text" class="btext" id=text3 style="" name="text3"/></td>
                <td>
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </td>
                <td>Enter answer</td>
                </tr>`


        var Tab4 = `<tr id=tr4>
        <td>
        <input type="button" id="button14" value="0" class="b_game" name="btn1"/>
        <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
        </td>
        <td>
        <input type="button" id="button24" value="0"class="b_game" name="btn2"/>
        <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
        </td> 
        <td>
        <input type="button" id="button34"value="0"class="b_game" name="btn3"/>
        <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
        </td>
        <td>
        <input type="button" id="button44" value="0"class="b_game" name="btn4"/>
        <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
        </td>
        <td>
        <input type="button" id="button54" value="1"class="b_game" name="btn5"/>
        <input type="hidden"id="h_button5" value="8" name="btn5"/>
        </td>
        <td>
        <input type="button" id="button64" value="1" class="b_game" name="btn6"/>
        <input type="hidden"id="h_button6" value="4" name="btn6"/>
        </td>
        <td>
        <input type="button" id="button74"value="${ran3}"class="b_game" name="btn7"/>
        <input type="hidden"id="h_button7" value="2" name="btn7"/>
        </td>
        <td>
        <input type="button" id="button84" value="${ran4}"class="b_game" name="btn8"/>
        <input type="hidden"id="h_button8" value="1" name="btn8"/>
        </td>
        <td><input type="text" class="btext" id=text4 style="" name="text4"/></td>
        <td>
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </td>
        <td>Enter answer</td>
        </tr>`


        var Tab5 = `<tr id=tr5>
                <td>
                <input type="button" id="button15" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button25" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button35"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button45" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button55" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button65" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button75" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button85" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="button" class="btext" value="${random3}" id="test5" style="" name=btn5/></td>
                <td><button type="button" id="answer" class="btn btn-success value5"><i class="fa fa-play " aria-hidden="true"></i></button></td>

                </tr>`




        var Tab6 = `<tr id=tr6>
                <td>
                <input type="button" id="button16" value="0" class="b_game" name="btn"  />
                <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
                </td>
                <td>
                <input type="button" id="button26" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
                </td> 
                <td>
                <input type="button" id="button36"value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
                </td>
                <td>
                <input type="button" id="button46" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
                </td>
                <td>
                <input type="button" id="button56" value="0"class="b_game" name="btn" />
                <input type="hidden"id="h_button5" value="8" name="btn5"/>
                </td>
                <td>
                <input type="button" id="button66" value="0" class="b_game" name="btn"/>
                <input type="hidden"id="h_button6" value="4" name="btn6"/>
                </td>
                <td>
                <input type="button" id="button76" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button7" value="2" name="btn7"/>
                </td>
                <td>
                <input type="button" id="button86" value="0"class="b_game" name="btn"/>
                <input type="hidden"id="h_button8" value="1" name="btn7"/>
                </td>
                <td><input type="button" class="btext" value="${random4}" id="test6" style="" name=btn6/></td>
                <td><button type="button" id="answer" class="btn btn-success value6"><i class="fa fa-play " aria-hidden="true"></i></button></td>

                </tr>`


        var Tab7 = `<tr id=tr7>
    <td>
    <input type="button" id="button17" value="0" class="b_game" name="btn"  />
    <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
    </td>
    <td>
    <input type="button" id="button27" value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
    </td> 
    <td>
    <input type="button" id="button37"value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
    </td>
    <td>
    <input type="button" id="button47" value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
    </td>
    <td>
    <input type="button" id="button57" value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button5" value="8" name="btn5"/>
    </td>
    <td>
    <input type="button" id="button67" value="0" class="b_game" name="btn"/>
    <input type="hidden"id="h_button6" value="4" name="btn6"/>
    </td>
    <td>
    <input type="button" id="button77" value="0"class="b_game" name="btn"/>
    <input type="hidden"id="h_button7" value="2" name="btn7"/>
    </td>
    <td>
    <input type="button" id="button87" value="0"class="b_game" name="btn"/>
    <input type="hidden"id="h_button8" value="1" name="btn7"/>
    </td>
    <td><input type="button" class="btext" value="${random5}" id="test7" style="" name=btn7/></td>
    <td><button type="button" id="answer" class="btn btn-success value7"><i class="fa fa-play " aria-hidden="true"></i></button></td>

    </tr>`

        var Tab8 = `<tr id=tr8>
    <td>
    <input type="button" id="button18" value="0" class="b_game" name="btn1"/>
    <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
    </td>
    <td>
    <input type="button" id="button28" value="1"class="b_game" name="btn2"/>
    <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
    </td> 
    <td>
    <input type="button" id="button38"value="0"class="b_game" name="btn3"/>
    <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
    </td>
    <td>
    <input type="button" id="button48" value="0"class="b_game" name="btn4"/>
    <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
    </td>
    <td>
    <input type="button" id="button58" value="0"class="b_game" name="btn5"/>
    <input type="hidden"id="h_button5" value="8" name="btn5"/>
    </td>
    <td>
    <input type="button" id="button68" value="${ran2}" class="b_game" name="btn6"/>
    <input type="hidden"id="h_button6" value="4" name="btn6"/>
    </td>
    <td>
    <input type="button" id="button78"value="${ran3}"class="b_game" name="btn7"/>
    <input type="hidden"id="h_button7" value="2" name="btn7"/>
    </td>
    <td>
    <input type="button" id="button88" value="${ran4}"class="b_game" name="btn8"/>
    <input type="hidden"id="h_button8" value="1" name="btn8"/>
    </td>
    <td><input type="text" class="btext" id=text8 style="" name="text8"/></td>
    <td>
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    </td>
    <td>Enter answer</td>
    </tr>`


        var Tab9 = `<tr id=tr9>
    <td>
    <input type="button" id="button19" value="0" class="b_game" name="btn1"/>
    <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
    </td>
    <td>
    <input type="button" id="button29" value="1"class="b_game" name="btn2"/>
    <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
    </td> 
    <td>
    <input type="button" id="button39"value="0"class="b_game" name="btn3"/>
    <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
    </td>
    <td>
    <input type="button" id="button49" value="${ran2}"class="b_game" name="btn4"/>
    <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
    </td>
    <td>
    <input type="button" id="button59" value="0"class="b_game" name="btn5"/>
    <input type="hidden"id="h_button5" value="8" name="btn5"/>
    </td>
    <td>
    <input type="button" id="button69" value="${ran4}" class="b_game" name="btn6"/>
    <input type="hidden"id="h_button6" value="4" name="btn6"/>
    </td>
    <td>
    <input type="button" id="button79"value="${ran5}"class="b_game" name="btn7"/>
    <input type="hidden"id="h_button7" value="2" name="btn7"/>
    </td>
    <td>
    <input type="button" id="button89" value="${ran6}"class="b_game" name="btn8"/>
    <input type="hidden"id="h_button8" value="1" name="btn8"/>
    </td>
    <td><input type="text" class="btext" id=text9 style="" name="text9"/></td>
    <td>
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    </td>
    <td>Enter answer</td>
    </tr>`



        var Tab10 = `<tr id=tr10>
    <td>
    <input type="button" id="button110" value="0" class="b_game" name="btn"  />
    <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
    </td>
    <td>
    <input type="button" id="button210" value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
    </td> 
    <td>
    <input type="button" id="button310"value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
    </td>
    <td>
    <input type="button" id="button410" value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
    </td>
    <td>
    <input type="button" id="button510" value="0"class="b_game" name="btn" />
    <input type="hidden"id="h_button5" value="8" name="btn5"/>
    </td>
    <td>
    <input type="button" id="button610" value="0" class="b_game" name="btn"/>
    <input type="hidden"id="h_button6" value="4" name="btn6"/>
    </td>
    <td>
    <input type="button" id="button710" value="0"class="b_game" name="btn"/>
    <input type="hidden"id="h_button7" value="2" name="btn7"/>
    </td>
    <td>
    <input type="button" id="button810" value="0"class="b_game" name="btn"/>
    <input type="hidden"id="h_button8" value="1" name="btn7"/>
    </td>
    <td><input type="button" class="btext" value="${random6}" id="test10" style="" name=btn10/></td>
    <td><button type="button" id="answer" class="btn btn-success value10"><i class="fa fa-play " aria-hidden="true"></i></button></td>

    </tr>`

        var Tab11 = `<tr id=tr11>
               <td>
               <input type="button" id="button111" value="0" class="b_game" name="btn"  />
               <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
               </td>
               <td>
               <input type="button" id="button211" value="0"class="b_game" name="btn" />
               <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
               </td> 
               <td>
               <input type="button" id="button311"value="0"class="b_game" name="btn" />
               <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
               </td>
               <td>
               <input type="button" id="button411" value="0"class="b_game" name="btn" />
               <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
               </td>
               <td>
               <input type="button" id="button511" value="0"class="b_game" name="btn" />
               <input type="hidden"id="h_button5" value="8" name="btn5"/>
               </td>
               <td>
               <input type="button" id="button611" value="0" class="b_game" name="btn"/>
               <input type="hidden"id="h_button6" value="4" name="btn6"/>
               </td>
               <td>
               <input type="button" id="button711" value="0"class="b_game" name="btn"/>
               <input type="hidden"id="h_button7" value="2" name="btn7"/>
               </td>
               <td>
               <input type="button" id="button811" value="0"class="b_game" name="btn"/>
               <input type="hidden"id="h_button8" value="1" name="btn7"/>
               </td>
               <td><input type="button" class="btext" value="${random7}" id="test11" style="" name=btn11/></td>
               <td><button type="button" id="answer1" class="btn btn-success value11"><i class="fa fa-play" aria-hidden="true"></i></button></td>

               </tr>`


        let Tab12 = `<tr id=tr12>
        <td>
        <input type="button" id="button112" value="1" class="b_game" name="btn1"/>
        <input type="hidden"id="h_button1" value="128" name="h_btn1"/>
        </td>
        <td>
        <input type="button" id="button212" value="${ran1}"class="b_game" name="btn2"/>
        <input type="hidden"id="h_button2" value="64" name="h_btn2"/>
        </td> 
        <td>
        <input type="button" id="button312"value="1"class="b_game" name="btn3"/>
        <input type="hidden"id="h_button3" value="32" name="h_btn3"/>
        </td>
        <td>
        <input type="button" id="button412" value="${ran2}"class="b_game" name="btn4"/>
        <input type="hidden"id="h_button4" value="16" name="h_btn4"/>
        </td>
        <td>
        <input type="button" id="button512" value="${ran3}"class="b_game" name="btn5"/>
        <input type="hidden"id="h_button5" value="8" name="btn5"/>
        </td>
        <td>
        <input type="button" id="button612" value="${ran4}" class="b_game" name="btn6"/>
        <input type="hidden"id="h_button6" value="4" name="btn6"/>
        </td>
        <td>
        <input type="button" id="button712"value="${ran5}"class="b_game" name="btn7"/>
        <input type="hidden"id="h_button7" value="2" name="btn7"/>
        </td>
        <td>
        <input type="button" id="button812" value="${ran6}"class="b_game" name="btn8"/>
        <input type="hidden"id="h_button8" value="1" name="btn8"/>
        </td>
        <td><input type="text" class="btext" id=text12 style="" name="text12"/></td>
        <td>
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </td>
        <td>Enter answer</td>
        </tr>`
        var QuestionArray = [Tab1, Tab2, Tab3, Tab4, Tab5, Tab6, Tab7, Tab8, Tab9, Tab10, Tab11, Tab12]
        
        for (var i = 1; i < 13; i++) {

            $('#myTable').prepend(QuestionArray[i - 1]);
            $(`#tr${i}`).hide();
        }

        let point = 0;
        let live = 4;
        let life = 3;
        let value = 2000;
        var num = 1;
        var isTimeOn = 0;
        let lifeArr = [0, 0, 0];
        let lifeShow = [];
        let right=0;
        let wrong=0;
         $('#wrong').html(wrong);
         $('#right').html(right);
        for (let i = 0; i < lifeArr.length; i++) {
            //<i class="fa fa-heart" aria-hidden="true"></i>
            img = $('<img />', {
                src: '/images/heart.jpg'
            }).css({
                height: "40px",
                width: "40px"
            });
            lifeShow.push(img);
        }
        $(".lifes").html(lifeShow);

        //loose
        $("#s_submit").click(() => {
            //location.href = "http://127.0.0.1:8000/score";
            window.open('http://cmpereseach.herokuapp.com/score?point=' + point, target = '_blank');

        })
        //won 
        $("#score_submit").click(() => {
            //location.href = "http://127.0.0.1:8000/score";
            window.open('http://cmpereseach.herokuapp.com/score?point=' + point, target = '_blank');

        })
        //won with gold badge
        $("#scores_submit").click(() => {
            //location.href = "http://127.0.0.1:8000/score";
            window.open('http://cmpereseach.herokuapp.com/score?point=' + point, target = '_blank');

        })



        let current_progress = 0;
        let time_counter = 0;
        var block = 1;
        var hasFailed = false
        var hasWon = false
        var isCorrect  = false
        let time1, time2, time3, time4, time5, time6, time7;
        var Interval;
        $('#start').prop('disabled',true).css({
            background: "#fff",
            color: "#fffff"
        });
        $("#playagain").show();
        $('#playagain').click(function(){
            location.reload()
        })
        function remove(id) {
            $(`#tr${id}`).fadeOut(2000);
            // $(id).fadeOut(2000, function() { 
            //  $(id).remove(); 

            // })
        }

        function progress() {
            $(function() {
                if (current_progress != 100) {
                    current_progress += 8.33;
                    $("#dynamic")
                        .css("width", current_progress + "%")
                        .attr("aria-valuenow", current_progress)
                        .text();

                } else {
                    current_progress = 0;
                }
            })
        }

        const runCalc = (endvalue, values, time, id) => {

            var sum = 0;
            isTimeOn = point;
            for (var i = 0; i < values.length; i++) {
                sum += values[i];
            }

            if (sum == endvalue) {
                remove(id);

                isTimeOn = 100;
                isCorrect = true
                point += 10;
                right+=1;
                $('#right').html(right);
                $("#point").html(point);
                
                if ((id == 1) && (point == 10)) {
                    $(".info").html("Clear the next game block and you'll win an extra life!")
                    time1 = setTimeout(() => {
                        clearTimeout(time0);
                        $("#message2").fadeOut(2000);
                    }, 6000);

                } else if ((id == 2) && (point == 20)) {
                    life += 1;
                    lifeArr.push(0);
                    img = $('<img />', {
                        src: '/images/heart.jpg'
                    }).css({
                        height: "40px",
                        width: "40px"
                    });
                    lifeShow.push(img);
                    $(".status").html("You just got an extra life!")
                    time2 = setTimeout(() => {
                        clearTimeout(time1);
                        $("#message1").fadeOut(2000);
                    }, 6000);
                    //clearInterval(time2);
                    $(".lifes").html(lifeShow);
                } else if (point == 30) {
                    $(".status2").html("Congrats you just won a bronze badge")
                    time3 = setTimeout(() => {
                        clearTimeout(time2);
                        $("#message3").fadeOut(2000);
                    }, 6000);
                    bronze("#badge");
                    $(".img_badge").html("Bronze badge");
                } else if (point == 40) {
                    $(".info2").html("Get 10 point more and you'll win an extra life!")
                    time4 = setTimeout(() => {
                        clearTimeout(time3);
                        $("#message4").fadeOut(2000);
                    }, 6000);
                } else if (point == 50) {
                    life += 1;
                    lifeArr.push(0);
                    img = $('<img />', {
                        src: '/images/heart.jpg'
                    }).css({
                        height: "40px",
                        width: "40px"
                    });
                    lifeShow.push(img);
                    $(".status3").html("You just got an extra life!")
                    time5 = setTimeout(() => {
                        clearTimeout(time4);
                        $("#message5").fadeOut(2000);
                    }, 6000);
                    $(".lifes").html(lifeShow);
                } else if (point == 80) {

                    $(".status4").html("Congrats you just won a silver badge")
                    time6 = setTimeout(() => {
                        clearTimeout(time5);
                        $("#message6").fadeOut(2000);
                    }, 6000);
                    silver("#badge");
                    $(".img_badge").html("Silver badge");

                } else if ((id==10)&&(point == 100)) {
                    $(".info3").html("Your 20 points away from winning a Gold badge")
                    time7 = setTimeout(() => {
                        clearTimeout(time6);
                        $("#message8").fadeOut(2000);
                    }, 4000);
                } else if (point == 120) {
                  	hasWon = true
                    $(".status5").html("Wow you won a Gold badge")
                    time8 = setTimeout(() => {
                        clearTimeout(time7);
                        $("#message7").fadeOut(2000);
                    }, 6000);
                    gold("#badge");
                    $(".img_badge").html("Gold badge");
                    $(".message").html("Wow! you got a gold badge");
                    gold("#badge");
                    $(".img_badge").html("Gold badge");

                    $("#exampleModal").modal("show");
                    $("#stop").click(function() {
                        $("#exampleModal").modal("hide");
                        location.reload();
                    });
                   
                }
                else if ((id>11) && (lifeShow.length >0)) {
                    $("#win").modal("show");
                    hasWon = true
                    $("#stop2").click(function() {
                        $("#win").modal("hide");
                        location.reload();
                    });
                }
                else if ((current_progress>99) && (lifeShow.length >0) || (point > 110)) {
                    $("#lost").modal("hide");
                }
                 
                //calling timmer function

            }
            else{
                $(`#button1${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`#button2${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });;
                $(`#button3${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`#button4${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`#button5${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`#button6${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`#button7${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`#button8${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`#test${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                $(`input[type=text][name=text${id}]`).prop('disabled', true).css({
                    background: "#d9534f"
                })
                $(`.value${id}`).prop('disabled', true).css({
                    background: "#d9534f",
                    color: "#d9534f"
                });
                progress();
                wrong+=1;
                $('#wrong').html(wrong);
                isCorrect = false;
                lifeShow.pop();
                life -= 1;
               
                if (life < 1) {
                    $("#lost").modal("show");
                    $("#close").click(function() {
                        $("#lost").modal("hide");
                        location.reload();
                    });
                    life = 0;
                    hasFailed = true
                    
                } else if (life == 1) {
                    $(".info4").html("You have one life left if you lose it you'll lose game")
                    setTimeout(() => {
                        clearTimeout();
                        $("#message8").fadeOut(2000);
                    }, 6000);
                }
                $(".lifes").html(lifeShow);
                if ((id>11) && (lifeShow.length >0)) {
                    $("#win").modal("show");
                    hasWon = true
                    $("#stop2").click(function() {
                        $("#win").modal("hide");
                        location.reload();
                    });
                }
                clearInterval(Interval);
                startTimer(50, block);
               
                
               

            }
            console.log(id,'id=',isTimeOn, "point", point, values);
        }

        function startTimer(duration, id) {
            clearInterval(Interval);
            display = document.querySelector('#timer');
            var timer = duration,
                minutes, seconds;

            time_counter++

            if (id > 12 || hasFailed || hasWon) {
                console.log("here");
                timer = 0;
            		return ;
            }
            $(`#tr${id}`).show();
            block++
            let counterIncrement = -1;
            live = live + counterIncrement;
            clearInterval(Interval);
             Interval = setInterval(function() {

                minutes = parseInt(timer / 60, 10)
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;
                if(isCorrect && timer >= 1){
                    
                    progress();
                    isTimeOn = point;
                    isCorrect = false;
                    clearInterval(Interval);
                    startTimer(50, block);
                }
                if (--timer < 0) {
                    progress();
                    wrong+=1;
                    console.log(id)
                    $('#wrong').html(wrong);
                    if (isTimeOn > point) {

                        progress();
                        isTimeOn = point;
                       // if (life <= 0)
                          //  life = 0;

                    } else if (isTimeOn == point) {

                        lifeShow.pop();
                        life -= 1;
                       
                        if (life < 1) {
                            $("#lost").modal("show");
                            $("#close").click(function() {
                                $("#lost").modal("hide");
                                location.reload();
                            });
                            life = 0;
                            hasFailed = true
                            
                        } else if (life == 1) {
                            $(".info4").html("You have one life left if you lose it you'll lose game")
                            setTimeout(() => {
                                clearTimeout();
                                $("#message8").fadeOut(2000);
                            }, 6000);
                        }
                        counterIncrement = -counterIncrement;
                        $(".lifes").html(lifeShow);

                    }
                    $(`#button1${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`#button2${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });;
                    $(`#button3${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`#button4${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`#button5${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`#button6${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`#button7${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`#button8${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`#test${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    $(`input[type=text][name=text${id}]`).prop('disabled', true).css({
                        background: "#d9534f"
                    })
                    $(`.value${id}`).prop('disabled', true).css({
                        background: "#d9534f",
                        color: "#d9534f"
                    });
                    if ((id>11) && (lifeShow.length >0)) {
                        $("#win").modal("show");
                        hasWon = true
                        $("#stop2").click(function() {
                            $("#win").modal("hide");
                            location.reload();
                        });
                    }
                    clearInterval(Interval);
                    startTimer(50, block);
                }
            }, 1000);

        }
        startTimer(50, block);

        function changeValue(value) {
            $(value).click(function() {

                btn10 = ($(value).val());
                //toggle btw 1 and 0 when button is clicked
                if (btn10 == 0) {
                    $(value).val("1")
                    $(value).css({
                        backgroundColor: '#0275d8',
                        color: '#fff',
                        outline: 'none'
                    });
                } else if (btn10 == 1) {
                    $(value).val("0")
                    $(value).css({
                        backgroundColor: '#fff',
                        color: '#000',
                        outline: 'none'
                    });
                } //toggle ends
            });
        }

        function bronze(div_img_id) {

            let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/bronze.png'
                }).appendTo(div_img_id);
            }

        }

        function silver(div_img_id) {

            let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/silver1.png'
                }).appendTo(div_img_id);
            }

        }

        function gold(div_img_id) {

            let img;
            if (!img) {
                $(div_img_id).empty();
                img = $('<img />', {
                    src: '/images/gold1.png'
                }).appendTo(div_img_id);
            }

        }




        function calculate(value1, value2, value3, value4, value5, value6, value7, value8, value9,
            value10, value11, value12, value13, value14, value15, value16, input, role_id, answer) {
            let btn1 = 0,
                btn2 = 0,
                btn3 = 0,
                btn4 = 0,
                btn5 = 0,
                btn6 = 0,
                btn7 = 0,
                btn8 = 0,
                output = 0;
            let b1, b2, b3, b4, b5, b6, b7, b8;
            output = parseInt($(input).val());
            var values = [0, 0, 0, 0, 0, 0, 0, 0]

            $(value1).click(function() {
                //value of input field type text
                b1 = ($(value1).val()); //value of input field type button
                btn1 = ($(value2).val());
                if (b1 == 1) {

                    //value of input field type hidden that holds the value to be calculated
                    values[0] = parseInt(btn1);
                } else {
                    //changing hidden value to 0 when double clicked
                    values[0] = 0
                }

                //runCalc(output, values, isTimeOn, role_id);
            });
            $(value3).click(function() {
                b2 = ($(value3).val());
                btn2 = ($(value4).val());
                if (b2 == 1) {
                    values[1] = parseInt(btn2);
                } else {
                    values[1] = 0;
                }
                //runCalc(output, values, isTimeOn, role_id);
            });
            $(value5).click(function() {
                b3 = ($(value5).val());
                btn3 = ($(value6).val());
                if (b3 == 1) {
                    values[2] = parseInt(btn3);
                } else {
                    values[2] = 0;
                }
               // runCalc(output, values, isTimeOn, role_id);
            });
            $(value7).click(function() {

                b4 = ($(value7).val());
                btn4 = ($(value8).val());
                if (b4 == 1) {
                    values[3] = parseInt(btn4);
                } else {
                    values[3] = 0;
                }
                //runCalc(output, values, isTimeOn, role_id);
            });
            $(value9).click(function() {

                b5 = ($(value9).val());
                btn5 = ($(value10).val());
                if (b5 == 1) {
                    values[4] = parseInt(btn5);
                } else {
                    values[4] = 0;
                }
               // runCalc(output, values, isTimeOn, role_id);
            });
            $(value11).click(function() {

                b6 = ($(value11).val());
                btn6 = ($(value12).val());
                if (b6 == 1) {
                    values[5] = parseInt(btn6);
                } else {
                    values[5] = 0;
                }
                //runCalc(output, values, isTimeOn, role_id);
            });
            $(value13).click(function() {

                b7 = ($(value13).val());
                btn7 = ($(value14).val());
                if (b7 == 1) {
                    values[6] = parseInt(btn7);
                } else {
                    values[6] = 0;
                }
                //runCalc(output, values, isTimeOn, role_id);
            });
            $(value15).click(function() {

                b8 = ($(value15).val());
                btn8 = ($(value16).val());
                if (b8 == 1) {
                    values[7] = parseInt(btn8);
                } else {
                    values[7] = 0;
                }
                //runCalc(output, values, isTimeOn, role_id);
           
            });
            $(answer).click(function(){
                runCalc(output, values, isTimeOn, role_id);
                //console.log(values,"console value")
                
            })

        }

        function calculate2(value1, value2, value3, value4, value5, value6, value7, value8, value9,
            value10, value11, value12, value13, value14, value15, value16, input, role_id) {
            var values = [0, 0, 0, 0, 0, 0, 0, 0]
            let btn1 = 0,
                btn2 = 0,
                btn3 = 0,
                btn4 = 0,
                btn5 = 0,
                btn6 = 0,
                btn7 = 0,
                btn8 = 0,
                output = 0;
            let b1, b2, b3, b4, b5, b6, b7, b8;

            // getting value of input field
            b1 = ($(value1).val());
            b2 = ($(value3).val());
            b3 = ($(value5).val());
            b4 = ($(value7).val());
            b5 = ($(value9).val());
            b6 = ($(value11).val());
            b7 = ($(value13).val());
            b8 = ($(value15).val());
            output = parseInt(($(input).val()));
            if (b1 == 1)

                btn1 = ($(value2).val());
            values[0] = parseInt(btn1);
            if (b2 == 1)
                btn2 = ($(value4).val());
            values[1] = parseInt(btn2);
            if (b3 == 1)
                btn3 = ($(value6).val());
            values[2] = parseInt(btn3);
            if (b4 == 1)
                btn4 = ($(value8).val());
            values[3] = parseInt(btn4);
            if (b5 == 1)
                btn5 = ($(value10).val());
            values[4] = parseInt(btn5);
            if (b6 == 1)
                btn6 = ($(value12).val());
            values[5] = parseInt(btn6);
            if (b7 == 1)
                btn7 = ($(value14).val());
            values[6] = parseInt(btn7);
            if (b8 == 1)
                btn8 = ($(value16).val());
            values[7] = parseInt(btn8);

            runCalc(output, values, isTimeOn, role_id);
        }
        changeValue(`#button11`)
        changeValue(`#button21`)
        changeValue(`#button31`)
        changeValue(`#button41`)
        changeValue(`#button51`)
        changeValue(`#button61`)
        changeValue(`#button71`)
        changeValue(`#button81`)
        calculate(`#button11`, '#h_button1', `#button21`, '#h_button2', `#button31`, '#h_button3', `#button41`, '#h_button4',
            `#button51`, '#h_button5', `#button61`, '#h_button6', `#button71`, '#h_button7', `#button81`, '#h_button8', `#test1`, `1`,'.value1')
        $('#button12').click(function() {
            console.log("here");
        })
        changeValue(`#button12`)
        changeValue(`#button22`)
        changeValue(`#button32`)
        changeValue(`#button42`)
        changeValue(`#button52`)
        changeValue(`#button62`)
        changeValue(`#button72`)
        changeValue(`#button82`)
        calculate(`#button12`, '#h_button1', `#button22`, '#h_button2', `#button32`, '#h_button3', `#button42`, '#h_button4',
            `#button52`, '#h_button5', `#button62`, '#h_button6', `#button72`, '#h_button7', `#button82`, '#h_button8', `#test2`, `2`,`.value2`)

        $(`#text3`).on("change", function() {

            calculate2(`#button13`, '#h_button1', `#button23`, '#h_button2', `#button33`, '#h_button3', `#button43`, '#h_button4',
                `#button53`, '#h_button5', `#button63`, '#h_button6', `#button73`, '#h_button7', `#button83`, '#h_button8', `#text3`, `3`)

        });

        $(`#text4`).on("change", function() {
            calculate2(`#button14`, '#h_button1', `#button24`, '#h_button2', `#button34`, '#h_button3', `#button44`, '#h_button4',
                `#button54`, '#h_button5', `#button64`, '#h_button6', `#button74`, '#h_button7', `#button84`, '#h_button8', `#text4`, `4`)

        });
    changeValue(`#button15`)
        changeValue(`#button25`)
        changeValue(`#button35`)
        changeValue(`#button45`)
        changeValue(`#button55`)
        changeValue(`#button65`)
        changeValue(`#button75`)
        changeValue(`#button85`)
        calculate(`#button15`, '#h_button1', `#button25`, '#h_button2', `#button35`, '#h_button3', `#button45`, '#h_button4',
            `#button55`, '#h_button5', `#button65`, '#h_button6', `#button75`, '#h_button7', `#button85`, '#h_button8', `#test5`, `5`,`.value5`)

        changeValue(`#button16`)
        changeValue(`#button26`)
        changeValue(`#button36`)
        changeValue(`#button46`)
        changeValue(`#button56`)
        changeValue(`#button66`)
        changeValue(`#button76`)
        changeValue(`#button86`)
        calculate(`#button16`, '#h_button1', `#button26`, '#h_button2', `#button36`, '#h_button3', `#button46`, '#h_button4',
            `#button56`, '#h_button5', `#button66`, '#h_button6', `#button76`, '#h_button7', `#button86`, '#h_button8', `#test6`, `6`,`.value6`);
        changeValue(`#button17`)
        changeValue(`#button27`)
        changeValue(`#button37`)
        changeValue(`#button47`)
        changeValue(`#button57`)
        changeValue(`#button67`)
        changeValue(`#button77`)
        changeValue(`#button87`)
        calculate(`#button17`, '#h_button1', `#button27`, '#h_button2', `#button37`, '#h_button3', `#button47`, '#h_button4',
            `#button57`, '#h_button5', `#button67`, '#h_button6', `#button77`, '#h_button7', `#button87`, '#h_button8', `#test7`, `7`,`.value7`)
        $(`#text8`).on("change", function() {
            calculate2(`#button18`, '#h_button1', `#button28`, '#h_button2', `#button38`, '#h_button3', `#button48`, '#h_button4',
                `#button58`, '#h_button5', `#button68`, '#h_button6', `#button78`, '#h_button7', `#button88`, '#h_button8', `#text8`, `8`)

        });
        $(`#text9`).on("change", function() {
            calculate2(`#button19`, '#h_button1', `#button29`, '#h_button2', `#button39`, '#h_button3', `#button49`, '#h_button4',
                `#button59`, '#h_button5', `#button69`, '#h_button6', `#button79`, '#h_button7', `#button89`, '#h_button8', `#text9`, `9`)

        });
        changeValue(`#button110`)
        changeValue(`#button210`)
        changeValue(`#button310`)
        changeValue(`#button410`)
        changeValue(`#button510`)
        changeValue(`#button610`)
        changeValue(`#button710`)
        changeValue(`#button810`)
        calculate(`#button110`, '#h_button1', `#button210`, '#h_button2', `#button310`, '#h_button3', `#button410`, '#h_button4',
            `#button510`, '#h_button5', `#button610`, '#h_button6', `#button710`, '#h_button7', `#button810`, '#h_button8', `#test10`, `10`,`.value10`)

        changeValue(`#button111`)
        changeValue(`#button211`)
        changeValue(`#button311`)
        changeValue(`#button411`)
        changeValue(`#button511`)
        changeValue(`#button611`)
        changeValue(`#button711`)
        changeValue(`#button811`)
        calculate(`#button111`, '#h_button1', `#button211`, '#h_button2', `#button311`, '#h_button3', `#button411`, '#h_button4',
            `#button511`, '#h_button5', `#button611`, '#h_button6', `#button711`, '#h_button7', `#button811`, '#h_button8', `#test11`, `11`,`.value11`);

        $(`#text12`).on("change", function() {
            calculate2(`#button112`, '#h_button1', `#button212`, '#h_button2', `#button312`, '#h_button3', `#button412`, '#h_button4',
                `#button512`, '#h_button5', `#button612`, '#h_button6', `#button712`, '#h_button7', `#button812`, '#h_button8', `#text12`, `12`)

        });
    });
});